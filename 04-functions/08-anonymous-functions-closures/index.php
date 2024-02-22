<?php
// anonymous function

$square = function ($number) {
    return $number * $number;
};

$result = $square(5);

echo "Square of 5 is: " . $result;
echo "<br>";

// closures
function createCounter() {
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