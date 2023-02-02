<?php
  include "./templates/header.php";
  include "./templates/Footer.php";
  include "./controllers/getData.php";
  include './templates/lists.php';

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

<form action="./controllers/Update.php" method="POST">
  <div class="container" style="Display:flex;">
    <div class="sub-container">
      <h3>User information</h3>
      <div style="display: flex;">
        <label>Name</label>
        <input class="form-control" type="text" placeholder="Type User Name" name="inputName" value="<?php echo $user->name?>" required>
      </div>
      <div style="display: flex;">
        <label>Age</label>
        <input class="form-control" type="text" placeholder="Type User Age" name="inputAge" value="<?php echo $user->age?>" required>
      </div>
      <div style="display: flex;">
        <label>Nacionality</label>
        <input class="form-control" type="text" placeholder="Type Nacionality" name="inputNacionality" value="<?php echo $user->nacionality?>" required>
      </div>
      <div style="display: flex;">
        <label>Passport</label>
        <input class="form-control" type="text" placeholder="Type PassPort" name="inputPassport" value="<?php echo $user->passport?>" required>
      </div>
    </div>
    <div class="sub-container">
    <h3>Fly information</h3>
      <div style="display: flex;">
        <label>Fly Origin</label>
        <!--<input class="form-control" type="text" placeholder="Type the fly country origin" name="inputOrigin0" value="" required>-->
        <select name="inputOrigin" value="<?php echo $fly->flyOrigin?>" required>
        <?php 
              $seleted = substr($fly->flyOrigin,0,6);
              foreach($country_list as $option){
                if(substr($option,0,6) == $seleted){?>
                <option value="<?php echo $option ?>" selected><?php echo $option ?></option>
                <?php
                }else{?>
                <option value="<?php echo $option ?>"><?php echo $option ?></option>
               <?php }
               } ?>
        </select>
      </div>
      <div style="display: flex;">
        <label>OriginDate</label>
        <input type="date" name="inputOriginDate"  max="2025-12-31" value="<?php echo $fly->originDate?>" >
      </div>
      <div style="display: flex;">
        <label>Fly Destination</label>
        <!--<input class="form-control" type="text" placeholder="Type the fly country destinatino" name="inputDestination" required>-->
        <select name="inputDestination" required>
            <?php 
              $seleted = substr($fly->flyDestination,0,6);
              foreach($country_list as $option){
                if(substr($option,0,6) == $seleted){?>
                <option value="<?php echo $option ?>" selected><?php echo $option ?></option>
                <?php
                }else{?>
                <option value="<?php echo $option ?>"><?php echo $option ?></option>
               <?php }
               } ?>
        </select>
      </div>
      <div style="display: flex;">
        <label>DestinationDate</label>
        <input type="date" name="inputDestinationDate" max="2025-12-31" value="<?php echo $fly->destinationDate?>" >
      </div>
      <div style="display: flex;">
        <label>Price ($)</label>
        <input class="form-control" type="text" placeholder="Type the Price" name="inputPrice" value="<?php echo $fly->price?>" required>
      </div>
      <div style="display: flex;">
        <label>Fly Number</label>
        <select name="inputFlyNumber" required>
        <?php 
              $seleted = substr($fly->flyNumber,0,6);
              foreach($flies as $option){
                if(substr($option,0,6) == $seleted){?>
                <option value="<?php echo $option ?>" selected><?php echo $option ?></option>
                <?php
                }else{?>
                <option value="<?php echo $option ?>"><?php echo $option ?></option>
               <?php }
               } ?>
        </select>
      </div>
    </div>
  </div>
  <input type="hidden" name="id" value="<?php echo $user->id?>" >
  <input type="submit" class="update-button" value="Update">
</form>