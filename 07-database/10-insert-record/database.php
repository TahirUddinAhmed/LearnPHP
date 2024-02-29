<?php

// Database configurations
$host = 'localhost';
$dbName = 'learnphp';
$port = 3306;
$dbUser = 'root';
$dbPassword = '';

// Connection String (DSN)
$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {
  // Create PDO instance 
  $pdo = new PDO($dsn, $dbUser, $dbPassword);

  // Set PDO error exceptions 
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Fetch Array ASSOC
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch(PDOException $exception) {
   echo "Connection failed: " . $exception->getMessage();
}
