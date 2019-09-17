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

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn = new mysqli($servername, $username, $password, $dbname);
$sql= "INSERT INTO `client` (`idcli`, `nom`, `DateNaissance`, `prenom`) VALUES (NULL, 'nom', 'dn', 'prenom')";
$result = $conn->query($sql);


?>



</body>
</table>
</html>