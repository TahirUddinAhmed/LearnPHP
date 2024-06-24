<?php

class Dbh {
    private $host = "localhost";
    private $port = 3306;
    private $username = "root";
    private $password = "";
    private $dbName = "webpage";

    protected function connect() {
        try {
            $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->dbName};charset=utf8";

            // create PDO instance 
            $pdo = new PDO($dsn, $this->username, $this->password);

            // set PDO to throw exceptions on error
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch(PDOException $e) {
            die("Connection failed" . $e->getMessage());
        }
    }
}