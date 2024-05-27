<?php
if (!isset($_SESSION)) {
    session_start();
  }
require "dbconnect.php";
set_include_path(get_include_path() . PATH_SEPARATOR . 'C:\xampp\htdocs\FINAL_ALPS_BUS\FinalsTable');
// set_include_path(get_include_path() . PATH_SEPARATOR . 'C:\xampp\htdocs\FINALS PROJECT\FinalsTable');
include "logger.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alps GCash</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="stylez.css" rel="stylesheet" />
</head>

<body class="login-content-container7">
    <div class="container-fluid d-flex flex-container">
        <div class="row login-container w-75 mx-auto">
            <div class="col-7 bg-info-subtle p-5 text-center mx-auto banner-shadow rounded">

                <div class="row">
                    <div class="col">
                        <img src="GCash_logo.png" class="w-50 img-fluid mb-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="h5">GCash Number: 0916 489 1581</p>
                        <p class="link-text">Please enter your reference number.</p>
                    </div>
                </div>

                <form action="GCash.php" method="post" novalidate class ="needs-validation">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <!-- Reference Number input -->
                            <div class="form-floating mb-3 link-text">
                                <input type="text" class="form-control" name="refnum" id="floatingInput" required />
                                <label for="floatingInput" class="link-text">Reference Number<span class ="text-danger">*</span></label>
                                <div class="invalid-feedback text-start">Enter your Reference Number.</div>
                                <div class="valid-feedback text-start">Reference Number entered.</div> 
                            </div>
                        </div>
                    </div>
                        <!-- Button function -->
                    <div class="row mb-3">
                        <div class="col text-center">
                            <input type="submit" name="ver" value="Verify" class="btn btn-primary btn-block w-25 link-text rounded-pill">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

<?php
if (isset($_POST['ver'])) {  
   
   $refnum = $_POST['refnum'];
   $pay_ticket = $_SESSION['ticket_pay']; 

   $sql = "UPDATE tbl_reservation SET reference_num = ? WHERE ticket_number = ?";
   $stmt = $con->prepare($sql);
   $stmt->bind_param('ss', $refnum, $pay_ticket);
   $stmt->execute();

   $refsql = "SELECT * FROM tbl_reservation WHERE reference_num = ?";
   $stmt = $con->prepare($refsql);
   $stmt->bind_param('s', $refnum);
   $stmt->execute();
   $result = $stmt->get_result();

   if ($result->num_rows == 1) {
       $updatesql = "UPDATE tbl_reservation SET status = 'Reserved' WHERE ticket_number = ?";
       $stmt = $con->prepare($updatesql);
       $stmt->bind_param('s', $pay_ticket);
       $stmt->execute();

       $action = 'E-Wallet Payment';
       logActivity($con, $userID, $action);

       $selectrole = "SELECT role FROM tbl_user WHERE user_id = ?";
       $stmt = $con->prepare($selectrole);
       $stmt->bind_param('s', $userID);
       $stmt->execute();
       $stmt->bind_result($role);
       $stmt->fetch();
       $stmt->close();
       
       // Role input
       switch($role){
           case "Admin":
               header("Location: FinalsTable/Reservation2.php"); 
               exit();
           case "Employee":
               header("Location: FinalsTable/Reservation1.php");
               exit(); 
           case "Customer":
               header("Location: HomeLog.php");
               exit(); 
       }
   } else {
       ?>
       <script>
           Swal.fire({
               icon: "error",
               title: "Oops...",
               text: "Something went wrong!",
           });
       </script>
       <?php
   }
}

?>
    <script src="formvalidation.js"></script>
    <script src="scripts.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
