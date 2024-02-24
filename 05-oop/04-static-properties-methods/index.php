<?php

class MathUtility {
    public static $pi = 3.14;

    public static function add(...$nums) {
        return array_sum($nums);
    }
}

// echo MathUtility::$pi;
echo MathUtility::add(1, 2, 3, 4, 5);
