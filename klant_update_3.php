<?php require_once "bootstrap.html"?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>garage update klant 3</h1>
<p>Klantgegevens wijzigen in de database</p>

<?php
$ID = $_POST['klantIDvak'];
$naam = $_POST['klantnaamvak'];
$adres = $_POST['klantadresvak'];
$postcode = $_POST['klantpostcodevak'];
$plaats = $_POST['klantplaatsvak'];

$username = "root";
$password = "";

$conn = new PDO("mysql:host=localhost;dbname=garage", $username, $password);

$sql = $conn->prepare("UPDATE klant SET naam = :klantnaam, adres = :klantadres, postcode = :klantpostcode, plaats = :klantplaats WHERE ID = :klantID");

$sql->execute([
    ":klantID" => $ID,
    ":klantnaam" => $naam,
    ":klantadres" => $adres,
    ":klantpostcode" => $postcode,
    ":klantplaats" => $plaats
]);


echo "de klant is gewijzigd!"
?>
</body>
</html>
