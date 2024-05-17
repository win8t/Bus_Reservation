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
  <?php
  require_once "dbconnect.php";
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
        <a href="Schedule1.php">Schedule</a>
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
        <a href="\FINAL_ALPS_BUS\Login.php">Log Out</a>
      </li>
    </ul>


  </aside>
  <div class="container-fluid">




    <div class="row ">
      <div class="col pb-2 ">
        <h1 class="hd-font bg-row mx-auto text-white rounded-bottom mx-1 p-3"><?php 
            session_start();
            $user = $_SESSION['username'];
            echo 'BUS DETAILS | Welcome '.$user.'!';
        ?></h1>

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
                <form action="Bus1.php" method="post">


                  <!-- Bus ID input -->
                  <div class="row form-outline">
                    <div class="col">
                      <input type="text" name="bus_number" id="" class="form-control" required />
                      <label class="form-label" for="">Bus Number</label>
                    </div>

                    <!-- Bus Number input -->
                    <div class="col">
                      <select name="bus_type" id="bus_type" class="form-select" required>
                        <?php


                        echo '<option value="" selected disabled>Select Bus Type</option>';

                        foreach ($bus_types as $bus_type) {
                          echo '<option value="' . $bus_type . '">' . $bus_type . '</option>';
                        }
                        ?>

                      </select>
                      <label class="form-label" for="">Bus Type</label>
                    </div>
                  </div>

                  <!-- Seating Capacity input -->
                  <div class="row form-outline">
                    <div class="col">
                      <input type="number" name="seating_capacity" id="" class="form-control" required />
                      <label class="form-label" for="">Seating Capacity</label>
                    </div>

                    <!-- Driver Name input -->
                    <div class="col">
                      <input type="text" name="driver_name" id="" class="form-control" required />
                      <label class="form-label" for="">Driver Name</label>
                    </div>
                  </div>

                  <!-- Departure Location input -->
                  <div class="row form-outline">
                    <div class="col">
                      <select id="departure_location" class="form-select" name="departure_location" required>
                        <?php
                        echo '<option default disabled selected value="">Origin</option>';

                        foreach ($origins as $group_label => $origin) {
                          echo '<optgroup label="' . $group_label . '">';
                          echo '<option value="' . $origin . '">' . $origin . '</option>';
                          echo '</optgroup>';
                        }

                        ?>
                      </select>


                      <label class="form-label" for="departure_location">Departure Location</label>
                    </div>

                    <!-- Destination input -->
                    <div class="col">
                      <select id="destination" class="form-select" name="destination" required>
                        <?php

                        echo '<option default disabled selected value="">Destination</option>';

                        foreach ($destinations as $group_label => $locations) {
                          echo '<optgroup label="' . $group_label . '">';
                          foreach ($locations as $location) {
                            echo '<option value="' . $location . '">' . $location . '</option>';
                          }
                          echo '</optgroup>';
                        }

                        ?>

                      </select>
                      <label class="form-label" for="destination">Destination</label>
                    </div>
                  </div>

                  <!-- Departure Time input -->
                  <div class="row form-outline">
                    <div class="col">
                      <input type="datetime-local" name="departure_time" id="" class="form-control" required />
                      <label class="form-label" for="">Departure Time</label>
                    </div>

                    <!-- Arrival Time input -->
                    <div class="col">
                      <input type="datetime-local" name="arrival_time" id="" class="form-control" required />
                      <label class="form-label" for="">Arrival Time</label>
                    </div>
                  </div>

                  <!-- Save button -->

                  <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" name="add" class="btn btn-primary">Add</button>
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
                OR arrival_time LIKE'%" . $search . "%' ";
      } else {
        $selectsql = "Select * from tbl_bus";
      }
    } else {
      $selectsql = "Select * from tbl_bus";
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

      $insertsql = "Insert into tbl_bus (bus_number,bus_type,seating_capacity,driver_name,departure_location,destination,departure_time,arrival_time)
        values ('$busNum','$busType',$seatCap,'$driverName','$departureLoc','$destination','$departureTime','$arrivalTime')
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
          <button class='btn btn-danger delete-button' name='delete'>Delete</button>
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

        <form action="Bus1.php" method="post">
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
              <select id="update_location" class="form-select" name="update_location" required>
                <?php


                echo '<option default disabled selected value="">Origin</option>';

                foreach ($origins as $group_label => $origin) {
                  echo '<optgroup label="' . $group_label . '">';
                  $selected = ($fielddata['departure_location'] === $origin) ? 'selected' : '';
                  echo '<option value="' . $origin . '" ' . $selected . '>' . $origin . '</option>';
                  echo '</optgroup>';
                }
                ?>

              </select>


              <label class="form-label" for="update_location">Departure Location</label>
            </div>

            <!-- Destination input -->
            <div class="col">
              <select id="update_destination" class="form-select" name="update_destination" required>
                <?php


                foreach ($destinations as $group_label => $options) {
                  echo '<optgroup label="' . $group_label . '">';
                  foreach ($options as $option) {
                    $selected = ($fielddata['destination'] === $option) ? 'selected' : '';
                    echo '<option value="' . $option . '" ' . $selected . '>' . $option . '</option>';
                  }
                  echo '</optgroup>';
                }
                ?>

              </select>
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

    //Delete Button
    if (isset($_POST['delete'])) {
      $busID = $_POST['bus_del'];

      $deletesql = "DELETE FROM tbl_bus WHERE bus_id = ?";
      $stmt = $con->prepare($deletesql);
      $stmt->bind_param("i", $busID);
      $resultdel = $stmt->execute();

      // Check if successfully deleted
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
        // If not, check query error details
        echo $con->error;
      }
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