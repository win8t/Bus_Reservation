<?php
  session_start();
  require "dbconnect.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alps Registration</title>
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



                        <h2 class="display-2 about-login">Register</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="link-text">Create your account! Discover the Philippines and its wonders.</p>
                    </div>
                </div>

                <form action="Registration.php" method="post" novalidate class ="needs-validation">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <!-- Username input -->
                            <div class="form-floating mb-3 link-text">
                                <input type="text" class="form-control" name="user" id="floatingInput" required>
                                <label for="floatingInput" class="link-text">Username<span class ="text-danger">*</span></label>
                                <div class="invalid-feedback text-start">Please enter a username.</div>
                                <div class="valid-feedback text-start">Entered username.</div>
                            </div>
                            
                        </div>

                        <div class="col-md-6">
                            <!-- Email input -->
                            <div class="form-floating mb-3 link-text">
                                <input type="email" class="form-control" name="email" id="floatingInput" required>
                                <label for="floatingInput" class="link-text">Email<span class ="text-danger">*</span></label>
                                <div class="invalid-feedback text-start">Please enter a valid email.</div>
                                <div class="valid-feedback text-start">Entered valid email.</div>
                            </div>
                        </div>


                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <!-- Fullname input -->
                            <div class="form-floating mb-3 link-text">
                                <input type="text" class="form-control" name="fullname" id="floatingInput" required>
                                <label for="floatingInput" class="link-text">Full Name (FN LN MI)<span class ="text-danger">*</span></label>
                                <div class="invalid-feedback text-start">Enter your full name.</div>
                                <div class="valid-feedback text-start">Entered full name.</div>
                                
                            </div>
                        </div>

                    </div>

                    <div class="row justify-content-center">


                        <div class="col-md-6">
                            <!-- Password input -->
                            <div class="form-floating mb-5 link-text">
                                <input type="password" class="form-control" name="pass" id="floatingInput" required>
                                <label for="floatingInput" class="link-text">Password<span class ="text-danger">*</span></label>
                                <div class="invalid-feedback text-start">Please enter a password.</div>
                                <div class="valid-feedback text-start">Entered password</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Password Confirmation input -->
                            <div class="form-floating mb-3 link-text">
                                <input type="password" class="form-control" name="confirmpass" id="floatingInput" required>
                                <label for="floatingInput" class="link-text">Confirm Password<span class ="text-danger">*</span></label>
                                <div class="invalid-feedback text-start">Please re-enter your password.</div>
                                <div class="valid-feedback text-start">Re-entered password</div>
                            </div>
                        </div>

                    </div>


                    <div class="row mb-4">
                        <div class="col text-end">
                            <input type="submit" name="sub" value="Sign Up" class="btn btn-primary btn-block w-50 link-text">
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
include "email_registration.php";

//button function
if (isset($_POST['sub'])) {
    $full = $_POST['fullname'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = md5($_POST['pass']);
    $confirmpass = md5($_POST['confirmpass']);
    $usertype = "Customer";
    $otp = rand(000000, 999999);

    $usersql = "select * from tbl_user where username = '$user'";
    $user_result = $con->query($usersql);

    if ($user_result->num_rows == 0) {

        if ($pass == $confirmpass) {
        $insertsql = "insert into tbl_user (full_name, role, username, password, email,otp,status)
        values('$full', '$usertype', '$user','$pass', '$email',$otp, 'Inactive')";

        $result = $con->query($insertsql);

        if ($result == True) {?>
          
        <?php
        send_verification($full,$email,$otp);
        } else {
            echo $con->error;
        }
    } else {
        ?>
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Password mismatch!",
                timer: 3000
            });
        </script>
        <?php
    }
        
    } else { ?>
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Username already exists. Please choose a different username.",
                timer: 1500
            });
        </script>
<?php  }
}
?>