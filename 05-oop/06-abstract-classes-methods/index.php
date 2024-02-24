<?php

abstract class Shape {
    protected $name;

    // Abstract Method
    abstract public function calculateArea();

    public function __construct($name)
    {
        $this->name = $name;
    }

    // Concrete Method
    public function getName() {
        return $this->name;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($name, $radius) {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

}

class Ractangle extends Shape {
    private $width;
    private $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

// $shape = new Shape(); can't be instantiated 

$circle = new Circle('Circle', 5);
$ractange = new Ractangle('Ractange', 12, 5);

// var_dump($circle);
// var_dump($ractange);
echo $ractange->getName() . ' Area: ';
echo $ractange->calculateArea();
echo "<br>";
echo $circle->getName() . ' Area: ';
echo $circle->calculateArea();