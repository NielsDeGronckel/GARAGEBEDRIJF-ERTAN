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
<h1>garage update auto 3</h1>
<p>Autogegevens wijzigen in de database</p>

<?php
$kenteken = $_POST['kentekenvak'];
$merk = $_POST['merkvak'];
$model = $_POST['modelvak'];
$km_stand = $_POST['km_standvak'];
$klant_ID = $_POST['klant_IDvak'];
$foto = $_POST['fotovak'];

$username = "root";
$password = "";

$conn = new PDO("mysql:host=localhost;dbname=garage", $username, $password);

$sql = $conn->prepare("UPDATE auto SET kenteken = :kenteken, merk = :merk, model = :model, km_stand = :km_stand, klant_ID = :klant_ID, foto = :foto WHERE kenteken = :kenteken");

$sql->execute([
    ":kenteken" => $kenteken,
    ":merk" => $merk,
    ":model" => $model,
    ":km_stand" => $km_stand,
    ":klant_ID" => $klant_ID,
    ":foto" => $foto
]);


echo "de gegevens zijn gewijzigd!"
?>
</body>
</html>

