<?php
// Informations d'identification
// constante en PHP
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'registration');
// Connexion à la base de données MySQL 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Vérifier la connexion
if($link === false){
die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>

