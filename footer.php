<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Header</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    .site-footer {
        background-color: #343a40;
        color: #ffffff;
        padding: 20px 0;
        margin-top: 40px;
        position: relative;
        width: 100%;
        margin-bottom: -40px;
    }

    .site-footer p {
        margin: 0;
    }

    .site-footer a {
        color: #ffffff;
        text-decoration: none;
    }

    .site-footer a:hover {
        text-decoration: underline;
    }
  </style>
</head>
<body>
    <footer class="site-footer">
        <div class="container text-center py-3">
            <p class="mb-1 text-white">&copy; <?php echo date("Y"); ?> Wpoets Task. All rights reserved.</p>
            <p class="text-white-50 small">Designed and Developed by Aayush Aamge</p>
        </div>
    </footer>
</body>
