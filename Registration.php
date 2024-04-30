<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alps Registration</title>

    <link href="style.css" rel="stylesheet" />
    <link href="bootstrap.min.css" rel="stylesheet" />
</head>

<body class="banner-area">
    <div class="container p-5 w-50 bg-primary-subtle container-login shadow-lg border border-3 border-light rounded">
        <div class="row mb-4">
            <div class="col text-center fw-bold">
                <span class="display-4 about-para">Register</span>
                <p>Welcome to Alps, start your journey with registering your account!</p>
            </div>
        </div>
        <form action="Registration.php" method="post"> <!-- to create function and put js to submit button --> <!-- required if there is an image to upload -->


            <div class="row mb-4">

                <div class="row mb-4 link-text">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="user" id="floatingInput" minlength="1">
                            <label for="floatingInput" class="link-text text-secondary">Username</label>

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="password" class="form-control" name="pass" id="floatingInput" minlength="1" maxlength="20">
                            <label for="floatingInput" class="link-text text-secondary">Password (Ex. Cisco123!)</label>

                        </div>
                    </div>
                </div>


                <div class="row mb-4 link-text">
                    <div class="col">
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" name="fulln" id="floatingInput" minlength="1">
                            <label for="floatingInput" class="link-text text-secondary">Full Name (Ex. Juan M. Dela Cruz)</label>


                        </div>



                        <!-- Email input -->
                        <div class="col">
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" name="email" id="floatingInput">
                                <label for="floatingInput" class="link-text text-secondary">Email (Ex. ust@gmail.com)</label>
                            </div>
                        </div>


                      

                    </div>
                </div>


                <div class="row text-center">
                    <div class="col">
                        <input type="submit" name="sub" class="btn btn-primary btn-block link-text w-100" value="Save Details" id=sub>
                    </div>
                    <div class="col">
                        <a href="Login.php">
                            <input type="button" value="Go Back" class="btn btn-secondary btn-block link-text w-100">
                        </a>
                    </div>
                </div>


        </form>

    </div>

    <script src="scripts.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </script>
</body>

</html>
<?php
require_once "dbconnect.php";

//button function
if (isset($_POST['sub'])) {
    $full = $_POST['fulln'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $usertype = "Customer";


    $insertsql = "insert into tbl_user (full_name, role, username, password, email)
    values('$full',  '$usertype', '$user','$pass', '$email')";

    $result = $con->query($insertsql);

    if ($result == True) {
?>
        <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Your work has been saved",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
<?php
    } else {
        echo $con->error;
    }
}
?>