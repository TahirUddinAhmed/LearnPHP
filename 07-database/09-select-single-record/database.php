<?php

// Database creds
$host = 'localhost';
$dbName = 'learnphp';
$port = 3306;
$dbUser = 'root';
$dbPassword = '';

// Connection String (DSN)
$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";


try {
 // create PDO instance
 $pdo = new PDO($dsn, $dbUser, $dbPassword);

  // Set PDO to through exceptions on errors
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Fetch as ASSOC array 
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
  // If there is an error, catch is here
  echo 'Connection failed: ' . $e->getMessage();
}
