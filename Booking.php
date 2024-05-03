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

    <nav class="navbar navbar-expand-lg fixed-top navbar-book">
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
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-5">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 mx-auto" href="Home.php"><i class="bi bi-house-fill"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active mx-lg-2 mx-auto" aria-current="page" href="Booking.php"><i class="bi bi-journal-album"></i> Book</a>
                        </li>
                        <!--       <li class="nav-item">
                            <a class="nav-link mx-lg-2 mx-auto" href="#"><i class="bi bi-bus-front"></i> Route</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 mx-auto" href="#"><i class="bi bi-shop"></i> Transit</a>
                        </li> -->
                    </ul>
                </div>

            </div>
            <a href="Login.php" class="book-login-button"><i class="bi bi-person-circle"></i> Login</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="col h-75">
        <div class="carousel slide  carousel-dark" id="carouselDemo" data-bs-wrap="true" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item book-carousel-item active" data-bs-interval="5000">
                    <img src="Alps1.jpg" class="w-100 h-100 d-block book-carousel-image">
                    <div class="carousel-caption">
                        <h5 class="book-text-title">Welcome to ALPS Bus Reservation</h5>
                        <p class="text-bg">
                            It is the family's vision to grow and grow in the service of the commuting public.

                        </p>
                        <div class="row  caro-posi">
                            <div class="col">
                                <a href="Login.php" class="book-caro-button"> Book Now</a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="carousel-item book-carousel-item" data-bs-interval="5000">
                    <img src="Alps2.jpg" class="w-100 h-100 d-block book-carousel-image">
                    <div class="carousel-caption">
                        <h5 class="book-text-title">Welcome to ALPS Bus Reservation</h5>
                        <p class="text-bg">
                            ALPS provide passenger accident insurance coverage to all passenger.
                        </p>
                        <div class="row  caro-posi">
                            <div class="col">
                                <a href="Login.php" class="book-caro-button"> Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item book-carousel-item" data-bs-interval="5000">
                    <img src="Alps3.jpg" class="w-100 h-100 d-block book-carousel-image">
                    <div class="carousel-caption">
                        <h5 class="book-text-title">Welcome to ALPS Bus Reservation</h5>
                        <p class="text-bg">
                            ALPS' vision is SERVICE and the company will continue to serve with burning commitment.
                        </p>
                        <div class="row  caro-posi">
                            <div class="col">
                                <a href="Login.php" class="book-caro-button"> Book Now</a>
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

            <div class="carousel-indicators book-carousel-indicators">
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

    <div class="book-fixed-container pt-4">
        <div class="book-content-container1 pt-4">

        </div>

        <div class="content-container8  py-5 ">
            <div class="d-flex container-fluid booking-container p-5 w-75">

                <div class="row">
                    <div class="col">

                    </div>
                </div>

            </div>


        </div>
    <!-- Bus Types -->
        <div class="d content-container8">
            <div class="d-flex flex-row row-12">
                <div class="col-2 content-container7 bg-info-subtle p-5 bus-align">
                    <h2>Bus Types</h2>
                    <p class="about-para">Different bus types to accomodate your every need.</p>
                </div>
                <div class="col-10 content-container8 bus-types">

                    <div class="card-group bus-card-group">
                        <div class="card bus-card border-top-0 border-bottom-0 border-right-0">
                            <img src="Executive.png" class="card-img-top" alt="...">
                            <div class="card-body bus-card-body">
                                <h5 class="card-title bus-card-title">Executive</h5>
                                <hr>
                                <p class="card-text bus-card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>

                        </div>
                        <div class="card bus-card border-top-0 border-bottom-0">
                            <img src="ExecutiveSolo.png" class="card-img-top" alt="...">
                            <div class="card-body bus-card-body">
                                <h5 class="card-title bus-card-title">Executive Solo</h5>
                                <hr>
                                <p class="card-text bus-card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>

                        </div>
                        <div class="card bus-card border-top-0 border-bottom-0">
                            <img src="ExecutiveClass.png" class="card-img-top" alt="...">
                            <div class="card-body bus-card-body">
                                <h5 class="card-title bus-card-title">Executive Class</h5>
                                <hr>
                                <p class="card-text bus-card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>

                        </div>
                        <div class="card bus-card border-top-0 border-bottom-0 border-right-0">
                            <img src="ExecutiveLuxury1.png" class="card-img-top" alt="...">
                            <div class="card-body bus-card-body">
                                <h5 class="card-title bus-card-title">Executive Luxury</h5>
                                <hr>
                                <p class="card-text bus-card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Routes -->
            <div class="content-container8">
                <div class="d-flex flex-row row-12">
                    <div class="col-12 content-container8 bg-info-subtle bus-align pt-5">
                        <h2 class="text-center">Bus Routes</h2>
                        <p class="about-para text-center ">Different bus types to accomodate your every need.</p>
                    </div>

                </div>
            </div>
            <div class="content-container8">
                <div class="d-flex flex-row row-12">
                    <div class="col-12 content-container8 bg-info-subtle pb-3">
                        <div class="container-slider mx-auto pb-5 mt-3">
                            <input type="radio" name="slider" id="s1" checked>
                            <input type="radio" name="slider" id="s2">
                            <input type="radio" name="slider" id="s3">


                            <div class="slidecards">
                                <label for="s1" id ="slide1">
                                    <div class="slidecard">
                                        <div class="imageslide">
                                            <img src="Executive.png" alt="">
                                            <div class="dots">
                                                <div class=""></div>
                                                <div class=""></div>
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <div class="infos">
                                            <span class="name">Bicol - Manila</span>
                                            <span class="content">
                                            Naga to PITX 
                                            </span>
                                            <span class="content">
                                            Naga to Aurora Cubao
                                            </span>
                                        </div>
                                    </div>
                                </label>

                                <label for="s2" id ="slide2">
                                    <div class="slidecard">
                                        <div class="imageslide">
                                            <img src="ExecutiveLuxury1.png" alt="">
                                            <div class="dots">
                                                <div class=""></div>
                                                <div class=""></div>
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <div class="infos">
                                            <span class="name">Aurora Cubao - Bicol</span>
                                            <span class="content">
                                            Aurora Cubao to Gubat
                                            </span>
                                            <span class="content">
                                            Aurora Cubao to Legazpi
                                          </span>
                                            <span class="content">
                                            Aurora Cubao to Tabaco
                                    
                                            </span>
                                            <span class="content">
                                            Aurora Cubao to Nabua
                                            </span>
                                        </div>
                                    </div>
                                </label>

                                <label for="s3" id ="slide3">
                                    <div class="slidecard">
                                        <div class="imageslide">
                                            <img src="ExecutiveClass.png" alt="">
                                            <div class="dots">
                                                <div class=""></div>
                                                <div class=""></div>
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <div class="infos">
                                            <span class="name">PITX - Bicol</span>
                                            <span class="content">
                                                PITX to Gubat
                                            </span>
                                            <span class="content">
                                                PITX to Iriga
                                            </span>
                                            <span class="content">
                                            PITX to Legazpi
                                            </span>
                                            <span class="content">
                                            PITX to Naga
                                            </span>
                                            <span class="content">
                                            PITX to Tabaco
                                            </span>
                                        </div>
                                    </div>
                                </label>
                            </div>

                        </div>
                    </div>
                   

                </div>
            </div>
            



        <!-- Terminal -->
            <div class="d content-container8">
                <div class="d-flex flex-row row-12">
                    <div class="col-10 content-container8 bg-info-subtle">

                        <div class="card-group term-card-group">
                            <div class="card term-card border-top-0 border-bottom-0 border-right-0">
                                <img src="AuroraCubao.png" class="card-img-top" alt="...">
                                <div class="card-body term-card-body">
                                    <h5 class="card-title term-card-title">Aurora Cubao</h5>
                                    <hr>
                                    <p class="card-text term-card-text px-3">

                                    <table>
                                        <tr>
                                            <th>Location</th>
                                            <td colspan="2" class="px-3">1019, 1102 Aurora Blvd, Project 3, Quezon City, Metro Manila</td>
                                        </tr>
                                        <tr>
                                            <th>Contact</th>
                                            <td class="px-3">0998-8842382</td>
                                            <td class="px-3">0943-1376974</td>
                                        </tr>
                                    </table>

                                    </p>
                                    <div class="row text-center mb-3">
                                        <div class="col">
                                            <a href="https://goo.gl/maps/aoUzJoUdUReXCknt5"  target= "_blank" class="term-button">View Location</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card term-card border-top-0 border-bottom-0">
                                <img src="PITX.png" class="card-img-top" alt="...">
                                <div class="card-body term-card-body">
                                    <h5 class="card-title term-card-title">PITX</h5>
                                    <hr>
                                    <p class="card-text term-card-text">
                                    <table>
                                        <tr>
                                            <th>Location</th>
                                            <td colspan="2" class="px-3">Tambo, Parañaque, <br> Metro Manila</td>
                                        </tr>
                                        <tr>
                                            <th>Contact</th>
                                            <td class="px-3">0939-9252460</td>
                                            <td class="px-3">0933-8122039</td>
                                        </tr>
                                    </table>

                                    </p>
                                    <div class="row text-center mb-3">
                                        <div class="col">
                                            <a href="https://goo.gl/maps/EhZFkdnz5T5GXjx87" target= "_blank" class="term-button">View Location</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card term-card border-top-0 border-bottom-0">
                                <img src="TABACO.png" class="card-img-top border-0" alt="...">
                                <div class="card-body term-card-body">
                                    <h5 class="card-title term-card-title">Tabaco</h5>
                                    <hr>
                                    <p class="card-text term-card-text">
                                    <table>
                                        <tr>
                                            <th>Location</th>
                                            <td colspan="2" class="px-3">Brgy Pawa, <br>Tabaco City, Albay</td>
                                        </tr>
                                        <tr>
                                            <th>Contact</th>
                                            <td class="px-3">0923-7333077</td>
                                            <td class="px-3">0998-5474973</td>
                                        </tr>
                                    </table>
                                    </p>
                                    <div class="row text-center mb-3">
                                        <div class="col">
                                            <a href="https://goo.gl/maps/64WNqZBBK2PENfXDA" target= "_blank" class="term-button">View Location</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card term-card border-top-0 border-bottom-0 border-right-0">
                                <img src="LEGAZPI.png" class="card-img-top" alt="...">
                                <div class="card-body term-card-body">
                                    <h5 class="card-title term-card-title">Legazpi</h5>
                                    <hr>
                                    <p class="card-text term-card-text">
                                    <table>
                                        <tr>
                                            <th>Location</th>
                                            <td colspan="2" class="px-3">LKY Terminal beside SM City Legazpi, Albay</td>
                                        </tr>
                                        <tr>
                                            <th>Contact</th>
                                            <td class="px-3">0939-9270533</td>
                                            <td class="px-3">0923-7333076</td>
                                        </tr>
                                    </table>
                                    
                                    </p>
                                    <div class="row text-center mb-3">
                                        <div class="col">
                                            <a href="https://goo.gl/maps/Xzt21R96kxvCocsy5" target= "_blank" class="term-button">View Location</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-2 content-container7 bg-info-subtle p-5 bus-align">
                        <h2 class="text-start">Bus Terminal</h2>
                        <p class="about-para text-start">Different bus types to accomodate your every need.</p>
                    </div>

                </div>
            </div>

            

        </div>
        <div class="row-12 content-container4 pt-4 mt-5">
      <h1 class="text-center pt-5 cont-text "> Contact Us </h1>
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
                  <strong> Want to visit our actual office? </strong>
                </td>
              </tr>
              <tr>
                <td class="text-end"><i class="bi bi-geo-fill h3"></i> ALPS The Bus, Inc. National Highway, Balagtas, Batangas City.</td>
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
                  <strong> Any inquiries should have a return address or phone number. </strong>
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
    <div class="row-12 content-container7 p-4">

    </div>

    </div>

    </div>






</body>

</html>