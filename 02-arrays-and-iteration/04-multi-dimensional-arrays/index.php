<?php
$output = null;

$fruits = [
 ['apple', 'red'],
 ['Orange', 'orange'],
 ['Banana', 'yellow']
];

$output = $fruits[1][0];

$fruits[] = ['Grape', 'Purple'];

$users = [
  ['name' => 'John', 'email' => 'john@gmail.com', 'password' => 'john222'],
  ['name' => 'peter', 'email' => 'peter@gmail.com', 'password' => 'peter222'],
  ['name' => 'Tahir', 'email' => 'tahir@gmail.com', 'password' => 'Tahir222'],
  ['name' => 'Mera', 'email' => 'mera@gmail.com', 'password' => 'Mera222']
];

array_push($users, ['name' => 'Mike', 'email' => 'mike@gmail.com', 'password' => 'mike123']);

$output = $users[3]['email'];
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
      <p class="text-xl"><?= $output ?></p>
      <h3 class="text-xl font-semibold my-2">Fruits Array:</h3>
      <p>
        <pre>
          <?php print_r($users) ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>