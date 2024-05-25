<?php
require "dbconnect.php";
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Alps Booking Reservation</title>
    <link href=stylezz.css rel="stylesheet" />


</head>
<link href="bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<body>
    <?php
    date_default_timezone_set("Asia/Manila");
    require_once "FinalsTable\BusArrays.php";
    require_once "SeatFunction.php";
    ?>
    <?php  ?>
    <script>
        function swapValues() {
            event.preventDefault();
            // Get the selected values of origin and destination
            var originValue = document.getElementById('origin').value;
            var destinationValue = document.getElementById('destination').value;

            // Swap the values
            document.getElementById('origin').value = destinationValue;
            document.getElementById('destination').value = originValue;
        }
    </script>
    <script>
        function setMinDate() {
            // Get current date in Philippine time zone
            var philippineDate = new Date();
            var philippineOffset = 8 * 60; // Philippine time zone offset in minutes (UTC+8)
            var utc = philippineDate.getTime() + (philippineDate.getTimezoneOffset() * 60000);
            var philippineTime = new Date(utc + (60000 * philippineOffset));

            // Format date in yyyy-mm-dd format
            var formattedDate = philippineTime.toLocaleDateString('en-CA');

            // Set the minimum date and change input type to date
            document.getElementById("tripDate3").setAttribute('type', 'date');
            document.getElementById("tripDate3").setAttribute('min', formattedDate);
        }
    </script>


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
                            <a class="nav-link mx-lg-2 mx-auto" href="HomeLog.php"><i class="bi bi-house-fill"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active mx-lg-2 mx-auto" aria-current="page" href="BookingLog.php"><i class="bi bi-journal-album"></i> Book</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 mx-auto" href="StatusLog.php"><i class="bi bi-bus-front"></i> Status</a>
                        </li>
                        <!--
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 mx-auto" href="#"><i class="bi bi-shop"></i> Transit</a>
                        </li> -->
                    </ul>
                </div>

            </div>
            <form action="Logout.php" method="post">
                <button class="book-login-button mt-4 border-0" type="submit" name="logout" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">

                    <i class="bi bi-person-circle"></i><?php echo " " . $_SESSION['username']; ?>
                </button>
            </form>
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
                                <a href="BookingLog.php" class="book-caro-button"> Book Now</a>
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
                                <a href="BookingLog.php" class="book-caro-button"> Book Now</a>
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
                                <a href="BookingLog.php" class="book-caro-button"> Book Now</a>
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
        <div class="col-12 book-content-container8 ">
            <p class="display-4 text-center border border-3 p-4 border-dark rounded"> BOOKING </p>
        </div>

        <div class="book-content-container1 py-3"></div>

        <div class="d-flex content-container8  py-5 ">
            <div class="booking-container p-3 w-100 rounded">

                <div class="container-fluid w-100">
                <form action="BookingLog.php" method="post" novalidate class="needs-validation">
                    <div class="row">
                        <div class="col-md-6">
                           
                                <div class="input-group">
                                    
                                    <select id="origin" class="form-select" aria-describedby="basic-addon2" name="origin" required>
                                        <?php
                                        $query = "SELECT DISTINCT `departure_location` FROM tbl_route";
                                        $result = mysqli_query($con, $query);
                                        if ($result) {
                                            echo '<option default disabled selected value="">Origin</option>';
                                            while ($loc = mysqli_fetch_assoc($result)) {
                                                $origin = $loc['departure_location'];
                                                echo '<option value="' . $origin . '">' . $origin . '</option>';
                                            }
                                        } else {
                                            echo "Error: " . mysqli_error($con);
                                        }
                                        ?>
                                    </select>
                                    <label class="input-group-text" for="origin">Origin</label>

                                   


                                    <button class="input-group-text" id="basic-addon2" onclick="swapValues()" type="button"><i class="bi bi-arrow-left-right"></i></button>
                                    <label class="input-group-text" for="destination">Destination</label>
                                    <select id="destination" class="form-select" aria-describedby="basic-addon2" name="destination" required>
                                        <?php
                                        $query = "SELECT DISTINCT `destination` FROM tbl_route";
                                        $result = mysqli_query($con, $query);
                                        if ($result) {
                                            echo '<option default disabled selected value="">Destination</option>';
                                            while ($loc = mysqli_fetch_assoc($result)) {
                                                $destination = $loc['destination'];
                                                echo '<option value="' . $destination . '">' . $destination . '</option>';
                                            }
                                        } else {
                                            echo "Error: " . mysqli_error($con);
                                        }
                                        ?>
                                    </select>
                                </div>
                        </div>
                        <div class="col-md-3">
                            <input type="date" name="date" id="tripDate3" class="form-control" onfocus="setMinDate()" required />
                            <div class="invalid-feedback text-start">Please select a date.</div>
                            <div class="valid-feedback text-start">Departure date selected.</div>
                        </div>
                        <div class="col-md-3">
                            <input type="submit" value="Search" name="searchbutton" class="btn btn-success rounded-5 w-100">
                        </div>
                        </form>
                    </div>
                </div>


                <div class="container-fluid w-100 mt-3">
                    <div class="row">
                        <div class="col  p-2 rounded">

                            <?php

                            require_once "dbconnect.php";

                            //button function
                            if (isset($_POST['searchbutton'])) {

                                //to check the search box if empty or not 
                                if ($_POST['date'] != NULL && $_POST['origin'] != NULL && $_POST['destination'] != NULL) {
                                    $date = $_POST['date'];
                                    $origin = $_POST['origin'];
                                    $destination = $_POST['destination'];
                                    $selectsql = "Select * from sched_reserve_view where 
                                            `Departure Area`  = '" . $origin . "' 
                                            AND  `Departure Date` = '" . $date . "'   
                                            AND `Destination` = '" . $destination . "' 
                                            AND `Available Seats` > 0
                                            AND `Departure Date` >= CURDATE() ORDER BY `Departure Date` DESC";
                                } else {

                                    $selectsql = "Select * from sched_reserve_view WHERE `Departure Date` >= CURDATE() AND `Available Seats` > 0 ORDER BY `Departure Date` DESC";
                                }
                            } else {
                                $selectsql = "Select * from sched_reserve_view WHERE `Departure Date` >= CURDATE() AND `Available Seats` > 0 ORDER BY `Departure Date` DESC";
                            }


                            $result = $con->query($selectsql);

                            $buttonDisabled = !isset($_SESSION['username']) ? 'disabled' : '';
                            if ($result->num_rows > 0) {
                                echo "<div class='bg-row-book p-5 rounded'>";
                                echo "<div class = 'table-responsive bdr'>";
                                echo "<table class='table mt-3 table-striped text-center table-bordered w-100 border border-2 border-success-subtle align-middle mx-auto'>";
                                echo "<tr>";
                                echo "</tr>";
                                echo "<thead class ='table-success'>";
                                echo "<tr>";
                                /* echo "<th > Schedule ID </th>"; */
                                echo "<th> Bus Number </th>";
                                echo "<th> Bus Type </th>";
                                echo "<th> Departure Date </th>";
                                echo "<th> Departure Time </th>";

                                echo "<th> Departure Area </th>";
                                echo "<th> Destination </th>";
                                echo "<th> Total Seats </th>";
                                echo "<th> Available Seats </th>";
                                echo "<th> Price (₱) </th>";
                                echo "<th> Reserve </th>";
                                echo "</tr>";
                                echo "</thead>";


                                while ($maltfielddata = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    "<td>" . $maltfielddata['Schedule ID'] . "</td>";
                                    echo "<td>" . $maltfielddata['Bus Number'] . "</td>";
                                    echo "<td>" . $maltfielddata['Bus Type'] . "</td>";
                                    echo "<td>" . $maltfielddata['Departure Date'] . "</td>";
                                    echo "<td>" . date_format(date_create($maltfielddata['Departure Time']), 'g:i A') . "</td>";


                                    echo "<td>" . $maltfielddata['Departure Area'] . "</td>";
                                    echo "<td>" . $maltfielddata['Destination'] . "</td>";
                                    echo "<td>" . $maltfielddata['Total Seats'] . "</td>";
                                    echo "<td>" . $maltfielddata['Available Seats'] . "</td>";
                                    echo "<td>" . number_format($maltfielddata['Price']) . "</td>";
                                    echo "<td>";
                                    echo "<div class =''>";
                                    echo "<button class='btn btn-success' type='button' data-bs-toggle='collapse' data-bs-target='#collapseExample" . $maltfielddata['Schedule ID'] . "' aria-expanded='false' 
                                     aria-controls='collapseExample" . $maltfielddata['Schedule ID'] . "' $buttonDisabled>Book</button>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    echo "<tr class='collapse' id='collapseExample" . $maltfielddata['Schedule ID'] . "'>";
                                    echo "<td colspan='12'>";
                                    echo "<div class='w-50 mx-auto text-auto'>";

                            ?>
                                    <form action="ReservationReceipt.php" method="post" onsubmit="return confirm('Are you sure you want to confirm this booking?'); " novalidate class="needs-validation">
                                        <h5 class="hd-text text-center pb-2 mt-4 fs-5" id="title">Bus Reservation Form</h5>
                                        <div class="row  form-outline">
                                            <!-- Full Name input -->
                                            <div class="col">
                                                <input type="hidden" name="book_id" value="<?php echo $maltfielddata['Schedule ID'] ?>" class="form-control" readonly />

                                            </div>
                                            <div class="col">
                                                <input type="hidden" name="book_num" value="<?php echo $maltfielddata['Bus Number']; ?>" class="form-control" readonly />

                                            </div>
                                            <div class="col">
                                                <input type="hidden" name="book_type" value="<?php echo $maltfielddata['Bus Type']; ?>" class="form-control" readonly />

                                            </div>
                                            <div class="col">
                                                <input type="hidden" name="r_date" value="<?php echo date("Y-m-d h:i:s") ?>" class="form-control" readonly />

                                            </div>
                                        </div>

                                        <!-- Role input -->
                                        <div class="row form-outline mb-2">
                                            <div class="col">
                                                <input type="hidden" name="book_ddate" value="<?php echo $maltfielddata['Departure Date']; ?>" class="form-control" />

                                            </div>

                                            <div class="col">
                                                <input type="hidden" name="book_dtime" value="<?php echo date_format(date_create($maltfielddata['Departure Time']), 'H:i'); ?>" class="form-control" />
                                            </div>


                                        </div>

                                        <div class="row form-outline">
                                            <!-- Full Name input -->
                                            <div class="col">
                                                <input type="hidden" name="book_depart" value="<?php echo $maltfielddata['Departure Area']; ?>" class="form-control" readonly />

                                            </div>
                                            <div class="col">
                                                <input type="hidden" name="book_desti" value="<?php echo $maltfielddata['Destination']; ?>" class="form-control" readonly />

                                            </div>
                                        </div>

                                        <div class="row form-outline">
                                            <!-- Full Name input -->
                                            <div class="col">
                                                <input type="hidden" name="book_price" value="<?php echo number_format($maltfielddata['Price']); ?>" class="form-control" readonly />

                                            </div>
                                        </div>

                                        <div class="row form-outline">
                                            <!-- Full Name input -->
                                            <div class="col">
                                                <input type="hidden" name="book_tseats" value="<?php echo $maltfielddata['Total Seats']; ?>" class="form-control" readonly />

                                            </div>
                                            <div class="col">
                                                <input type="hidden" name="book_aseats" value="<?php echo $maltfielddata['Available Seats']; ?>" class="form-control" readonly />

                                            </div>
                                        </div>

                                        <!-- Username input -->
                                        <div class="row text-start form-outline mb-2">
                                            <label class="form-label" for="">Passenger Name</label>
                                            <div class="col">
                                                <label class="form-label text-secondary" for="">First Name</label>
                                                <input type="text" id="" name="f_name" class="form-control" required />
                                                <div class="invalid-feedback text-start">Enter your first name.</div>
                                                <div class="valid-feedback text-start">First name entered.</div>

                                            </div>

                                            <div class="col">
                                                <label class="form-label text-secondary" for="">Middle Name</label>
                                                <input type="text" id="" name="m_name" class="form-control" />
                                            </div>

                                            <div class="col">
                                                <label class="form-label text-secondary" for="">Last Name</label>
                                                <input type="text" id="" name="l_name" class="form-control" required />
                                                <div class="invalid-feedback text-start">Enter your last name.</div>
                                                <div class="valid-feedback text-start">Last name entered.</div>
                                            </div>



                                        </div>


                                        <div class="row text-start form-outline">
                                            <!-- Password input -->
                                            <div class="col">
                                                <label class="form-label" for="">Contact Number</label>
                                                <input type="number" name="c_number" id="" class="form-control" min="0" required />


                                                <div class="invalid-feedback text-start">Enter your contact.</div>
                                                <div class="valid-feedback text-start">Contact information entered.</div>
                                            </div>
                                            <div class="col">
                                                <label class="form-label" for="">Seat</label>
                                                <?php
                                                seattype($maltfielddata['Bus Type'],  $maltfielddata['Schedule ID'], $con);
                                                ?>
                                                <div class='invalid-feedback text-start'>Choose your seat number.</div>
                                                <div class='valid-feedback text-start'>Seat selected.</div>


                                            </div>
                                        </div>


                                        <!-- Seat input -->


                                        <div class="row form-outline text-center pt-1 pb-4 mt-3">
                                            <div class="col">
                                                <button type="submit" name="booking" value="Book" class="btn btn-success">Confirm Booking</button>
                                            </div>
                                        </div>

                        </div>
                        </form>
                <?php
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                                echo "</div>";
                                echo "</div>";
                            } else {
                                echo "<div class='row'>";
                                echo "<div class='col'>";
                                echo "<div class='bg-row-book p-3 rounded pb-4'>";
                                echo "<br><h4 class='text-center text-white p-4 rounded'>There is no booking at this time</h4>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                ?>

                    </div>
                </div>
            </div>

        </div>


    </div>
    <!-- Bus Types -->
    <div class="content-container8">
        <div class="d-flex flex-row row-12">
            <div class="col-2 content-container7 bg-info-subtle p-3 bus-align">
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
                            <div class="card-text bus-card-text">
                                <?php
                                foreach ($Executive as $bustype) {
                                    echo '<div class="row"><div class="col">' . $bustype . '</div></div>';
                                }
                                ?>
                            </div>
                        </div>

                    </div>
                    <div class="card bus-card border-top-0 border-bottom-0">
                        <img src="ExecutiveSolo.png" class="card-img-top" alt="...">
                        <div class="card-body bus-card-body">
                            <h5 class="card-title bus-card-title">Executive Solo</h5>
                            <hr>
                            <div class="card-text bus-card-text">
                                <?php
                                foreach ($ExecutiveSolo as $bustype) {
                                    echo '<div class="row"><div class="col">' . $bustype . '</div></div>';
                                }
                                ?>
                            </div>
                        </div>

                    </div>
                    <div class="card bus-card border-top-0 border-bottom-0">
                        <img src="ExecutiveClass.png" class="card-img-top" alt="...">
                        <div class="card-body bus-card-body">
                            <h5 class="card-title bus-card-title">Executive Class</h5>
                            <hr>
                            <div class="card-text bus-card-text">
                                <?php
                                foreach ($ExecutiveClass as $bustype) {
                                    echo '<div class="row"><div class="col">' . $bustype . '</div></div>';
                                }
                                ?>
                            </div>
                        </div>

                    </div>
                    <div class="card bus-card border-top-0 border-bottom-0 border-right-0">
                        <img src="ExecutiveLuxury1.png" class="card-img-top" alt="...">
                        <div class="card-body bus-card-body">
                            <h5 class="card-title bus-card-title">Executive Luxury</h5>
                            <hr>
                            <div class="card-text bus-card-text">
                                <?php
                                foreach ($ExecutiveLuxury as $bustype) {
                                    echo '<div class="row"><div class="col">' . $bustype . '</div></div>';
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Routes -->
        <div class="content-container8">
            <div class="d-flex flex-row row-12">
                <div class="col-12 book-content-container8  bus-align pt-5">
                    <h2 class="text-center">Bus Routes</h2>
                    <p class="about-para text-center ">Various bus routes for your travel experience.</p>
                </div>

            </div>
        </div>
        <div class="book-content-container8">
            <div class="d-flex flex-row row-12">
                <div class="col-12 book-content-container8  pb-3">
                    <div class="container-slider mx-auto pb-5 mt-3">
                        <?php for ($slideradio = 1; $slideradio <= 3; $slideradio++) { ?>
                            <input type="radio" name="slider" id="s<?php echo $slideradio; ?>" <?php echo ($slideradio === 1) ? 'checked' : ''; ?>>
                        <?php } ?>



                        <div class="slidecards">
                            <?php foreach ($slides as $key => $slide) { ?>
                                <label for="s<?php echo $key + 1; ?>" id="slide<?php echo $key + 1; ?>">
                                    <div class="slidecard">
                                        <div class="imageslide">
                                            <img src="<?php echo $slide['image']; ?>" alt="">
                                            <div class="dots">
                                                <?php for ($i = 0; $i < count($slide['contents']); $i++) { ?>
                                                    <div class=""></div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="infos">
                                            <span class="name"><?php echo $slide['name']; ?></span>
                                            <?php foreach ($slide['contents'] as $content) { ?>
                                                <span class="content"><?php echo $content; ?></span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </label>
                            <?php } ?>

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
                                <div class="card-text term-card-text mb-3 text-center">
                                    <div class="row">
                                        <div class="col my-2"><strong>Location</strong></div>

                                    </div>
                                    <div class="row">

                                        <div class="col"> 1019, 1102 Aurora Blvd, Project 3, Quezon City, Metro Manila </div>
                                    </div>
                                    <div class="row">
                                        <div class="col my-2"> <strong>Contact</strong> </div>

                                    </div>
                                    <div class="row">

                                        <div class="col"> 0998-8842382 </div>

                                    </div>
                                    <div class="row">

                                        <div class="col"> 0943-1376974 </div>
                                    </div>
                                </div>
                                <div class="row text-center mb-3">
                                    <div class="col">
                                        <a href="https://goo.gl/maps/aoUzJoUdUReXCknt5" target="_blank" class="term-button">View</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="card term-card border-top-0 border-bottom-0">
                            <img src="PITX.png" class="card-img-top" alt="...">
                            <div class="card-body term-card-body">
                                <h5 class="card-title term-card-title">PITX</h5>
                                <hr>
                                <div class="card-text term-card-text mb-3 p-2 text-center">
                                    <div class="row">
                                        <div class="col my-2"><strong>Location</strong></div>

                                    </div>
                                    <div class="row">

                                        <div class="col"> Tambo, Parañaque, <br>Metro Manila </div>
                                    </div>
                                    <div class="row">
                                        <div class="col my-2"> <strong>Contact</strong> </div>

                                    </div>
                                    <div class="row">

                                        <div class="col">0939-9252460</div>

                                    </div>
                                    <div class="row">

                                        <div class="col">0933-8122039</div>
                                    </div>

                                </div>
                                <div class="row text-center mb-3">
                                    <div class="col">
                                        <a href="https://goo.gl/maps/EhZFkdnz5T5GXjx87" target="_blank" class="term-button">View</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card term-card border-top-0 border-bottom-0">
                            <img src="TABACO.png" class="card-img-top border-0" alt="...">
                            <div class="card-body term-card-body">
                                <h5 class="card-title term-card-title">Tabaco</h5>
                                <hr>
                                <div class="card-text term-card-text mb-3 text-center">
                                    <div class="row">
                                        <div class="col my-2"><strong>Location</strong></div>

                                    </div>
                                    <div class="row">

                                        <div class="col"> Brgy Pawa, <br>Tabaco City, Albay</div>
                                    </div>
                                    <div class="row">
                                        <div class="col my-2"> <strong>Contact</strong> </div>

                                    </div>
                                    <div class="row">

                                        <div class="col"> 0923-7333077 </div>

                                    </div>
                                    <div class="row">


                                        <div class="col"> 0998-5474973 </div>
                                    </div>

                                </div>
                                <div class="row text-center mb-3">
                                    <div class="col">
                                        <a href="https://goo.gl/maps/64WNqZBBK2PENfXDA" target="_blank" class="term-button">View</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card term-card border-top-0 border-bottom-0 border-right-0">
                            <img src="LEGAZPI.png" class="card-img-top" alt="...">
                            <div class="card-body term-card-body">
                                <h5 class="card-title term-card-title">Legazpi</h5>
                                <hr>
                                <div class="card-text term-card-text mb-3 text-center">
                                    <div class="row">
                                        <div class="col my-2"><strong>Location</strong></div>

                                    </div>
                                    <div class="row">

                                        <div class="col"> LKY Terminal beside <br>SM City Legazpi, Albay</div>
                                    </div>
                                    <div class="row">
                                        <div class="col my-2"> <strong>Contact</strong> </div>

                                    </div>
                                    <div class="row">

                                        <div class="col"> 0939-9270533 </div>

                                    </div>
                                    <div class="row">


                                        <div class="col"> 0923-7333076 </div>
                                    </div>


                                </div>
                                <div class="row text-center mb-3">
                                    <div class="col">
                                        <a href="https://goo.gl/maps/Xzt21R96kxvCocsy5" target="_blank" class="term-button">View</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-2 content-container7 bg-info-subtle p-3 bus-align">
                    <h2 class="text-start">Bus Terminal </h2>
                    <p class="about-para text-start">Various terminals for accessibility and efficiency of travel.</p>
                </div>

            </div>
        </div>



    </div>
    <div class="row-12 content-container4 pt-4 mt-5">
        <h1 class="text-center pt-5 cont-text "> Contact Us </h1>
        <p class="text-center about-para book-content-container8 py-2">We are here to assist you!</p>

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
    <script src="formvalidation.js"> </script>
    <script src="scripts.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
</body>

</html>


<?php



?>