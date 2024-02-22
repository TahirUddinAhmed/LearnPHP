<?php
$isLoggedIn = true;
$name = null;


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <?php if($isLoggedIn) : ?>
        <?php if(isset($name)) : ?>
           <h1 class="text-3xl">Welcome <?= $name ?></h1>
       <?php else : ?>
        <h1 class="text-3xl">Welcome to the app</h1>
       <?php endif ?>

      <?php else : ?>
        <h1 class="text-3xl">Please log in</h1>
      <?php endif ?>


      <?php if($isLoggedIn && $name) : ?>
        <h1 class="text-3xl">Welcome <?= $name ?></h1>
      <?php elseif($isLoggedIn) : ?>
        <h1 class="text-3xl">Welcome to the app</h1>
      <?php else : ?>
        <h1 class="text-3xl">Please log in</h1>
      <?php endif; ?>
    </div>
  </div>
</body>

</html>