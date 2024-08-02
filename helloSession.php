<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
session_start();

    if(isset($_SESSION['prenom'])){
        echo "<h1>Bonjour " . $_SESSION['prenom'] . "</h1>" ;
        session_unset();
    }else{
        echo "Merci d'aller sur une session";
    }
    ?>
    
   
</body>
</html>