<?php
$output = null;

$users = [
    'username' => 'TahirUddinAhmed',
    'email' => '01tahirahmed@.com',
    'password' => 'pwd@123',
    'hobbies' => ['Tennis', 'Books']
];

 $output = $users['username'];

//  nested elementss 
 $output = $users['hobbies'][1];

//  add elements
$users['address'] = '782105, Morigoan, Assam';

unset($users['address']);
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
            <h2 class="text-xl font-semibold my-4">User Array:</h2>

            <p>
                <pre>
                    <?php print_r($users) ?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>