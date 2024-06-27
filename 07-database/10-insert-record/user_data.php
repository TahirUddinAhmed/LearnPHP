<?php
  

  $message = [];
  $submitted = false;

  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']) ?? '';
    $phone = htmlspecialchars($_POST['phone']) ?? '';
    $message = htmlspecialchars($_POST['message']) ?? '';

    
    require_once 'classes/DB.php';
    require_once 'classes/Contact.php';

    $form = new Contact($name, $phone, $message);
    $form->contact();

  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Blog Post</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">CampusCourse</h1>
    </div>
  </header>
  <div class="flex justify-center mt-10">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
      <?php if($submitted) : ?>
      <span class="text-green-500 mb-2">Thank you for contracting Us.</span>
      <?php  endif; ?>
      <h1 class="text-2xl font-semibold mb-6">Create Blog Post</h1>
      <form method="post" action="">
        <span class="text-red-500"><?= $err ?? null ?></span>
        <div class="mb-4">
          <label for="fullname" class="block text-gray-700 font-medium">Full Names</label>
          <input type="text" id="title" name="name" placeholder="Enter your full name" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none">
        </div>
        <div class="mb-4">
          <label for="phone" class="block text-gray-700 font-medium">Phone</label>
          <input type="tel" id="title" name="phone" placeholder="Enter your mobile number" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none">
        </div>
        <div class="mb-6">
          <label for="messagae" class="block text-gray-700 font-medium">Message</label>
          <textarea id="body" name="message" placeholder="Enter your query" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none"></textarea>
        </div>
        <div class="flex items-center justify-between">
          <button type="submit" name="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 focus:outline-none">
            Contact Us
          </button>
          <a href="index.php" class="text-blue-500 hover:underline">Back to Posts</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>