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
function setMinDate() {
    var currentDate = new Date();
    var philippineOffset = 8 * 60;
    var utc = currentDate.getTime() + (currentDate.getTimezoneOffset() * 60000);
    var philippineTime = new Date(utc + (60000 * philippineOffset));

    // Format datetime in yyyy-mm-ddTHH:MM format
    var year = philippineTime.getFullYear();
    var month = String(philippineTime.getMonth() + 1).padStart(2, '0');
    var day = String(philippineTime.getDate()).padStart(2, '0');
    var hours = String(philippineTime.getHours()).padStart(2, '0');
    var minutes = String(philippineTime.getMinutes()).padStart(2, '0');
    var formattedDatetime = `${year}-${month}-${day}T${hours}:${minutes}`;

    // Set the minimum date for both tripDate and tripDate1 elements
    var tripDateElements = document.querySelectorAll('#tripDate, #tripDate1');
    tripDateElements.forEach(element => {
        element.setAttribute('min', formattedDatetime);
    });
}

document.getElementById('tripDate').addEventListener('focus', setMinDate);
document.getElementById('tripDate1').addEventListener('focus', setMinDate);
</script>

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

      <li class="active">
        <i class="bi bi-bus-front"></i>
        <a class="active" href="Bus1.php">Bus</a>
      </li>
      <li>
        <i class="bi bi-sign-turn-right-fill"></i>
        <a href="Route1.php">Route</a>
      </li>
      <li>
        <i class="bi bi-calendar3"></i>
        <a href="Schedule2.php">Schedule</a>
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
        <h1 class="hd-font bg-row mx-auto text-white rounded-bottom mx-1 p-3">BUS DETAILS | Welcome, <?php echo $_SESSION['username']; ?></h1>

        <div class="row bg-row mx-auto p-1 m-1 rounded">

          <form action="Bus1.php" method="post">

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
        <button type="button" id="formDetailsBtn" class="btn btn-color hd-text mt-1 " data-bs-toggle="modal" data-bs-target="#formDetails">
          Add Bus Details <!-- add icon -->
        </button>

        <div class="modal" id="formDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="title" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title fs-5" id="title">Bus Details Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="Bus1.php" method="post" novalidate class="needs-validation">


                  <!-- Bus ID input -->
                  <div class="row form-outline">
                    <div class="col">
                      <label class="form-label" for="">Bus Number</label>
                      <input type="text" name="bus_number" id="" class="form-control" required />
                      <div class="invalid-feedback text-start">Enter its bus number.</div>
                      <div class="valid-feedback text-start">Bus number entered.</div>

                    </div>

                    <!-- Bus Number input -->
                    <div class="col">
                      <label class="form-label" for="">Bus Type</label>
                      <select name="bus_type" id="bus_type" class="form-select" required>
                        <?php


                        echo '<option value="" selected disabled>Select Bus Type</option>';

                        foreach ($bus_types as $bus_type) {
                          echo '<option value="' . $bus_type . '">' . $bus_type . '</option>';
                        }
                        ?>

                      </select>
                      <div class="invalid-feedback text-start">Select its bus type.</div>
                      <div class="valid-feedback text-start">Bus type selected.</div>

                    </div>
                  </div>

                  <!-- Seating Capacity input -->
                  <div class="row form-outline mt-2">
                    <div class="col">
                      <label class="form-label" for="">Seating Capacity</label>
                      <input type="number" name="seating_capacity" id="" class="form-control" required />
                      <div class="invalid-feedback text-start">Enter its seating capacity name.</div>
                      <div class="valid-feedback text-start">Seating capacity entered.</div>


                    </div>

                    <!-- Driver Name input -->
                    <div class="col">
                      <label class="form-label" for="">Driver Name</label>
                      <input type="text" name="driver_name" id="" class="form-control" required />
                      <div class="invalid-feedback text-start">Enter driver's name.</div>
                      <div class="valid-feedback text-start">Driver name entered.</div>

                    </div>
                  </div>

                  <!-- Departure Location input -->
                  <div class="row form-outline mt-2">
                    <div class="col">
                      <label class="form-label" for="departure_location">Departure Location</label>
                      <select id="departure_location" class="form-select" name="departure_location" required>
                        <?php
       
                        $route_query = "SELECT route_id, departure_location FROM tbl_route";
                        $route_result = $con->query($route_query);

                        if ($route_result->num_rows > 0) {
                          echo '<option default disabled selected value="">Choose a location</option>';

                        
                          while ($loc = $route_result->fetch_assoc()) {
                            $departure_location = $loc['departure_location'];
                            $r_id = $loc['route_id'];
                            echo '<option value="' . $departure_location . '">'. "R".$r_id." - ".$departure_location . '</option>';
                          }
                        } else {
                   
                          echo '<option value="" disabled>No destinations found</option>';
                        }
                        ?>
                      </select>

                      <div class="invalid-feedback text-start">Enter departure location.</div>
                      <div class="valid-feedback text-start">Departure location entered.</div>



                    </div>

                    <!-- Destination input -->
                    <div class="col">
                      <label class="form-label" for="destination">Destination</label>
                      <select id="destination" class="form-select" name="destination" required>
                        <?php
                       $route_query = "SELECT  route_id, destination FROM tbl_route";
                       $route_result = $con->query($route_query);

                  
                       if ($route_result->num_rows > 0) {
                         echo '<option default disabled selected value="">Choose a destination</option>';

                         while ($dest = $route_result->fetch_assoc()) {
                            $r_id = $dest['route_id'];
                           $destinations = $dest['destination'];
                           echo '<option value="' . $destinations . '">' . "R".$r_id." - ". $destinations . '</option>';
                         }
                       } else {
               
                         echo '<option value="" disabled>No destinations found</option>';
                       }

                        ?>


                      </select>
                      <div class="invalid-feedback text-start">Enter destination .</div>
                      <div class="valid-feedback text-start">Destination entered.</div>

                    </div>
                  </div>

                  <!-- Departure Time input -->
                  <div class="row form-outline mt-2">
                    <div class="col-6">
                      <label class="form-label" for="">Departure Time</label>
                      <input type="datetime-local" name="departure_time" id="tripDate" class="form-control" onfocus="setMinDate()" required />
                      <div class="invalid-feedback text-start">Set departure time .</div>
                      <div class="valid-feedback text-start">Departure time selected.</div>
                    </div>

                    <!-- Arrival Time input -->
                    <div class="col-6">
                      <label class="form-label" for="">Arrival Time</label>
                      <input type="datetime-local" name="arrival_time" id="tripDate1" class="form-control" onfocus="setMinDate()" required />
                      <div class="invalid-feedback text-start">Set arrival time .</div>
                      <div class="valid-feedback text-start">Arrival time selected.</div>

                    </div>
                  </div>

                  <!-- Save button -->

                  <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" name="add" class="btn btn-primary">Add</button>
                    <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php


    //button function
    if (isset($_POST['searchbutton'])) {

      //to check the search box if empty or not 
      if ($_POST['search'] != NULL) {
        $search = $_POST['search'];
        $selectsql = "Select * from tbl_bus where 
        bus_id LIKE '%" . $search . "%' 
        OR bus_number LIKE '%" . $search . "%' 
        OR bus_type LIKE '%" . $search . "%' 
        OR seating_capacity LIKE'%" . $search . "%' 
        OR driver_name LIKE'%" . $search . "%' 
        OR departure_location LIKE'%" . $search . "%' 
        OR destination LIKE'%" . $search . "%'
        OR departure_time LIKE'%" . $search . "%'
        OR arrival_time LIKE'%" . $search . "%'  ORDER BY bus_id DESC";
      } else {
        $selectsql = "Select * from tbl_bus ORDER BY bus_id DESC";
      }
    } else {
      $selectsql = "Select * from tbl_bus ORDER BY bus_id DESC";
    }



    //Add Button
    if (isset($_POST['add'])) {
      $busNum = $_POST['bus_number'];
      $busType = $_POST['bus_type'];
      $seatCap = $_POST['seating_capacity'];
      $driverName = $_POST['driver_name'];
      $departureLoc = $_POST['departure_location'];
      $destination = $_POST['destination'];
      $departureTime = $_POST['departure_time'];
      $arrivalTime = $_POST['arrival_time'];
  
      try {
          // Check if the route exists for the specified departure location and destination
          $routeCheckQuery = "SELECT route_id FROM tbl_route WHERE departure_location = '$departureLoc' AND destination = '$destination'";
          $routeCheckResult = $con->query($routeCheckQuery);
  
          if ($routeCheckResult->num_rows == 0) {
              throw new Exception("Route does not exist. Match a route with its respective ID");
          }
  
          // Insert the bus details into the database
          $insertsql = "INSERT INTO tbl_bus (bus_number, bus_type, seating_capacity, driver_name, departure_location, destination, departure_time, arrival_time)
              VALUES ('$busNum', '$busType', $seatCap, '$driverName', '$departureLoc', '$destination', '$departureTime', '$arrivalTime')";
  
          $result = $con->query($insertsql);
  
          if ($result === TRUE) {
             ?> <script>
   
              // Display the SweetAlert popup
              Swal.fire({
                  position: "center",
                  icon: "success",
                  title: "Successfully added",
                  showConfirmButton: false,
                  timer: 4500
              });
          </script> <?php

          $action = 'Added Bus';
          logActivity($con, $userID, $action);

          } else {
              echo "<script>
                  alert('Error: " . $con->error . "');
                  window.history.back();
              </script>";
          }
      } catch (Exception $e) {
          // Handle the exception
          echo "<div class='alert alert-warning' role='alert'>" . $e->getMessage() . "</div>";
      }
  }




    $result = $con->query($selectsql);

    //check table if there is a record
    //num_rows - will return the no of rows inside a table
    if ($result->num_rows > 0) {

      echo "<div class=' bg-row p-5 rounded'>";
      echo "<div class='bdr table-responsive'>";
      echo "<table class='table table-striped text-center   table-bordered w-100 border border-2 border-primary-subtle align-middle mx-auto'>";
      echo "<thead class ='table-dark'>";
      echo "<tr>";
      echo "<th> Bus ID </th>";
      echo "<th> Bus Number </th>";
      echo "<th> Bus Type </th>";
      echo "<th> Seating Capacity </th>";
      echo "<th> Driver Name </th>";
      echo "<th> Departure Location </th>";
      echo "<th> Destination </th>";
      echo "<th> Departure Time </th>";
      echo "<th> Arrival Time </th>";
      echo "<th> Action </th>";
      echo "</tr>";
      echo "</thead>";


      while ($fielddata = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fielddata['bus_id'] . "</td>";
        echo "<td>" . $fielddata['bus_number'] . "</td>";
        echo "<td>" . $fielddata['bus_type'] . "</td>";
        echo "<td>" . $fielddata['seating_capacity'] . "</td>";
        echo "<td>" . $fielddata['driver_name'] . "</td>";
        echo "<td>" . $fielddata['departure_location'] . "</td>";
        echo "<td>" . $fielddata['destination'] . "</td>";
        echo "<td>" . date_format(date_create($fielddata['departure_time']), 'Y-m-d g:i A') . "</td>";
        echo "<td>" . date_format(date_create($fielddata['arrival_time']), 'Y-m-d g:i A') . "</td>";
        echo "<td class ='pt-3 pb-0'>";
      ?>
        <form method="post" action="Bus1.php">
          <input type="hidden" name="bus_del" value="<?php echo $fielddata['bus_id']; ?>" class="form-control" />
          <button class="btn btn-success" name="edit" type="button" data-bs-toggle="collapse" href="#updateFormCollapse<?php echo $fielddata['bus_id']; ?>" data-bs-target="#updateFormCollapse<?php echo $fielddata['bus_id']; ?>" aria-expanded="false" aria-controls="updateFormCollapse<?php echo $fielddata['bus_id']; ?>">Edit</button>
        </form>
        <?php
        echo "</td>";
        echo "</tr>";

        // Collapse
        echo "<tr class =''>";
        echo "<td colspan='12' class ='tble-bg'>";
        echo "<div class='collapse w-50 mx-auto text-start p-5 text-white' id='updateFormCollapse" . $fielddata['bus_id'] . "'>";
        ?>
        <!-- form-->

        <form action="Bus1.php" method="post" novalidate class="needs-validation">
          <h5 class="hd-text text-center pb-2 fs-5" id="title">Bus Editing Form</h5>

          <!-- Bus ID input -->
          <div class="row form-outline">
            <div class="col">
              <input type="text" name="update_id" value="<?php echo  $fielddata['bus_id']; ?>" class="form-control" readonly />
              <label class="form-label" for="">Bus ID</label>
            </div>

            <!-- Bus Number input -->
            <div class="col">
              <input type="text" name="update_number" value="<?php echo $fielddata['bus_number']; ?>" class="form-control" />
              <label class="form-label" for="">Bus Number</label>
            </div>

            <!-- Bus Number input -->

            <div class="col">
              <select name="update_type" id="bus_type" class="form-select" required>

                <?php
                echo '<option value="" selected disabled>Select Bus Type</option>';

                foreach ($bus_types as $bus_type) {
                  $selected = ($fielddata['bus_type'] === $bus_type) ? 'selected' : '';
                  echo '<option value="' . $bus_type . '" ' . $selected . '>' . $bus_type . '</option>';
                }
                ?>
              </select>
              <label class="form-label" for="">Bus Type</label>
            </div>
          </div>

          <!-- Seating Capacity input -->
          <div class="row form-outline">
            <div class="col">
              <input type="number" name="update_capacity" value="<?php echo $fielddata['seating_capacity']; ?>" class="form-control" />
              <label class="form-label" for="">Seating Capacity</label>
            </div>

            <!-- Driver Name input -->
            <div class="col">
              <input type="text" name="update_driver" value="<?php echo $fielddata['driver_name']; ?>" class="form-control" />
              <label class="form-label" for="">Driver Name</label>
            </div>
          </div>
 
          
          <!-- Departure Location input -->
          <div class="row form-outline">
            <div class="col">
            <input type="text" name="update_location" value="<?php echo $fielddata['departure_location']; ?>" class="form-control" />
              <label class="form-label" for="update_location">Departure Location</label>
            </div>

            <!-- Destination input -->
            <div class="col">
            <input type="text" name="update_destination" value="<?php echo $fielddata['destination']; ?>" class="form-control" />
              <label class="form-label" for="destination">Destination</label>
            </div>
          </div>

          <!-- Departure Time input -->
          <div class="row form-outline">
            <div class="col">
              <input type="datetime-local" name="update_dtime" value="<?php echo $fielddata['departure_time']; ?>" class="form-control" />
              <label class="form-label" for="">Departure Time</label>
            </div>

            <!-- Arrival Time input -->
            <div class="col">
              <input type="datetime-local" name="update_atime" value="<?php echo $fielddata['arrival_time']; ?>" class="form-control" />
              <label class="form-label" for="">Arrival Time</label>
            </div>
          </div>

          <!-- Update button -->
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

    //Update Button


    if (isset($_POST['updating'])) {
      $busID_update = $_POST['update_id'];
      $busNum_update = $_POST['update_number'];
      $busType_update = $_POST['update_type'];
      $seatCap_update = $_POST['update_capacity'];
      $driverName_update = $_POST['update_driver'];
      $departureLoc_update = $_POST['update_location'];
      $destination_update = $_POST['update_destination'];
      $departureTime_update = $_POST['update_dtime'];
      $arrivalTime_update = $_POST['update_atime'];

      $updatesql = "UPDATE tbl_bus SET bus_id = $busID_update, bus_number = '$busNum_update', 
       bus_type = '$busType_update', seating_capacity = $seatCap_update, driver_name = '$driverName_update',
       departure_location = '$departureLoc_update', destination = '$destination_update', 
       departure_time = '$departureTime_update', arrival_time = '$arrivalTime_update'
       WHERE bus_id = $busID_update";

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
    $action = 'Updated Bus';
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