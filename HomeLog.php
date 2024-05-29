<?php
if (!isset($_SESSION)) {
    session_start();
  }
require "dbconnect.php";
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alps Home</title>
  <link href=stylez.css rel="stylesheet" />
</head>
<link href="bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<body class="">
  <script src="bootstrap.min.js"></script>

  <nav class="navbar navbar-expand-lg fixed-top navbar-home">
    <div class="container-fluid">
        <a class="navbar-brand me-auto ml-1 pe-none" href="#" aria-disabled="true" tabindex="-1">
            <img src="Alps.png" alt="Logo" class="logo img-fluid">
        </a>

      

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Alps</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-5">
                    <li class="nav-item">
                        <a class="nav-link active mx-lg-2 mx-auto" aria-current="page" href="HomeLog.php">
                            <i class="bi bi-house-fill"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 mx-auto" href="BookingLog.php">
                            <i class="bi bi-journal-album"></i> Book
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 mx-auto" href="StatusLog.php">
                            <i class="bi bi-bus-front"></i> Status
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <form action="Logout.php" method="post">
            <button class="home-login-button mt-4 border-0" type="submit" name="logout" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <i class="bi bi-person-circle"></i><?php echo " " . $_SESSION['username']; ?>
            </button>
        </form>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

  <div class="col h-75">
    <div class="carousel slide  carousel-dark" id="carouselDemo" data-bs-wrap="true" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active  home-carousel-item" data-bs-interval="5000">
          <img src="Alps1.jpg" class="w-100 h-100 d-block home-carousel-image">
          <div class="carousel-caption">
            <h5 class="home-text-title">Welcome to ALPS Bus Reservation</h5>
            <p class="text-bg">
              It is the family's vision to grow and grow in the service of the commuting public.
            </p>
            <div class="row  caro-posi">
              <div class="col">
                <a href="BookingLog.php" class="home-caro-button"> Book Now</a>
              </div>
            </div>

          </div>

        </div>
        <div class="carousel-item home-carousel-item" data-bs-interval="5000">
          <img src="Alps2.jpg" class="w-100 h-100 d-block home-carousel-image">
          <div class="carousel-caption">
            <h5 class="home-text-title">Welcome to ALPS Bus Reservation</h5>
            <p class="text-bg">
              ALPS provide passenger accident insurance coverage to all passenger.
            </p>
            <div class="row  caro-posi">
              <div class="col">
                <a href="BookingLog.php" class="home-caro-button"> Book Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item home-carousel-item" data-bs-interval="5000">
          <img src="Alps3.jpg" class="w-100 h-100 d-block home-carousel-image">
          <div class="carousel-caption">
            <h5 class="home-text-title">Welcome to ALPS Bus Reservation</h5>
            <p class="text-bg">
              ALPS' vision is SERVICE and the company will continue to serve with burning commitment.
            </p>
            <div class="row  caro-posi">
              <div class="col">
                <a href="BookingLog.php" class="home-caro-button"> Book Now</a>
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

      <div class="carousel-indicators home-carousel-indicators">
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

  <div class="home-fixed-container pt-4">
    <div class="col-12 content-container">
      <p class="display-4 text-center border border-3 p-4 border-dark rounded"> ABOUT US </p>
    </div>

    <!-- blender -->
    <div class="content-container1 py-3 "></div>

    <div class="d-flex flex-row content-container align-items-stretch">
      <div class="col-6 content-container2   py-4">
        <h2 class="about-text text-center pb-3 text-success"> Vision </h2>
        <div class="line w-50 mb-4 mx-auto"></div>
        <div class="rounded about-content p-5">
          <p class="text-wrap about-para p-1">We want to be a dynamic, modern, reputable, and the safest transport company with an increasing share in the transport market, ensuring constant customer satisfaction and performance improvement with respect to our environment and safety while delivering our services. Our corporate vision is to become the best transportation company providing services of regional and domestic passenger road transport in the Philippines.</p>
        </div>

      </div>


      <div class="col-6 content-container2  py-4">
        <h2 class="about-text text-center pb-3 text-success"> Mission </h2>
        <div class="line w-50 mb-4 mx-auto"></div>
        <div class="rounded about-content1 p-5 ">
          <p class="text-wrap about-para p-1">ALPS THE BUS' corporate mission is to provide services of high quality and safe transportation to the public, to be able to approach actively to the resolution of any customer needs, to face any challenges within the bus and the coach transport nationwide, as well as to increase the efficiency and effectiveness of all activities performed in favor of fulfillment of common goals set by our shareholders, management, and employees. </p>
        </div>

      </div>

    </div>

    <div class="d-flex flex-row content-container7 align-items-stretch">

      <div class="content-container3 bg-danger-subtle p-4 col-2 text-start shadow-lg corp-align" id="test">

        <h2 class="text-wrap  cont-text text-break ">Corporate Values</h2>
        <p class="crop-para">Learn about the values that we at ALPS abide by at all times.</p>

      </div>

      <div class="content-container3 bg-warning-subtle px-2 py-2 col-2 mx-auto shadow-lg" id="test">
        <div class="card border-0">
          <div class="card-body text-wrap  about-para text-break">
            <h5 class="card-title about-text text-center text-w">Activity</h5>
            We keep our customers well informed and work hard in order to keep them within reach. We listen to their comments and suggestions, dealing with them actively. We improve our quality standards. We invest in new vehicles, prepare a new central bus station and implement new products and services par excellent.
          </div>
        </div>

      </div>
      <div class="content-container3 bg-success-subtle px-2 py-2 col-2 mx-auto shadow-lg" id="test">

        <div class="card border-0">
          <div class="card-body text-wrap  about-para text-break">
            <h5 class="card-title about-text text-center">Performance</h5>
            Our buses are operated by professional drivers to serve our customers. Annually, we carry around millions of passengers. Our high performance affects the reduction of our transport costs and helps us keep a favorable fare level, thus, in consonance also with our environment. We want to be efficient and effective because of you, our customers.
          </div>
        </div>
      </div>

      <div class="content-container3 bg-primary-subtle px-2 py-2 col-2 mx-auto shadow-lg" id="test">
        <div class="card border-0">
          <div class="card-body text-wrap  about-para text-break">
            <h5 class="card-title about-text text-center">Loyalty</h5>
            The public's transport safety is our primary concern, by instilling them that our buses are operated by competent and responsible drivers, we can assure our customers that their travel with us will be safe and enjoyable. We co-exist with our customers; thus, to them, our loyalty will always dwell.
          </div>
        </div>

      </div>
      <div class="content-container3 bg-light-subtle px-2 py-2 col-2 text-end shadow-lg" id="test">
        <div class="card border-0">
          <div class="card-body text-wrap  about-para text-break">
            <h5 class="card-title about-text text-center">Services</h5>
            We want to care about our customers. Traveling by bus or coach is not only a transportation service but also a way of attending to our customers' needs. We do our best to make your traveling more comfortable, safe, and enjoyable. We want to be partners with our customers.
          </div>
        </div>
      </div>
    </div>


    <div class="col-12 content-container6 bg-info-subtle py-5 me-auto mx-auto ">
      <h2 class="text-center about-text py-2 text-success">Frequently Asked Questions</h2>

      <div class="line w-50 mb-4 mx-auto"></div>

      <p class="text-center about-para bg-info-subtle">Have a question? It may already have been answered here.</p>

      <div class="d-flex flex-row bg-info-subtle py-5 w-75  me-auto mx-auto ">
        <div class="col-6 content-container8 p-5 rounded">


          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  Are stopovers permitted?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Stopovers are only permitted for BICOL route.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How are the buses equipped?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Yes. All ALPS' air-conditioned buses are equipped with free WIFI connections, DVD Player, television, air conditioning, reclining seats with headrests, and curtain covered windows.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Are meals provided on board?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  No, meals are not provided.
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-6 content-container8 p-5 rounded">
          <div class="accordion" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Are pets allowed on board?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  Any kinds of pets are strictly not allowed on board.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Are route maps available?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  Route maps are not available.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Does ALPS guarantee its departure and arrival times?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  No. However, ALPS makes its best effort to provide on-time service,
                  it does not guarantee its departure and arrival times, which may be
                  delayed by any number of factors, including weather, traffic, or mechanical
                  problems.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="row-12 content-container4 pt-4">
      <h1 class="text-center pt-5 cont-text ">Contact Us </h1>
      <p class="text-center about-para bg-info-subtle py-2">We are here to assist you!</p>

      <div class="d-flex flex-row content-container align-items-stretch">
        <div class="col-4 content-container10 ">
          <div class="row  text-center py-5">

            <table class="table table-responsive w-75 mx-auto table-borderless contact-text">
              <tr>
                <th>
                  <h5 class="about-text text-center ">Main Office</h5>
                </th>
              </tr>
              <tr>
                <td class="text-center pb-3">
                  <strong>Want to visit our actual office? </strong>
                </td>
              </tr>
              <tr>
                <td class="justify-content-center"><i class="bi bi-geo-fill h3"></i>ALPS The Bus, Inc. National Highway, Balagtas, Batangas City.</td>
              </tr>
            </table>

          </div>
        </div>
        <div class="col-4 content-container10 ">
          <div class="row  text-center py-5">


            <table class="table table-responsive w-75 mx-auto table-borderless contact-text ">
              <tr>
                <th colspan="2">
                  <h5 class="about-text text-center ">Contact Information</h5>
                </th>
              </tr>
              <tr>
                <td colspan="2" class="text-center pb-3">
                  <strong>Any inquiries should have a return address or phone number. </strong>
                </td>
              </tr>
              <tr>
                <th colspan="2">Phone</th>
              </tr>
              <tr>
                <td>Trunkline</td>
                <td class="text-end" colspan> (043) 723-9033</td>
              </tr>
              <tr>
                <td>SMS</td>
                <td class="text-end"> (0917) 504-6042</td>
              </tr>
              <tr>
                <th>Email</th>
              </tr>
              <tr>
                <td> info@alpsthebus.com</td>
              </tr>
            </table>
          </div>
        </div>

        <div class="col-4 content-container10 ">
          <div class="row  text-center py-5">
            <table class="table table-responsive w-75 mx-auto table-borderless contact-text ">
              <tr>
                <th colspan="3">
                  <h5 class="about-text text-center ">Visit Us!</h5>
                </th>
              </tr>
              <tr>
                <td colspan="3" class="text-center pb-3">
                  <strong> Check out our other platforms. </strong>
                </td>
              </tr>
              <tr>
                <td class="text-end"><a href="https://www.facebook.com/alpsthebus" target=”_blank”><i class="bi bi-facebook h1"></i></a></td>
                <td class="text-center"><a href="https://www.instagram.com/ilovealpsthebusph/?hl=en" target=”_blank”>
                    <i class="bi bi-instagram h1 insta"></i>
                  </a></td>
                <td class="text-start"><a href="http://www.alpsthebus.com/" target=”_blank”><i class="bi bi-browser-chrome h1 text-dark chrome"></i></a></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="row-12 content-container7 p-4"></div>
  </div>
</body>

</html>
