<?php

abstract class Animal {
    protected $name;

    // constructor 
    public function __construct($name)
    {
        $this->name = $name;
    }

    // abstract method 
    abstract public function makeSound();

    public function getName() {
        return $this->name;
    }
}

class Dog extends Animal {
    public function makeSound()
    {
        return "Bark";
    }
}

class Cat extends Animal {
    public function makeSound()
    {
        return "Meow";
    }
}

$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");

echo $dog->getName() . " says " . $dog->makeSound();
echo "<br>";
echo $cat->getName() . " says " . $cat->makeSound();