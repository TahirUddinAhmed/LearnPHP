<?php
$output = null;

$ids = [10, 20, 15, 45, 76, 98];
$users = ['user4', 'user2', 'user3'];

// count lenght of the array
$output = count($ids); 

// sort function
sort($ids);
sort($users);

// rsort - reverse sort 
// rsort($ids);
// rsort($users);

// add elements using array_push(Array, elements)
array_push($ids, 100);
array_push($users, 'user1');

// array_pop - remove elements [last element]
array_pop($ids);
array_pop($users);

// array_shift() - remove elements [first element]
array_shift($ids);
array_shift($users);

// array_unshift() - add elements [at the first]
array_unshift($ids, 101);
array_unshift($users, 'user101');

// array_slice() - return a new array
$ids2 = array_slice($ids, 1, 4);
// var_dump($ids2);

// array_splice()
array_splice($ids, 1, 1, 'New ID');
array_splice($users, 0, 1, 'Tahir');

// array_sum
$output = 'Sum of IDs: ' . array_sum($ids);

// array_search()
$output = 'Tahir is at index: ' . array_search('Tahir', $users);


// explode - convert string to array
$tags = 'tech,code,programming,poem';
$tagsArray = explode(',', $tags);
// var_dump($tagsArray);

// in_array
$output = 'User3 exists: ' . in_array('user3', $users);

// implode - convert array to string
$output = implode(' - ', $users);



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
            <h2 class="text-xl font-semibold my-4">IDs Array:</h2>
            <p>
                <pre>
                    <?php print_r($ids) ?>
                </pre>
            </p>

            <h2 class="text-xl font-semibold my-4">Users Array:</h2>
            <p>
                <pre>
                    <?php print_r($users) ?>
                </pre>
            </p>

        </div>
    </div>
</body>

</html>