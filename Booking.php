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
            <h5 class="text-title"> Welcome to Alps Bus Reservation</h5>
            <p class="text-bg display-5 rounded">
              It is the family's vision to grow and grow in the service of the commuting public; the ALPS adopted family.
            </p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="Alps2.jpg" class="w-100 h-100 d-block carousel-image">
          <div class="carousel-caption">
            <h5 class="">Title Slide 1</h5>
            <p class="text-bg display-5 rounded">
              ALPS provide passenger accident insurance coverage to all passenger.
            </p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="Alps3.jpg" class="w-100 h-100 d-block carousel-image">
          <div class="carousel-caption">
            <h5 class="">Title Slide 2</h5>
            <p class="text-bg display-5 rounded">
              ALPS' vision is SERVICE and the company will continue to serve with burning commitment.
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
      <p class="display-4 text-center border border-3 p-4 border-dark rounded"> ABOUT US </p>
    </div>

    <!-- blender -->
    <div class="content-container1 py-3 bg-info-subtle"></div>




    <div class="d-flex flex-row content-container align-items-stretch">
      <div class="col-6 content-container2 bg-info-subtle  py-4">
        <h2 class="about-text text-center pb-3 text-success"> Vision </h2>
        <div class="line w-50 mb-4 mx-auto"></div>
        <div class="rounded about-content p-5">
          <p class="text-wrap about-para p-1">We want to be a dynamic, modern, reputable, and the safest transport company with an increasing share in the transport market, ensuring constant customer satisfaction and performance improvement with respect to our environment and safety while delivering our services. Our corporate vision is to become the best transportation company providing services of regional and domestic passenger road transport in the Philippines.</p>
        </div>

      </div>


      <div class="col-6 content-container2 bg-info-subtle py-4">
        <h2 class="about-text text-center pb-3 text-success"> Mission </h2>
        <div class="line w-50 mb-4 mx-auto"></div>
        <div class="rounded about-content1 p-5 ">
          <p class="text-wrap about-para p-1">ALPS THE BUS' corporate mission is to provide services of high quality and safe transportation to the public, to be able to approach actively to the resolution of any customer needs, to face any challenges within the bus and the coach transport nationwide, as well as to increase the efficiency and effectiveness of all activities performed in favor of fulfillment of common goals set by our shareholders, management, and employees. </p>
        </div>

      </div>

    </div>

    <div class="d-flex flex-row content-container7 align-items-stretch">

      <div class="content-container3 bg-danger-subtle p-4 col-2 mx-auto shadow-lg" id="test">
        <!-- <div id="slider" data-bs-ride="false">
          <input type="radio" name="slider" id="slide1" checked>
          <input type="radio" name="slider" id="slide2" class = "form-check-input">
          <input type="radio" name="slider" id="slide3" class ="form-check-input">
          <input type="radio" name="slider" id="slide4" class ="form-check-input">
          <div id="slides">
            <div id="overflow">
              <div class="inner">
                <div class="slide slide1">
                  <div class="slide-content ">
                    <h2>Slide 1</h2>
                      <p class=" p-2">
                          We keep our customers well informed and work hard in order to keep them within reach.
                          We listen to their comments and suggestions, dealing with them actively.
                          We improve our quality standards. We invest in new vehicles, prepare a new central
                          bus station and implement new products and services par excellent. 
                      </p>
                  </div>
                </div>
                <div class="slide slide2">
                  <div class="slide-content w-100 h-100">
                    <h2>Slide 2</h2>
                    <p>We keep our customers well informed and work hard in order to keep them within reach.
                          We listen to their comments and suggestions, dealing with them actively.
                          We improve our quality standards. We invest in new vehicles, prepare a new central
                          bus station and implement new products and services par excellent. </p>
                  </div>
                </div>
                <div class="slide slide3">
                  <div class="slide-content w-100 h-100">
                    <h2>Slide 3</h2>
                    <p>Content For Slide1</p>
                  </div>
                </div>
                <div class="slide slide4">
                  <div class="slide-content w-100 h-100">
                    <h2>Slide 4</h2>
                    <p>Content For Slide1</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="controls" aria-hidden="true">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <label for="slide4"></label>
          </div>
          <div id="bullets">
            <label for="slide1" class="active" ></label>
            <label for="slide2"  class="active"></label>
            <label for="slide3"  class="active"></label>
            <label for="slide4"  class="active"></label>
          </div>
        </div>
