<?php
function repondre_oui_non ($phrase) {
    while (true) {
        $reponse = readline($phrase . " - (o)ui/(n)on");
            if ($reponse === "o") {
                return true;
            } elseif ($reponse === "n") {
                return false;
            } 


    }
}

function demander_creneau ($phrase = 'Veuillez entrer votre creneau') {
    echo $phrase . "\n";
    while (true) {
    $ouverture = (int)readline('heure d\'ouverture : ');
    if ($ouverture >= 0 && $ouverture <= 23) {
        break;
    }
    }
    while (true) {
        $fermeture = readline('heure de fermerture : ');
        if ($fermeture >= 0 && $fermeture <= 23 && $fermeture >$ouverture) {
            break;
        }
    }
    return [$ouverture, $fermeture];
}

function demander_creneaux ($phrase = 'Veuillez entrez vos creneaux') {
    $creneau = [];
    $creneaux[] = demander_creneau();
    while ($continuer) {
        $continuer = true;
        $continuer = repondre_oui_non('Voulez vous continuer ?');
    }
    return $creneaux;
}

$creneaux = demander_creneau ('Entrez vos creneaux');
var_dump($creneau);
    
//$resultat = repondre_oui_non('voulez vous continuer ?');
//si l'utilisateur tape "o" => true
//si l'utilisateur tape "n" => false
$creneau = demander_creneau();
$creneau2 = demander_creneau('Veuillez entrer votre creneau');
var_dump($creneau, $creneau2);

<?php
function add_menus(array $class_items, array $class_links =[""], array $link_urls=[""], array $titles =[""])
{
    $class_items = implode(" ", $class_items);
    $class_links = implode(" ", $class_links);
    foreach ($titles as $titles){
   
    return <<<HTML
    <li class="$class_items">
    <a class="$class_links" href="$link_urls">$titles</a>
</li>
HTML;
}
}
?>
$sql = "SELECT * FROM utilisateurs";

var_dump($result);
    $row = mysqli_fetch_assoc($result); 
    var_dump($row);
    ?>
     <?php  if (isset($_GET['id']) && ($_GET['id']) === $id) : ?>

        <?php endif; ?>
        //je dois donc creer une variable avec la methode mysqli_fetch_assoc avec $result en parametre
        « DELETE FROM user WHERE user.id =ICI LE NUMERO DE L'ID A SUPPRIMER»
a la place de user.id vous pouvez mettre user.nom par exemple afin de supprimer toute les personne qui ont le meme nom  (si vous souhaitez faire disparaitre une famille

<?php  if (isset($_GET['id']) && ($_GET['id']) === $id) : ?>

    <?php endif; ?>