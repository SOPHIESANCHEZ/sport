<?php
$email = $_POST["email"];
$password = $_POST["password"];
$link = mysqli_connect("localhost", "root", "", "sport");

$password_hash = password_hash($password, PASSWORD_DEFAULT);

var_dump ($password_hash);

$sql = "INSERT INTO utilisateurs (email, password) VALUES ('$email', '$password_hash')";


if(empty($email) || empty($password)){
    echo "erreur de saisie";
    header("location:formulaire_user.php?add=0");  
}
else{
    echo "erreur champs vide";
    if(mysqli_query($link, $sql)) {
        echo "enregistrer";
        header("location:formulaire_user.php?add=1");
    }
    else{
        echo "erreur de saisie";  
    }
}
?>