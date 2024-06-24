<?php

class Car {
    private $brand;
    private $color;
    private $vehicleType = "Car";
    
    public function __construct($brand, $color = "none") {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function details() {
        echo "Brand: " . $this->brand . "<br>";
        echo "Color: " . $this->color;
    }
}