<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Connexion à la base de données
    $connexion = mysqli_connect("localhost" , "root","");
    mysqli_select_db($connexion , "airbase");

    //préparation de la requete
    $req = "SELECT * FROM CLIENTS WHERE NomCl =  ? ";  

    $stmt = mysqli_prepare($connexion , $req);

    $varNom = "Dupond";

    mysqli_stmt_bind_param($stmt, 's' , $varNom);

    //execution de la requete

    mysqli_stmt_execute($stmt);

    //affichage
    mysqli_stmt_bind_result($stmt , $clients);
  

    while(mysqli_stmt_fetch($stmt)){
        echo $clients ;
        echo "<br/>" ;
    }
$connexion -> close();
    ?>
</body>
</html>