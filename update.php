<?php 
        // 1-A) JE VEUX RECUPERER un paramètre
            // a) stocker mon paramètre dans une variable
            $id = $_POST["id"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $link = mysqli_connect("localhost", "root", "", "sport");  
            // je crée ma requete de modification par rapport à mon id que j'aurai en paramètre ($_GET)
            $sql = "UPDATE utilisateurs SET email = '$email', password = '$password' WHERE id = '$id'";
            //J' Execute ma requete
            if(mysqli_query($link,$sql))
            //Si ma requete est executée alars redirection
            {
              echo "modification réussie";
              header("location: user.php?up=1");
            }else{
              echo "échec";
              header("location: user.php?up=0");
            }
?>
 