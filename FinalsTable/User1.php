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

      <li class="active">
        <i class="bi bi-person-circle"></i>
        <a class="active" href="User1.php">User</a>
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
        <h1 class="hd-font bg-row mx-auto text-white rounded-bottom mx-1 p-3">USER DETAILS | Welcome, <?php echo $_SESSION['username']; ?></h1>

        <div class="row bg-row mx-auto p-1 m-1 rounded">

          <form action="User1.php" method="post">

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
        <button type="button" id="formDetailsBtn" class="btn hd-text btn-color my-2 mx-1" data-bs-toggle="modal" data-bs-target="#formDetails">
          Add User Details <!-- add icon -->
        </button>

        <div class="modal" id="formDetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="title" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title fs-5" id="title">User Details Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <form action="User1.php" method="post">
                <div class="modal-body">

                  <div class="row form-outline">

                    <!-- Full Name input -->
                    <div class="col">
                      <input type="text" name="full_name" id="" class="form-control" />
                      <label class="form-label" for="">Fullname</label>
                    </div>
                  </div>

                  <!-- Role input -->
                  <div class="form-outline mb-2">
                    <span class="form-label">Role</span>
                    <div class="btn-group mx-5" id="btn-group-3">
                      <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="role" id="inlineRadio1" value="Admin" />
                        <label class="form-check-label" for="inlineRadio1">Admin</label>
                      </div>

                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="inlineRadio2" value="Employee" />
                        <label class="form-check-label" for="inlineRadio2">Employee</label>
                      </div>
                    </div>
                  </div>

                  <!-- Username input -->
                  <div class="row form-outline">
                    <div class="col">
                      <input type="text" id="" name="username" class="form-control" />
                      <label class="form-label" for="">Username</label>
                    </div>

                    <!-- Password input -->
                    <div class="col">
                      <input type="password" name="password" id="" class="form-control" />
                      <label class="form-label" for="">Password</label>
                    </div>
                  </div>

                  <!-- Email input -->
                  <div class="form-outline">
                    <input type="email" name="email" id="" class="form-control" />
                    <label class="form-label" for="">Email</label>
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
        $selectsql = "Select * from tbl_user where 
                user_id LIKE '%" . $search . "%' 
                OR full_name LIKE '%" . $search . "%' 
                OR role LIKE'%" . $search . "%' 
                OR username LIKE'%" . $search . "%' 
                OR password LIKE'%" . $search . "%' 
                OR email LIKE'%" . $search . "%'
                OR Status LIKE'%" . $search . "%'  ORDER BY user_id DESC";
      } else {
        $selectsql = "Select * from tbl_user  ORDER BY user_id DESC";
      }
    } else {
      $selectsql = "Select * from tbl_user  ORDER BY user_id DESC";
    }



    //Add Button
    if (isset($_POST['add'])) {
      $name = $_POST['full_name'];
      $role = $_POST['role'];
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $email = $_POST['email'];

      $insertsql = "Insert into tbl_user (full_name,role,username,password,email)
            values ('$name','$role','$username','$password','$email')
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
      echo "<table class='table table-striped text-center table-bordered w-100 border border-2 border-primary-subtle align-middle mx-auto'>";
      echo "<thead class ='table-dark'>";
      echo "<tr>";
      echo "<th> User ID </th>";
      echo "<th> Full Name </th>";
      echo "<th> Role </th>";
      echo "<th> Username </th>";
      echo "<th> Password </th>";
      echo "<th> Email </th>";
      echo "<th> Status </th>";
      echo "<th> Action </th>";
      echo "</tr>";
      echo "</thead>";


      while ($fielddata = $result->fetch_assoc()) {
        
        echo "<tr>";
        echo "<td>" . $fielddata['user_id'] . "</td>";
        echo "<td>" . $fielddata['full_name'] . "</td>";
        echo "<td>" . $fielddata['role'] . "</td>";
        echo "<td>" . $fielddata['username'] . "</td>";
        echo "<td>" . $fielddata['password'] . "</td>";
        echo "<td>" . $fielddata['email'] . "</td>";
        echo "<td>" . $fielddata['status'] . "</td>";
        echo "<td class ='pt-3 pb-0'>";
      ?>
        <form method="post" action="User1.php">
          <input type="hidden" name="user_del" value="<?php echo $fielddata['user_id']; ?>" class="form-control" />
          <button class="btn btn-success" name="edit" type="button" data-bs-toggle="collapse" href="#updateFormCollapse<?php echo $fielddata['user_id']; ?>" data-bs-target="#updateFormCollapse<?php echo $fielddata['user_id']; ?>" aria-expanded="false" aria-controls="updateFormCollapse<?php echo $fielddata['user_id']; ?>">Edit</button>
        </form>
        <?php
        echo "</td>";
        echo "</tr>";

        // Collapse
        echo "<tr>";
        echo "<td colspan='8' class ='tble-bg'>";
        echo "<div class='collapse w-50 mx-auto text-start p-5 text-white' id='updateFormCollapse" . $fielddata['user_id'] . "'>";
        ?>
        <!-- form-->

        <form action="User1.php" method="post">
        <h5 class="hd-text text-center pb-2 fs-5" id="title">User Editing Form</h5>
          <div class="row form-outline">
            <!-- Full Name input -->
            <div class="col">
              <input type="text" name="update_id" value="<?php echo $fielddata['user_id']; ?>" class="form-control" readonly />
              <label class="form-label" for="">User ID</label>
            </div>
            <div class="col">
              <input type="text" name="update_name" value="<?php echo $fielddata['full_name']; ?>" class="form-control">
              <label class="form-label" for="">Full Name</label>
            </div>
          </div>

          <!-- Role input -->
          <div class="form-outline mb-2">
            <span class="form-label">Role</span>
            <div class="btn-group mx-5" id="btn-group-3">
              <div class="form-check form-check-inline ">
                <input class="form-check-input" type="radio" name="update_role" id="inlineRadio1" value="Admin" <?php if ($fielddata['role'] === 'Admin') echo 'checked'; ?> />
                <label class="form-check-label" for="inlineRadio1">Admin</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="update_role" id="inlineRadio2" value="Employee" <?php if ($fielddata['role'] === 'Employee') echo 'checked'; ?> />
                <label class="form-check-label" for="inlineRadio2">Employee</label>
              </div>
            </div>
          </div>

          <!-- Username input -->
          <div class="row form-outline">
            <div class="col">
              <input type="text" id="" name="update_username" value="<?php echo $fielddata['username']; ?>" class="form-control" />
              <label class="form-label" for="">Username</label>
            </div>

            <!-- Password input -->
            <div class="col">
              <input type="password" name="update_password" id="" value="<?php echo $fielddata['password']; ?>" class="form-control" />
              <label class="form-label" for="">Password</label>
            </div>
          </div>

          <!-- Email input -->
          <div class="form-outline">
            <input type="email" name="update_email" id="" class="form-control" value="<?php echo $fielddata['email']; ?>" />
            <label class="form-label" for="">Email</label>
          </div>

          <div class="row form-outline text-center pt-1">
            <div class="col">
              <button type="submit" name="updating" value="Update" class="btn btn-success">Update</button>
            </div>
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

    require_once "dbconnect.php";

    if (isset($_POST['updating'])) {
      $user_update = $_POST['update_id'];
      $name_update = $_POST['update_name'];
      $role_update = $_POST['update_role'];
      $username_update = $_POST['update_username'];
      $password_update = md5($_POST['update_password']);
      $email_update = $_POST['update_email'];



      $updatesql = "UPDATE tbl_user SET user_id = $user_update, full_name = '$name_update', 
              role = '$role_update', username = '$username_update', password = '$password_update', 
              email = '$email_update' WHERE user_id = $user_update";

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