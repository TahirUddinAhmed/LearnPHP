<?php
require "../helpers.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $pwd = $_POST['password'];

    require_once "../classes/Dbh.php";
    require_once "../classes/Signup.php";

    $signup = new Signup($username, $pwd);
    $signup->SignupUser();

} else {
    redirect("../index.php");
}