<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Alps Booking Reservation</title>
  <link href=style.css rel="stylesheet" />
</head>
<link href="bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<body class="bg">
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
      <a href="#" class="login-button"><i class="bi bi-person-circle"></i> Login</a>
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
            <h5 class=""> Welcome to Alps Bus Reservation</h5>
            <p class="display-2">
              It is the family's vision to grow and grow in the service of the commuting public; the ALPS adopted family.
            </p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="Alps2.jpg" class="w-100 h-100 d-block carousel-image">
          <div class="carousel-caption">
            <h5 class="">Title Slide 1</h5>
            <p class="">
              Welcome To Alps Bus
            </p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="Alps3.jpg" class="w-100 h-100 d-block carousel-image">
          <div class="carousel-caption">
            <h5 class="">Title Slide 2</h5>
            <p class="">
              Welcome To Alps Bus
            </p>
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




  <div class="fixed-container pt-4">

    <div class="col-12 content-container">
      <p class="display-4 text-center border border-3 p-2 border-dark rounded"> About Us </p>
    </div>


    <div class="d-flex flex-row content-container align-items-stretch">
      <div class="col-6 content-container2 bg-info-subtle  p-4">
        <h2 class="about-text text-center pb-3"> Vision </h2>
        <div class="rounded about-content p-5">
          <p class="text-wrap about-para p-1">We want to be a dynamic, modern, reputable, and the safest transport company with an increasing share in the transport market, ensuring constant customer satisfaction and performance improvement with respect to our environment and safety while delivering our services. Our corporate vision is to become the best transportation company providing services of regional and domestic passenger road transport in the Philippines.</p>
        </div>
      </div>


      <div class="col-6 content-container2 bg-info-subtle p-4">
        <h2 class="about-text text-center pb-3"> Mission </h2>
        <div class="rounded about-content1 p-5 ">
          <p class="text-wrap about-para p-1">ALPS THE BUS' corporate mission is to provide services of high quality and safe transportation to the public, to approach actively to the resolution of any customer needs, to face any challenges within bus and coach transport nationwide, as well as to increase the efficiency and effectiveness of all activities performed in favor of fulfillment of common goals set by our shareholders, management, and employees. </p>
        </div>
      </div>

    </div>

    <div class="d-flex flex-row content-container align-items-stretch">
      
      <div class="container-fluid content-container3 bg-primary-subtle  p-4">
        <div id="slider">
          <input type="radio" name="slider" id="slide1" checked>
          <input type="radio" name="slider" id="slide2">
          <input type="radio" name="slider" id="slide3">
          <input type="radio" name="slider" id="slide4">
          <div id="slides">
            <div id="overflow">
              <div class="inner">
                <div class="slide slide1">
                  <div class="slide-content w-100">
                    <h2>Slide 1</h2>
                    <p>Content For test</p>
                  </div>
                </div>
                <div class="slide slide2">
                  <div class="slide-content w-100">
                    <h2>Slide 2</h2>
                    <p>Content For Slide1</p>
                  </div>
                </div>
                <div class="slide slide3">
                  <div class="slide-content w-100">
                    <h2>Slide 3</h2>
                    <p>Content For Slide1</p>
                  </div>
                </div>
                <div class="slide slide4">
                  <div class="slide-content w-100">
                    <h2>Slide 4</h2>
                    <p>Content For Slide1</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="controls">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <label for="slide4"></label>
          </div>
          <div id="bullets">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <label for="slide4"></label>
          </div>
        </div>


        
      </div>

    </div>



    <div class="row-12">
      <div class="col-12 content-container3 py-5 shadow-lg">
        <h3 class="text-center">Frequently Asked Questions</h3>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Where can I view my receipt?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Accordion Item #2
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accordion Item #3
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 content-container">
      <p class="display-4 text-center border border-3 p-2 border-dark rounded"> Contact Us </p>
    </div>
    <div class="col-12 content-container2 bg-info">
      <br>
      <br>
    </div>
  </div>






</body>

</html>