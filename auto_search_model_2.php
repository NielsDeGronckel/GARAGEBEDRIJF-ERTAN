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

$model = $_POST['model'];

if (isset($_POST['insert'])) {
    try {
        $sql = $conn->prepare("SELECT * FROM auto WHERE model = :model");
        $sql->execute([
            ":model" => $model
        ]);
        $result = $sql->fetchAll();
        /* Je moet controleren of er een resultaat is. Is er resultaat dan 'toon auto' anders toon bericht */
        if (count($result) === 0) {
            echo "Er is geen auto gevonden met het ingevulde model, probeer het opnieuw:";
        } else {
            foreach ($result as $auto) {
                echo $auto['kenteken'] . "<br>" . $auto['merk'] . "<br>" . $auto['model'] . "<br>" . $auto['km_stand'] . "<br>" . $auto['klant_ID'];
        }
        }
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

?>

