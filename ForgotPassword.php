<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alps Login</title>
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



                        <h2 class="display-2 about-login">Forgot Password?</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="link-text">Enter your email to be sent an OTP.</p>
                    </div>
                </div>

                <form action="otpforgot.php" method="post" novalidate class ="needs-validation">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <!-- OTP input -->
                            <div class="form-floating mb-3 link-text">
                                <input type="email" class="form-control" name="emailadd" id="floatingInput" required>
                                <label for="floatingInput" class="link-text">Email Address<span class ="text-danger">*</span></label>
                                <div class="invalid-feedback text-start">Please enter your valid email address.</div>
                                <div class="valid-feedback text-start">Entered valid email address.</div>
                            </div>
                            
                        </div>


                    </div>


                    <div class="row mb-4">
                        <div class="col text-end">
                            <input type="submit" name="ver" value="Reset Password" class="btn btn-primary btn-block w-50 link-text">
                        </div>
                        <div class="col text-start">
                            <a href="Login.php">
                                <input type="button" value="Go Back" class="btn btn-secondary btn-block link-text  w-50">
                            </a>
                        </div>
                    </div>
                </form>



            </div>

        </div>

    </div>
    </div>

<script>
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      

      form.classList.add('was-validated')
    }, false)
  })
})() 
</script>
    
</body>

</html>
<?php
require_once "dbconnect.php";
include "email_ver.php";


// Generate OTP
if (isset($_POST['ver'])) {
    session_start();

// Generate OTP
$otp = rand(000000, 999999);
$_SESSION['otp'] = $otp;

// Store OTP and Expiry Time (you can save this in a database)
$email = $_POST['emailadd'];
$_SESSION['email'] = $email;

$fullname = $fielddata['full_name'];
$_SESSION['user'] = $fullname;

send_ver($fullname, $email, $otp);

// Redirect user to enter OTP
header("Location: otpforgot.php");
exit;
}
?>

