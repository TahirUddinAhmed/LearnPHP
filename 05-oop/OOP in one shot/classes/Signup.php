<?php
require_once '../helpers.php';

class Signup extends Dbh {
    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    // insert the data into db 
    private function insertUser() {
        // query 
        $query = "INSERT INTO `users` (`username`, `password`) VALUES (:username, :password);";
        $stmt = parent::connect()->prepare($query);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':password', $this->password);
        $stmt->execute();

    }

    private function isEmptySubmit() {
        if(!empty($this->username) && !empty($this->password)) {
            return false; // no empty fields
        } else {
            return true;
        }
    }

    public function SignupUser() {
        // Error handlers 
       if($this->isEmptySubmit()) {
        redirect("../index.php");
       }
        // if no error, signup the user
       $this->insertUser();
    }
}