<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>title</title>
</head>
<br>
<body>
<table>
<?php

include 'parametre.php';



if(isset($_GET['idcli'])) {
    $idc=$_GET['idcli'];
}else{
    $idc=1;
}


if(isset($idc)) {



// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT idcli, numcpte, solde FROM compte WHERE idcli=" . $idc;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo"<tr>";
        echo"<th>" . "Identification Client" . "</th><th> " . "Numéro Compte" . "</th><th>" . "Solde" . "</th>";
        echo"</tr>";

// output data of each row
        while ($row = $result->fetch_assoc()) {

            echo('<tr>');
            echo "<td>" . $row["idcli"] . "</td><td> " . $row["numcpte"] . "</td><td>" . $row["solde"] . "<td>";
        }
        echo("</tr>");
    } else {
        echo "0 results";
    }
    $conn->close();
} else {
    echo "utilisation incorrecte";
}
echo "<br>";
echo '<a href= "compte.php" > Ajouter un compte </a>' . "<br>";
?>
</table>
</body>
</html>