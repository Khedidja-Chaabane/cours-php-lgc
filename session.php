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
    $_SESSION['prenom'] = "Alex";
    echo $_SESSION['prenom'];
    ?>

    <a href="/coursPHP/helloSession.php">Lien vers helloSession</a>
</body>
</html>