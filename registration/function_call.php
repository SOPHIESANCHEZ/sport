<?php 
$query = parseQuery();
// Parse.Query définit une requête utilisée pour récupérer Parse.Objects.
// Le cas d'utilisation le plus courant consiste à rechercher tous les objets 
// qui correspondent à une requête via la findméthode. par exemple, 
// cet exemple de code récupère tous les objets de la classe myclass. 
// il appelle une fonction différente selon que la récupération a réussi ou non.

// un Parse.Query peut également être utilisé pour récupérer un seul objet dont l'id est connu, 
// via la méthode get. par exemple, cet exemple de code récupère un objet de classe myclasset id myid. 
// il appelle une fonction différente selon que la récupération a réussi ou non.
$_SESSION['crf_token'] = randomString(60);
?>