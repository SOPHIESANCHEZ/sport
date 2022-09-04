<?php

//allons créer une page de connexion où l’utilisateur peut entrer son nom d’utilisateur et son mot de passe. 
//Lorsque l’utilisateur soumettra le formulaire, ces entrées seront vérifiées par rapport aux informations d’identification stockées 
//dans la base de données. Si le nom d’utilisateur et le mot de passe correspondent, l’utilisateur est autorisé et se voit accorder 
//l’accès au site, sinon la tentative de connexion sera rejetée.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>connexion</title>
</head>
<body>
<h1 class="mt-5 text-center">formulaire de connexion</h1>
<div class="container d-flex justify-content-center text-center">
<form class="form_user mt-5" method="POST" action="">
    <div class="form-group">
        <label for="nom">Nom d'utilisateur</label>
        <input type="text" name="utilisateur" placeholder="johnedoe" class="form-control mr-5" value="">
    </div>
    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" placeholder="password" class="form-control" value="">
    </div>
    <div class="form-group">
        <input type="submit" value="Se connecter" class="btn btn-danger">
    </div>
</form>
</div>
</body>
</html>
