<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href =style.css rel="stylesheet"/>
</head>
<link href="bootstrap.min.css" rel="stylesheet"/>

<body class ="bg">
<script src="bootstrap.min.js"></script> 

<nav class="navbar navbar-expand-lg  fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand me-auto" href="#">Alps</a>
    
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Alps</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active mx-lg-2" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#">Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#">Route</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#">Transit</a>
          </li>
        </ul>
    </div>
      
    </div>
    <a href="#" class ="login-button">Login</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<div class="col h-75">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Alps1.jpg" class="d-block w-100 h-100" alt="...">
      <div class="carousel-caption">
                <h3>Chania</h3>
                <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Alps2.jpg" class="d-block w-100 h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Alps3.jpg" class="d-block w-100 h-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
</div>
</div>
</div>


</body>
</html>