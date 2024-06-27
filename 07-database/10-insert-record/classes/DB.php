<?php

class DB {
    private $host = 'localhost';
    private $port = 3306;
    private $username = 'root';
    private $pass = '';
    private $dbname = 'learnphp';

    // database connection method 
    protected function connect() {
        try {
            $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->dbname};charset=utf8";

            // Create PDO instance 
            $pdo = new PDO($dsn, $this->username, $this->pass);

            // set pdo to through exception on errors
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Fetch Array ASSOC
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            return $pdo;

        }catch(PDOException $e) {
            die("Connection failed " . $e->getMessage());
        }
    }

}