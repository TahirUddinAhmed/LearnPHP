<?php

class Circle {
    public static $pi = 3.14;
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // area 
    public function area() {
        return self::$pi * $this->radius * $this->radius;
    }
}