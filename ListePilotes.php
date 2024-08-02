<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des pilotes</title>
</head>
<body>
   <h1>Liste des pilotes</h1> 
   <?php

$connect = mysqli_connect("localhost", "root", ""); // connexion à la bdd
mysqli_select_db($connect, "airbase"); 

$sql = mysqli_query($connect, "SELECT * FROM PILOTES"); // requete sql

while($data = mysqli_fetch_array($sql)){
    echo  $data['NumPil'] . " " . $data['NomPil'] . " " . $data['NaisPil'] . " " . $data['VillePil']  ;    echo '<br/>';

    echo '<br/>';
}
  
    $connect->close(); // close connection
    ?>
</body>
</html>