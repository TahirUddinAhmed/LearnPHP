<?php

// arrow function - one line function 
$add = fn ($a, $b) => $a + $b;


// echo $add(5, 8);

$numbers = [1, 2, 3, 4, 5];

$squaredNumbers = array_map(fn ($number) => $number * $number, $numbers);

print_r($squaredNumbers);

