<?php
  include "./templates/header.php";
  include "./templates/Footer.php";
  include "./controllers/getData.php";

  $idUser = $_GET["id"];
  //user data
  $query = $bd->prepare("SELECT * from datos where id = ?");
  $query->execute([$idUser]);
  $user = $query->fetch(PDO::FETCH_OBJ);

  //fly data
  $query = $bd->prepare("SELECT * from vuelo where id = ?");
  $query->execute([$idUser]);
  $fly = $query->fetch(PDO::FETCH_OBJ);
  ?>

  <div class="container" style="display: flex;">
    <div class="sub-container">
      <h3>User Information</h3>
      <div style="display: flex;">
        <label>Name:</label>
        <label class="display-label"><?php echo $user->name?></label>
      </div>
      <div style="display: flex;">
        <label>Age:</label>
        <label class="display-label"><?php echo $user->age?></label>
      </div>
      <div style="display: flex;">
        <label>Nacionality:</label>
        <label class="display-label"><?php echo $user->nacionality?></label>
      </div>
      <div style="display: flex;">
        <label>Passport:</label>
        <label class="display-label"><?php echo $user->passport?></label>
      </div>
    </div>
    <div class="sub-container">
      <h3>Fly Information</h3>
      <div style="display: flex;">
        <label>Fly Origin:</label>
        <label class="display-label"><?php echo $fly->flyOrigin?></label>
      </div>
      <div style="display: flex;">
        <label>Origin Date:</label>
        <label class="display-label"><?php echo $fly->originDate?></label>
      </div>
      <div style="display: flex;">
        <label>Fly Destination:</label>
        <label class="display-label"><?php echo $fly->flyDestination?></label>
      </div>
      <div style="display: flex;">
        <label>Destination Date:</label>
        <label class="display-label"><?php echo $fly->destinationDate?></label>
      </div>
      <div style="display: flex;">
        <label>Price:</label>
        <label class="display-label"><?php echo "$ ".$fly->price?></label>
      </div>
      <div style="display: flex;">
        <label>Fly Number:</label>
        <label class="display-label"><?php echo $fly->flyNumber?></label>
      </div>
    </div>
    
  </div>



  <a href="./Edit.php?id=<?php echo $idUser?>"><button class="edit-button">Edit</button></a>
  <a href="./controllers/Delete.php?id=<?php echo $idUser?>"><button class="delete-button" >Delete</button></a>





