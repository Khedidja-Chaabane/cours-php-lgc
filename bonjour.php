<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    <?php 
    //echo 'Bonjour généré dynamiquement en PHP'
    // phpinfo(); // pour avoir des infos sur la version de php
    //echo $_SERVER['HTTP_USER_AGENT']; // pour la détection du navigateur et du système d'exploitation utilisé
   // echo "salut" . " le monde" ; // la concaténation se fait avec un point en php
  // $a = 10 ;  // déclaration de la variable 
  // print($a); // affichage de la variable
  // echo("<br/>");
  // $a = "bonjour";
  // print($a);
  // echo("<br/>");
 //  print(isset($a)); // isset et empty pour verifier si une variable est difinie ou pas
 //  echo("<br/>");
//$b;
//print(isset($b));

$k = "sohil !";  //les doubles quotes interpretent la chaine de caracteres et les variables
$j = "bonjour $k";
print($j);
echo("<br/>");

$m = "sohil" ;
$f = 'bonjour $m' ;  // les simples quotes comprennent tout comme une chaine de caracteres
print($f);

echo("<br/>");

$p= "bonjour";
$o = $p . " " . $m ; //concaténer 2 variables
print($o);
    ?>
    </p>
</body>
</html>