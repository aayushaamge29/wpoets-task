<?php
include 'db.php';
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$sql = "SELECT * FROM slider_points WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Point</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container my-5">
  <h2>Edit Slider Point</h2>
  <form action="update_point.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <div class="mb-3">
      <label>Title</label>
      <input type="text" name="title" class="form-control" value="<?= $row['title'] ?>">
    </div>
    <div class="mb-3">
      <label>Icon</label>
      <input type="text" name="icon" class="form-control" value="<?= $row['icon'] ?>">
    </div>
    <div class="mb-3">
      <label>Description</label>
      <textarea name="description" class="form-control" rows="4"><?= $row['description'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
</body>
</html>