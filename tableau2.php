
<?php
$link = mysqli_connect("localhost", "root", "", "sport");
$sql = "SELECT CONCAT(prenom, ' ', nom) AS identity FROM utilisateurs ORDER BY nom";

$querys = mysqli_query($link, $sql);
?>


<table class="table table-dark">
  <thead>
    <tr>
      <!--<th scope="col">id</th>-->
      <th scope="col">identite</th>
     
    </tr>
  </thead>
<?php foreach ($querys as $k=>$row) : ?> 
  <tbody>
    <tr>

      <th scope="row"><?php echo $row["identity"]?>
      
      </th>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>
