<?php require_once "bootstrap.html"?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="read.css">
    <title>Document</title>
</head>
<body>
<h1>zoeken op kenteken</h1>
<p>op kenteken zoeken in de database</p>


</body>
</html>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = "root";
$password = "";
$conn = new PDO("mysql:host=localhost;dbname=garage", $username, $password);

$kenteken = $_POST['kenteken'];

if (isset($_POST['insert'])) {
    try {
        $sql = $conn->prepare("SELECT * FROM auto WHERE kenteken = :kenteken");
        $sql->execute([
            ":kenteken" => $kenteken
        ]);
        $result = $sql->fetchAll();
        if (count($result) === 0) {
            echo "Er is geen auto gevonden met het ingevulde kenteken";
        } else {
            foreach ($result as $auto) {
                echo "Kenteken: " . $auto['kenteken'] . "<br> Merk: " . $auto['merk'] . "<br> Model: " . $auto['model'] . "<br> km. stand: " . $auto['km_stand'] . "<br> Klant ID: " . $auto['klant_ID'] .
                    "<br>" . "<img alt='foto can auto' src='" . $auto['foto'] . "'>";
            }
        }
    } catch (PDOException $error) {
        echo "Er is geen auto gevonden met het ingevulde kenteken, probeer het opnieuw:";
        echo $error->getMessage();
    }
}

?>
