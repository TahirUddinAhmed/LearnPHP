# Abstract class and methods 

An abstract class is a class that cannot be instantiated and is meant to be subclassed. It can contain abstract methods, which are method declared without implementation, as well as fully defined methods and properties.

An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.


## Key points 
 1. <b>Cannot Instantiate</b>: You cannot create an instance of an abstract class. 

 2. <b>Must Extend</b>: An abstract class must be extended by other class. 

 3. <b>Abstract methods</b>: Subclass must implement all abstract methods of the abstract class. 

 4. <b>Use of `abstract` Keyword</b>: Both abstract classes and methods are declared using the `abstract` keyword. 

## Example 
```php
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

```



