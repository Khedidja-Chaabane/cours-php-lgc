<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des avions</title>
</head>
<body>
   <h1>Liste des avions</h1> 
   <?php

$connect = mysqli_connect("localhost", "root", ""); // connexion à la bdd
mysqli_select_db($connect, "airbase"); 
$villeuser = $_POST['Ville'];
$sql = mysqli_query($connect, "SELECT * FROM AVIONS WHERE VilleAv = ". "'" . $villeuser ."'" ); // requete sql
echo "<h1> Liste des avions de la ville de </h1>" . $villeuser . ":";
while($data = mysqli_fetch_array($sql)){
    echo  $data['NumAv'] . " " . $data['NomAv'] . " " . $data['CapAv'] . " " . $data['VilleAv']  ;    echo '<br/>';

    echo '<br/>';
}
  
    $connect->close(); // close connection
    ?>
</body>
</html>