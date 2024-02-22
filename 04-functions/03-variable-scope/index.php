<?php

// Global scope 
$name = "John";

function sayHello() {
    // Local scope
    global $name;
    $name = 'Peter';
    echo 'Hello, ' . $name;
}

function sayGoodBye() {
    $name = ['Jack', 'Joe'];

    echo 'GoodBye: ' .$name[0];
}

sayGoodBye();

