<?php include "header.php"; ?>

<div class="container my-4">
  <h1 class="mb-4">All Vehicles</h1>
  <div class="row">
    <!-- একেকটা ভেহিকল কার্ড -->
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Car">
        <div class="card-body">
          <h5 class="card-title">Toyota Corolla</h5>
          <p class="card-text">Type: Sedan</p>
          <p class="card-text">Price: $20,000</p>
          <a href="views/view.php" class="btn btn-primary btn-sm">View</a>
          <a href="views/edit.php" class="btn btn-warning btn-sm">Edit</a>
          <a href="delete.php" class="btn btn-danger btn-sm">Delete</a>
        </div>
      </div>
    </div>
    <!-- আরেকটা উদাহরণ -->
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Bike">
        <div class="card-body">
          <h5 class="card-title">Honda CBR</h5>
          <p class="card-text">Type: Bike</p>
          <p class="card-text">Price: $7,500</p>
          <a href="views/view.php" class="btn btn-primary btn-sm">View</a>
          <a href="views/edit.php" class="btn btn-warning btn-sm">Edit</a>
          <a href="delete.php" class="btn btn-danger btn-sm">Delete</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
