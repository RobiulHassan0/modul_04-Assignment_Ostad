<?php 
require_once __DIR__ . "/../../app/classes/VehicleManager.php";
$vehicleManager = new VehicleManager("", "", "", "");

$id = $_GET['id'] ?? null;

$vehicles = $vehicleManager->getVehicle();

if($id === null || !isset($vehicles[$id])){
  header("Location: ../index.php");
  exit;
}

$vehicle = $vehicles[$id];

$vehicle = $vehicleManager->getDetails();

include "../header.php"; 
?>

<div class="container my-4">
  <h1>Vehicle Details</h1>
  <div class="card" style="max-width: 500px;">
    <img src="<?=$vehicle['image'] ?>" class="card-img-top" alt="Car">
    <div class="card-body">
      <h5 class="card-title"><strong>Name:</strong> <?=$vehicle['name'] ?></h5>
      <p class="card-text"><strong>Type:</strong> <?=$vehicle['type'] ?></p>
      <p class="card-text"><strong>Price:</strong> <?=$vehicle['price'] ?></p>
      <a href="../index.php" class="btn btn-secondary">Back</a>
    </div>
  </div>
</div>

</body>
</html>
