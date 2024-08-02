<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $temps = 3600*24*365 ;
    setcookie("pseudo" , "Toto", time()+$temps);
    ?>
</body>
</html>