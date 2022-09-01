
<?php
$link = mysqli_connect("localhost", "root", "", "sport");

//$sql = "SELECT * FROM blog ORDER BY date DESC LIMIT 4";
//$sql =  "SELECT * FROM utilisateurs WHERE nom LIKE '%l%' ";
//$sql = "SELECT * FROM utilisateurs WHERE id BETWEEN 2 AND 5";
//$sql = "SELECT CONCAT(prenom, ' ', nom) AS identity FROM utilisateurs WHERE (nom ='sanchez' AND prenom ='sophie') OR (nom ='BERGEROT' AND prenom ='LUCAS')";
//$sql = "SELECT CONCAT(prenom, ' ', nom) AS identity FROM 'utilisateurs' WHERE prenom IN ( 'lucas'. 'sophie'. 'john' );
$query = mysqli_query($link, $sql);
?>

<table class="table table-dark">
  <thead>
    <tr>
     <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">email</th>
    </tr>
  </thead>
<?php while ($row = mysqli_fetch_assoc($query)) : 
var_dump($row);
?>
   
  <tbody>
    <tr>
    <th scope="row"><?php echo $row["identity"] ?> 

      </th>
    </tr>
  </tbody>
  <?php endwhile; ?>
</table>
