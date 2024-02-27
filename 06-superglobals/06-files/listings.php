<?php
//  DATABASE CONNECTION 
 define('DB_HOST', 'localhost');
 define('DB_USER', 'root');
 define('DB_PASS', '');
 define('DB_NAME', 'learnphp');

 $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

 if(!$conn) {
    die("DATABASE connection error" . mysqli_connect_error());
 } 


 if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $title = htmlspecialchars($_POST['title']) ?? '';
    $desc = htmlspecialchars($_POST['description']) ?? '';

    // upload image - validate the form 
    // only accept - .png, .jpg, .jpeg 
    // size - 500 KB 
    // all fields are required

    $image = $_FILES['logo'];
    $image_name = $image['name'];
    $image_tmp = $image['tmp_name'];

    // validate the form 
    if(empty($title) || empty($desc) || empty($image_name)) {
        $formErr = "All fields are required!";
    } else {

        if($image['error'] === UPLOAD_ERR_OK) {
            $uploadDir = 'images';
    
            // check and create directory 
            if(!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            } 
    
            // unique file name 
            $new_image_name = 'Tahir-' . uniqid() . $image_name;
            $targetDir = $uploadDir . '/' . $new_image_name;

            // allowed extensions 
            $allowed_ext = ['png', 'jpg', 'jpeg', 'webp'];
            $img_ext = explode('.', $image['name']);
            $img_ext = strtolower(end($img_ext));

            // check file is an image type 
            if(in_array($img_ext, $allowed_ext)) {
                // image size 
                if($image['size'] <= 200000) {
                    if(move_uploaded_file($image['tmp_name'], $targetDir)) {
                        $sql = "INSERT INTO `listings` (`title`, `description`, `image`) VALUES (?, ?, ?);";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param('sss', $title, $desc, $new_image_name);
                        
                        
                        if($stmt->execute()) {
                            $formSubmitted = "Listings are added successfully";
                        } else {
                            $formSubmitted = "something went wrong please try later";
                        }


                    }
                    
                } else {
                    $sizeErr = "Image Size Must be less than 200KB";
                }
            } else {
                $formErr = "Only jpg, png, and jpeg are allowed";
            }
        }



    }

    // echo "<pre>";
    // var_dump($image);
    // echo "</pre>";

 }

//  fetch data from the databse 
$sql = "SELECT * FROM `listings`";
$results = mysqli_query($conn, $sql);

if(!$results) {
  die("Something went wrong" . mysqli_error($conn)); 
}

// delete listings
$deleted = false;
if(isset($_GET['id'])) {
  $id = htmlspecialchars($_GET['id']);

  $select = "SELECT * FROM listings WHERE id = ?";
  $stmt = $conn->prepare($select);
  $stmt->bind_param('i', $id);
  $stmt->execute();
  $listRes = $stmt->get_result();

  while($row=mysqli_fetch_assoc($listRes)) {
    $image = $row['image'];

    unlink('./images/' . $image);
  }


  $sql = "DELETE FROM listings WHERE `listings`.`id` = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param('i', $id);
  
  if($stmt->execute()) {
    $deleted = true;
    header("location: listings.php");
  } else {
    die("SOMETHING WENT WRONG" . mysqli_error($conn));
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Job Listing</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <div class="flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
      <h1 class="text-2xl font-semibold mb-6">Create Job Listing</h1>
      <span class="mt-2 mt-b text-green-600"><?= $formSubmitted ?? null ?></span>
      <?php if($deleted) : ?>
      <span class="mt-2 mt-b text-green-400">Listing deleted successfully</span>
      <?php endif; ?>
      <span class="mt-2 mt-b text-red-600"><?= $formErr ?? null ?></span>
      <form method="post" enctype="multipart/form-data">
        <div class="mb-4">
          <label for="title" class="block text-gray-700 font-medium">Title</label>
          <input type="text" id="title" name="title" placeholder="Enter job title" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none" value="<?= $title ?? null ?>">
        </div>
        <div class="mb-6">
          <label for="description" class="block text-gray-700 font-medium">Description</label>
          <textarea id="description" name="description" placeholder="Enter job description" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none"><?= $desc ?? null ?></textarea>
        </div>
        <div class="mb-4">
          <label for="resume" class="block text-gray-700 font-medium">Logo</label>
          <input type="file" id="logo" name="logo" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none">
          <span class="mt-2 mt-b text-red-600"><?= $sizeErr ?? null ?></span>
        </div>
        <div class="flex items-center justify-between">
          <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
            Create Listing
          </button>
          <a href="#" class="text-blue-500 hover:underline">Back to Listings</a>
        </div>
      </form>

      <!-- Display submitted data -->
      <?php if (mysqli_num_rows($results) > 0) : ?>
        <?php while($row=mysqli_fetch_assoc($results)) : ?>
        <div class="mt-6 p-4 border rounded bg-gray-200">
          <h2 class="text-lg font-semibold">Submitted Job Listing:</h2>
          <p><strong>Title:</strong> <?= $row['title'] ?></p>
          <p><strong>Description:</strong> <?= $row['description'] ?></p>
          <img src="./images/<?= $row['image'] ?>" alt="" width="120" class="rounded-full border">
          <a href="?id=<?= $row['id'] ?>" class="mt-4 bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-full">Delete listing</a>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</body>

</html>