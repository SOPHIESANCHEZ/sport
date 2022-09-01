
<?php 
        // 1-A) JE VEUX RECUPERER un paramètre
            // a) stocker mon paramètre dans une variable
            $id = $_GET["id"];
            $link = mysqli_connect("localhost", "root", "", "sport");  
            // je crée ma requete de suppression par rapport à mon id que j'aurai en paramètre ($_GET)
            $sql = "DELETE FROM utilisateurs WHERE id = $id";
            //J' Execute ma requete
            if(mysqli_query($link,$sql))
            //Si ma requete est executée alars redirection
            {
              header("location: user.php?del=1") ;
            }else{
              header("location: user.php?del=0");
            }
?>
 