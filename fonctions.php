<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //passage par valeurs
    function ajouter_cinq($nombre){
        $nombre += 5 ;
        return $nombre ;
    }
    $mon_entier = 15 ;
    echo $f = ajouter_cinq($mon_entier); //20
    echo "<br/>"; 
    echo $m = ajouter_cinq($f); //25
    echo "<br/>"; 
    function ajouter_nb($nombre, $ajout=10 , $nom= "Max"){   //fonction avec parametre par defaut
        echo $nom ;
        $nombre += $ajout ;
        return $nombre ;
        
    }
    echo $f2 = ajouter_nb($mon_entier); // affiche max 25    

    echo "<br/>"; 

    //fonction doublée
    //passage par référence
function doubler(&$a){
    $a = $a * 2 ;
    echo " la valeur de a est : $a";
    echo "<br/>"; 
}

// variables globales avec global

function incrementCounter(){
    global $counter ;
    $counter ++ ;
}
$b = 5 ;
 incrementCounter();
 echo $counter ;
 echo "<br/>"; 
 $counter = 35 ;
 echo $counter ;
 echo "<br/>"; 
echo " la valeur de b est : $b"; 
echo "<br/>";  
doubler($b);
echo " la valeur de b est : $b";  
echo "<br/>"; 
    ?>

    
</body>
</html>