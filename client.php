<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>title</title>
</head>
<br>
<a>
    <table>
<?php

include 'parametre.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT idcli, nom, prenom FROM client";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {

echo "id: " . $row["idcli"] . " - Name: " . $row["nom"]. " " . $row["prenom"]. "<br>";
echo '<a href="compte.php?idcli=' . $row["idcli"] . '" > Afficher compte </a>' . "<br>";
echo '<a href="addcompte.php?idcli=' . $row["idcli"] . '" > Ajouter un compte </a>' . "<br>";
}
} else {
echo "0 results";
}
$conn->close();

?>
        <br><a href="index.php" > Retour </a><br>

</table>
</body>
</html>
