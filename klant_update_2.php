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
<h1>garage update klant 2</h1>
<p>Dit formulier wordt gebruikt om klantgegevens aan te passen uit de database</p>

<?php
$username = "root";
$password = "";

$ID = $_POST['klantID'];

$conn = new PDO("mysql:host=localhost;dbname=garage", $username, $password);

$sql = $conn->prepare("SELECT * FROM klant WHERE ID = :ID");
$sql->execute([
    ":ID" => $ID
]);

$klant = $sql->fetch();
if (count($klant) === 0) {
    echo "Er is geen klant gevonden met het ingevulde ID";
} else {
    echo "<form action='klant_update_3.php' method='post'>";
    echo "klantid: " . $klant['ID'] . "<br>";
    echo "<input type='hidden' name='klantIDvak' value=''>";
    echo $klant['naam'] . "<br>";

        echo "klantnaam: <input type='text' name='klantnaamvak' value='' placeholder='" . $klant['naam'] . "'><br>";

    echo "klantadres: <input type='text' name='klantadresvak' value='' placeholder='" . $klant['adres'] . "'><br>";

    echo "klantpostcode: <input type='text' name='klantpostcodevak' value='' placeholder='" . $klant['postcode'] . "'><br>";

    echo "klantplaats: <input type='text' name='klantplaatsvak' value='' placeholder='" . $klant['plaats'] . "'><br>";
    echo "<input type='submit'>";
    echo "</form>";
}
?>

</body>
</html>
