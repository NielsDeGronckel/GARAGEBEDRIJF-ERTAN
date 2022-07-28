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
<h1>garage delete 3</h1>
<p>verwijder een klant uit de database op basis van de ID</p>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$ID = $_POST['klantIDvak'];
$verwijderen = $_POST['verwijdervak'];

if ($verwijderen){
    $username = "root";
    $password = "";
    $conn = new PDO("mysql:host=localhost;dbname=garage", $username, $password);

    $sql = $conn->prepare("DELETE FROM klant WHERE ID =" . $_POST['klantIDvak']);
    $sql->execute();

    echo "De gegevens zijn succesvol verwijderd!<br>";
}
else echo "De gegevens zijn niet verwijderd"
?>
<a href="index.php">Terug naar hoofdmenu</a>
</body>
</html>
