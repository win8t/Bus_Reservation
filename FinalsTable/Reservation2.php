<?php
session_start();
require "dbconnect.php";
include "logger.php";

?>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="sidebar10.css">

</head>

<body class="hd-text">
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
    <?php
    date_default_timezone_set("Asia/Manila");
   set_include_path(get_include_path() . PATH_SEPARATOR . 'C:\xampp\htdocs\FINAL_ALPS_BUS');
//    set_include_path(get_include_path() . PATH_SEPARATOR . 'C:\xampp\htdocs\FINALS PROJECT'); 
    require_once 'SeatFunction.php';
    require_once "BusArrays.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <aside class="sidebar d-flex flex-container">
        <div class="logo">
            <img src="AlpsLogo.jpg" alt="Alps">
            <h2 class="">ALPS</h2>
        </div>
        <ul class="links">

            <li class="disabled">
                <h4 class="">Main Menu</h4>
            </li>

            <li>
                <i class="bi bi-table"></i>
                <a href="Overview2.php">Overview</a>
            </li>

            <li>
                <i class="bi bi-person-circle"></i>
                <a href="User2.php">User</a>
            </li>
            <li>
                <i class="bi bi-card-list"></i>
                <a href="Logs2.php">Logs</a>
            </li>

            <li class="disabled border border-light my-2">
                <hr class="">
            </li>
            <li class="disabled">
                <h4 class="">Bus Menu</h4>
            </li>

            <li>
                <i class="bi bi-bus-front"></i>
                <a href="Bus2.php">Bus</a>
            </li>
            <li>
                <i class="bi bi-sign-turn-right-fill"></i>
                <a href="Route2.php">Route</a>
            </li>
            <li>
                <i class="bi bi-calendar3"></i>
                <a href="Schedule2.php">Schedule</a>
            </li>
            <li class="active">
                <i class="bi bi-calendar-date"></i>
                <a class="active" href="Reservation2.php">Reservation</a>
            </li>
            <li class="disabled border border-light my-2">
                <hr class="">
            </li>

            <form action="Logout1.php" method="post">
                <li>
                    <i class="bi bi-box-arrow-right"></i>
                    <button type="submit" name="logout1" style="background:none; border:none; cursor:pointer; text:inherit; padding:0;">Log Out</button>
                </li>
            </form>
        </ul>


    </aside>
    <div class="container-fluid">
        <div class="row ">
            <div class="col pb-2 ">
                <h1 class="hd-font bg-row mx-auto text-white rounded-bottom mx-1 p-3">RESERVATION DETAILS | Welcome, <?php echo $_SESSION['username']; ?></h1>

                <div class="row bg-row mx-auto p-1 m-1 rounded">
                    <form action="Reservation2.php" method="post">
                        <div class="input-group w-50 pt-4">
                            <div class="input-group-text" id="btnGroupAddon2"><img src="search.svg" alt=""></div>
                            <input type="search" name="search" id="" class="form-control rounded mx-1" aria-label="Input group example" aria-describedby="btnGroupAddon2">

                            <div class="col-3 ">
                                <input type="submit" value="Search" name="searchbutton" class="h-100 btn btn-primary mx-1  hd-text" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <!-- Date Time - Local -->
                            <div class="row rounded pt-2 pb-0 ">
                                <div id="datetime" class="h4 text-light"></div>
                                <script>
                                    function updateDateTime() {
                                        var now = new Date();
                                        var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
                                            "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
                                        ];
                                        var dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
                                        var month = monthNames[now.getMonth()];
                                        var day = now.getDate();
                                        var year = now.getFullYear();
                                        var dayOfWeek = dayNames[now.getDay()];
                                        var time = now.toLocaleTimeString();
                                        var dateTimeString = dayOfWeek + ', ' + month + ' ' + day + ', ' + year + ', ' + time;
                                        document.getElementById('datetime').textContent = dateTimeString;
                                    }

                                    setInterval(updateDateTime, 1000);

                                    updateDateTime();
                                </script>
                            </div>
                        </div>

                </div>

                </form>

                <!-- Modal Bootstrap -->
                <button type="button" id="formDetailsBtn" class="btn btn-color hd-text mt-1" data-bs-toggle="modal" data-bs-target="#formDetails">
                    Add Reservation Details
                </button>

                <div class="modal" id="formDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="title" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fs-5" id="title">Reservation Details Form</h5>

                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">


                                <form action="Reservation2.php" method="post" novalidate class="needs-validation">
                                    <div class="row w-75 mx-auto">
                                        <div class="col-md-6">
                                            <label class="form-label" for="">Route</label>
                                            <div class="input-group has-validation">

                                                <select id="origin" class="form-select" aria-describedby="origin-feedback" name="origin" >
                                                    <?php
                                                    $query = "SELECT DISTINCT `departure_location` FROM tbl_route";
                                                    $result = mysqli_query($con, $query);
                                                    if ($result) {
                                                        echo '<option default disabled selected value="">Departure Area</option>';
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

                                                <button class="input-group-text bg-dark" id="basic-addon2" onclick="swapValues()" type="button"><i class="bi bi-arrow-left-right"></i></button>
                                                <label class="input-group-text" for="destination">Destination</label>
                                                <select id="destination" class="form-select" aria-describedby="destination-feedback" name="destination" >
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

                                                <div id="destination-feedback" class="invalid-feedback">Set your departure area and destination.</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="">Departure Date</label>
                                            <input type="date" name="date" id="tripDate3" class="form-control" onfocus="setMinDate()"  />
                                            <div class="invalid-feedback text-start">Please select a date.</div>
                                        </div>

                                        <div class="col-md-3">
                                            <label class="form-label" for="">Search Bookings</label>
                                            <input type="submit" value="Search" name="searchresbutton" class="btn btn-success rounded-5 w-100">
                                        </div>
                                </form>
                                
                            </div>
                            


                            <?php
                             if (isset($_POST['searchresbutton'])) {
                                echo '<script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var modal = new bootstrap.Modal(document.getElementById("formDetails"), {});
                                    modal.show();
                                });
                            </script>';

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
                                echo "<div class=' p-5 rounded'>";
                                echo "<div class = 'table-responsive'>";
                                echo "<table class='table  table-striped bdr text-center table-bordered w-100 border border-2 border-primary-subtle align-middle mx-auto'>";
                                echo "<tr>";
                                echo "</tr>";
                                echo "<thead class ='table-dark'>";
                                echo "<tr>";
                                /* echo "<th > Schedule ID </th>"; */
                                echo "<th> Bus Number </th>";
                                echo "<th> Bus Type </th>";
                                echo "<th> Departure Date </th>";
                                echo "<th> Depature Time </th>";

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

                                    echo "<button class='btn btn-success' type='button' data-bs-toggle='collapse' data-bs-target='#collapseExample" . $maltfielddata['Schedule ID'] . "' aria-expanded='false' 
                                     aria-controls='collapseExample" . $maltfielddata['Schedule ID'] . "' $buttonDisabled>Book</button>";

                                    echo "</td>";
                                    echo "</tr>";
                                    echo "<tr class='collapse' id='collapseExample" . $maltfielddata['Schedule ID'] . "'>";
                                    echo "<td colspan=15>";
                                    echo "<div class='w-50 mx-auto text-auto'>";

                            ?>
                                    <form action="\FINALS PROJECT\ReservationReceipt.php" method="post" onsubmit="return confirm('Are you sure you want to confirm this booking?');" novalidate class="needs-validation">
                                        <div class="row  form-outline">

                                            <h5 class="hd-text text-center pb-2 mt-4 fs-5" id="title">Bus Reservation Form</h5>
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
                                                <input type="hidden" name="r_date" value="<?php echo date("Y-m-d H:i:s") ?>" class="form-control" readonly />

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

                                        <div class="row form-outline">
                                            <!-- Departure Area -->
                                            <div class="col">
                                                <input type="hidden" name="book_depart" value="<?php echo $maltfielddata['Departure Area']; ?>" class="form-control" readonly />
                                            </div>
                                            <!-- Destination -->
                                            <div class="col">
                                                <input type="hidden" name="book_desti" value="<?php echo $maltfielddata['Destination']; ?>" class="form-control" readonly />
                                            </div>
                                        </div>
                                       


                                        <div class="row text-start form-outline">
                                            <!-- Password input -->
                                            <div class="col">
                                                <label class="form-label" for="">Username</label>
                                                <input type="text" id="" name="usern" class="form-control"  value = <?php echo $_SESSION['username']; ?> readonly/>
                                            </div>

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

                                
                                        <!-- Save button -->
                        </div>
                        <div class="row form-outline text-center pt-1 pb-4">
                            <div class="col">
                                <button type="submit" name="booking" value="Book" class="btn btn-success">Confirm Booking</button>
                            </div>
                        </div>
                        </form>

                    </div>


            <?php
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                                echo "<div class='modal-footer d-flex rounded justify-content-center'>";
                                echo "<button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>";
                                echo  "</div>";
                                echo "</div>";
                                echo "</div>";
                            } else {
                                echo "<div class='row'>";
                                echo "<div class='col'>";
                                echo "<div class='bg-row-book p-3 rounded pb-4'>";
                                echo "<br><h4 class='text-center text-dark shadow p-4 rounded'>There is no booking at this time</h4>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
            ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    require_once "dbconnect.php";

    //Search Button
    if (isset($_POST['searchbutton'])) {


        if ($_POST['search'] != NULL) {
            $search = $_POST['search'];
            $selectsql = "Select * from reservation_booking_view where 
            reservation_id LIKE '%" . $search . "%' 
            OR schedule_id LIKE '%" . $search . "%' 
            OR bus_id LIKE '%" . $search . "%' 
            OR route_id LIKE '%" . $search . "%' 
            OR ticket_number LIKE '%" . $search . "%' 
            OR bus_number LIKE '%" . $search . "%' 
            OR route_name LIKE '%" . $search . "%' 
            OR departure_date LIKE '%" . $search . "%' 
            OR departure_time LIKE '%" . $search . "%' 
            OR passenger_name LIKE'%" . $search . "%' 
            OR contact_information LIKE'%" . $search . "%' 
            OR seat_number LIKE'%" . $search . "%' 
            OR reservation_date LIKE'%" . $search . "%' 
            OR price LIKE'%" . $search . "%' 
            OR payment_method LIKE'%" . $search . "%' 
            OR reference_num LIKE'%" . $search . "%' 
            OR status LIKE'%" . $search . "%'  
            OR reservation_date LIKE'%" . $search . "%'  ORDER BY reservation_id DESC";
        } else {
            $selectsql = "Select * from reservation_booking_view ORDER BY reservation_id DESC";
        }
    } else {
        $selectsql = "Select * from reservation_booking_view ORDER BY reservation_id DESC";
    }

    $result = $con->query($selectsql);


    if ($result->num_rows > 0) {
        echo "<div class=' bg-row mt-2 p-5 rounded'>";
        echo "<div class='bdr table-responsive'>";
        echo "<table class='table table-sm table-striped text-center table-bordered w-100 border border-2 border-primary-subtle align-middle mx-auto'>";
        echo "<thead class ='table-dark'>";
        echo "<tr>";
        echo "<th> Reservation ID </th>";
        echo "<th> Ticket Number </th>";
        echo "<th> Username </th>";
        echo "<th> Bus Number </th>";
        echo "<th> Route Name </th>";
        echo "<th> Departure Date </th>";
        echo "<th> Departure Time </th>";
        echo "<th> Passenger Name </th>";
   
        echo "<th> Contact Information </th>";
        echo "<th> Seat Number </th>";
        echo "<th> Reservation Date </th>";
        echo "<th> Price (₱)</th>";
        echo "<th> Payment Method </th>";
        echo "<th> Reference Number </th>";
        echo "<th> Status </th>";
        echo "<th> Action </th>";
        echo "</tr>";
        echo "</thead>";


        while ($fielddata = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fielddata['reservation_id'] . "</td>";
            "<td>" . $fielddata['schedule_id'] . "</td>";
            "<td>" . $fielddata['bus_id'] . "</td>";
            "<td>" . $fielddata['route_id'] . "</td>";
            echo "<td>" . $fielddata['ticket_number'] . "</td>";
            echo "<td>" . $fielddata['username'] . "</td>";
            echo "<td>" . $fielddata['bus_number'] . "</td>";
            echo "<td>" . $fielddata['route_name'] . "</td>";
            echo "<td>" . $fielddata['departure_date'] . "</td>";
            echo "<td>" .  date_format(date_create($fielddata['departure_time']), 'g:i A') . "</td>";
            echo "<td>" . $fielddata['passenger_name'] . "</td>";
           
            echo "<td>" . $fielddata['contact_information'] . "</td>";
            echo "<td>" . $fielddata['seat_number'] . "</td>";
            echo "<td>" . date_format(date_create($fielddata['reservation_date']), 'Y-m-d g:i A') . "</td>";
            echo "<td>" . $fielddata['price'] . "</td>";
            echo "<td>" . $fielddata['payment_method'] . "</td>";
            echo "<td>" . $fielddata['reference_num'] . "</td>";
            echo "<td>" . $fielddata['status'] . "</td>";
            echo "<td class ='pt-3 pb-0'>";
    ?>
            <form method="post" action="Reservation2.php">
                <input type="hidden" name="res_del" value="<?php echo $fielddata['reservation_id']; ?>" class="form-control" />
                <button class="btn btn-success" name="edit" type="button" data-bs-toggle="collapse" href="#updateFormCollapse<?php echo $fielddata['reservation_id']; ?>" data-bs-target="#updateFormCollapse<?php echo $fielddata['reservation_id']; ?>" aria-expanded="false" aria-controls="updateFormCollapse<?php echo $fielddata['reservation_id']; ?>">Edit</button>
            </form>
            <?php
            echo "</td>";
            echo "</tr>";
            // Collapse
            echo "<tr>";
            echo "<td colspan='17' class ='tble-bg'>";
            echo "<div class='collapse w-50 mx-auto text-start p-5 text-white' id='updateFormCollapse" . $fielddata['reservation_id'] . "'>";
            ?>
            <!-- form-->

            <form action="Reservation2.php" method="post">
                <h5 class="hd-text text-center pb-2 fs-5" id="title">Reservation Editing Form</h5>


                <div class="col">
                    <!-- Reservation ID input -->
                    <input type="hidden" name="update_reservationID" value="<?php echo $fielddata['reservation_id']; ?>" class="form-control" readonly />
                </div>
                <div class="col">
                    <!-- Reservation ID input -->
                    <input type="hidden" name="update_scheduleID" value="<?php echo $fielddata['schedule_id']; ?>" class="form-control" readonly />

                </div>
                <div class="col">
                    <!-- Reservation ID input -->
                    <input type="hidden" name="update_busid" value="<?php echo $fielddata['bus_id']; ?>" class="form-control" readonly />

                </div>
                <div class="col">
                    <!-- Reservation ID input -->
                    <input type="hidden" name="update_routeid" value="<?php echo $fielddata['route_id']; ?>" class="form-control" readonly />

                </div>


                <!-- Contact Number -->
                <input type="hidden" name="update_contactInformation" value="<?php echo $fielddata['contact_information']; ?>" class="form-control" readonly />

                <div class="row form-outline">
                    <div class="col">
                        <!-- Passenger Name input -->
                        <input type="text" id="" name="update_passengerName" value="<?php echo $fielddata['passenger_name']; ?>" class="form-control" readonly />
                        <label class="form-label" for="">Passenger Name</label>

                    </div>
                    <div class="col">
                        <!-- Seat Number -->
                        <input type="text" id="" name="update_seatNumber" value="<?php echo  $fielddata['seat_number']; ?>" class="form-control" readonly />
                        <label class="form-label" for="">Seat Number</label>
                    </div>
                </div>
              
                <div class="row form-outline">


                    <div class="col">
                        <!-- Seat Number -->
                        <select id="update_paymethod" name="update_paymethod" class="form-select">
                            <option value="E-wallet" <?php echo ($fielddata['payment_method'] == 'E-wallet') ? 'selected' : ''; ?>>E-wallet</option>
                            <option value="Cash" <?php echo ($fielddata['payment_method'] == 'Cash') ? 'selected' : ''; ?>>Cash</option>
                        </select>

                        <label class="form-label" for="">Pay Method</label>
                    </div>

                    <!-- Status input -->
                    <div class="col">
                        <select name="update_status" id="status" class="form-select">
                            <?php
                            echo '<option value="" disabled>Select the status</option>';

                            foreach ($status as $statuses) {
                                $selected = ($fielddata['status'] === $statuses) ? 'selected' : '';
                                echo '<option value="' . $statuses . '" ' . $selected . '>' . $statuses . '</option>';
                            }

                            ?>
                        </select>
                        <label class="form-label" for="">Status</label>
                    </div>
                </div>

                <!-- Save button -->
                <div class="row form-outline text-center pt-1">
                    <div class="col">
                        <button type="submit" name="updating" value="Update" class="btn btn-success" onclick="return confirm('Are you sure you want to edit this?');">Update</button>
                    </div>
                </div>
            </form>

        <?php
            echo "</div>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</div>";
        echo "</div>";
        echo "</table>";
    } else {
        echo "<div class='row'>";
        echo "<div class='col'>";
        echo "<br>No record found!";
        echo "</div>";
        echo "</div>";
    }


    //Update Button


    if (isset($_POST['updating'])) {
        $reservationID_update = $_POST['update_reservationID'];
        $scheduleID_update = $_POST['update_scheduleID'];
        $busID_update = $_POST['update_busid'];
        $routeID_update = $_POST['update_routeid'];
        $status_update = $_POST['update_status'];
        $pay_update = $_POST['update_paymethod'];

        $updatesql = "UPDATE tbl_reservation SET status = '$status_update'
        WHERE reservation_id = $reservationID_update AND schedule_id = $scheduleID_update";

        $update1sql = "UPDATE tbl_reservation SET payment_method = '$pay_update'
        WHERE reservation_id = $reservationID_update AND schedule_id = $scheduleID_update";

        $resultup = $con->query($updatesql);
        $resultup1 = $con->query($update1sql);

        //check if successfully updated
        if ($resultup && $resultup1 == True) {
        ?>
            <script>
                   Swal.fire({
      position: "center",
      icon: "success",
      title: "Update has been successful. Please refresh the page.",
      showConfirmButton: false,
      timer: 1500
    });
                </script>
    <?php
            $action = 'Updated Reservation';
            logActivity($con, $userID, $action);
        } else {
            //if not, check query error details
            echo $con->error;
        }
    }

    ?>
    </div>

    </div>

    <script src="../formvalidation.js"> </script>
</body>

</html>