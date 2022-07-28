<?php
// connect.php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$dbname = "garage";
$username = "root";
$password = "";

try {
    $database = new PDO("mysql:host=$servername;dbanem=$dbname",
        $username, $password);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){}



