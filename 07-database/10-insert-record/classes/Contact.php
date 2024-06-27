<?php

class Contact extends DB{
    private $name;
    private $phone;
    private $message;

    // constructor 
    public function __construct($name, $phone, $message)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->message = $message;
    }

    // insert data into db 
    private function insert() {
        // query 
        $query = "INSERT INTO `contact` (`name`, `phone`, `message`) VALUES (:name, :phone, :message);";
        $stmt = parent::connect()->prepare($query);
        // params
        $params = [
            'name' => $this->name,
            'phone' => $this->phone,
            'message' => $this->message
        ];

        $stmt->execute($params);
    }

    private function isEmptyFields() {
        if(empty($this->name) && empty($this->phone) && empty($this->message)) {
            return true;
        } else {
            return false;
        }
    }

    // contact 
    public function contact() {
        // error handling 
        if($this->isEmptyFields()) {
            header("location: user_data.php?err");
            exit();
        } 

        // if there are no errror, submit the contact form 
        $this->insert();
        
    }
}