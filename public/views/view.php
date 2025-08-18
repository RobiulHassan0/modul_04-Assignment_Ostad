<?php 
require_once __DIR__ . "/../../app/classes/VehicleManager.php";
$vehicleManager = new VehicleManager("", "", "", "");

$id = $_GET['id'] ?? null;

$vehicle = $vehicleManager->viewVehicle($id);

if($vehicle === null){
  header("Location: ../index.php");
  exit;
}


include "../header.php"; 
?>
<div class="container-fluid d-flex justify-content-center align-items-center vh-100 bg-light">
  <div class="d-flex shadow-lg rounded-4 overflow-hidden bg-white" style="width: 80%; height: 70vh;">
    
    <!-- Image Section -->
    <div class="w-75">
      <img src="<?= $vehicle['image'] ?>" 
           class="h-100 w-100 object-fit-cover" 
           alt="<?= htmlspecialchars($vehicle['name']) ?>">
    </div>

    <!-- Details Section -->
    <div class="w-50 d-flex align-items-center">
      <div class="p-5">
        <h1 class="mb-3 text-primary"><?= htmlspecialchars($vehicle['name']) ?></h1>
        <p class="mb-2 fs-4"><strong>Type:</strong> <?= htmlspecialchars($vehicle['type']) ?></p>
        <!-- Vehicle Price -->
        <p class="mb-4 fs-5 text-success fw-bold">
          <span class="fw-semibold text-dark">Price: $</span><?= htmlspecialchars($vehicle['price']) ?>
        </p>

        <!-- Back Button -->
        <a href="../index.php" class="btn btn-outline-dark btn-lg px-5">⬅ Back</a>
      </div>
    </div>

  </div>
</div>


</body>
</html>
