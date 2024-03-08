<?php

// use First\Product;
// use Second\Product as NewProduct;

require 'Framework/First.php'; 
require 'Framework/Second.php'; 


function wow() {
    echo "Wow from index file.<br>";
}

First\wow();

// Instantiate the first.php class 
$product1 = new First\Product();
$product2 = new Second\Product();