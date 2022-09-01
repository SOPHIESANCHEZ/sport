
<?php

$link = mysqli_connect("localhost", "root", "", "sport");
$sql = "SELECT * FROM securite";
$result = mysqli_query($link, $sql);

?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>bla</td>
      <td>bla</td>
      <td>bla</td>
    </tr>
    <tr>
