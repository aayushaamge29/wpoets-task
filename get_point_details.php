<?php
include 'db.php';

if (isset($_POST['id'])) {
  $id = intval($_POST['id']);
  $stmt = $conn->prepare("SELECT description, image FROM slider_points WHERE id = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode([
      "description" => $row['description'],
      "image" => $row['image']
    ]);
  } else {

    echo json_encode([
      "description" => "",
      "image" => ""
    ]);
  }
  $stmt->close();
}
$conn->close();
?>
