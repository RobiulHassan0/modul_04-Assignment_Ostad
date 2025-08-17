<?php 
require_once __DIR__ . "../../../app/classes/VehicleManager.php";

if($_SERVER['REQUEST_METHOD']=== 'POST'){
  $vehicleManager = new VehicleManager("", "", "", "");
  $vehicleManager->addVehicle([
    'name' => $_POST['name'],
    'type' => $_POST['type'],
    'price' => $_POST['price'],
    'image' => $_POST['image']
  ]);
  header("Location: ../index.php");
  exit;

}

include "../header.php"; 
?>

<div class="container my-4">
  <h1>Add New Vehicle</h1>
  <form method="POST">
    <div class="mb-3">
      <label class="form-label">Vehicle Name</label>
      <input type="text" name="name" class="form-control" placeholder="Enter vehicle name" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Vehicle Type</label>
      <input type="text" name="type" class="form-control" placeholder="Car, Bike, etc." required>
    </div>
    <div class="mb-3">
      <label class="form-label">Price</label>
      <input type="number" name="price" class="form-control" placeholder="Enter price" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Image URL</label>
      <input type="text" name="image" class="form-control" placeholder="https://example.com/image.jpg" required>
    </div>
    <button type="submit" class="btn btn-success">Add Vehicle</button>
    <a href="../index.php" class="btn btn-secondary">Cancel</a>
  </form>
</div>

</body>
</html>
