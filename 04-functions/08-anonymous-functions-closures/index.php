<?php
// anonymous function

$square = function ($number) {
    return $number * $number;
};

$result = $square(5);

echo "Square of 5 is: " . $result;
echo "<br>";

// closures
function createCounter()
{
    $count = 0;

    $counter = function () use (&$count) {
        return ++$count;
    };

    return $counter;
}

$counter = createCounter();

echo $counter() . "<br>";
echo $counter() . "<br>";
echo $counter() . "<br>";
echo $counter() . "<br>";

// Another example of closure 
$counter = 1;

// get the $counter as reference 
$multiply = function () use (&$counter) {
    $counter *= 2;
};

$multiply();
echo $counter; // output: 2
echo "<br>";
$multiply();
echo $counter; // output: 4 


$numbers =  [1, 2, 3, 4];

$multiply = function ($multiplier) use (&$numbers) {
    foreach ($numbers as $key => $number) {
        $number *= $multiplier;

        $numbers[$key] = $number;
    } 
};

$multiply(3);
echo "<pre>";
var_dump($numbers);
echo "</pre>";


// $res1 = $multiply(3); // multiplies each value by 3
// print_r($res1);

// $res2 = $multiply(5);
// print_r($res2);

//  print_r($result);