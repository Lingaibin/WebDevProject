<?php 
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
  <?php 
    function sayHi(){
      echo "
        <button>Click me</button>
      ";
    }
  ?>
  
  <div class="container-fluid">
    <div class="row" style="height: 100vh;">
      <!-- sidebar -->
      <div class="col-lg-2 col-sm-2 col-xs-2 p-0 bg-dark text-white position-relative sidebar">
        <a href="index.php" class="btn text-white d-block text-start selected">Dashboard</a>
        <a href="product.php" class="btn text-white d-block text-start">Product</a>
        <a href="event.php" class="btn text-white d-block text-start">Event</a>
        <!-- change later -->
        <a href="contact.php" class="btn text-white d-block text-start">Contact</a>
        <a href="login.php" class="btn text-white d-block text-start position-absolute w-100 bottom-0">Logout</a>
      </div>
      <div class="col-lg-10 col-sm-9 p-0 ps-4 pt-4">
        <h1 class="ps-3">Dashboard</h1>
        <!-- card -->
        <div class="my-5 card-container">
          <div class="row">
            <div class="col-lg-4 col-sm-12">
              <div class="card mx-auto my-3">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product Sold</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-12">
              <div class="card mx-auto my-3">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product Sold</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm1-12">
              <div class="card mx-auto my-3">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Product Sold</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>