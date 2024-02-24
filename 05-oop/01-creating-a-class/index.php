<?php

class User {
    // Properties
    public $name;
    public $email;

    // Constructor
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    // Method
    public function login() {
        echo "{$this->name} logged in";
    }
}

// Instantiate new object 
$user1 = new User('Tahir Uddin Ahmed', 'tahirahmed@gmail.com');

// $user1->name = 'Tahir Ahmed';
// $user1->email = 'tahir@gmail.com';


$user1->login();

$user2 = new User('John Doe', 'john@gmail.com');

$user2->login();

// echo "<pre>";
// var_dump($user2);
// echo "</pre>";

