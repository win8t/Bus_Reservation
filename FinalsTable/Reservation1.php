<?php
  session_start();
  require "dbconnect.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="sidebar9.css">

</head>

<body class ="hd-text">
    <?php
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
            <li>
                <i class="bi bi-calendar3"></i>
                <a href="Schedule1.php">Schedule</a>
            </li>
            <li class="active">
                <i class="bi bi-calendar-date"></i>
                <a class="active" href="Reservation1.php">Reservation</a>
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

                    <form action="Reservation1.php" method="post">

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
                <button type="button" id="formDetailsBtn" class="btn btn-color hd-text mt-1" data-bs-toggle="modal" data-bs-target="#formDetails">
                    Add Reservation Details <!-- add icon -->
                </button>

                <div class="modal" id="formDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="title" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fs-5" id="title">Reservation Details Form</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <form action="Reservation1.php" method="post">
                                <div class="modal-body">

                                    <div class="row form-outline">
                                        <div class="col">
                                            <!-- Schedule ID input -->
                                            <!-- <input type="number" name="schedule_id" id="" class="form-control" />
                        <label class="form-label" for="">Schedule ID</label> -->
                                            <select name="schedule_id" class="form-select">
                                                <?php

                                                $sqlfk = "SELECT schedule_id, departure_date, departure_time FROM tbl_schedule"; // Change routes_table to your actual table name

                                                // Execute query
                                                $sched_fk = $con->query($sqlfk);

                                                // Check if any results returned
                                                if ($sched_fk->num_rows > 0) {
                                                    // Output data of each row
                                                    while ($schedFK = $sched_fk->fetch_assoc()) {
                                                        echo "<option value='" . $schedFK['schedule_id'] . "'>" . $schedFK['schedule_id'] . " (" . $schedFK['departure_date'] . " " . date_format(date_create($schedFK['departure_time']), 'g:i A') .  ")" . "</option>";
                                                    }
                                                } else {
                                                    echo "<option value=''>No schedules found</option>";
                                                }
                                                ?>

                                            </select>
                                            <label class="form-label" for="schedule_id">Schedule ID</label>
                                        </div>

                                        <div class=" col">
                                            <!-- Passenger Name input -->
                                            <input type="text" id="" name="passenger_name" class="form-control" />
                                            <label class="form-label" for="">Passenger Name</label>
                                        </div>
                                    </div>


                                    <div class="row form-outline">
                                        <div class="col">
                                            <!-- Contact Number -->
                                            <input type="number" name="contact_information" id="" class="form-control" min="0" />
                                            <label class="form-label" for="">Contact Number</label>
                                        </div>

                                        <div class="col">
                                            <!-- Seat Number -->
                                            <input type="number" id="" name="seat_number" class="form-control" min="0" />
                                            <label class="form-label" for="">Seat Number</label>
                                        </div>
                                    </div>

                                    <div class="row form-outline">
                                        <div class="col-6">
                                            <!-- Reservation Date -->
                                            <input type="datetime-local" name="reservation_date" id="" class="form-control" />
                                            <label class="form-label" for="">Reservation Date</label>
                                        </div>

                                        <!-- Status input -->
                                        <div class="col-6">
                                            <select name="status" id="status" class="form-select">
                                                <?php
                                                echo '<option value="" selected disabled>Select the status</option>';

                                                foreach ($status as $statuses) {
                                                    echo '<option value="' . $statuses . '">' . $statuses . '</option>';
                                                }
                                                ?>
                                            </select>
                                            <label class="form-label" for="">Status</label>
                                        </div>

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
        require_once "dbconnect.php";

        //Search Button
        if (isset($_POST['searchbutton'])) {

            //to check the search box if empty or not 
            if ($_POST['search'] != NULL) {
                $search = $_POST['search'];
                $selectsql = "Select * from tbl_reservation where 
            reservation_id LIKE '%" . $search . "%' 
            OR schedule_id LIKE '%" . $search . "%' 
            OR passenger_name LIKE'%" . $search . "%' 
            OR contact_information LIKE'%" . $search . "%' 
            OR seat_number LIKE'%" . $search . "%' 
            OR status LIKE'%" . $search . "%'  
            OR reservation_date LIKE'%" . $search . "%' ";
            } else {
                $selectsql = "Select * from tbl_reservation";
            }
        } else {
            $selectsql = "Select * from tbl_reservation";
        }


        //Add Button
        if (isset($_POST['add'])) {

            $scheduleID = $_POST['schedule_id'];
            $passengerName = $_POST['passenger_name'];
            $contact = $_POST['contact_information'];
            $seatNum = $_POST['seat_number'];
            $reservationDate = $_POST['reservation_date'];
            $status = $_POST['status'];


            $insertsql = "Insert into tbl_reservation (schedule_id,passenger_name,contact_information,seat_number,reservation_date,status)
        values ($scheduleID,'$passengerName',$contact,$seatNum,'$reservationDate','$status')
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
            echo "<table class='table  table-striped text-center table-bordered w-100 border border-2 border-primary-subtle align-middle mx-auto'>";
            echo "<thead class ='table-dark'>";
            echo "<tr>";
            echo "<th> Reservation ID </th>";
            echo "<th> Schedule ID </th>";
            echo "<th> Passenger Name </th>";
            echo "<th> Contact Information </th>";
            echo "<th> Seat Number </th>";
            echo "<th> Reservation Date </th>";
            echo "<th> Status </th>";
            echo "<th> Action </th>";
            echo "</tr>";
            echo "</thead>";


            while ($fielddata = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $fielddata['reservation_id'] . "</td>";
                echo "<td>" . $fielddata['schedule_id'] . "</td>";
                echo "<td>" . $fielddata['passenger_name'] . "</td>";
                echo "<td>" . $fielddata['contact_information'] . "</td>";
                echo "<td>" . $fielddata['seat_number'] . "</td>";
                echo "<td>" . date_format(date_create($fielddata['reservation_date']), 'Y-m-d g:i A') . "</td>";
                echo "<td>" . $fielddata['status'] . "</td>";
                echo "<td class ='pt-3 pb-0'>";
            ?>
                <form method="post" action="Reservation1.php">
                    <input type="hidden" name="res_del" value="<?php echo $fielddata['reservation_id']; ?>" class="form-control" />
                    <button class="btn btn-success" name="edit" type="button" data-bs-toggle="collapse" href="#updateFormCollapse<?php echo $fielddata['reservation_id']; ?>" data-bs-target="#updateFormCollapse<?php echo $fielddata['reservation_id']; ?>" aria-expanded="false" aria-controls="updateFormCollapse<?php echo $fielddata['reservation_id']; ?>">Edit</button>
                    <button class='btn btn-danger delete-button' name='delete'>Delete</button>
                </form>
                <?php
                echo "</td>";
                echo "</tr>";

                // Collapse
                echo "<tr>";
                echo "<td colspan='8' class ='tble-bg'>";
                echo "<div class='collapse w-50 mx-auto text-start p-5 text-white' id='updateFormCollapse" . $fielddata['reservation_id'] . "'>";
                ?>
                <!-- form-->

                <form action="Reservation1.php" method="post">
                    <h5 class="hd-text text-center pb-2 fs-5" id="title">Reservation Editing Form</h5>

                    <div class="row form-outline">
                        <div class="col">
                            <!-- Reservation ID input -->
                            <input type="number" name="update_reservationID" value="<?php echo $fielddata['reservation_id']; ?>" class="form-control" readonly />
                            <label class="form-label" for="">Reservation ID</label>
                        </div>

                        <div class="col">
                            
                            <!-- Schedule ID input -->
                            <!--  <input type="number" name="update_scheduleID" value="<?php echo $fielddata['schedule_id']; ?>" class="form-control" />
                    <label class="form-label" for="">Schedule ID</label> -->
                            <select name="update_scheduleID" class="form-select">
                                <?php
                                $sched_query = "SELECT schedule_id, departure_date, departure_time FROM tbl_schedule";
                                $sched_result = $con->query($sched_query);

                                if ($sched_result->num_rows > 0) {
                                    while ($sched_data = $sched_result->fetch_assoc()) {
                                        $selected = ($sched_data['schedule_id'] == $fielddata['schedule_id']) ? "selected" : "";
                                        echo "<option value='" . $sched_data['schedule_id'] . "' $selected>" . $sched_data['schedule_id'] . " (" . $sched_data['departure_date'] . " " . date_format(date_create($sched_data['departure_time']), 'g:i A') .  ")" .  "</option>";
                                    }
                                }
                                ?>
                            </select>
                            <label class="form-label" for="">Schedule ID</label>
                        </div>

                        <div class=" col">
                            <!-- Passenger Name input -->
                            <input type="text" id="" name="update_passengerName" value="<?php echo $fielddata['passenger_name']; ?>" class="form-control" />
                            <label class="form-label" for="">Passenger Name</label>
                        </div>
                    </div>

                    <div class="row form-outline">
                        <div class="col">
                            <!-- Contact Number -->
                            <input type="number" name="update_contactInformation" value="<?php echo $fielddata['contact_information']; ?>" class="form-control" />
                            <label class="form-label" for="">Contact Number</label>
                        </div>

                        <div class="col">
                            <!-- Seat Number -->
                            <input type="text" id="" name="update_seatNumber" value="<?php echo  $fielddata['seat_number']; ?>" class="form-control" />
                            <label class="form-label" for="">Seat Number</label>
                        </div>
                    </div>

                    <div class="row form-outline">
                        <div class="col">
                            <!-- Reservation Date -->
                            <input type="datetime-local" name="update_reservationDate" value="<?php echo $fielddata['reservation_date']; ?>" class="form-control" />
                            <label class="form-label" for="">Reservation Date</label>
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


                        <!-- Save button -->
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

        //Delete Button
        if (isset($_POST['delete'])) {
            $reserve_delete = $_POST['res_del']; // Retrieve the user_id from the form

            // Use prepared statements to prevent SQL injection
            $deletesql = "DELETE FROM tbl_reservation WHERE reservation_id = ?";
            $stmt = $con->prepare($deletesql);
            $stmt->bind_param("i", $reserve_delete); // Assuming user_id is an integer
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
            $reservationID_update = $_POST['update_reservationID'];
            $scheduleID_update = $_POST['update_scheduleID'];
            $passengerName_update = $_POST['update_passengerName'];
            $contact_update = $_POST['update_contactInformation'];
            $seatNum_update = $_POST['update_seatNumber'];
            $reservationDate_update = $_POST['update_reservationDate'];
            $status_update = $_POST['update_status'];

            $updatesql = "UPDATE tbl_reservation SET reservation_id = $reservationID_update, schedule_id = $scheduleID_update,
        passenger_name = '$passengerName_update', contact_information = $contact_update, seat_number = $seatNum_update,
        reservation_date = '$reservationDate_update', status = '$status_update'
        WHERE reservation_id = $reservationID_update";

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