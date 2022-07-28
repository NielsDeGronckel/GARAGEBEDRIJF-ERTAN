<?php require_once "bootstrap.html"?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$login_code = $_POST['monteur_code'];

if ($login_code === "1233") {
    echo "Wachtwoord correct!";
    echo "<br>";
    echo "<a href='monteur_main.php'>Door naar het menu";
} else {
    echo "Wachtwoord incorrect!";
    echo "<br>";
    echo "<a href='login.php'>Terug naar het menu";
}


