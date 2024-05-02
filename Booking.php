<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Alps Booking Reservation</title>
  <link href=style.css rel="stylesheet" />
</head>
<link href="bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<body class="">
  <script src="scripts.js">
  </script>
  <script src="bootstrap.min.js"></script>

  <nav class="navbar navbar-expand-lg  fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand me-auto ml-1 pe-none" href="#" aria-disabled="true" tabindex="-1">
        <img src="Alps.png" alt="" class="logo img-fluid">

      </a>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Alps</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-5 rw">
            <li class="nav-item">
              <a class="nav-link active mx-lg-2 mx-auto" aria-current="page" href="#"><i class="bi bi-house-fill"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2 mx-auto" href="Home.php"><i class="bi bi-journal-album"></i> Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2 mx-auto" href="#"><i class="bi bi-bus-front"></i> Route</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2 mx-auto" href="#"><i class="bi bi-shop"></i> Transit</a>
            </li>
          </ul>
        </div>

      </div>
      <a href="Login.php" class="login-button"><i class="bi bi-person-circle"></i> Login</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <div class="col h-75">
    <div class="carousel slide  carousel-dark" id="carouselDemo" data-bs-wrap="true" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active" data-bs-interval="5000">
          <img src="Alps1.jpg" class="w-100 h-100 d-block carousel-image">
          <div class="carousel-caption">
            <h5 class="text-title">Welcome to ALPS Bus Reservation</h5>
            <p class="text-bg">
             It is the family's vision to grow and grow in the service of the commuting public.
              
            </p>
            <div class="row  caro-posi">
              <div class="col">
              <a href="Login.php" class="caro-button"> Book Now</a>
              </div>
            </div>
            
          </div>
          
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="Alps2.jpg" class="w-100 h-100 d-block carousel-image">
          <div class="carousel-caption">
            <h5 class="text-title">Welcome to ALPS Bus Reservation</h5>
            <p class="text-bg">
            ALPS provide passenger accident insurance coverage to all passenger.
            </p>
            <div class="row  caro-posi">
              <div class="col">
              <a href="Login.php" class="caro-button"> Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="Alps3.jpg" class="w-100 h-100 d-block carousel-image">
          <div class="carousel-caption">
            <h5 class="text-title">Welcome to ALPS Bus Reservation</h5>
            <p class="text-bg">
             ALPS' vision is SERVICE and the company will continue to serve with burning commitment.
            </p>
            <div class="row  caro-posi">
              <div class="col">
              <a href="Login.php" class="caro-button"> Book Now</a>
              </div>
            </div>
          </div>
        </div>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselDemo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselDemo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>

      </button>

      <div class="carousel-indicators">
        <button type="button" class="active mx-2" data-bs-target="#carouselDemo" data-bs-slide-to="0">
          <img src="Alps1.jpg" />

        </button>

        <button type="button" class="mx-2" data-bs-target="#carouselDemo " data-bs-slide-to="1">
          <img src="Alps2.jpg" />
        </button>

        <button type="button" class="mx-2" data-bs-target="#carouselDemo" data-bs-slide-to="2">
          <img src="Alps3.jpg" />
        </button>
      </div>
    </div>
  </div>





</body>
</html>