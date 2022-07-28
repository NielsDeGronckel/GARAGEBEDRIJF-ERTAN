<?php require_once "bootstrap.html"?>
<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Teun de Vries">
    <meta charset="UTF-8">
    <title>Klant create</title>
</head>
<body>
<h1>Klant create 1</h1>
<p>Vul dit formulier helemaal in met de gegevens van de klant:</p>
<form action="klant_create_2.php" method="post">
    <label for="customer_name">klantnaam:</label>
    <input type="text" id="customer_name" name="customer_name">
    <br>
    <label for="customer_adress">klantadres:</label>
    <input type="text" id="customer_adress" name="customer_adress">
    <br>
    <label for="customer_postalcode">klantpostcode:</label>
    <input type="text" id="customer_postalcode" name="customer_postal_code">
    <br>
    <label for="customer_place">klantplaats:</label>
    <input type="text" id="customer_place" name="customer_place">
    <br>
    <input type="submit" value="verzenden" name="insert">

</form>

</body>
