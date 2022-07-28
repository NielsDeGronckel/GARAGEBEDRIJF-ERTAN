<?php require_once "bootstrap.html"?>
<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Teun de Vries">
    <meta charset="UTF-8">
    <title>Auto create</title>
</head>
<body>
<h1>Auto create 1</h1>
<p>Vul dit formulier helemaal in met de gegevens van de auto:</p>
<form action="auto_create_2.php" method="post">
    <label for="kenteken">kenteken:</label>
    <input type="text" id="kenteken" name="kenteken" placeholder="AA-01-BB">
    <br>
    <label for="merk">Merk:</label>
    <input type="text" id="merk" name="merk">
    <br>
    <label for="model">Model:</label>
    <input type="text" id="model" name="model">
    <br>
    <label for="km_stand">Kilometer stand:</label>
    <input type="text" id="km_stand" name="km_stand">
    <br>
    <label for="klant_ID">Klant ID:</label>
    <input type="text" id="klant_ID" name="klant_ID">
    <br>
    <label for="picture">Foto:</label>
    <input type="file" name="foto" value="">
    <br><br>
    <input type="submit" value="verzenden" name="insert">

</form>

</body>

