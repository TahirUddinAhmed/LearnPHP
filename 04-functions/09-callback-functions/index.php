<?php

$numbers = [1, 2, 3, 4, 5];

$square = function ($number) {
    return $number * $number;
};
// $squareNum = array_map(function ($number) {
//     return $number * $number;
// }, $numbers);

$squareNum = array_map($square, $numbers);

// echo "<pre>";
// print_r($squareNum);
// echo "</pre>";

function applyCallBack($callBack, $value) {
   return $callBack($value);
}

$double = function ($num) {
    return $num * 2;
};

echo applyCallBack($double, 3);

