<?php

$servername = "localhost";
$dbname = "garage";
$username = "root";
$password = "";

try {
    $database = new PDO("mysql:host=$servername;dbanem=$dbname",
        $username, $password);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connectie gelukt <br>";
}
catch (PDOException $e)
{
    echo "Connectie mislukt: " . $e->getMessage();
}

