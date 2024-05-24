<?php
require "dbconnect.php";
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Alps Booking Reservation</title>
    <link href=stylerr.css rel="stylesheet" />


</head>
<link href="bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<body class ="status-body">
<?php
    date_default_timezone_set("Asia/Manila");
    ?>
    <?php  ?>
    <script>
        function swapValues() {
            event.preventDefault();
            // Get the selected values of origin and destination
            var originValue = document.getElementById('origin').value;
            var destinationValue = document.getElementById('destination').value;

            // Swap the values
            document.getElementById('origin').value = destinationValue;
            document.getElementById('destination').value = originValue;
        }
    </script>

<script src="scripts.js"></script>
    <script src="bootstrap.bundle.min.js"></script>

    <nav class="navbar navbar-expand-lg fixed-top navbar-book bg-info-subtle">
        <div class="container-fluid">
            <a class="navbar-brand me-auto ml-1 pe-none" href="#" aria-disabled="true" tabindex="-1">
                <img src="Alps.png" alt="" class="logo img-fluid">

            </a>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Alps</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-5">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 mx-auto" href="HomeLog.php"><i class="bi bi-house-fill"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 mx-auto" aria-current="page" href="BookingLog.php"><i class="bi bi-journal-album"></i> Book</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active mx-lg-2 mx-auto" href="#"><i class="bi bi-bus-front"></i> Status</a>
                        </li>
                        <!--
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 mx-auto" href="#"><i class="bi bi-shop"></i> Transit</a>
                        </li> -->
                    </ul>
                </div>

            </div>
            <form action="Logout.php" method="post">
                <button class="book-status-button  mt-4 border-0" type="submit" name="logout" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">

                    <i class="bi bi-person-circle"></i><?php echo " " . $_SESSION['username']; ?>
                </button>
            </form>
        </div>
    </nav>



    
</body>
</html>

<?php



?>