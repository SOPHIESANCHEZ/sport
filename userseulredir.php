
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<body>
    <?php 
    $link = mysqli_connect("localhost", "root", "", "sport");
    $id = $_GET["id"];
    $sql = "SELECT id, nom, prenom, email FROM utilisateurs WHERE id = $id";
    $results = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($results);
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
      <?php if(empty($row["id"]))
      //header("location:index.php?add=0");
      echo "cette personne n'existe pas";
      
      ?>
  <tbody>
    <tr>
    <th scope="row"><?php echo $row["nom"]?></th>
    <th scope="row"><?php echo $row["prenom"]?></th>
    <th scope="row"><?php echo $row["email"]?></th>
    
      <?php 
      //Je renvoi mon result à une autre page grace au lien vers cette autre page
      //le ?id me permet de cibler mon GET sur mon url en passant par mon id (?id)
      //Ici je permet donc d'abord à mon result d'etre cliquable
      ?>
      
    </tr>
  </tbody>

</table>
</body>
</html>


