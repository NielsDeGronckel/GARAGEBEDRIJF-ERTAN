<?php require_once "bootstrap.html"?>
<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Teun de Vries">
    <meta charset="UTF-8">
    <title>Menu</title>
</head>
<body>
<div class="screen">
    <h1>Garage Menu</h1>
    <h2>Klant</h2>
    <ul>
        <li><a href="klant_create_1.php">Create</a></li>
        <li><a href="klant_read_1.php">Read</a></li>
        <li><a href="klant_search_1.php">Zoeken op klantID</a></li>
        <li><a href="alle_gegevens_search_1.php">Zoek alle gegevens van klant met klantID</a></li>
        <li><a href="klant_update_1.php">Update</a></li>
        <li><a href="klant_delete_1.php">Delete</a></li>
    </ul>

    <h2>Auto</h2>
    <ul>
        <li><a href="auto_create_1.php">Create</a></li>
        <li><a href="auto_read_1.php">Read</a></li>
        <li><a href="auto_search_1.php">Zoeken op kenteken</a></li>
        <li><a href="auto_update_1.php">Update</a></li>
        <li><a href="auto_delete_1.php">Delete</a></li>
    </ul>
    <br><br><br><br><br>
    <h3><a href="connect_show.php">Check connectie database</a></h3>
</div>
</body>
</html>
