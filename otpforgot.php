<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alps OTP</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="stylez.css" rel="stylesheet" />
</head>

<body class="login-content-container7">
    <script src="scripts.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <div class="container-fluid d-flex flex-container">


        <div class="row login-container w-75 mx-auto">
            <div class="col-7 bg-info-subtle p-5 text-center mx-auto banner-shadow rounded">


                <div class="row">
                    <div class="col">



                        <h2 class="display-2 about-login">OTP Verification</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="link-text">An OTP number is sent to your email.</p>
                    </div>
                </div>

                <form action="otpforgot.php" method="post" novalidate class ="needs-validation">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <!-- OTP input -->
                            <div class="form-floating mb-3 link-text">
                                <input type="text" class="form-control" name="otp" id="floatingInput" required>
                                <label for="floatingInput" class="link-text">OTP Verification<span class ="text-danger">*</span></label>
                                <div class="invalid-feedback text-start">Please enter the OTP verification code.</div>
                                <div class="valid-feedback text-start">Entered OTP verification code.</div>
                            </div>
                            
                        </div>


                    </div>


                    <div class="row mb-4">
                        <div class="col text-end">
                            <input type="submit" name="ver" value="Verify" class="btn btn-primary btn-block w-50 link-text">
                        </div>
                        <div class="col text-start">
                            <a href="Registration.php">
                                <input type="button" value="Go Back" class="btn btn-secondary btn-block link-text  w-50">
                            </a>
                        </div>
                    </div>
                </form>



            </div>

        </div>

    </div>
    </div>

    <script src="formvalidation.js"> </script>
    
</body>

</html>
<?php
require "dbconnect.php";

if (isset($_POST['ver'])) {
   //user input
   $otpinput = $_POST['otp'];

   $otpsql = "Select * from tbl_user where otp = '".$otpinput."'";
   $result = $con->query($otpsql);

   if ($result->num_rows == 1 ) {

    $updatesql = "UPDATE tbl_user SET status = 'Active', otp = NULL WHERE otp = '".$otpinput."'";
    $con->query($updatesql);
    
    header("location: ResetPassword.php");

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
