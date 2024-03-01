<?php

// Database configuration 
$host = 'localhost';
$dbname = 'learnphp';
$port = 3306;
$dbUser = 'root';
$dbPass = '';

// Connection String (DSN)
$dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8";

try {
 // Create PDO instance 
 $pdo = new PDO($dsn, $dbUser, $dbPass);

 // Set PDO to through exceptions on errors 
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "Connection Failed: " . $e->getMessage();
}
