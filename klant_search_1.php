<?php require_once "bootstrap.html"?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>garage zoeken op klantID</h1>
<p>Dit formulier zoekt een klant uit de database op ID</p>

<form action="klant_search_2.php" method="post">
    <label for="ID">Voer hier het ID in van de klant: </label>
    <input type="text" name="klantID" id="ID"><br>
    <input type="submit" value="verzenden" name="insert">
</form>
</body>
</html>
