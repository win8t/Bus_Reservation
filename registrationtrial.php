<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alps Login</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="style.css" rel="stylesheet" />
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

                <form action="registrationtrial.php" method=post>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <!-- Username input -->
                            <div class="form-floating mb-3 link-text">
                                <input type="text" class="form-control" name="user" id="floatingInput">
                                <label for="floatingInput" class="link-text">Username</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- FullName input -->
                            <div class="form-floating mb-3 link-text">
                                <input type="email" class="form-control" name="email" id="floatingInput">
                                <label for="floatingInput" class="link-text">Email</label>
                            </div>
                        </div>


                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <!-- Email input -->
                            <div class="form-floating mb-3 link-text">
                                <input type="text" class="form-control" name="fullname" id="floatingInput">
                                <label for="floatingInput" class="link-text">Full Name</label>
                            </div>
                        </div>

                    </div>

                    <div class="row justify-content-center">


                        <div class="col-md-6">
                            <!-- Password input -->
                            <div class="form-floating mb-5 link-text">
                                <input type="password" class="form-control" name="pass" id="floatingInput">
                                <label for="floatingInput" class="link-text">Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Password Confirmation input -->
                            <div class="form-floating mb-3 link-text">
                                <input type="password" class="form-control" name="confirmpass" id="floatingInput">
                                <label for="floatingInput" class="link-text">Confirm Password</label>
                            </div>
                        </div>

                    </div>


                    <div class="row mb-4">
                        <div class="col text-end">
                            <input type="submit" name=sub value="Sign Up" class="btn btn-primary btn-block w-50 link-text">
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

    
</body>

</html>

<?php
require_once "dbconnect.php";
include "email_registration.php";

// Button function
if (isset($_POST['sub'])) {
    $full = $_POST['fullname'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = md5($_POST['pass']);
    $confirmpass = md5($_POST['confirmpass']);
    $usertype = "Customer";
    $otp = rand(000000, 999999);

    // Check if passwords match
    if ($pass == $confirmpass) {

        // Check if the username already exists
        $usersql = "select * from tbl_user where username = '$user'";
        $user_result = $con->query($usersql);

        if ($user_result->num_rows == 0) {
            // Username is unique, proceed with insertion
            $insertsql = "INSERT INTO tbl_user (full_name, role, username, password, email, otp)
                          VALUES ('$full', '$usertype', '$user', '$pass', '$email', '$otp')";
            $result = $con->query($insertsql);

            if ($result == true) {
                // If insertion successful, send verification email
                send_verification($full, $email, $otp);
                ?>
                <script>
                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        text: "Registration successful! Verification email has been sent.",
                        timer: 3000
                    }).then(function() {
                        window.location = "login.php"; // Redirect to login page
                    });
                </script>
                <?php
            } else {
                echo $con->error;
            }
        } else {
            // Username already exists
            ?>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Username already exists. Please choose a different username.",
                    timer: 3000
                });
            </script>
            <?php
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
}
?>
