<?php
  include "./model/Connection.php";
  $query = $bd->query("SELECT * FROM vuelo");
  $flyData = $query->fetchAll(PDO::FETCH_OBJ);
  $query = $bd->query("SELECT * FROM datos");
  $userData = $query->fetchAll(PDO::FETCH_OBJ);
?>