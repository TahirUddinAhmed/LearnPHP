<?php
// constant
define('APP_NAME', 'My App');
// echo APP_NAME;
const DB_NAME = 'mydb';
const DB_HOST = 'localhost';



function run() {
  echo APP_NAME;
  echo DB_HOST;
}

run();

// can't update
// define('APP_NAME', 'My APP 2');