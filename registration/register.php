<?php
$utilisateur = $_POST["utilisateur"];
$password = $_POST["password"];
$link = mysqli_connect("localhost", "root", "", "sport");



$sql = "INSERT INTO registration (utilisateur, password) VALUES ('$utilisateur', '$password')";


if(empty($utilisateur) || empty($password)){
    echo "erreur de saisie";
    header("location:login.php?add=0");  
}
else{
    echo "erreur champs vide";
    if(mysqli_query($link, $sql)) {
        echo "Félicitation" .$utilisateur. "vous êtes connecté";
        header("location:./index.php?add=1");
    }
    else{
        echo "erreur de saisie";  
    }
}
?>