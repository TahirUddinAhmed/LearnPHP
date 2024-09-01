<?php
// include 'classes/Person.php';
// include 'classes/Calc.php';

// Autoload 
spl_autoload_register(function($className) {
    $path = "classes/";
    $ext = ".php";

    $fullPath = $path . $className . $ext;

    if(!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
});


$person1 = new Person('Tahir', 18);
$calculation = new Calc(5, 9);


echo $person1->getPerson() . "<br>";

echo 'HELLO THERE';
echo "<br>";


echo $calculation->getSum();
echo "<br>";
echo $calculation->getMul();