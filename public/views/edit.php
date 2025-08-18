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

if($_SERVER['REQUEST_METHOD']=== 'POST'){
  $vehicleManager->editVehicle($id, [
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
  <h1>Edit Vehicle</h1>
  <form method="POST">
    <div class="mb-3">
      <label class="form-label">Vehicle Name</label>
      <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($vehicle['name']) ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Vehicle Type</label>
      <input type="text" name="type" class="form-control" value="<?= htmlspecialchars($vehicle['type']) ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Price</label>
      <input type="number" name="price" class="form-control" value="<?= htmlspecialchars($vehicle['price']) ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Image URL</label>
      <input type="text" name="image" class="form-control" value="<?= htmlspecialchars($vehicle['image']) ?>">
    </div>
    <button type="submit" class="btn btn-primary">Update Vehicle</button>
    <a href="../index.php" class="btn btn-secondary">Cancel</a>
  </form>
</div>

</body>
</html>
