<?php
// parameters and arguments

function add($num1, $num2) {
    return $num1 + $num2;
}

$result = add(5, 11);

echo $result;

function sayHello($name) {
    return 'Hello ' . $name;
}
echo "<br>";
echo sayHello('Tahir');

function addAll(...$numbers) {
    $total = 0;

    foreach($numbers as $num) {
        $total += $num;
    }

    return $total;
}

echo "<br>";
echo addAll(1, 2, 3, 4, 5, 6, 7);
