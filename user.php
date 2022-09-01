
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
    //$id = $_GET["id"];
    $sql = "SELECT * FROM utilisateurs";
    $results = mysqli_query($link, $sql);
   ?>
<?php 
//je relie ma page à base de donnée grace à  mysqli_connect ($link)
//Je creer ma requete $sql, je lui demande ce que je veux, dans quel endroit (SELECT....FROM)
//mysqli_query permet d'executer une requete sur la base de donnée  ($results)
//donc apres avoir creer ma requete, je dois l'executer  ($results)
?>   

        <table class="table">
          <thead>
            <tr>
            <th scope="col" class="table-dark">ID</th>
              <th scope="col" class="table-dark">NOM</th>
              <th scope="col" class="table-dark">PRENOM</th>
              <th scope="col" class="table-dark">TEL</th>
              <th scope="col" class="table-dark">EMAIL</th>
              <th scope="col" class="table-dark"></th>
              <th scope="col" class="table-dark"></th>
            </tr>
          </thead>

  <?php if (isset($_GET["del"])) : ?>
            <?php if ($_GET["del"] == 1) : ?>
                <div style="background-color:green" class="alert alert-succes">L'utilisateur a été supprimé</div>
            <?php elseif ($_GET["del"] == 0) : ?>
                <div style="background-color:red" class="alert alert-danger">L'utilisateur n'a pas été supprimé</div>
            <?php endif; ?>
        <?php endif; ?>
  <?php 
//si il y a une valeur dans mon get (url) ==1 alors success
//sinon ==0 alors danger
//c'est une condition imbriquée
//isset Détermine si une variable est considérée définie, ceci signifie qu'elle est déclarée et est différente de null.

//la supervariable $_GET estCeci est une 'superglobale', ou variable globale automatique. 
//Cela signifie simplement que cette 
//variable est disponible dans tous les contextes du script. Il n'est pas nécessaire de faire global $variable; 
//pour y accéder dans les fonctions ou les méthodes.
  ?>
        <?php foreach ($results as $result) : ?>
        <?php 
        //la bloucle foreach permet de parcourir un tableau et d'aller y chercher des index specifique
        // ici elle va parcourir ma table utilisateurs grace à l'appel de ma requete ($results)
        //traduction, pour chaque execution de ma requete tu me renvoi le resultat de ma row donc mon result au singulier
        //ca m'affiche donc tout mon tableau
        ?>
  <tbody>
    <tr>
      <th scope="row"><a href="userseul.php?id=<?php echo $result["id"]?>"><?php echo $result ["nom"]?></a></th>
      <?php 
      //Je renvoi mon result à une autre page grace au lien vers cette autre page
      //le ?id me permet de cibler mon GET sur mon url en passant par mon id (?id)
      //Ici je permet donc d'abord à mon result d'etre cliquable
      ?>
      <th scope="row"><?php echo $result["nom"] ?> </th>
      <th scope="row"><?php echo $result["prenom"] ?> </th>
      <th scope="row"><?php echo $result["tel"] ?> </th>
      <th scope="row"><?php echo $result["email"] ?> </th>
      <th scope="col"><button class="btn btn-secondary">
        <a class="supprimer text-white" href='del_user.php?id=<?php echo $result["id"]?>'>Supprimer</a>
      </button>
    </th>
    <th scope="col"><button class="btn btn-secondary">
        <a class="modifier" href='update.php?id=<?php echo $result["id"]?>'>Modifier</a>
      </button>
    </th>
    </tr>
  </tbody>
  <?php endforeach; ?>
  <?php 
  //je n'oublie pas de fermer ma boucle avant la fin de mon tableau
  ?>
</table>
</body>
</html>



