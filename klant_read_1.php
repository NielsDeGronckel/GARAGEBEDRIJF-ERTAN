<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Naam</th>
        <th>Adres</th>
        <th>Postcode</th>
        <th>Plaats</th>
    </tr>
<?php

$conn = new mysqli("localhost", "root", "", "garage");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

$sql = "SELECT ID, naam, adres, postcode, plaats FROM klant";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["naam"] . "</td><td>"
            . $row["adres"]. "</td><td>" . $row["postcode"]. "</td><td>" . $row["plaats"]. "</td></tr>";
    }
    echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>


<!-- echo "<tr><th>ID</th><th>Naam</th><th>Adres</th><th>Postcode</th><th>Plaats</th></tr>";
        echo "<tr><td>" . $row["ID"] . "</td>";
        echo "<tr><td>" . $row["naam"] . "</td>";
        echo "<tr><td>" . $row["adres"] . "</td>";
        echo "<tr><td>" . $row["postcode"] . "</td>";
        echo "<tr><td>" . $row["plaats"] . "</td></tr>"; -->