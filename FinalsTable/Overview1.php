<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="sidebar5.css">

</head>

<body>
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


      <li class="active">
        <i class="bi bi-table"></i>
        <a class="active" href="Overview1.php">Overview</a>
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
        <h1 class="hd-font bg-row mx-auto text-white rounded-bottom mx-1 p-3">OVERVIEW | Welcome Admin!</h1>
         
        <div class="row bg-row mx-auto p-1 m-1 rounded">
          
           
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

        

        <?php require_once "dbconnect.php"; ?>
        <div class="container-fluid mx-auto w-100 p-5 bg-primary-subtle">
        <h1 class="hd-font bg-rowimg text-center text-light rounded p-3 mb-4 "> Total Records</h1>
        <div class="row">
          <div class="col-xl-3 col-md-6 mx-auto">
            <div class="card bg-dark text-white mb-4 shadow">
              <div class="card-body hd-font d-flex align-items-center mx-auto h4"> <!-- Added align-items-center -->
                <i class="bi bi-person-circle"></i>

                Total Users Record:
                <?php

                $user_count_query = "select * from tbl_user";
                $user_query = mysqli_query($con, $user_count_query);
                if ($user_total = mysqli_num_rows($user_query)) {
                  echo '<h3 class = "text-center mt-2 mx-3 hd-text">' . $user_total . '</h3>';
                } else {
                  echo '<h3 class = "text-center mt-2 mx-3 hd-text">0</h3>';
                }

                ?>


              </div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="User.php" class="small text-white stretched-link hd-font text-decoration-none mx-auto">
                  View Details
                </a>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 mx-auto">

            <div class="card bg-dark text-white mb-4 shadow">
              <div class="card-body hd-font d-flex align-items-center mx-auto h4"> <!-- Added align-items-center -->
                <i class="bi bi-card-list"></i>
                Total Logs Record:
                <?php

                $log_count_query = "select * from tbl_logs";
                $log_query = mysqli_query($con, $log_count_query);
                if ($log_total = mysqli_num_rows($log_query)) {
                  echo '<h4 class = "text-center mt-2 mx-3 hd-text">' . $log_total . '</h4>';
                } else {
                  echo '<h4 class = "text-center mt-2 mx-3 hd-text">0 </h4>';
                }

                ?>

              </div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="Logs.php" class="small text-white stretched-link hd-font text-decoration-none mx-auto">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 mx-auto">
            <div class="card bg-dark text-white mb-4 shadow">
              <div class="card-body hd-font d-flex align-items-center mx-auto h4"> <!-- Added align-items-center -->
                <i class="bi bi-bus-front"></i>
                Total Bus Record:

                <?php

                $bus_count_query = "select * from tbl_bus";
                $bus_query = mysqli_query($con, $bus_count_query);
                if ($bus_total = mysqli_num_rows($bus_query)) {
                  echo '<h4 class = "text-center mt-2 mx-3 hd-text">' . $bus_total . '</h4>';
                } else {
                  echo '<h4 class = "text-center mt-2 mx-3 hd-text">0 </h4>';
                }

                ?>

              </div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="Bus.php" class="small text-white stretched-link hd-font text-decoration-none mx-auto" >
                  View Details
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3 col-md-6 mx-auto">
            <div class="card bg-dark text-white mb-4 shadow">
              <div class="card-body hd-font d-flex align-items-center mx-auto h4"> <!-- Added align-items-center -->
                <i class="bi bi-sign-turn-right-fill"></i>
                Total Route Record:
                <?php

                $route_count_query = "select * from tbl_route";
                $route_query = mysqli_query($con, $bus_count_query);
                if ($route_total = mysqli_num_rows($route_query)) {
                  echo '<h4 class = "text-center mt-2 mx-3 hd-text">' . $bus_total . '</h4>';
                } else {
                  echo '<h4 class = "text-center mt-2 mx-3 hd-text">0 </h4>';
                }

                ?>
              </div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="Route.php" class="small text-white stretched-link hd-font text-decoration-none mx-auto">
                  View Details
                </a>
              </div>
            </div>

          </div>
          <div class="col-xl-3 col-md-6 mx-auto">
            <div class="card bg-dark text-white mb-4 shadow">
              <div class="card-body hd-font d-flex align-items-center mx-auto h4"> <!-- Added align-items-center -->
                <i class="bi bi-calendar3"></i>
                Total Schedule Record:
                <?php

                $sched_count_query = "select * from tbl_schedule";
                $sched_query = mysqli_query($con, $sched_count_query);
                if ($sched_total = mysqli_num_rows($sched_query)) {
                  echo '<h4 class = "text-center mt-2 mx-3 hd-text">' . $bus_total . '</h4>';
                } else {
                  echo '<h4 class = "text-center mt-2 mx-3 hd-text">0 </h4>';
                }

                ?>
              </div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="Schedule.php" class="small text-white stretched-link hd-font text-decoration-none mx-auto">
                  View Details
                </a>
              </div>
            </div>

          </div>
          <div class="col-xl-3 col-md-6 mx-auto">
            <div class="card bg-dark text-white mb-4 shadow">
              <div class="card-body hd-font d-flex align-items-center mx-auto h4"> <!-- Added align-items-center -->
                <i class="bi bi-calendar-date"></i>
                Total Reservation Details:
                <?php

                $reserve_count_query = "select * from tbl_reservation";
                $reserve_query = mysqli_query($con, $reserve_count_query);
                if ($reserve_total = mysqli_num_rows($reserve_query)) {
                  echo '<h4 class = "text-center mt-2 mx-3 hd-text">' . $bus_total . '</h4>';
                } else {
                  echo '<h4 class = "text-center mt-2 mx-3 hd-text">0 </h4>';
                }

                ?>
              </div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="Reservation.php" class="small text-white stretched-link hd-font text-decoration-none mx-auto">
                  View Details
                </a>
              </div>
            </div>

          </div>
        </div>
        </div>



      </div>
    </div>



</body>

</html>