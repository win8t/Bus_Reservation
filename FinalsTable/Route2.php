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
      <li class="active">
        <i class="bi bi-sign-turn-right-fill"></i>
        <a class="active" href="Route2.php">Route</a>
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
        <h1 class="hd-font bg-row mx-auto text-white rounded-bottom mx-1 p-3">ROUTE DETAILS | Welcome, <?php echo $_SESSION['username']; ?></h1>

        <div class="row bg-row mx-auto p-1 m-1 rounded">

          <form action="Route2.php" method="post">

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
          Add Route Details <!-- add icon -->
        </button>

        <div class="modal" id="formDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="title" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title fs-5" id="title">Route Details Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

             
                <div class="modal-body">
                <form action="Route2.php" method="post" novalidate class ="needs-validation">
                  <!-- Route Name input -->
                  <div class="row form-outline mt-2">
                    <div class="col">

                    <label class="form-label" for="route_name">Route Name (ex. Naga to PITX)</label>

                    <input type="text" name="route_name" class="form-control" required />
                    <!--  <select name="route_name" id="route_name" class="form-select">
                        <option value="" selected disabled>Select Route</option>
                        <?php
                     /*   foreach ($routes as $route => $subroutes) {
                          echo '<optgroup label="' . $route . '">';
                          foreach ($subroutes as $subroute) {
                            echo '<option value="' . $subroute . '">' . $subroute . '</option>';
                          }
                          echo '</optgroup>';
                        } */
                        ?>
                      </select> -->
                      <div class="invalid-feedback text-start">Set route.</div>
                       <div class="valid-feedback text-start">Route has been set.</div>
                      

                    </div>
                  </div>
                  <!-- Departure Location input -->
                  <div class="row form-outline mt-2">
                    
                    <div class="col">
                    <label class="form-label" for="departure_location">Departure Location</label>
                    <input type="text" name="departure_location" class="form-control" required/>
                    <div class="invalid-feedback text-start">Set departure location.</div>
                       <div class="valid-feedback text-start">Departure location has been set.</div>
                    <!--  <select id="departure_location" class="form-select" name="departure_location" required>
                        <?php
                     /*   echo '<option default disabled selected value="">Origin</option>';

                        foreach ($origins as $group_label => $origin) {
                          echo '<optgroup label="' . $group_label . '">';
                          echo '<option value="' . $origin . '">' . $origin . '</option>';
                          echo '</optgroup>';
                        }
*/
                        ?>
                      </select> -->
                    


                      
                    </div>


                    <!-- Destination input -->

                    <div class="col">
                    <label class="form-label" for="destination">Destination</label>
                    <input type="text" name="destination" class="form-control" required/>
                    <div class="invalid-feedback text-start">Set destination.</div>
                       <div class="valid-feedback text-start">Destination has been set.</div>
                   <!-- <select id="destination" class="form-select" name="destination" required>
                        <?php
