<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Slider Point</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container my-5">
  <h2>Add New Slider Point</h2>
  <form action="create_point.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="title" class="form-label">Title (e.g. Learning)</label>
      <input type="text" name="title" id="title" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="icon" class="form-label">Icon Class (FontAwesome, e.g. fas fa-book)</label>
      <input type="text" name="icon" id="icon" class="form-control" placeholder="fas fa-book" required>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea name="description" id="description" rows="4" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Upload Image (jpg, png)</label>
      <input type="file" name="image" id="image" accept="image/*" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Point</button>
  </form>
</div>
</body>
</html>
