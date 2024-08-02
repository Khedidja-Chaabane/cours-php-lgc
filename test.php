<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
//les conditions
    //condition if
   // $a = 10 ;
   // if($a < 10){
       // echo "hello";
    //}
    //else{
      //  echo"goodbye";
   // }

////////////////////////////////////////////////////////////
//switch case
//$note = 3;
//switch($note){
   // case $note >= 18 : echo "super note"; break;
  //  case $note >= 15 : echo "bien";break;
   // case $note >=12 : echo "passable"; break;
   // case $note >10 : echo "okay"; break;
  //  default: echo "Echec !";
//}
/////////////////////////////////
//les boucles
//la boucle while
$i=0;
while($i<5){
    echo "hello world ! $i";
    $i++;
    echo "<br/>";
}

//la boucle for
for($i=0; $i<5; $i++){
    echo "hello world! $i";
    echo "<br/>";
}
///////
$s = 0;
for($i=0 ; $i<100 ; $i++){
    $s = $s+$i ; //la somme de $s avec l'indice i
    echo "<br/> La somme des entiers de 1 à 100 est de $s";
}
//break et continue
//si on met une condition if ($s = 666) par exemple suivie d'un break, la boucle s'arrete avant d'arriver à 666
// si on met un continue , le 666 sera sauté et on passe au suivant

////////////////////////////////////// 

// la boucle do while pour le controle de saisie

    ?>
</body>
</html>