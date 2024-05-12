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


      <li>
        <i class="bi bi-table"></i>
        <a href="Overview1.php">Overview</a>
      </li>

      <li>
        <i class="bi bi-person-circle"></i>
        <a href="User1.php">User</a>
      </li>
      <li class="active">
        <i class="bi bi-card-list"></i>
        <a  class="active" href="Logs1.php">Logs</a>
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
        <h1 class="hd-font bg-row text-white rounded-bottom mx-auto p-3">LOG DETAILS | Welcome Admin!</h1>
         
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
                  // Update the date and time every second
                  setInterval(updateDateTime, 1000);

                  // Initial update
                  updateDateTime();
                </script>
              </div>
            </div>
            
        </div>
        </div>
                <?php
          require_once "dbconnect.php";

          //button function
          if (isset($_POST['searchbutton'])) {

            //to check the search box if empty or not 
            if ($_POST['search'] != NULL) {
              $search = $_POST['search'];
              $selectsql = "Select * from tbl_logs where 
                log_id LIKE '%" . $search . "%' 
                OR user_id LIKE '%" . $search . "%' 
                OR action LIKE'%" . $search . "%' 
                OR DateTime LIKE'%" . $search . "%'";

            } else {
              $selectsql = "Select * from tbl_logs";
            }
          } else {
            $selectsql = "Select * from tbl_logs";
          }
         
          
          $result = $con->query($selectsql);
          

          //check table if there is a record
          //num_rows - will return the no of rows inside a table
          if ($result->num_rows > 0) {

            echo "<table class='table table-striped text-center table-bordered mx-auto mt-2 border border-3  rounded table-responsive border-dark'>";
            echo "<thead class ='table-dark'>";;
            echo "<tr class ='tble-bg'>";
            echo "<th> Log ID </th>";
            echo "<th> User ID </th>";
            echo "<th> Action </th>";
            echo "<th> DateTime </th>";
            echo "</thead>";;
   
            echo "</tr>";

            while ($maltfielddata = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $maltfielddata['log_id'] . "</td>";
              echo "<td>" . $maltfielddata['user_id'] . "</td>";
              echo "<td>" . $maltfielddata['action'] . "</td>";
              echo "<td>" . $maltfielddata['DateTime'] . "</td>";
              
            }
            echo "</table>";
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