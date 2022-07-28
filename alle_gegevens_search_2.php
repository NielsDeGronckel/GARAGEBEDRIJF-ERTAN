<?php
require_once "bootstrap.html";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = "root";
$password = "";
$conn = new PDO("mysql:host=localhost;dbname=garage", $username, $password);

$ID = $_POST['ID'];

if (isset($ID)) {
    try {
        $sql = $conn->prepare("SELECT * FROM klant INNER JOIN auto ON klant.ID = auto.klant_ID WHERE ID = :ID");
        $sql->execute([
            ":ID" => $ID
        ]);
        $result = $sql->fetchAll();
        if (count($result) === 0) {
            echo "Er is geen auto toegevoegd aan deze klant met het ingevulde ID";
        } else {
            foreach ($result as $info) {
                echo $info['ID'] . "<br>" . $info['naam'] . "<br>" . $info['adres'] . "<br>" . $info['postcode'] . "<br>" . $info['plaats'] .
                    "<br>" . $info['kenteken'] . "<br>" . $info['merk'] . "<br>" . $info['model'] . "<br>" . $info['km_stand'] . "<br>" .
                    $info['klant_ID'] . "<br>" . $info['foto'] . "<br>";
            }
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }

}


