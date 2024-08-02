<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $connect = mysqli_connect("localhost", "root", ""); // connexion à la bdd
    mysqli_select_db($connect, "airbase"); 

    $sql = mysqli_query($connect, "SELECT * FROM CLIENTS"); // requete sql
   // print_r($sql);
   //traitement des données

  // while($data = mysqli_fetch_array($sql)){
    //echo $data['NumCl'] . " " . $data['NomCl'] . " " . $data['VilleCl'];
   // echo '<br/>';
 //  }

 //$sql = mysqli_query($connect , "INSERT INTO CLIENTS VALUES (5 , 'Marc' , 51 , 'Rue Gaston Leroux' ,93100 , 'Montreuil')");

if($connect -> query($sql) == true){
    echo "Nouvelle donnée ajoutée";
}else{
    echo "Error".$sql . "<br/>" . $connect-> error;
}
  
    $connect->close(); // close connection
    ?>
</body>

</html>