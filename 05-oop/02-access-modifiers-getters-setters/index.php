<?php

class User
{
  // Properties
  public $name;
  public $email;
  private $status = 'Active';

  public function __construct($name, $email) {
    $this->name = $name;
    $this->email = $email;
  }

  // Methods
  public function login() {
    echo $this->name . ' logged in <br>';
  }

  // Getter
  public function getStatus() {
    echo $this->status;
  }

  // Setter
  public function setStatus($status) {
    $this->status = $status;
  }
}

// Instantiate a new object
$user1 = new User('John Doe', 'john@gmail.com');

$user1->login();

$user2 = new User('Jane Doe', 'jane@gmail.com');

$user2->login();

// echo $user2->$status;

// var_dump($user2);

$user2->setStatus('Inactive');
$user2->getStatus();
