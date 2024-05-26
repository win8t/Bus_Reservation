<?php
    session_start();
    require "dbconnect.php";
?>
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
  

    <?php
    if (isset($_POST['sub'])) {
        //userinput 
        $username = $_POST['user'];
        $password = md5($_POST['pass']);

        //login based on role

        $loginsql = "Select * from tbl_user where username = '" . $username . "' and password ='" . $password . "' and status = 'Active'";

        $loginresult = $con->query($loginsql);
        if ($loginresult->num_rows == 1) {
            $fielddata = $loginresult->fetch_assoc();

            $role = $fielddata['role'];
            $_SESSION['role'] = $role;

            $user = $fielddata['username'];
            $_SESSION['username'] = $user;

            $userID = $fielddata['user_id'];
            $_SESSION['user_id'] = $userID;

            $logsql = "Insert into tbl_logs (user_id,action,DateTime)
            values($userID,'Logged In',NOW())";
            $con->query($logsql);

            if ($role == "Admin") {
                header("location: .\FinalsTable\Overview2.php");
            } else if ($role == "Customer") {
                header("location: HomeLog.php");
            } else if ($role == "Employee") {
                header("location: .\FinalsTable\Bus1.php");
            } ?>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Invalid Role!",
                    timer: 1500
                });
            </script>

        <?php
        } else { ?>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Invalid Login!",
                    timer: 1500
                });
            </script>
    <?php }
    }


    ?>

    <div class="d-flex flex-container container-fluid ">


        <div class="row login-container w-75 mx-auto">
            <div class="col-7 bg-info-subtle p-5 text-center mx-auto banner-shadow rounded">


                <div class="row">
                    <div class="col">



                        <h2 class="display-2 about-login">Login</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="link-text">Welcome to Alps Bus Reservation Website!</p>
                    </div>
                </div>

                <form action="Login.php" method="post" novalidate class="needs-validation">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <!-- Username input -->
                            <div class="form-floating mb-3 link-text">
                                <input type="text" class="form-control" name="user" id="floatingInput" required>
                                <label for="floatingInput" class="link-text">Username<span class="text-danger">*</span></label>
                                <div class="invalid-feedback text-start">Please enter a username.</div>
                                <div class="valid-feedback text-start">Entered username.</div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <!-- Password input -->
                            <div class="form-floating mb-3 link-text">
                                <input type="password" class="form-control" name="pass" id="floatingInput" required>
                                <label for="floatingInput" class="link-text">Password<span class="text-danger">*</span></label>
                                <div class="invalid-feedback text-start">Please enter a password.</div>
                                <div class="valid-feedback text-start">Entered password</div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center ">
                            <a href="ForgotPassword.php" class="link-text"><strong>Forgot Password?</strong></a>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col text-end">
                            <input type="submit" name="sub" value="Log In" class="btn btn-primary btn-block w-50 link-text">
                        </div>
                        <div class="col text-start">
                            <a href="Home.php">
                                <input type="button" value="Go Back" class="btn btn-secondary btn-block link-text  w-50">
                            </a>
                        </div>
                    </div>
                </form>



            </div>
            <div class="col-5 banner-area h-50 d-flex flex-column justify-content-center rounded">
                <div class="row mb-1">
                    <div class="col d-flex justify-content-center">
                        <h1 class="display-1 about-login">ALPS</h1>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col d-flex justify-content-center">
                        <p class="link-text">Serbisyong totoo... Pusong Batangueno, Para sa lahing Pilipino</p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <a href="Registration.php" class="link-text"><strong>Don't Have an Account?</strong></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="scripts.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="formvalidation.js"> </script>
</body>

</html>