
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
    <?php 
    $link = mysqli_connect("localhost", "root", "", "sport");
    $id = $_GET["id"];
    $sql = "SELECT * FROM utilisateurs WHERE id = $id";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
   ?>
<?php 
//je relie ma page à base de donnée grace à  mysqli_connect ($link)
//Je creer ma requete $sql, je lui demande ce que je veux, dans quel endroit (SELECT....FROM)
//mysqli_query permet d'executer une requete sur la base de donnée  ($results)
//donc apres avoir creer ma requete, je dois l'executer  ($results)
                    //A FAIRE
        //pour le prochain ex je dois afficher le seul utilisateur cliqué avec ses infos sur la page userseul
        //si je clique sur un utilisateur alors tu me l'affiche sur l'autre page
        //il faudra utiliser mysqli_fetch_assoc qui permet de renvoyer à un tableau associatif 
        //et de cibler une ligne en particulier (ici $result)
        //je dois donc creer une variable avec la methode mysqli_fetch_assoc avec $result en parametre
        ?>
        
        <h1 class="mt-5 text-center">Modification</h1>
        <div class="container d-flex justify-content-center text-center">
        <form class="form_user mt-5" method="POST" action="update.php">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control mr-5" value="<?php echo htmlspecialchars($row["email"], ENT_QUOTES, 'UTF-8') ?>">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" class="form-control" value="<?php echo htmlspecialchars($row["password"], ENT_QUOTES, 'UTF-8') ?>">
            </div>
            <div class="form-group">
                <a href="user.php"><input type="button" value="Retour Liste" class="btn btn-danger"></a>
                <input type="submit" name="modifier" value="Modifier" class="btn btn-success">

            </div>
        </form>
        </div>
      <?php 
      //Je renvoi mon result à une autre page grace au lien vers cette autre page
      //le ?id me permet de cibler mon GET sur mon url en passant par mon id (?id)
      //Ici je permet donc d'abord à mon result d'etre cliquable
      ?>
      
   
</body>
</html>


