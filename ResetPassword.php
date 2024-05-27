<?php
if (!isset($_SESSION)) {
    session_start();
  }
require "dbconnect.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alps Reset Password</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="stylez.css" rel="stylesheet" />
</head>

<body class="login-content-container7">
    <script src="scripts.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
    if (isset($_POST['sub'])) {
        $email = $_SESSION['email'];
        $pass = md5($_POST['pass']);
        $confirmpass = md5($_POST['confirmpass']);

        if ($pass == $confirmpass) {
            $updatesql = "UPDATE tbl_user SET password = '$pass' WHERE email = '$email'";
    
            $result = $con->query($updatesql);

            if ($result == TRUE) {?>
                <script>
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Reset Password!",
                    showConfirmButton: false,
                    timer: 1500,
                    willClose: () => {
                        Swal.close();
                        setTimeout(function() {
                            window.location.href = "Login.php";
                        }, 500);
                    }
                });
                </script>
                <?php
            }else{
                echo "Error:".$con->error;
            }
        }else{?>
            <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Password mismatch!",
                timer: 3000
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
                        <h2 class="display-2 about-login">Reset Password</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="link-text">Please enter a password to secure your account!</p>
                    </div>
                </div>

                <form action="ResetPassword.php" method="post" novalidate class="needs-validation">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <!-- Password input -->
                            <div class="form-floating mb-3 link-text">
                                <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>">
                                <input type="password" class="form-control" name="pass" id="floatingInput" required>
                                <label for="floatingInput" class="link-text">Password<span class ="text-danger">*</span></label>
                                <div class="invalid-feedback text-start">Please enter a password.</div>
                                <div class="valid-feedback text-start">Entered password</div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <!-- Password input -->
                            <div class="form-floating mb-3 link-text">
                                <input type="password" class="form-control" name="confirmpass" id="floatingInput" required>
                                <label for="floatingInput" class="link-text">Confirm Password<span class ="text-danger">*</span></label>
                                <div class="invalid-feedback text-start">Please re-enter your password.</div>
                                <div class="valid-feedback text-start">Re-entered password</div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                            <input type="submit" name="sub" value="Reset" class="btn btn-primary mx-auto btn-block w-50 link-text rounded-pill">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="formvalidation.js"> </script>
</body>

</html>