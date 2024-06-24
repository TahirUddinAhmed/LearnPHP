# Inheritance 
Inheritance is a fundamental concept in object-oriented programming that allows a class (known as a child or subclass) to inherit properties and methods from another class (known as a parent or superclass) . This promotes code reusability and a hierarchical classification of classes. 

## Key Points about Inheritance 
 1. <b>Parent Class(superclass)</b>: The class from which properties and methods are inherited. 

 2. <b>Child class(Subclass)</b>: The class that inherits the properties and methods from the parent class. 

 3. <b>`extends` Keyword</b>: In PHP, the `extends` keyword is used to define a child class that inherits from a parent class. 

 4. <b>Overriding Methods</b>: A child class can override methods from the parent class to provide a specific implementation. 

 5. <b>`parent` keyword</b>: The `parent` keyword is used to class a parent class's constructor or other methods. 

## Syntax 
```php
<?php 
    class ParentClass {
        // properties and method of the parent class
    }

    class Childclass extends ParentClass {
        // additional properties and methods of the child class
    }
>
```

## example 
```php
<?php
// Parent Class 
class Vehicle {
    public $make;
    public $model;

    // constructor 
    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    // Method to display details 
    public function display() {
        return "Vehicle: {$this->make} {$this->model}";
    }
}

// Child Class 
class Car extends Vehicle {
    public $year;

    // constructor 
    public function __construct($make, $model, $year) {
        // Call parent constructor 
        parent::__construct($make, $model);
        $this->year = $year;
    }

    // Overriding the display method 
    public function display() {
        return "Car: $this->make $this->model $this->year";
    }
}


// creating an object of the car class 
$myCar = new Car("Toyota", "Corolla", 2020);

// Accessing the display method 
echo $myCar->display();


>
```