<?php
  include '../model/Connection.php';

  $id = $_GET["id"];
  echo $id;
  $query = $bd->prepare("DELETE FROM datos WHERE id = ?");
  $userResult = $query->execute([$id]);  
  $query = $bd->prepare("DELETE FROM vuelo WHERE id = ?");
  $flyResult = $query->execute([$id]);  

  
  if($userResult && $flyResult){
    header("Location: ../index.php");
  }else{
    echo "Fallo en actualizacion de datos .";
  }


?>