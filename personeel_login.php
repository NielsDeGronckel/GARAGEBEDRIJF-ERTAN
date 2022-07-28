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
<div class="box">
    <form action="login_personeel.php" method="post">
        <label for="personeel">Personeel:</label><br>
        <input type="password" id="personeel" name="personeel_code">
        <input type="submit" name="insert">
</div>
</body>
</html>
