<?php 
session_start();
$_SESSION['password'] = $_POST['password'];ssssdx      dxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

if(isset($_POST['email'])){   
    $temps= (3600 * 24 * 365) * 2; // definition du teps en millisecondes
    setcookie("mail", $_POST['email'], time()+$temps); // definition du cookie et sa sauveagrde sur le navigateur

    function redirection($url){   // fonction de redirection  vers un url

        if(headers_sent()){  // si l'entete est envoyée (envie de changer de page)
            print('<meta http-equiv="refresh" content="0; URL= '. $url .'>');
        }
        else{
            header("location:$url");
        }
    }
    redirection("profil.php"); // appel à la fonction redirection sur le fichier mentionné
}
else {
    echo "Erreur";
}

//echo $_COOKIE['mail'];
//echo $_SESSION['password'];
?>