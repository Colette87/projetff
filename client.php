<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>title</title>
</head>
<br>
<body>

<?php
echo "test devops" . "<br>";
echo "test git" . "<br>";


if (isset( $_SERVER["WINDIR"])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gestionbancaire";

}else{

    $servername = "172.17.0.2";
    $username = "root";
    $password = "";
    $dbname = "colette";
}

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
echo "id: " . $row["idcli"]. " - Name: " . $row["nom"]. " " . $row["prenom"]. "<br>";
}
} else {
echo "0 results";
}
$conn->close();
?>
</body>
</html>
