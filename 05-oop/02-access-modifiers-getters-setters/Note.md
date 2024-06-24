# Access Modifieres 
PHP has three visibility keywords to control access to the class properties and methods: 

 1. `public`: The property or method can be accessed from outside the class. 
 2. `private`: The property or method can only be accessed from within the class itself. 
 3. `protected`: The property or method can be accessed within the class and by inheriting classes. 

# Constructor 
A constructor in PHP is a special method within a class that is automatically called when an object of that class is instantiated. It allows you to initialize the object's properties and perform any setup tasks that the object may require. 

### Key Points about constructors

 1. <b>Automatic Invocation</b>: The constructor is called automatically when an object is created using the `new` keyword.

 2. <b>Naming</b>: In PHP, the constructor method is named `__construct`. The constructor function starts with two underscores `(__)`.

 3. <b>Initialization</b>: Constructors are typically used to initiazze properties or execute startup procesures when an object is created. 

 4. <b>Arguments</b>: Constructr can take arguments to set up the object with specific data when it is created. 


## Example 
```php
<?php 
class User {
    // properties 
    public $username;
    public $email;

    // constructor 
    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
    }

    // method 
    public function login() {
        echo "{$this->username} is logged in";
    }
}


// create an object 
$user01 = new User("tahirahemd", "01tahirahemd@gmail.com");

$user01->login();
>
```