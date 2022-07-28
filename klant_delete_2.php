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
<h1>Garage delete 2</h1>
<p>op klantID een klant verwijderen uit de database</p>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$klantID = $_POST['klantIDvak'];


$username = "root";
$password = "";
$conn = new PDO("mysql:host=localhost;dbname=garage", $username, $password);

$sql = $conn->prepare("SELECT ID,naam,adres,postcode,plaats FROM klant where ID =" . $_POST['klantIDvak']);
$sql->execute();



foreach($sql as $klant){
    echo $klant['ID'] . "<br>";
    echo $klant['naam'] . "<br>";
    echo $klant['adres'] . "<br>";
    echo $klant['postcode'] . "<br>";
    echo $klant['plaats'] . "<br>";

    echo "<br>";

    echo "<form action='klant_delete_3.php' method='post'>";
    echo "<input type='hidden' name='klantIDvak' value='$klantID'>";
    echo "<input type='hidden' name='verwijdervak' value='0'>";
    echo "<input type='checkbox' name='verwijdervak' value='1'>";
    echo "Verwijder deze klant. <br>";
    echo "<input type='submit'>";
    echo "</form>";
}
?>
</body>
</html>