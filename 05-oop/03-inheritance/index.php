<?php

class User {
  public $name;
  public $email;
  protected $status = 'active';

  public function __construct($name, $email) {
    $this->name = $name;
    $this->email = $email;
  }

  public function login() {
    echo $this->name . ' logged in <br>';
  }
}

class Admin extends User {
  public $level;

  public function __construct($name, $email, $level) {
    $this->level = $level;
    parent::__construct($name, $email);
  }

  // override login method - polymorphism
  public function login() {
    echo 'Admin ' . $this->name . ' Logged in <br>';
  }

  public function getStatus() {
    echo $this->status;
  }
}





$admin1 = new Admin('Peter Parker', 'peter@gmail.com', 5);
echo $admin1->name . "<br>";
echo $admin1->email . "<br>";
echo $admin1->level . "<br>";
echo $admin1->getStatus() . "<br>";
$admin1->login();
var_dump($admin1);
