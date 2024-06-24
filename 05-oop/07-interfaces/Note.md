# Interface
An interface is a contract that defines a set of methods that a class must implement. Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as `polymorphism`.

## PHP - Interfaces VS Abstract Classes 
Interface are similar to abstract classes. THe difference between interfaces and abstract classes are: 
 - Interfaces cannot have properties, while abstract classes can 
 - All interface methods must be public, while abstract class methods is public or protected. 
 - All Methods in an interface are abstract, so thet cannot be implemented in code and the abstract keyword is not necessary. 
 - classes can implement an interface while inheriting from another class at the same time. 

## Syntax 
```php 
<?php 
interface InterfaceName {
    public function method1();
    public function method2($param);
}

class ClassName implements InterfaceName {
    public function method1() {
        // Implementation of method1
    }

    public function method2($param) {
        // Implementation of method2
    }
}

>
```

## Example 
```php 
<?php
interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "Meow";
  }
}

$animal = new Cat();
$animal->makeSound();
?>
```