-->
        <!--
        <h2 class="text-center about-text pb-2 text-success">Corporate Values</h2>
        <div class="line w- mb-4 mx-auto"></div>
        <ul class="nav nav-fill w-75 mx-auto" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active link-dark" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Activities</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link link-dark" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Performance</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link link-dark" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Loyalty</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link link-dark" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Services</button>
          </li>
        </ul>
        <div class="tab-content w-75 mx-auto" id="myTabContent">
          <div class="tab-pane fade show active about-para p-4 text-center text-wrap w-75 mx-auto" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            We keep our customers well informed and work hard in order to keep them within reach. We listen to their comments and suggestions,
            dealing with them actively. We improve our quality standards. We invest in new vehicles, prepare a new central bus station and
            implement new products and services par excellent.
          </div>
          <div class="tab-pane fade about-para p-4 text-center text-wrap w-75 mx-auto" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            Our buses are operated by professional drivers to serve our customers. Annually, we carry around millions of passengers.
            Our high performance affects the reduction of our transport costs and helps us keep a favorable fare level, thus,
            in consonance also with our environment. We want to be efficient and effective because of you, our customers.
          </div>
          <div class="tab-pane fade about-para p-4 text-center text-wrap w-75 mx-auto" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            The public's transport safety is our primary concern, by instilling them that our buses are operated by competent and
            responsible drivers, we can assure our customers that their travel with us will be safe and enjoyable. We co-exist with
            our customers; thus, to them, our loyalty will always dwell.
          </div>
          <div class="tab-pane fade about-para p-4 text-center text-wrap w-75 mx-auto" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
            We want to care about our customers. Traveling by bus or coach is not only a transportation service but also a way of attending
            to our customers' needs. We do our best to make your traveling more comfortable, safe, and enjoyable. We want to be partners
            with our customers.
          </div>
        </div>
-->
        <h2 class="text-wrap  corp-text text-break ">Corporate Values</h2>
        <p class="about-para">Learn about the values that we at ALPS abide by at all times.</p>


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
      <div class="content-container3 bg-light-subtle px-2 py-2 col-2 mx-auto shadow-lg" id="test">
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

      <div class="d-flex flex-row container bg bg-info-subtle py-3 w-75 ">
        <div class="col-6 content-container8 p-5 rounded">


          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  Where can I view my receipt?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
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
        <div class="col-6 content-container8 p-5 rounded">
          <div class="accordion" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Accordion Item #1
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Accordion Item #2
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Accordion Item #3
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
              </div>
            </div>
          </div>
        </div>
      </div>





    </div>

    <!-- blender -->
    <!-- <div class="content-container5 py-3"></div> -->


    <div class="row-12 content-container4 pt-4">
      <h1 class="text-center pt-5 cont-text "> Contact Us </h1>
      <p class="text-center about-para bg-info-subtle py-2">We are here to assist you!</p>

      <div class="d-flex flex-row content-container align-items-stretch">
        <div class="col-4 content-container10 ">
          <div class="row  text-center py-5">

            <h5 class="about-text "> Main Office</h5>
            <p>ALPS The Bus, Inc. National Highway, Balagtas, Batangas City.</p>

          </div>
        </div>
        <div class="col-4 content-container10 ">
          <div class="row  text-center py-5">


            <table class="table table-responsive w-75 mx-auto table-borderless ">
              <tr>
                <th colspan="2">
                  <h5 class="about-text text-center ">Contact Information</h5>
                </th>
              </tr>
              <tr>
              <td colspan="2" class ="text-center pb-3">
                  Any inquiries should have a return address or phone number.
                </td>
              </tr>
              <tr>
                <th>Main Office</th>
                <td  colspan="2" class ="text-end">ALPS The Bus, Inc. National Highway, Balagtas, Batangas City.</td>
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
            <h5 class="about-text">Visit Us</h5>
            <p>Check out our other platforms!</p>
            <div class="col text-end ms-5 py-4">

              <a href="https://www.facebook.com/alpsthebus" target=”_blank”><i class="bi bi-facebook h1"></i></a>

            </div>
            <div class="col py-4">
              <a href="https://www.instagram.com/ilovealpsthebusph/?hl=en" target=”_blank”>
                <i class="bi bi-instagram h1 insta"></i>
              </a>

            </div>
            <div class="col text-start me-5 py-4">
              <a href="http://www.alpsthebus.com/" target=”_blank”><i class="bi bi-browser-chrome h1 text-dark chrome"></i></a>
            </div>




          </div>
        </div>
      </div>

    </div>
    <div class="row-12 content-container7 p-4">

    </div>
  </div>






</body>

</html>