<?php
  if(empty($_POST["inputName"]) || empty($_POST["inputAge"]) || empty($_POST["inputNacionality"]) || empty($_POST["inputPassport"]) || empty($_POST["inputOrigin"]) || empty($_POST["inputOriginDate"]) || empty($_POST["inputDestination"]) || empty($_POST["inputDestinationDate"]) || empty($_POST["inputPrice"]) || empty($_POST["inputFlyNumber"])){
    echo "Error, complete el formulario.";
    exit();
  }

  $id = $_POST["id"];
  $name = $_POST["inputName"];
  $age = $_POST["inputAge"];
  $nacionality = $_POST["inputNacionality"];
  $passport = $_POST["inputPassport"];
  $origin = $_POST["inputOrigin"];
  $originDate = $_POST["inputOriginDate"];
  $destination = $_POST["inputDestination"];
  $destinationDate = $_POST["inputDestinationDate"];
  $price = $_POST["inputPrice"];
  $flyNumber = $_POST["inputFlyNumber"];

  require "../model/Connection.php";
  $query = $bd->prepare("UPDATE datos SET name = ?, age = ?, nacionality = ?, passport = ? WHERE id = ?");
  $dataResult = $query->execute([$name, $age, $nacionality, $passport, $id]);

  $query = $bd->prepare("UPDATE vuelo SET flyOrigin = ?, originDate = ?, flyDestination = ?, destinationDate = ?, price = ?, flyNumber = ?  WHERE id = ?");
  $flyDataResult = $query->execute([$origin, $originDate, $destination, $destinationDate, $price, $flyNumber, $id]);

  if($dataResult && $flyDataResult){
    header("Location: ../index.php");
  }else{
    echo "Fallo en el registro";
  }




?>