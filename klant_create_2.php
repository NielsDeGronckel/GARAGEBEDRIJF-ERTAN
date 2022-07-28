<?php require_once "bootstrap.html"?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = "root";
$password = "";
$conn = new PDO("mysql:host=localhost;dbname=garage", $username, $password);


$ID = NULL;
$naam = $_POST['customer_name'];
$adres = $_POST['customer_adress'];
$postcode = $_POST['customer_postal_code'];
$plaats = $_POST['customer_place'];

if (isset($_POST['insert'])) {

    if (!empty($_POST['customer_name']) && !empty($_POST['customer_adress']) && !empty($_POST['customer_postal_code']) && !empty($_POST['customer_place'])) {
        try {
            $sql = $conn->prepare("INSERT INTO klant (naam,adres,postcode,plaats) VALUES (:klantnaam,:klantadres,:klantpostcode,:klantplaats)");
            $sql->execute([
                ":klantnaam" => $naam,
                ":klantadres" => $adres,
                ":klantpostcode" => $postcode,
                ":klantplaats" => $plaats
            ]);
        }catch (PDOException $error){
            echo $error->getMessage();
        }


        echo "SUCCES!<br><br>U heeft ingevuld:<br>$naam<br>$adres<br>$postcode<br>$plaats";


    } else echo "Alle velden moeten ingevuld zijn!";
};



