<?php include "../header.php"; ?>

<div class="container my-4">
  <h1>Edit Vehicle</h1>
  <form>
    <div class="mb-3">
      <label class="form-label">Vehicle Name</label>
      <input type="text" class="form-control" value="Toyota Corolla">
    </div>
    <div class="mb-3">
      <label class="form-label">Vehicle Type</label>
      <input type="text" class="form-control" value="Sedan">
    </div>
    <div class="mb-3">
      <label class="form-label">Price</label>
      <input type="number" class="form-control" value="20000">
    </div>
    <div class="mb-3">
      <label class="form-label">Image URL</label>
      <input type="text" class="form-control" value="https://via.placeholder.com/300x200">
    </div>
    <button type="submit" class="btn btn-primary">Update Vehicle</button>
    <a href="../index.php" class="btn btn-secondary">Cancel</a>
  </form>
</div>

</body>
</html>
