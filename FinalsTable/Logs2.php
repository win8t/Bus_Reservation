<?php
  ssion_start();
  require "dbconnect.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alps Log Details</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="sidebar13.css">

</head>

<body class ="hd-text">
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
      <li class="active">
        <i class="bi bi-card-list"></i>
        <a  class="active" href="Logs2.php">Logs</a>
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
        <h1 class="hd-font bg-row text-white rounded-bottom mx-auto p-3">LOG DETAILS | Welcome, <?php echo $_SESSION['username']; ?></h1>
         
        <div class="row bg-row p-1 mx-auto rounded">
          <div  class="col">
            <div class="input-group w-50 pt-4">
              <div class="input-group-text" id="btnGroupAddon2"><img src="search.svg" alt=""></div>
              <input type="search" name="search" id="" class="form-control rounded mx-1" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                <div class="col-3 ">
                  <input type="submit" value="Search" name="searchbutton" class="h-100 btn btn-primary mx-auto  hd-text" class="form-control">
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
        </div>
      <?php

          //Search Button
          if (isset($_POST['searchbutton'])) {

            if ($_POST['search'] != NULL) {
              $search = $_POST['search'];
              $selectsql = "Select * from logs_view where 
                full_name LIKE '%" . $search . "%' 
                OR role LIKE'%" . $search . "%' 
                OR action LIKE'%" . $search . "%' 
                OR DateTime LIKE'%" . $search . "%'  ORDER BY log_id DESC";

            } else {
              $selectsql = "Select * from logs_view  ORDER BY log_id DESC";
            }
          } else {
            $selectsql = "Select * from logs_view ORDER BY log_id DESC";
          }
         
          $result = $con->query($selectsql);

          if ($result->num_rows > 0) {
            echo "<div class=' bg-row p-5 rounded mt-2'>";
            echo "<div class='bdr mt-2'>";
            echo "<div class='table-responsive'>";
            echo "<table class='table table-striped text-center  table-bordered w-100 border border-2 border-primary-subtle align-middle mx-auto''>";
            echo "<thead class ='table-dark'>";
            echo "<tr class ='tble-bg'>";
            echo "<th> Log ID </th>";
            echo "<th> User </th>";
            echo "<th> Role </th>";
            echo "<th> Action </th>";
            echo "<th> DateTime </th>";
            echo "</thead>";
            echo "</tr>";

            while ($fielddata = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $fielddata['log_id'] . "</td>";
              echo "<td>" . $fielddata['full_name'] . "</td>";
              echo "<td>" . $fielddata['role'] . "</td>";
              echo "<td>" . $fielddata['action'] . "</td>";
              echo "<td>" . date_format(date_create($fielddata['DateTime']), 'Y-m-d g:i A') . "</td>";
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
      ?>
            </div>
        </div>
    </div>