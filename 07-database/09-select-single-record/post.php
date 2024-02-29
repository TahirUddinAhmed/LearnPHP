<?php
 require 'database.php';

 if(isset($_GET['id'])) {
  $post_id = htmlentities($_GET['id']);

  // Prepare a SELECT statement 
  $sql = 'SELECT * FROM posts WHERE id = :id';
  $stmt = $pdo->prepare($sql);
  
  // parameters 
  $params = ['id' => $post_id];

  // execute 
  $stmt->execute($params);

  // Get post results 
  $posts = $stmt->fetchAll();


 } else {
  header("location: index.php");
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Post One</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">CampusCourse</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <?php foreach($posts as $post) : ?>
    <div class="md my-4">
      <div class="rounded-lg shadow-md">
        <div class="p-4">
          <h2 class="text-xl font-semibold"><?= $post['title'] ?></h2>
          <p class="text-gray-700 text-lg mt-2 mb-5"><?= $post['body'] ?></p>
          <a href="index.php">Go Back</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</body>

</html>