<?php 

class Greetings {
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function greet() {
        echo "Hello {$this->name}, welcome to our site";
    }
}