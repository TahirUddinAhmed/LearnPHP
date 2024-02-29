<?php

// database creds 
$host = 'localhost';
$dbName = 'learnphp';
$dbUser = 'root';
$dbPwd = '';

$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";

try {
  $pdo = new PDO($dsn, $dbUser, $dbPwd);

  // set attribute
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Fetch as ASSOC array 
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}