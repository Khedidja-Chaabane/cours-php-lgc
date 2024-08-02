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

    $sql = mysqli_query($connect, "INSERT INTO Pilotes VALUES (" . $_GET['NumPil'] . "," . "'" . $_GET['NomPil'] . "',"
        .  $_GET['NaisPil'] . "," . "'" .  $_GET['VillePil'] . "'" . ")");

   echo "Merci pour les informations";
   
    $connect->close();

    ?>
</body>

</html>