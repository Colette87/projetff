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

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection


    $sql = "SELECT idcli, numcpte, solde FROM compte WHERE idcli=" . $_GET['idcli'];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo"<tr>";
        echo "<th>Identification <br> Client</th><th> Numéro <br> Compte</th><th>Solde</th>";
        echo"</tr>";

// output data of each row
        while ($row = $result->fetch_assoc()) {

            echo('<tr>');
            echo "<td>" . $row["idcli"] . "</td><td> " . $row["numcpte"] . "</td><td>" . $row["solde"] . "<td>";
            echo '<a href="transaction.php' . $row["idcli"] . '" > Historique transaction </a>' . "<br>";
            echo '<a href="addtransaction.php' . $row["idcli"] . '" > Ajout transaction </a>' . "<br>";
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

?>
</table>
</body>
</html>