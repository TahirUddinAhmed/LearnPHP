<?php

require_once 'includes/autoloader.php';

$person01 = new Person("Tahir Uddin Ahmed", 21);
$person02 = new Person("Peter", 55);
$car = new Car("Bugatti", 56000000);

// Circle class 
$cirlce01 = new Circle(2);

$person01->getPerson();
$person02->getPerson();

$car->getCar();
echo "Area of circle " . $cirlce01->area();
echo "<br>";

$greetings = new Greetings("Tahir Uddin Ahmed");
$greetings->greet();