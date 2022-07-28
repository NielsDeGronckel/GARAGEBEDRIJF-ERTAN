<?php require_once "bootstrap.html"?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>garage zoeken op klantID</h1>
<p>Dit formulier zoekt een auto uit de database op model</p>

<form action="auto_search_model_2.php" method="post">
    <label for="ID">Voer hier het model in van de auto: </label>
    <input type="text" name="model" id="ID"><br>
    <input type="submit" value="zoeken" name="insert">
</form>
</body>
</html>
