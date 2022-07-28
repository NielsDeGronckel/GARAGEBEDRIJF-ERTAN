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
<p>op kenteken een auto verwijderen uit de database</p>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = "root";
$password = "";
$conn = new PDO("mysql:host=localhost;dbname=garage", $username, $password);

$kenteken = $_POST['kentekenvak'];

$sql = $conn->prepare("SELECT * FROM auto where kenteken = :kenteken");
$sql->execute([
    ":kenteken" => $kenteken
]);



foreach($sql as $auto){
    echo $auto['kenteken'] . "<br>";
    echo $auto['merk'] . "<br>";
    echo $auto['model'] . "<br>";
    echo $auto['km_stand'] . "<br>";
    echo $auto['klant_ID'] . "<br>";

    echo "<br>";

    echo "<form action='auto_delete_3.php' method='post'>";
    echo "<input type='hidden' name='kentekenvak' value='$kenteken'>";
    echo "<input type='hidden' name='verwijdervak' value='0'>";
    echo "<input type='checkbox' name='verwijdervak' value='1'>";
    echo "Verwijder deze auto. <br>";
    echo "<input type='submit'>";
    echo "</form>";
}
?>
</body>
</html>
