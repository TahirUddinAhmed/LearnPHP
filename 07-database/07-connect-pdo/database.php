<?php

// database credentials
$host = 'localhost';
$port = 3306;
$db_name = 'learnphp';
$username = 'root';
$password = '';

$dsn = "mysql:host={$host};port={$port};dbname={$db_name};charset=utf8";

try {
   // create PDO instance
   $pdo = new PDO($dsn, $username, $password);

   // Set PDO to throw exceptions on error
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   echo 'Database Connected';
} catch(PDOException $e) {
    // if there is an error, catch it here
    echo 'Connection failed: ' . $e->getMessage();
}