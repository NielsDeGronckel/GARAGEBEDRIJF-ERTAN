<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="read.css">
</head>
<body>
<table>
    <tr>
        <th>Kenteken</th>
        <th>Merk</th>
        <th>Type</th>
        <th>KM. stand</th>
        <th>KlantID</th>
        <th>Foto</th>
    </tr>
    <a href="<?php echo $row['foto'] ?>"></a>
    <?php

    $conn = new mysqli("localhost", "root", "", "garage");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);}

    $sql = "SELECT kenteken, merk, model, km_stand, klant_ID, foto FROM auto";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["kenteken"]. "</td><td>" . $row["merk"] . "</td><td>"
                . $row["model"]. "</td><td>" . $row["km_stand"]. "</td><td>" . $row["klant_ID"]. "</td><td>" . " <img src='". $row['foto'] ."' alt=''> </tr>";
        }
        echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>

