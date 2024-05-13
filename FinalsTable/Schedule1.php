
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="sidebar7.css">

</head>

<body class ="hd-text">
    <?php require_once "dbconnect.php"; ?>
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
                <a href="Overview1.php">Overview</a>
            </li>

            <li>
                <i class="bi bi-person-circle"></i>
                <a href="User1.php">User</a>
            </li>
            <li>
                <i class="bi bi-card-list"></i>
                <a href="Logs1.php">Logs</a>
            </li>

            <li class="disabled border border-light my-2">
                <hr class="">
            </li>
            <li class="disabled">
                <h4 class="">Bus Menu</h4>
            </li>

            <li>
                <i class="bi bi-bus-front"></i>
                <a href="Bus1.php">Bus</a>
            </li>
            <li>
                <i class="bi bi-sign-turn-right-fill"></i>
                <a href="Route1.php">Route</a>
            </li>
            <li class="active">
                <i class="bi bi-calendar3"></i>
                <a class="active" href="Schedule1.php">Schedule</a>
            </li>
            <li>
                <i class="bi bi-calendar-date"></i>
                <a href="Reservation1.php">Reservation</a>
            </li>
            <li class="disabled border border-light my-2">
                <hr class="">
            </li>

            <li>
                <i class="bi bi-box-arrow-right"></i>
                <a href="Home.php">Log Out</a>
            </li>
        </ul>


    </aside>
    <div class="container-fluid">




        <div class="row ">
            <div class="col pb-2 ">
                <h1 class="hd-font bg-row mx-auto text-white rounded-bottom mx-1 p-3">SCHEDULE DETAILS | Welcome Admin!</h1>

                <div class="row bg-row mx-auto p-1 m-1 rounded">

                    <form action="Schedule1.php" method="post">

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

                            <form action="Schedule1.php" method="post">
                                <div class="modal-body">

                                    <div class="row form-outline">
                                        <!-- Schedule ID input -->
                                        <!-- <div class="col">
                          <input type="number" name="schedule_id" id="" class="form-control" />
                          <label class="form-label" for="">Schedule ID</label>
                        </div> -->

                                        <div class="col">
                                            <!-- Bus ID input -->
                                            <!--  <input type="number" name="bus_id" id="" class="form-control" />
                                            <label class="form-label" for="">Bus ID</label> -->
                                            <select name="bus_id" class="form-select">
                                                <?php

                                                $sqlfk = "SELECT bus_id, bus_number FROM tbl_bus"; // Change routes_table to your actual table name

                                                // Execute query
                                                $bus_fk = $con->query($sqlfk);

                                                // Check if any results returned
                                                if ($bus_fk->num_rows > 0) {
                                                    // Output data of each row
                                                    while ($busFK = $bus_fk->fetch_assoc()) {
                                                        echo "<option value='" . $busFK['bus_id'] . "'>" . $busFK['bus_id'] . " (" . $busFK['bus_number'] . ")" . "</option>";
                                                    }
                                                } else {
                                                    echo "<option value=''>No busses found</option>";
                                                }
                                                ?>

                                            </select>
                                            <label class="form-label" for="bus_id">Bus ID</label>
                                        </div>

                                        <div class="col">
                                            <!-- Route ID input -->
                                            <!--     <input type="number" name="route_id" id="" class="form-control" />
                                            <label class="form-label" for="">Route ID</label> -->
                                            <select name="route_id" class="form-select">
                                                <?php

                                                $sqlfk = "SELECT route_id, route_name FROM tbl_route"; // Change routes_table to your actual table name

                                                // Execute query
                                                $route_fk = $con->query($sqlfk);

                                                // Check if any results returned
                                                if ($route_fk->num_rows > 0) {
                                                    // Output data of each row
                                                    while ($routeFK = $route_fk->fetch_assoc()) {
                                                        echo "<option value='" . $routeFK['route_id'] . "'>" . $routeFK['route_id'] . " (" . $routeFK['route_name'] . ")" . "</option>";
                                                    }
                                                } else {
                                                    echo "<option value=''>No routes found</option>";
                                                }
                                                ?>

                                            </select>
                                            <label class="form-label" for="route_id">Route ID</label>
                                        </div>
                                    </div>

                                    <!-- Departure Date input -->
                                    <div class="row form-outline">
                                        <div class="col">
                                            <input type="date" name="departure_date" id="" class="form-control" />
                                            <label class="form-label" for="">Departure Date</label>
                                        </div>
                                        <!-- Departure Time input -->
                                        <div class="col">
                                            <input type="time" name="departure_time" id="" class="form-control" />
                                            <label class="form-label" for="">Departure Time</label>
                                        </div>
                                    </div>

                                    <!-- Available Seats input -->
                                    <div class="form-outline">
                                        <input type="number" name="available_seats" id="" class="form-control" />
                                        <label class="form-label" for="">Available Seats</label>
                                    </div>

                                    <!-- Save button -->
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button type="submit" name="add" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php

        //Search Button
        if (isset($_POST['searchbutton'])) {

            //to check the search box if empty or not 
            if ($_POST['search'] != NULL) {
                $search = $_POST['search'];
                $selectsql = "Select * from tbl_schedule where 
            schedule_id LIKE '%" . $search . "%' 
            OR bus_id LIKE '%" . $search . "%' 
            OR route_id LIKE '%" . $search . "%' 
            OR departure_date LIKE'%" . $search . "%' 
            OR departure_time LIKE'%" . $search . "%' 
            OR available_seats LIKE'%" . $search . "%' ";
            } else {
                $selectsql = "Select * from tbl_schedule";
            }
        } else {
            $selectsql = "Select * from tbl_schedule";
        }



        //Add Button
        if (isset($_POST['add'])) {
            $busID = $_POST['bus_id'];
            $routeID = $_POST['route_id'];
            $departureDate = $_POST['departure_date'];
            $departureTime = $_POST['departure_time'];
            $availableSeats = $_POST['available_seats'];


            $insertsql = "Insert into tbl_schedule (bus_id,route_id,departure_date,departure_time,available_seats)
        values ($busID,$routeID,'$departureDate','$departureTime',$availableSeats)
        ";

            $result = $con->query($insertsql);


            //check if successfully added
            if ($result == True) {
        ?>
                <script>
                    Swal.fire({
                        title: "Do you want to add this user?",
                        showDenyButton: true,
                        showCancelButton: true,
                        confirmButtonText: "Add",
                        denyButtonText: `Don't Add`
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            Swal.fire("Saved!", "", "success");
                        } else if (result.isDenied) {
                            Swal.fire("Changes are not saved", "", "info");
                        }
                    });
                </script>
            <?php
            } else {
                //if not inserted, check query error details
                echo $con->error;
            }
        }


        $result = $con->query($selectsql);

        //check table if there is a record
        //num_rows - will return the no of rows inside a table
        if ($result->num_rows > 0) {
            echo "<div class=' bg-row p-5 rounded'>";
            echo "<div class='bdr table-responsive'>";
            echo "<table class='table table-striped text-center table-bordered w-100 border border-2  border-primary-subtle align-middle mx-auto'>";
            echo "<thead class ='table-dark'>";
            echo "<tr>";
            echo "<th> Schedule ID </th>";
            echo "<th> Bus ID </th>";
            echo "<th> Route ID </th>";
            echo "<th> Departure Date </th>";
            echo "<th> Depature Time </th>";
            echo "<th> Available Seats </th>";
            echo "<th> Action </th>";
            echo "</tr>";
            echo "</thead>";


            while ($fielddata = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $fielddata['schedule_id'] . "</td>";
                echo "<td>" . $fielddata['bus_id'] . "</td>";
                echo "<td>" . $fielddata['route_id'] . "</td>";
                echo "<td>" . $fielddata['departure_date'] . "</td>";
                echo "<td>" . date_format(date_create($fielddata['departure_time']), 'g:i A') . "</td>";
                echo "<td>" . $fielddata['available_seats'] . "</td>";
                echo "<td class ='pt-3 pb-0'>";
            ?>
                <form method="post" action="Schedule1.php">
                    <input type="hidden" name="schel_del" value="<?php echo $fielddata['schedule_id']; ?>" class="form-control" />
                    <button class="btn btn-success" name="edit" type="button" data-bs-toggle="collapse" href="#updateFormCollapse<?php echo $fielddata['schedule_id']; ?>" data-bs-target="#updateFormCollapse<?php echo $fielddata['schedule_id']; ?>" aria-expanded="false" aria-controls="updateFormCollapse<?php echo $fielddata['schedule_id']; ?>">Edit</button>
                    <button class='btn btn-danger delete-button' name='delete'>Delete</button>
                </form>
                <?php
                echo "</td>";
                echo "</tr>";

                // Collapse
                echo "<tr>";
                echo "<td colspan='8' class ='tble-bg'>";
                echo "<div class='collapse w-50 mx-auto text-start p-5 text-white' id='updateFormCollapse" . $fielddata['schedule_id'] . "'>";
                ?>
                <!-- form-->

                <form action="Schedule1.php" method="post">
                    <h5 class="hd-text text-center pb-2 fs-5" id="title">Schedule Editing Form</h5>

                    <div class="row form-outline">
                        <!-- Schedule ID input -->
                        <div class="col">
                            <input type="number" name="update_scheduleID" value="<?php echo  $fielddata['schedule_id']; ?>" class="form-control" readonly />
                            <label class="form-label" for="">Schedule ID</label>
                        </div>

                        <div class="col">
                            <!-- Bus ID input -->
                            <!--   <input type="number" name="update_busID" value="<?php /* echo $fielddata['bus_id']; */ ?>" class="form-control" />
                            <label class="form-label" for="">Bus ID</label> -->

                            <select name="update_busID" class="form-select">
                                <?php
                                $bus_query = "select bus_id, bus_number FROM tbl_bus";
                                $bus_result = $con->query($bus_query);

                                if ($bus_result->num_rows > 0) {
                                    while ($bus_data = $bus_result->fetch_assoc()) {
                                        $selected = ($bus_data['bus_id'] == $fielddata['bus_id']) ? "selected" : "";
                                        echo "<option value='" . $bus_data['bus_id'] . "' $selected>" . $bus_data['bus_id'] . " (" . $bus_data['bus_number'] . ")" . "</option>";
                                    }
                                }
                                ?>
                            </select>
                            <label class="form-label" for="">Bus ID</label>
                        </div>

                        <div class="col">
                            <!-- Route ID input -->
                          <!--  <input type="number" name="update_routeID" value="<?php /* echo $fielddata['route_id']; */?>" class="form-control" />
                            <label class="form-label" for="">Route ID</label> -->

                            <select name="update_routeID" class="form-select">
                                <?php
                                $route_query = "select route_id, route_name FROM tbl_route";
                                $route_result = $con->query($route_query);

                                if ($route_result->num_rows > 0) {
                                    while ($route_data = $route_result->fetch_assoc()) {
                                        $selected = ($route_data['route_id'] == $fielddata['route_id']) ? "selected" : "";
                                        echo "<option value='" . $route_data['route_id'] . "' $selected>" . $route_data['route_id'] . " (" . $route_data['route_name'] . ")" . "</option>";
                                    }
                                }
                                ?>
                            </select>
                            <label class="form-label" for="">Route ID</label>
                        </div>
                    </div>

                    <!-- Departure Date input -->
                    <div class="row form-outline">
                        <div class="col">
                            <input type="date" name="update_departureDate" value="<?php echo $fielddata['departure_date']; ?>" class="form-control" />
                            <label class="form-label" for="">Departure Date</label>
                        </div>
                        <!-- Departure Time input -->
                        <div class="col">
                            <input type="time" name="update_departureTime" value="<?php echo $fielddata['departure_time']; ?>" class="form-control" />
                            <label class="form-label" for="">Departure Time</label>
                        </div>
                    </div>

                    <!-- Available Seats input -->
                    <div class="form-outline">
                        <input type="number" name="update_availableSeats" value="<?php echo $fielddata['available_seats']; ?>" class="form-control" />
                        <label class="form-label" for="">Available Seats</label>
                    </div>
                    <!-- Submit -->
                    <div class="row form-outline text-center pt-1">
                        <div class="col">
                            <button type="submit" name="updating" value="Update" class="btn btn-success">Update</button>
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
            echo "<br>No record found!";
            echo "</div>";
            echo "</div>";
        }

        //Delete Button
        if (isset($_POST['delete'])) {
            $sched_delete = $_POST['schel_del']; // Retrieve the user_id from the form

            // Use prepared statements to prevent SQL injection
            $deletesql = "DELETE FROM tbl_schedule WHERE schedule_id = ?";
            $stmt = $con->prepare($deletesql);
            $stmt->bind_param("i", $sched_delete); // Assuming user_id is an integer
            $resultdel = $stmt->execute();


            //check if successfully deleted
            if ($resultdel == True) {
            ?>
                <script>
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your file has been deleted.",
                                icon: "success"
                            });
                        }
                    });
                </script>
            <?php
            } else {
                //if not, check query error details
                echo $con->error;
            }
        }

        //Update Button


        if (isset($_POST['updating'])) {
            $scheduleID_update = $_POST['update_scheduleID'];
            $busID_update = $_POST['update_busID'];
            $routeID_update = $_POST['update_routeID'];
            $departureDate_update = $_POST['update_departureDate'];
            $departureTime_update = $_POST['update_departureTime'];
            $availableSeats_update = $_POST['update_availableSeats'];



            $updatesql = "UPDATE tbl_schedule SET schedule_id = $scheduleID_update, bus_id = $busID_update,
            route_id = $routeID_update, departure_date = '$departureDate_update', departure_time = '$departureTime_update',
            available_seats = $availableSeats_update WHERE schedule_id = $scheduleID_update";
            $resultup = $con->query($updatesql);

            //check if successfully updated
            if ($resultup == True) {
            ?>
                <script>
                    Swal.fire({
                        title: "Do you want to update?",
                        showDenyButton: true,
                        showCancelButton: true,
                        confirmButtonText: "Update",
                        denyButtonText: `Don't Update`
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            Swal.fire("Updated!", "", "success");
                        } else if (result.isDenied) {
                            Swal.fire("Changes are not updated", "", "info");
                        }
                    });
                </script>
        <?php
            } else {
                //if not, check query error details
                echo $con->error;
            }
        }



        ?>
    </div>

    </div>


</body>

</html>