/*
                        echo '<option default disabled selected value="">Destination</option>';

                        foreach ($destinations as $group_label => $locations) {
                          echo '<optgroup label="' . $group_label . '">';
                          foreach ($locations as $location) {
                            echo '<option value="' . $location . '">' . $location . '</option>';
                          }
                          echo '</optgroup>';
                        }
*/
                        ?>
                      </select> -->
                     
                    </div>
                  </div>
                  <div class="row form-outline mt-2">

                    <!-- Distance input -->
                    <div class="col">
                    <label class="form-label" for="distance">Distance (in km)</label>
                      <div class="input-group">
                        
                        <input type="number" name="distance" class="form-control" aria-label="Distance (in km)" placeholder="Distance" min="0" required>
                        <span class="input-group-text hd-text">km</span>
                        <div class="invalid-feedback text-start">Set distance.</div>
                       <div class="valid-feedback text-start">Distance has been set.</div>
                      </div>
             
                      
                    </div>
                  </div>

                  <!-- Duration input -->
                  <!--
                    <div class="row form-outline">
                      <div class="col">
                        <input type="time" name="duration" id="" class="form-control" />
                        <label class="form-label" for="">Duration</label>
                      </div>
                -->
                  <div class="row form-outline mt-2">
                  <label class="form-label" for="">Duration</label>
                    <div class="col">
                      <div class="input-group">
                        <input type="number" name="hrduration" class="form-control" min="0" placeholder="0" required>
                        <span class="input-group-text hd-text">Hrs</span>
                        <div class="invalid-feedback text-start">Set hours.</div>
                       <div class="valid-feedback text-start">Hours has been set.</div>
                      </div>

                    </div>
                    <div class="col">
                      <div class="input-group">
                        <input type="number" name="minduration" class="form-control" min="0" max="59" placeholder="0" required>
                        <span class="input-group-text hd-text">Mins</span>
                        <div class="invalid-feedback text-start">Set minutes.</div>
                       <div class="valid-feedback text-start">Minutes has been set.</div>
                      </div>

                    </div>
                    <div class="col">
                      <div class="input-group">
                        <input type="number" name="secduration" class="form-control" min="0" max="59" placeholder="0" required>
                        <span class="input-group-text hd-text">Secs</span>
                        <div class="invalid-feedback text-start">Set seconds.</div>
                       <div class="valid-feedback text-start">Seconds has been set.</div>
                      </div>

                    </div>
                    
                  </div>


                  <div class="row form-outline mt-2">

                    <!-- Price input -->
                    <div class="col">
                    <label class="form-label" for="price">Price</label>
                      <div class="input-group">
                        <span class="input-group-text hd-text">₱</span>
                        <input type="number" name="price" class="form-control" aria-label="Price" placeholder="Price" min="0" required>
                        <div class="invalid-feedback text-start">Set price.</div>
                       <div class="valid-feedback text-start">Price has been set.</div>
                      </div>
                     

                    </div>
                  </div>

                  <!-- Save button -->
                </div>
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

    <?php


    //button function
    if (isset($_POST['searchbutton'])) {

      //to check the search box if empty or not 
      if ($_POST['search'] != NULL) {
        $search = $_POST['search'];
        $selectsql = "Select * from tbl_route where 
              route_id LIKE '%" . $search . "%' 
              OR route_name LIKE '%" . $search . "%' 
              OR departure_location LIKE'%" . $search . "%' 
              OR destination LIKE'%" . $search . "%' 
              OR distance LIKE'%" . $search . "%' 
              OR duration LIKE'%" . $search . "%'
              OR price LIKE'%" . $search . "%' ORDER BY route_id DESC";
      } else {
        $selectsql = "Select * from tbl_route ORDER BY route_id DESC";
      }
    } else {
      $selectsql = "Select * from tbl_route ORDER BY route_id DESC";
    }




    //Add Button
    if (isset($_POST['add'])) {
      $routeName = $_POST['route_name'];
      $departureLoc = $_POST['departure_location'];
      $destination = $_POST['destination'];
      $distance = $_POST['distance'];

      $hrduration = $_POST['hrduration'];
      $minduration = $_POST['minduration'];
      $secduration = $_POST['secduration'];

      $duration = $hrduration . ":" . $minduration . ":" . $secduration;

      $price = $_POST['price'];

      $insertsql = "Insert into tbl_route (route_name,departure_location,destination,distance,duration,price)
        values ('$routeName','$departureLoc','$destination',$distance,'$duration',$price)
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
      $action = 'Added Route';
      logActivity($con, $userID, $action);
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
      echo "<table class='table table-striped text-center table-bordered w-100 border border-2 border-primary-subtle align-middle mx-auto'>";
      echo "<thead class ='table-dark'>";
      echo "<tr>";
      echo "<th> Route ID </th>";
      echo "<th> Route Name </th>";
      echo "<th> Departure Location </th>";
      echo "<th> Destination </th>";
      echo "<th> Distance (km) </th>";
      echo "<th> Duration (hrs) </th>";
      echo "<th> Price (₱)</th>";
      echo "<th> Action </th>";
      echo "</tr>";
      echo "</thead>";


      while ($fielddata = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fielddata['route_id'] . "</td>";
        echo "<td>" . $fielddata['route_name'] . "</td>";
        echo "<td>" . $fielddata['departure_location'] . "</td>";
        echo "<td>" . $fielddata['destination'] . "</td>";
        echo "<td>" . $fielddata['distance'] . "</td>";
        echo "<td>" . $fielddata['duration'] . "</td>";
        echo "<td>" . number_format($fielddata['price']) . "</td>";
        echo "<td class ='pt-3 pb-0'>";
      ?>
        <form method="post" action="Route2.php">
          <input type="hidden" name="route_del" value="<?php echo $fielddata['route_id']; ?>" class="form-control" />

          <button class="btn btn-success" name="edit" type="button" data-bs-toggle="collapse" href="#updateFormCollapse<?php echo $fielddata['route_id']; ?>" data-bs-target="#updateFormCollapse<?php echo $fielddata['route_id']; ?>" aria-expanded="false" aria-controls="updateFormCollapse<?php echo $fielddata['route_id']; ?>">Edit</button>
        </form>
        <?php
        echo "</td>";
        echo "</tr>";

        // Collapse
        echo "<tr>";
        echo "<td colspan='8' class ='tble-bg'>";
        echo "<div class='collapse w-50 mx-auto text-start p-5 text-white' id='updateFormCollapse" . $fielddata['route_id'] . "'>";
        ?>
        <!-- form-->

        <form action="Route2.php" method="post">
          <h5 class="hd-text text-center pb-2 fs-5" id="title">Route Editing Form</h5>

          <!-- Route ID input -->
          <div class="row form-outline">
            <div class="col">
              <input type="text" id="" name="update_routeID" value="<?php echo $fielddata['route_id']; ?>" class="form-control" readonly />
              <label class="form-label" for="">Route ID</label>
            </div>
          </div>

          <!-- Route Name input -->
          <div class="row form-outline">
            <div class="col">
            <input type="text" name="update_routeName" class="form-control" value="<?php echo $fielddata['route_name']; ?>" />
             
              <label class="form-label" for="update_routeName">Route Name</label>

            </div>
          </div>

          <!-- Departure Location input -->
          <div class="row form-outline">
            <div class="col">
            <input type="text" name="update_departureLoc" class="form-control" value="<?php echo $fielddata['departure_location']; ?>" />
             
              <label class="form-label" for="">Departure Location</label>
            </div>

            <!-- Destination input -->
            <div class="col">
            <input type="text" name="update_destination" class="form-control" value="<?php echo $fielddata['destination']; ?>" />
            
              <label class="form-label" for="destination">Destination</label>

            </div>
          </div>

          <!-- Distance input -->
          <div class="row form-outline">
            <div class="col">
              <div class="input-group">
                <input type="number" name="update_distance" value="<?php echo $fielddata['distance']; ?>" min="0" class="form-control" />
                <span class="input-group-text hd-text">km</span>

              </div>
              <label class="form-label" for="">Distance (in km)</label>
            </div>

            <div class="col">
              <div class="input-group">
                <span class="input-group-text hd-text">₱</span>
                <input type="number" name="update_price" value="<?php echo $fielddata['price']; ?>" min="0" class="form-control" />
              </div>
              <label class="form-label" for="">Price</label>

            </div>
          </div>

          <!-- Duration input -->
          <!--   <div class="col">
                          <input type="time" name="update_duration" value="<?php /* echo  $fielddata['duration']; */ ?>" class="form-control" />
                          <label class="form-label" for="">Duration</label>
                      </div> -->


          <!-- Price input -->
          <div class="row form-outline">

            <div class="col">
              <div class="input-group">
                <input type="number" name="update_hrduration" id="update_hrduration" class="form-control" min="0" placeholder="0" value="<?php echo date_create_from_format('H:i:s', $fielddata['duration'])->format('G'); ?>" required />
                <span class="input-group-text hd-text">Hrs</span>

              </div>
            </div>
            <div class="col">
              <div class="input-group">
                <input type="number" name="update_minduration" id="update_minduration" class="form-control" min="0" max="59" placeholder="0" value="<?php echo date_create_from_format('H:i:s', $fielddata['duration'])->format('i'); ?>" required />
                <span class="input-group-text hd-text">Mins</span>

              </div>
            </div>
            <div class="col">
              <div class="input-group">
                <input type="number" name="update_secduration" id="update_secduration" class="form-control" min="0" max="59" placeholder="0" value="<?php echo date_create_from_format('H:i:s', $fielddata['duration'])->format('s'); ?>" required />
                <span class="input-group-text hd-text">Secs</span>


              </div>
            </div>
            <label class="form-label" for="duration">Duration</label>
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
    //Update Button

    if (isset($_POST['updating'])) {
      $routeID_update = $_POST['update_routeID'];
      $routeName_update = $_POST['update_routeName'];
      $departureLoc_update = $_POST['update_departureLoc'];
      $destination_update = $_POST['update_destination'];
      $distance_update = $_POST['update_distance'];

      $hrduration_update = $_POST['update_hrduration'];
      $minduration_update = $_POST['update_minduration'];
      $secduration_update = $_POST['update_secduration'];
      $duration_update = $hrduration_update . ":" . $minduration_update . ":" . $secduration_update;

      $price_update = $_POST['update_price'];




      $updatesql = "UPDATE tbl_route SET route_id = $routeID_update, route_name = '$routeName_update',
            departure_location = '$departureLoc_update', destination = '$destination_update', distance = $distance_update,
            duration = '$duration_update', price = $price_update WHERE route_id = $routeID_update";

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
    $action = 'Update Route';
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