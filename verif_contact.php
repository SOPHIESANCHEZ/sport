
<?php
$link = mysqli_connect("localhost", "root", "", "sport");
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$sujet = $_POST["objet"];
$message = $_POST["message"];

// VERIF CONNECTION BDD
if(mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
}
$sqli = "SELECT * FROM utilisateurs";
$sql = "INSERT INTO utilisateurs (nom, prenom, tel, email, sujet, message) VALUES ('$nom', '$prenom', '$tel', '$email', '$sujet', '$message')";
 
if(!empty($nom) || !empty($prenom) || !empty($email) || !empty($tel) || !empty($sujet) || !empty($message)) {
    if(mysqli_query($link, $sql)){
        header("location:contact.php?add=1");
    }
}   
else{
    header("location:contact.php?add=0");
}
var_dump($_POST);

//INSERT INTO utilisateurs(

//nom,
//prenom, 
//telephone, 
//sujet,
//message) VALUES (

    //'doe', 
    //'john', 
    //0634254323, 
    //'usfusjkej@yahoo.fr', 
    //'jdshfks', 'ygddgyegd'
//);



//while($row = mysqli_fetch_assoc($results));
//foreach ($results as $result) 
//{
    //var_dump($results);
//}
//echo ($row["nom"] . $row["prenom"]);

//var_dump($result);
//var_dump($row);
//foreach ($tableau as $valeur) {
   // echo ($valeur . "\n");
//}

?>

