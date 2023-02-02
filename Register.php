<?php 
include './templates/header.php';
include "./templates/Footer.php";
include './templates/lists.php';
?>

<form action="./controllers/Register.php" method="POST">
  <div class="container" style="Display:flex;">
    <div>
      <h3>User information</h3>
      <div style="display: flex;">
        <label>Name</label>
        <input class="form-control" type="text" placeholder="Type User Name" name="inputName" required>
      </div>
      <div style="display: flex;">
        <label>Age</label>
        <input class="form-control" type="text" placeholder="Type User Age" name="inputAge" required>
      </div>
      <div style="display: flex;">
        <label>Nacionality</label>
        <input class="form-control" type="text" placeholder="Type Nacionality" name="inputNacionality" required>
      </div>
      <div style="display: flex;">
        <label>Passport</label>
        <input class="form-control" type="text" placeholder="Type PassPort" name="inputPassport" required>
      </div>
    </div>
    <div>
    <h3>Fly information</h3>
      <div style="display: flex;">
        <label>Fly Origin</label>
        <!--<input class="form-control" type="text" placeholder="Type the fly country origin" name="inputOrigin" required>-->
        <select name="inputOrigin" required>
            <?php foreach($country_list as $option){?>
                <option value="<?php echo $option ?>"><?php echo $option ?></option>
              <?php } ?>
        </select>
      </div>
      <div style="display: flex;">
        <label>OriginDate</label>
        <input type="date" name="inputOriginDate"  max="2025-12-31">
      </div>
      <div style="display: flex;">
        <label>Fly Destination</label>
        <!--<input class="form-control" type="text" placeholder="Type the fly country destinatino" name="inputDestination" required>-->
        <select name="inputDestination"  required>
            <?php foreach($country_list as $option){?>
                <option value="<?php echo $option ?>"><?php echo $option ?></option>
              <?php } ?>
        </select>
      </div>
      <div style="display: flex;">
        <label>DestinationDate</label>
        <input type="date" name="inputDestinationDate" max="2025-12-31">
      </div>
      <div style="display: flex;">
        <label>Price ($)</label>
        <input class="form-control" type="text" placeholder="Type the Price" name="inputPrice" required>
      </div>
      <div style="display: flex;">
        <label>Fly Number</label>
        <!--<input class="form-control" type="text" placeholder="Type the Fly Number" name="inputFlyNumber" required>-->
        <select name="inputFlyNumber" required>
            <?php foreach($flies as $option){?>
                <option value="<?php echo $option ?>"><?php echo $option ?></option>
              <?php } ?>
        </select>
      </div>
    </div>
  </div>

  <input type="submit" class="submit-button" value="Register">
</form>