<?php include "../header.php"; ?>

<div class="container my-4">
  <h1>Add New Vehicle</h1>
  <form>
    <div class="mb-3">
      <label class="form-label">Vehicle Name</label>
      <input type="text" class="form-control" placeholder="Enter name">
    </div>
    <div class="mb-3">
      <label class="form-label">Vehicle Type</label>
      <input type="text" class="form-control" placeholder="Car, Bike, etc.">
    </div>
    <div class="mb-3">
      <label class="form-label">Price</label>
      <input type="number" class="form-control" placeholder="Enter price">
    </div>
    <div class="mb-3">
      <label class="form-label">Image URL</label>
      <input type="text" class="form-control" placeholder="https://example.com/image.jpg">
    </div>
    <button type="submit" class="btn btn-success">Add Vehicle</button>
    <a href="../index.php" class="btn btn-secondary">Cancel</a>
  </form>
</div>

</body>
</html>
