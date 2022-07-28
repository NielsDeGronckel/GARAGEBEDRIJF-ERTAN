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
<h1>zoeken op klantID</h1>
<p>op klantID zoeken in de database</p>


</body>
</html>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = "root";
$password = "";
$conn = new PDO("mysql:host=localhost;dbname=garage", $username, $password);

if (isset($_POST['insert'])) {
    try {
        $klanten = $conn->prepare("SELECT * FROM klant WHERE ID =" . $_POST['klantID']);
        $klanten->execute();
        $result = $klanten->fetchAll();
        if (count($result) === 0) {
            echo "Er is geen klant gevonden met het geselecteerde ID";
}
        else{
            foreach ($result as $klant) {
                echo $klant['ID'] . $klant['naam'] . $klant['adres'] . $klant['postcode'] . $klant['plaats'];
            }
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}
?>