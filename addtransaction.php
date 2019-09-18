
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
include 'parametre.php';
echo"Ajout transaction";

include 'parametre.php';
if(isset($_POST['idcpte'])){ // Le formulaire a-t-il été utilisé ?
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $t = $_POST[''];
    $m = $_POST['m'];
    $numcpte = $_POST['nc'];
    $idcpte = $_POST['idcpte'];
    $sql= "INSERT INTO transaction (type, montant, numerocompte, idcpte) VALUES ('$t', '$m', '$numcpte', 'idcpte')";
    $result = $conn->query($sql);

    // echo retour liste compte du client
    echo '<a href="compte.php?idcli=' . $idcli . '" > Afficher compte </a>' . "<br>";

} else { // On vient de l'url des infos du client
    ?>

    <form action="addtransaction.php" method="POST">
        <tr>
            <td>identification compte:</td><td><input name="idcpte" value=" <?php echo $_GET['idcpte']; ?>" readonly/></td>
        </tr>
        <tr>
            <td>Numéro de compte:</td><td><input name="nc"/></td>
        </tr>
        <tr>
            <td>Type:</td><td><input name="si"/></td>
        </tr>
        <tr>
            <td>Montant:</td><td><input name="m"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="envoyer"></td>
        </tr>


    </form>

    <?php
}

?>


?>

</body>
</table>
</html>