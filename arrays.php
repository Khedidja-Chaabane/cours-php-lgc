<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $legumes = array('oignon', 'carottes', 'aubergine' , 'courgette');
    //afficher le 3eme element de mon array
    //echo $legumes[2];
    echo "<br/>";

    //afficher tout les elements du tableau
    $legumes_length = count($legumes);
    for($i=0 ; $i<$legumes_length ; $i++){
        echo $legumes[$i];
        echo "<br/>";
    }

    //exo

    $prenoms = array('Maurice','Jean', 'Pierre', 'Paul' , 'Gérard');
    $prenoms_length = count($prenoms);
    for($i=0 ; $i<$prenoms_length ; $i++){
        echo "<h1>$prenoms[$i]</h1>";
    }

    //tableau associatif

    $tab = array('prenom'=> "Cyril", 'ville'=> "Paris", 'travail'=>"Clown");
    foreach($tab as $key=>$value){
        echo "$key : $value . <br>" ;
    }

    //recherche dans un tableau
    if(in_array('Pierre', $prenoms)){
echo "Pierre est présent" ;
    } else{
        echo "Pierre est absent" ;
    }
    echo "<br/>";
    ?>
   
</body>
</html>