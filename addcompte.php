
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
if(isset($_POST['idcli'])){ // Le formulaire a-t-il été utilisé ?
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $idcli = $_POST['idcli'];
    $nc = $_POST['nc'];
    $solde = $_POST['si'];
    $sql= "INSERT INTO compte (idcli, numcpte, solde) VALUES ('$idcli', '$nc', '$solde')";
    $result = $conn->query($sql);

    // echo retour liste client
    echo '<a href="compte.php?idcli=' . $idcli . '" > Afficher compte </a>' . "<br>";

} else { // On vient de l'url des infos du client
    ?>

    <form action="addcompte.php" method="POST">
        <tr>
            <td>identification client:</td><td><input name="idcli" value=" <?php echo $_GET['idcli']; ?>" readonly/></td>
        </tr>
        <tr>
            <td>Numéro de compte:</td><td><input name="nc"/></td>
        </tr>
        <tr>
            <td>Solde initial:</td><td><input name="si"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="envoyer"></td>
        </tr>


    </form>

    <?php
}

?>

</body>
</table>
</html>