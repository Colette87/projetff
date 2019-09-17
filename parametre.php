<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>title</title>
</head>
<br>
<a>

<?php


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


?>

</body>
</html>
