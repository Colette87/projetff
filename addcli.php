<!DOCTYPE html>
<html lang="en">
<table>
<head>
    <meta charset="UTF-8">
    <title>title</title>
</head>
<br>
<body>


<?php
echo $_POST["nom"]."<br>";
echo $_POST["prenom"]."<br>";
echo $_POST["dn"]."<br>";

include 'parametre.php';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$dn = $_POST['dn'];
$sql= "INSERT INTO client (nom, DateNaissance, prenom) VALUES ('$nom', '$dn', '$prenom')";
$result = $conn->query($sql);
?>



</body>
</table>
</html>