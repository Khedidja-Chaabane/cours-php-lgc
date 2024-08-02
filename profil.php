<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
<?php 
session_start();

    if(isset($_SESSION['password'] )&& $_COOKIE['mail']){
        echo "<h1>Bonjour  " .$_COOKIE['mail']. "</h1>" ;
        echo "<br />";
        echo "<h2>Mot de passe : " .$_SESSION['password']. "</h2>" ;

    }else{
        echo "Merci de se connecter";
    }
    ?>
    
</body>
</html>