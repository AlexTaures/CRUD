<?php
include "./controllers/getData.php";
include "./templates/header.php";
include "./templates/Footer.php";
include './styles/style.php';
?>


<div style="padding: 15px;">
  <div class="row">
    <table>
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Fly Number</th>
          <th scope="col">Origin</th>
          <th scope="col">Destination</th>
          <th scope="col">Date</th>
          <th scope="col">Option</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($flyData as $dato){

          
        ?>

        <tr>
          <th scope="row"><?php echo $dato->id ?></th>
          <td><?php echo $dato->flyNumber ?></td>
          <td><?php echo $dato->flyOrigin ?></td>
          <td><?php echo $dato->flyDestination?></td>
          <td><?php echo $dato->originDate?></td>
          <td><a href="./View.php?id=<?php echo $dato->id?>"><button class="view-button">View</button></a></td>
        </tr>
        <?php
          }
        ?>
  </tbody>
    </table>
  </div>
</div>

<a href="./Register.php"><button class="register-button" >Register new Fly</button></a>



<img src="https://assets.weforum.org/editor/O5YKNDWt-3B-7qmh27fxiyvYuFKfm3y0uBXWCIx4vJw.png" alt="image not found" style="margin-bottom: 25px; margin-left: 25px; width: 50%; height: 50%; position:relative;">
