<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //création de ma variable de connexion
    $connect = mysqli_connect("localhost", "root", "");
    // connexion à la bdd
    mysqli_select_db($connect, "airbase");

    $sql = mysqli_query($connect, "INSERT INTO AVIONS VALUES (" . $_POST['NumAv'] . "," . "'" . $_POST['NomAv'] . "',"
        .  $_POST['CapAv'] . "," . "'" .  $_POST['VilleAv'] . "'" . ")");


    $connect->close();

    ?>
    <form action="avions.php" method="post">
        <label for="">Entrez une ville</label>
        <input type="text" name="Ville">
        <input type="submit" value="Rechercher">
    </form>

</body>

</html>