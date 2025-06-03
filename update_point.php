<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $title = $conn->real_escape_string($_POST['title']);
    $icon = $conn->real_escape_string($_POST['icon']);
    $description = $conn->real_escape_string($_POST['description']);

    $sql = "UPDATE slider_points SET title=?, icon=?, description=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $title, $icon, $description, $id);
    if ($stmt->execute()) {
        echo "Updated successfully.";
    } else {
        echo "Error updating record.";
    }
    $stmt->close();
}
$conn->close();
?>