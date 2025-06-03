<?php include 'header.php'; ?>
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Wpoet Task</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="container my-5">
  <h1 class="mb-4 text-center">Wpoets Task</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis vero voluptatibus quaerat necessitatibus architecto laborum quod non esse totam soluta voluptatum, excepturi iusto, aperiam explicabo nemo aspernatur suscipit voluptate fugit?</p>
  <!-- Title Column -->
  <div class="row g-4">
    <div class="col-md-4">
      <div id="points-column" class="list-group shadow-sm rounded">
        <?php
        $sql = "SELECT * FROM slider_points ORDER BY id ASC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo '<button class="list-group-item list-group-item-action point-item d-flex align-items-center" data-id="'.$row['id'].'">';
            echo '<i class="'.$row['icon'].' fa-lg me-3 text-primary"></i>';
            echo '<span>'.$row['title'].'</span>';
            echo '</button>';
          }
        } else {
          echo '<p class="text-muted">No points found. Please add some.</p>';
        }
        ?>
      </div>
    </div>

    <!-- Description Column -->
    <div class="col-md-4 d-flex flex-column justify-content-center bg-light rounded shadow-sm p-4" id="description-column">
      <p id="point-description" class="fs-5 text-secondary">Click on any point to see description here.</p>
      <a href=""><p>Learn More</p></a>
    </div>

    <!-- Image Column -->
    <div class="col-md-4 d-flex justify-content-center align-items-center bg-light rounded shadow-sm p-4" id="image-column">
      <img id="point-image" src="images/DL-Communication.jpg" alt="Image" class="img-fluid rounded shadow" style="max-height:300px; display:none;" />
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  let items = $(".point-item");
  let currentIndex = 0;
  let autoSwitchInterval = 3000;

  function activateItem(index) {
    let item = items.eq(index);
    $(".point-item").removeClass('active');
    item.addClass('active');
    loadPointDetails(item.data('id'));
  }

  function loadPointDetails(id){
    $.ajax({
      url: 'get_point_details.php',
      method: 'POST',
      data: {id: id},
      dataType: 'json',
      success: function (response) {
        console.log("AJAX Response:", response);
        $("#point-description").html(response.description);
        
        if (response.image) {
          $("#point-image").attr("src", response.image).fadeIn();
        } else {
          $("#point-image").hide();
        }
      },
      error: function(){
        $("#point-description").text('Failed to load data.');
        $("#point-image").hide();
      }
    });
  }

  function autoSlide() {
    currentIndex = (currentIndex + 1) % items.length;
    activateItem(currentIndex);
  }

  $("#points-column").on("click", ".point-item", function(){
    currentIndex = $(this).index();
    activateItem(currentIndex);
  });

  if(items.length){
    activateItem(currentIndex);
    setInterval(autoSlide, autoSwitchInterval);
  }
});
</script>
<?php include 'footer.php'; ?>

</body>
</html>
