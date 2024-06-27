<?php

// autoloading 
spl_autoload_register('myAutoLoader');

function myAutoLoader($classs) {
    $path = "classes/";
    $ext = ".php";
    $fullPath = $path . $classs . $ext;

    if(!file_exists($fullPath)) {
        die("Class file not found. There are no clas  nan {$fullPath}");
    }

    require_once $fullPath;
}