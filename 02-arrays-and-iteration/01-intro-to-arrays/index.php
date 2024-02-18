<?php
 // array basics

 $names = array('john', 'peter', 'tahir');
 $numbers = [1, 2, 3, 4, 5, 6, 7];

//  var_dump($names);

function inspect($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

// inspect($names);
// inspect($numbers);

// print_r($names);

// echo $names[1];

// Add elements to array
$numbers[7] = 125;
$numbers[] = 200;

$numbers[3] = 123;

// remove / delete array elements
unset($numbers[3]);

$numbers = array_values($numbers);

inspect($numbers);



