<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traitement</title>
</head>
<body>
   <!-- <h1>helloooooo</h1> 
   <h2>
   <?php 
   echo "Ton pseudo est" . $_GET['username'] ;
   ?>
   </h2>
<br>
   <p>
   <?php 
   echo "Ton heure de départ est " . $_GET['depart'] ;
   ?>
   </p> -->

   <!-- exercice -->
   <h2>
   <?php 
   
   echo $_POST['nom'] . " " . $_POST['prenom'] . "<br>" ;
   $mail =  $_POST['email'];
if (str_contains($mail, '.fr')) {
    echo "Meri d'avoir choisi un hebergeur français";
}else{
    echo "Veuillez reprendre un hebergeur français"; 
}
?>
   
   </h2>
</body>
</html>