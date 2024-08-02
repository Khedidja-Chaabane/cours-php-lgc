<?php 

if(isset($_POST['nom'])){   // verifier si pseudo a eté envoyé via le formulaire
    $temps= 3600*24*365; // definition du teps en millisecondes
    setcookie("pseudo", $_POST['nom'], time()+$temps); // definition du cookie et sa sauveagrde sur le navigateur

    function redirection($url){   // fonction de redirection  vers un url

        if(headers_sent()){  // si l'entete est envoyée (envie de changer de page)
            print('<meta http-equiv="refresh" content="0; URL= '. $url .'>');
        }
        else{
            header("location:$url");
        }
    }
    redirection("hello.php"); // appel à la fonction redirection sur le fichier mentionné
}
else {
    echo "La variable du formulaire hello.php n'est pas déclarée";
}

?>