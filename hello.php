<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello</title>
</head>
<body>
    <?php 
    
    if(isset($_COOKIE['pseudo'])){
        echo "Bonjour ". $_COOKIE['pseudo']  ;
    }
    else{
        echo "Cookie non déclarée";
    ?>
    <form action="traitCookie.php" method="post">
        <label for="">Nom</label>
        <input type="text" name="nom">
        <input type="submit" value="Envoyer">
    </form>
    <?php 
}
?>
</body>
</html>