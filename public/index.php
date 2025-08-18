<?php 
require_once "../app/classes/VehicleManager.php";
$vehiclesManger = new VehicleManager("", "", "", "");
$vehicles = $vehiclesManger->getVehicle();


include "./header.php"; 
?>

<div class="container my-4">
  <h1 class="mb-4">All Vehicles</h1>
  <div class="row">
    <!-- Loop Start -->
    <?php foreach ($vehicles as $id => $vehicle) :?> 

    <!-- Vehicle Card -->      
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <div class="ratio ratio-16x9">
          <img src="<?= htmlspecialchars($vehicle['image']) ?>" class="card-img-top img-fluid" alt="Car">
        </div>
        <div class="card-body">
          <h5 class="card-title">Name: <?= $vehicle['name'] ?></h5>
          <p class="card-text">Type: <?= $vehicle['type'] ?></p>
          <p class="card-text">Price: $<?= $vehicle['price'] ?></p>
          <a href="./views/view.php?id=<?php echo $id?>" class="btn btn-primary btn-sm">View</a>
          <a href="./views/edit.php?id=<?php echo $id?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="./views/delete.php?id=<?php echo $id?>" class="btn btn-danger btn-sm">Delete</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?> 
     <!--Loop Ends  -->
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
