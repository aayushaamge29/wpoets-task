<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("DELETE FROM slider_points WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "Record deleted.";
    } else {
        echo "Error deleting record.";
    }
    $stmt->close();
}
$conn->close();
?>