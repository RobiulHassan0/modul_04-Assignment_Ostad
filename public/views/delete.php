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
    if(isset($_POST['confirm']) && $_POST['confirm'] === 'yes'){
        $vehicleManager->deleteVehicle($id);
    }

  header("Location: ../index.php");
  exit;

}


include "../header.php"; 
?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-danger">
                <div class="card-header bg-danger text-white">
                    Delete Vehicle
                </div>
                <div class="card-body">
                    <h3 class="card-title mb-4">Are you sure you want to delete this vehicle?</h3>
                    <div class="ratio ratio-16x9 mb-4">
                        <img src="<?= htmlspecialchars($vehicle['image']) ?>" class="card-img-top img-fluid" alt="Car">
                    </div>
                    <p class="card-text"><strong>Name:</strong> <?= htmlspecialchars($vehicle['name']) ?></p>
                    <p class="card-text"><strong>Type:</strong> <?= htmlspecialchars($vehicle['type']) ?></p>
                    <p class="card-text"><strong>Price:</strong> $<?= htmlspecialchars($vehicle['price']) ?></p>
                    
                    <form method="POST">
                        <button type="submit" name="confirm" value="yes" class="btn btn-danger">Yes, Delete</button>
                        <a href="../index.php" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>