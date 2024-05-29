<?php
session_start();
require "dbconnect.php";
include "logger.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alps Schedule Details</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="sidebar13.css">
</head>

<body class="hd-text">
    <?php require "BusArrays.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            document.getElementById("tripDate").setAttribute('type', 'date');
            document.getElementById("tripDate").setAttribute('min', formattedDate);
            document.getElementById("editTripDate").setAttribute('type', 'date');
            document.getElementById("editTripDate").setAttribute('min', formattedDate);
        }
    </script>


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
            <li class="active">
                <i class="bi bi-calendar3"></i>
                <a class="active" href="Schedule2.php">Schedule</a>
            </li>
            <li>
                <i class="bi bi-calendar-date"></i>
                <a href="Reservation2.php">Reservation</a>
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
                <h1 class="hd-font bg-row mx-auto text-white rounded-bottom mx-1 p-3">SCHEDULE DETAILS | Welcome, <?php echo $_SESSION['username']; ?></h1>

                <div class="row bg-row mx-auto p-1 m-1 rounded">
                    <form action="Schedule2.php" method="post">
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
                                    // Update the date and time every second
                                    setInterval(updateDateTime, 1000);

                                    // Initial update
                                    updateDateTime();
                                </script>
                            </div>
                        </div>
                </div>
                </form>
                
                <!-- Modal Bootstrap -->
                <button type="button" id="formDetailsBtn" class="btn btn-color mt-1 hd-text" data-bs-toggle="modal" data-bs-target="#formDetails">
                    Add Schedule Details <!-- add icon -->
                </button>

                <div class="modal" id="formDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="title" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fs-5" id="title">Schedule Details Form</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <form action="Schedule2.php" method="post" novalidate class="needs-validation">
                                    <div class="row form-outline">
                                        <div class="col">
                                            <!-- Bus Number input -->
                                            <label class="form-label" for="bus_num">Bus Number<span class="text-danger">*</span></label>
                                            <select name="bus_num" class="form-select" required>
                                                <?php
                                                $sqlfk = "SELECT DISTINCT bus_number, bus_id FROM tbl_bus";
                                                $bus_fk = $con->query($sqlfk);

                                                if ($bus_fk->num_rows > 0) {
                                                    echo "<option selected disabled value=''>Choose a bus number</option>";
                                                    while ($busFK = $bus_fk->fetch_assoc()) {
                                                        echo "<option value='" . $busFK['bus_number']  . "'>" .  "B" . $busFK['bus_id'] . " - " . $busFK['bus_number'] . "</option> ";
                                                    }
                                                } else {
                                                    echo "<option value=''>No busses found</option>";
                                                }
                                                ?>
                                            </select>

                                            <div class="form-text">
                                                Bus & Routes should match (ex. B1 to B1).
                                            </div>
                                            <div class="invalid-feedback text-start">Select a Bus Number.</div>
                                            <div class="valid-feedback text-start">Bus Number selected.</div>
                                        </div>
                                    </div>

                                    <!-- Departure Area -->
                                    <div class="row form-outline mt-2">
                                        <div class="col">
                                            <label class="form-label" for="route_id">Departure Area<span class="text-danger">*</span></label>
                                            <select name="dep_loc" class="form-select" required>
                                                <?php

                                                $sqlfk = "SELECT bus_id, departure_location FROM tbl_bus";
                                                $route_fk = $con->query($sqlfk);

                                                if ($route_fk->num_rows > 0) {
                                                    echo "<option selected disabled value=''>Choose an area</option>";
                                                    while ($routeFK = $route_fk->fetch_assoc()) {
                                                        echo "<option value='" . $routeFK['bus_id'] . "-" . $routeFK['departure_location'] . "'>" . "B" . $routeFK['bus_id'] . " - " . $routeFK['departure_location'] . "</option>";
                                                    }
                                                } else {
                                                    echo "<option value=''>No routes found</option>";
                                                }
                                                ?>
                                            </select>
                                            <div class="invalid-feedback text-start">Select a departure area.</div>
                                            <div class="valid-feedback text-start">Departure area selected.</div>
                                        </div>

                                        <!-- Destination -->
                                        <div class="col">
                                            <label class="form-label" for="route_id">Destination<span class="text-danger">*</span></label>
                                            <select name="desti" class="form-select" required>
                                                <?php
                                                $sqlfk = "SELECT bus_id, destination FROM tbl_bus";
                                                $route_fk = $con->query($sqlfk);

                                                if ($route_fk->num_rows > 0) {
                                                    echo "<option selected disabled value=''>Choose a destination</option>";
                                                    while ($routeFK = $route_fk->fetch_assoc()) {
                                                        echo "<option value='" . $routeFK['bus_id'] . "-" . $routeFK['destination'] . "'>" . "B" . $routeFK['bus_id'] . " - " . $routeFK['destination'] . "</option>";
                                                    }
                                                } else {
                                                    echo "<option value=''>No routes found</option>";
                                                }
                                                ?>
                                            </select>
                                            <div class="invalid-feedback text-start">Select a destination.</div>
                                            <div class="valid-feedback text-start">Destination selected.</div>
                                        </div>
                                    </div>

                                    <!-- Departure Date input -->
                                    <div class="row form-outline mt-2">
                                        <div class="col">
                                            <label class="form-label" for="">Departure Date<span class="text-danger">*</span></label>
                                            <input type="date" name="departure_date" id="editTripDate" class="form-control" onfocus="setMinDate()" required />
                                            <div class="invalid-feedback text-start">Set departure date.</div>
                                            <div class="valid-feedback text-start">Departure date selected.</div>
                                        </div>

                                        <!-- Departure Time input -->
                                        <div class="col">
                                            <label class="form-label" for="">Departure Time<span class="text-danger">*</span></label>
                                            <input type="time" name="departure_time" id="" class="form-control" required />
                                            <div class="invalid-feedback text-start">Set departure time.</div>
                                            <div class="valid-feedback text-start">Departure time selected.</div>
                                        </div>
                                    </div>

                                    <!-- Available Seats input -->
                                    <div class="row form-outline mt-2">
                                        <div class="col">
                                            <label class="form-label" for="">Available Seats<span class="text-danger">*</span></label>
                                            <input type="number" name="available_seats" id="" class="form-control" min = '0' placeholder="Ex. 40" required />
                                            <div class="invalid-feedback text-start">Enter avaialble seats.</div>
                                            <div class="valid-feedback text-start">Available seats entered.</div>
                                        </div>
                                    </div>
                            </div>

                            <!-- Save Button -->
                            <div class="modal-footer d-flex justify-content-center">
                                <button type="submit" name="add" class="btn btn-primary">Add</button>
                                <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <?php
                    //Add Button
                    if (isset($_POST['add'])) {
                        try {
                            
                            list($dep_route_id, $dep_loc) = explode('-', $_POST['dep_loc']);
                            list($dest_route_id, $desti) = explode('-', $_POST['desti']);

                            // Check if dep_loc and desti have the same route_id
                            if ($dep_route_id === $dest_route_id) {
                                $route_name = $dep_loc . " to " . $desti;
                                $busNum = $_POST['bus_num'];
                                $departureDate = $_POST['departure_date'];
                                $departureTime = $_POST['departure_time'];
                                $availableSeats = $_POST['available_seats'];
                            

                                try {
                                    $bus_check = $con->query("SELECT bus_id FROM tbl_bus WHERE bus_number = '$busNum' AND departure_location = '$dep_loc' AND destination ='$desti'");
                                    if ($bus_check->num_rows > 0) {
                                        $busID = $bus_check->fetch_assoc()['bus_id'];
                                        if (!$busID) {
                                            throw new Exception("Departure location or destination does not exist for the specified bus number.");
                                        }
                                    } else {
                                        throw new Exception("Departure location or destination does not exist for the specified bus number.");
                                    }

                                    $route_check = $con->query("SELECT route_id FROM tbl_route WHERE route_name = '$route_name'");
                                    if ($route_check->num_rows > 0) {
                                        $routeID = $route_check->fetch_assoc()['route_id'];
                                        if (!$routeID) {
                                            throw new Exception("Departure location or destination does not exist for the specified bus number.");
                                        }
                                    } else {
                                        throw new Exception("Departure location or destination does not exist for the specified bus number.");
                                    }
                                } catch (Exception $e) {
                                    // Handle the exception
                                    echo "<div class='alert alert-warning' role='alert'>" . $e->getMessage() . "</div>";
                                }

                                $sched_ins = $con->prepare("INSERT INTO tbl_schedule (bus_id, route_id, departure_date, departure_time, available_seats) VALUES (?, ?, ?, ?, ?)");
                                $sched_ins->bind_param("iissi", $busID, $routeID, $departureDate, $departureTime, $availableSeats);
                                $sched_res = $sched_ins->execute(); 

                                $con->commit();
                                if ($sched_res == TRUE) { 
                    ?>
                                    <script>
                                        Swal.fire({
                                            position: "center",
                                            icon: "success",
                                            title: "Schedule has been inserted.",
                                            showConfirmButton: false,
                                            timer: 1500
                                        });
                                    </script>

                    <?php
                                    $action = 'Added Schedule';
                                    logActivity($con, $userID, $action);
                                } else {
                                    echo $con->error;
                                }
                            } else {
                                ?> <div class="alert alert-warning" role="alert">
                                    <?php throw new Exception("Departure location and Destination must have the same ID."); ?>
                                </div> <?php
                                    }
                                } catch (Exception $e) {
                                    $con->rollback();
                                    echo "Failed to add schedule: " . $e->getMessage();
                                }
                            }

                    ?>
                </div>
            </div>
        </div>


        <?php

        //Search Button
        if (isset($_POST['searchbutton'])) {

            if ($_POST['search'] != NULL) {
                $search = $_POST['search'];
                $selectsql = "Select * from sched_reserve_view where 
                `Schedule ID` LIKE '%" . $search . "%' 
            OR `Route ID` LIKE '%" . $search . "%' 
            OR `Bus ID` LIKE '%" . $search . "%' 
            OR`Bus Number` LIKE '%" . $search . "%' 
            OR `Bus Type` LIKE '%" . $search . "%' 
            OR `Departure Date` LIKE'%" . $search . "%' 
            OR `Departure Time` LIKE'%" . $search . "%' 
            OR `Departure Area` LIKE'%" . $search . "%' 
            OR `Destination` LIKE'%" . $search . "%' 
            OR `Total Seats` LIKE'%" . $search . "%' 
            OR `Available Seats` LIKE'%" . $search . "%'   ORDER BY  `Schedule ID` DESC";
            } else {
                $selectsql = "Select * from sched_reserve_view  ORDER BY  `Schedule ID` DESC";
            }
        } else {
            $selectsql = "Select * from sched_reserve_view ORDER BY  `Schedule ID` DESC";
        }

        $result = $con->query($selectsql);

        if ($result->num_rows > 0) {
            echo "<div class=' bg-row p-5 rounded'>";
            echo "<div class='bdr'>";
            echo "<div class='table-responsive'>";
            echo "<table class='table table-striped text-center table-bordered w-100 border border-2  border-primary-subtle align-middle mx-auto'>";
            echo "<thead class ='table-dark'>";
            echo "<tr>";
            echo "<th> Schedule ID </th>";
            echo "<th> Bus Number </th>";
            echo "<th> Bus Type </th>";
            echo "<th> Departure Date </th>";
            echo "<th> Departure Time </th>";

            echo "<th> Departure Area </th>";
            echo "<th> Destination </th>";
            echo "<th> Total Seats </th>";
            echo "<th> Available Seats </th>";
            echo "<th> Price (₱) </th>";
            echo "<th> Action </th>";
            echo "</tr>";
            echo "</thead>";

            while ($fielddata = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $fielddata['Schedule ID'] . "</td>";
                "<td>" . $fielddata['Route ID'] . "</td>";
                "<td>" . $fielddata['Bus ID'] . "</td>";
                echo "<td>" . $fielddata['Bus Number'] . "</td>";
                echo "<td>" . $fielddata['Bus Type'] . "</td>";
                echo "<td>" . $fielddata['Departure Date'] . "</td>";
                echo "<td>" . date_format(date_create($fielddata['Departure Time']), 'g:i A') . "</td>";


                echo "<td>" . $fielddata['Departure Area'] . "</td>";
                echo "<td>" . $fielddata['Destination'] . "</td>";
                echo "<td>" . $fielddata['Total Seats'] . "</td>";
                echo "<td>" . $fielddata['Available Seats'] . "</td>";
                echo "<td>" . number_format($fielddata['Price']) . "</td>";
                echo "<td class ='pt-3 pb-0'>";
        ?>
                <form method="post" action="Schedule2.php">
                    <input type="hidden" name="schel_del" value="<?php echo $fielddata['Schedule ID']; ?>" class="form-control" />
                    <button class="btn btn-success" name="edit" type="button" data-bs-toggle="collapse" href="#updateFormCollapse<?php echo $fielddata['Schedule ID']; ?>" data-bs-target="#updateFormCollapse<?php echo $fielddata['Schedule ID']; ?>" aria-expanded="false" aria-controls="updateFormCollapse<?php echo $fielddata['Schedule ID']; ?>">Edit</button>
                </form>
                <?php
                echo "</td>";
                echo "</tr>";

                // Collapse
                echo "<tr>";
                echo "<td colspan='12' class ='tble-bg'>";
                echo "<div class='collapse w-50 mx-auto text-start p-5 text-white' id='updateFormCollapse" . $fielddata['Schedule ID'] . "'>";
                ?>
                
                <!-- Form for Editing -->
                <form action="Schedule2.php" method="post">
                    <h5 class="hd-text text-center pb-2 fs-5" id="title">Schedule Editing Form</h5>

                    <!-- Schedule ID input -->
                    <div class="col">
                        <input type="hidden" name="update_scheduleID" value="<?php echo  $fielddata['Schedule ID']; ?>" class="form-control" readonly />
                    </div>
                    <div class="col">
                        <input type="hidden" name="update_busID" value="<?php echo  $fielddata['Bus ID']; ?>" class="form-control" readonly />
                    </div>
                    <div class="col">
                        <input type="hidden" name="update_routeID" value="<?php echo  $fielddata['Route ID']; ?>" class="form-control" readonly />
                    </div>

                    <!-- Departure Date input -->
                    <div class="row form-outline">
                        <div class="col">
                            <input type="date" name="update_departureDate" value="<?php echo $fielddata['Departure Date']; ?>" id="tripDate" class="form-control" onfocus="setMinDate()" />
                            <label class="form-label" for="">Departure Date</label>
                        </div>

                        <!-- Departure Time input -->
                        <div class="col">
                            <input type="time" name="update_departureTime" value="<?php echo $fielddata['Departure Time'] ?>" class="form-control" />
                            <label class="form-label" for="">Departure Time</label>
                        </div>
                    </div>

                    <!-- Available Seats input -->
                    <div class="row form-outline">
                        <div class="col">
                            <input type="number" name="update_availableSeats" value="<?php echo $fielddata['Available Seats']; ?>" class="form-control" />
                            <label class="form-label" for="">Available Seats</label>
                        </div>
                    </div>

                    <!-- Submit -->
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

            echo "</table>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        } else {
            echo "<div class='row'>";
            echo "<div class='col'>";
            echo "<br>No record found!";
            echo "</div>";
            echo "</div>";
        }

        //Update Button
        if (isset($_POST['updating'])) {
            $scheduleID_update = $_POST['update_scheduleID'];
            $busID_update = $_POST['update_busID'];
            $routeID_update = $_POST['update_routeID'];
            $departureDate_update = $_POST['update_departureDate'];
            $departureTime_update = date_format(date_create($_POST['update_departureTime']), 'Y-m-d H:i:s');
            $availableSeats_update = $_POST['update_availableSeats'];

            $update_schedule_query = $con->prepare("
            UPDATE tbl_schedule 
            SET 
                departure_date = ?, 
                available_seats = ?,
                departure_time = ?
            WHERE 
                schedule_id = ?
            ");

            $update_schedule_query->bind_param("sisi", $departureDate_update, $availableSeats_update, $departureTime_update, $scheduleID_update);

            $result_sched = $update_schedule_query->execute();

            if ($result_sched || $result_bus || $result_route == True) {
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
                $action = 'Updated Schedule';
                logActivity($con, $userID, $action);
            } else {
                echo $con->error;
            }
        }
        ?>
    </div>
    </div>

<script src="../formvalidation.js"> </script>
</body>

</html>