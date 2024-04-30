<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alps Login</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href=style.css rel="stylesheet" />
</head>

<body class="banner-area">
    <script src="scripts.js"></script>
    <script src="bootstrap.min.js"></script>


    <div class="container container-login shadow bg-white rounded border border-3 border-white">


        <div class="row align-middle">
            <div class="col bg-primary-subtle rounded ">
                <div class="container w-75 p-5">
                    <h1 class="text-center display-4 about-para mt-2">Login</h1>
                    <form action="logintemplate.php" method=post>
                        <!-- Email input -->
                        <div class="form-floating mb-3 link-text">
                            <input type="text" class="form-control" name="user" id="floatingInput" placeholder="Malt">
                            <label for="floatingInput" class="link-text">Username</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-floating mb-3 link-text">
                            <input type="password" class="form-control" name="pass" id="floatingInput" placeholder="Cisco123!">
                            <label for="floatingInput" class="link-text">Password</label>
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center link-text">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" />
                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center ">
                                <a href="Register.php" class="link-text">Forgot Password?</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <div class="row text-center">
                            <div class="col">
                                <input type="submit" name=sub value="Log In" class="btn btn-primary btn-block mb-4 mx-auto w-100 link-text">
                            </div>
                            <div class="col">
                                <a href="Booking.php">
                                    <input type="button" value="Go Back" class="btn btn-secondary btn-block link-text  w-100">
                                </a>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
            <div class="col text-center my-auto">
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <img src="Alps.png" alt="" class="img-fluid rounded mx-auto d-block w-50 h-20 ">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col d-flex justify-content-center">
                        <p class="link-text ">Serbisyong totoo... Pusong Batangueno, Para sa lahing Pilipino</p>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <a href="Registration.php" class="link-text">Don't Have an Account?</a>
                    </div>
                </div>



            </div>

        </div>
    </div>
    <div class="container">

    </div>
</body>

</html>