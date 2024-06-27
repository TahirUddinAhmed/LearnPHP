<?php

class Car {
    private $name;
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // get Car details
    public function getCar() {
        echo "Car Name: " . $this->name . "<br>";
        echo "price: " . $this->price . "<br>";
    }
}