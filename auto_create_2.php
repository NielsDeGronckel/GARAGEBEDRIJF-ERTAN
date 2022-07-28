<?php require_once "bootstrap.html"?>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = "root";
$password = "";
$conn = new PDO("mysql:host=localhost;dbname=garage", $username, $password);


$kenteken = $_POST['kenteken'];
$merk = $_POST['merk'];
$model = $_POST['model'];
$km_stand = $_POST['km_stand'];
$klant_id = $_POST['klant_ID'];
$foto = $_POST['foto'];

if (isset($_POST['insert'])) {

    if (!empty($_POST['kenteken']) && !empty($_POST['merk']) && !empty($_POST['model']) && !empty($_POST['km_stand'])&& !empty($_POST['klant_ID']) && !empty($_POST['foto'])) {
        try {
            $sql = $conn->prepare("INSERT INTO auto (kenteken,merk,model,km_stand,klant_ID,foto) VALUES (:kenteken,:merk,:model,:km_stand,:klant_ID,:foto)");
            $sql->execute([
                ":kenteken" => $kenteken,
                ":merk" => $merk,
                ":model" => $model,
                ":km_stand" => $km_stand,
                ":klant_ID" => $klant_id,
                ":foto" => $foto
            ]);
        }catch (PDOException $error){
            echo $error->getMessage();
        }


        echo "SUCCES!<br><br>U heeft ingevuld:<br>$kenteken<br>$merk<br>$model<br>$km_stand<br>$klant_id<br>$foto";


    } else echo "Alle velden moeten ingevuld zijn!";
};




