<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Header</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    .header {
      background-color: #343a40;
      color: white;
      padding: 15px 20px;
      display: flex;
      justify-content: flex-end;
      align-items: center;
      margin-top: -40px;
    }

    .admin-btn {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 8px 15px;
      border-radius: 5px;
      font-size: 16px;
      text-decoration: none;
      display: flex;
      align-items: center;
      transition: background-color 0.3s ease;
    }

    .admin-btn i {
      margin-right: 8px;
    }

    .admin-btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="header">
    <a href="points.php" class="admin-btn">
      <i class="fas fa-user-shield"></i> Admin
    </a>
  </div>

</body>
</html>
