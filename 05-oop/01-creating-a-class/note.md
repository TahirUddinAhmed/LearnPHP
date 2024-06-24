# Class
A class is defined by using the `class` keyword, followed. It is a blueprint for creating objects. It defines a set of properties (variables) and methods (functions) that the object created from the class can have 

## Syntax 
```php
<?php
 class User {
    // properties 
    public $username;
    public $email;


    // method
    public function login() {
        echo $this->username . "loged in";
    }
 }
>
```

# Object 
An Object is an instance of a class. Once a class is defined, you can create multiple objects from it, each having the properties and method defined by the class. 

```php
// create an object
$user01 = new User(); 

// accessing properties
$user01->username("Tahir");
$user01->email("01tahirahmed@gmail.com");

// accessing method
$user01->login();
```

# Access Modifieres 
PHP has three visibility keywords to control access to the class properties and methods: 

 1. `public`: The property or method can be accessed from outside the class. 
 2. `private`: The property or method can only be accessed from within the class itself. 
 3. `protected`: The property or method can be accessed within the class and by inheriting classes. 
 