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
<h1>garage update auto 2</h1>
<p>Dit formulier wordt gebruikt om autogegevens aan te passen uit de database</p>

<?php
$username = "root";
$password = "";

$conn = new PDO("mysql:host=localhost;dbname=garage", $username, $password);

$kenteken = $_POST['kenteken'];

$sql = $conn->prepare("SELECT * FROM auto WHERE kenteken = :kenteken");
$sql->execute([
    ":kenteken" => $kenteken
    ]);

$auto = $sql->fetch();
if (count($auto) === 0){
    echo "Er is geen auto gevonden met het ingevulde kenteken";
}
else{
    echo "<form action='auto_update_3.php' method='post'>";
        echo "kenteken: " . $auto['kenteken'];
        echo "<input type='hidden' name='kentekenvak' value=''>";
        echo "<br>";

        echo "kenteken: <input type='text' name='kentekenvak' value='' placeholder='" . $auto['kenteken'] . "'><br>";

        echo "merk: <input type='text' name='merkvak' value='' placeholder='" . $auto['merk'] . "'><br>";

        echo "model: <input type='text' name='modelvak' value='' placeholder='" . $auto['model'] . "'><br>";

        echo "km stand: <input type='text' name='km_standvak' value='' placeholder='" . $auto['km_stand'] . "'><br>";

        echo "klant ID: <input type='text' name='klant_IDvak' value='' placeholder='" . $auto['klant_ID'] . "'><br>";

        echo "foto: <input type='file' name='fotovak' value=''><br>";
    echo "<input type='submit'>";
    echo "</form>";
}
?>

</body>
</html>

