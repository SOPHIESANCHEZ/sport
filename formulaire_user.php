
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>user</title>
</head>
<body>
<h1 class="mt-5 text-center">formulaire d'inscription</h1>
<div class="container d-flex justify-content-center text-center">
<form class="form_user mt-5" method="POST" action="verif_user.php">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="johnedoe@yahoo.fr" class="form-control mr-5" value="">
    </div>
    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" placeholder="password" class="form-control" value="">
    </div>
    <div class="form-group">
        <input type="submit" value="Envoyer" class="btn btn-danger">
    </div>
</form>
</div>
</body>
</html>

