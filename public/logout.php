
<?php
require_once "./registration/config.php";
//Lorsque l’utilisateur clique sur le lien de déconnexion, le script à l’intérieur de ce fichier détruit la session 
//et redirige l’utilisateur vers la page de connexion.
$title = "Se déconnecter" ;?>
<?php

session_start();
session_destroy();
header("location:" . BASE_URL . "/index.php");
?>