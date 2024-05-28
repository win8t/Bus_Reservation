<?php
if (!isset($_SESSION)) {
    session_start();
  }
require "dbconnect.php";
// set_include_path(get_include_path() . PATH_SEPARATOR . 'C:\xampp\htdocs\FINAL_ALPS_BUS\FinalsTable');
 set_include_path(get_include_path() . PATH_SEPARATOR . 'C:\xampp\htdocs\FINALS PROJECT\FinalsTable');
include "logger.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alps Status</title>
    <link href="stylez.css" rel="stylesheet" />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            margin: 0;
            overflow: hidden;
        }

        th {
            background-image: linear-gradient(#1717178c, #29292947), url('./FinalsTable/Sidebar.jpg');
        }

        td {
            background-color: #FFF !important;
        }
    </style>
</head>
<link href="bootstrap.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<body class="status-body hd-text">
    <?php
    date_default_timezone_set("Asia/Manila");
    ?>

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
                    </ul>
                </div>
            </div>
            <form action="Logout.php" method="post">
                <button class="book-status-button mt-4 border-0" type="submit" name="logout" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <i class="bi bi-person-circle"></i><?php echo " " . $_SESSION['username']; ?>
                </button>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
            
        </div>
    </nav>

<?php
echo "<div class ='container-fluid bg-info-subtle shadow-sm rounded-3 w-75 p-4'>";
echo "<h2 class = 'about-login mx-auto text-center'> ALPS RESERVATION DETAILS VIEWING </h2>";
?>

<div class="row mx-auto justify-content-center p-1 m-1 rounded">
    <div class="col text-center">
        <!-- Date Time - Local -->
        <div class="row rounded p-2">
            <div id="datetime" class="h4 text-dark about-text"></div>
            <script>
                function updateDateTime() {
                    var now = new Date();
                    var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
                        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
                    ];
                    var dayNames = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
                    var month = monthNames[now.getMonth()];
                    var day = now.getDate();
                    var year = now.getFullYear();
                    var dayOfWeek = dayNames[now.getDay()];
                    var time = now.toLocaleTimeString();
                    var dateTimeString = dayOfWeek + ', ' + month + ' ' + day + ', ' + year + ', ' + time;
                    document.getElementById('datetime').textContent = dateTimeString;
                }
                // Update the date and time every second
                setInterval(updateDateTime, 1000);

                // Initial update
                updateDateTime();
            </script>
        </div>
    </div>

</div>

<?php
if (isset($_POST['searchresbutton'])) {
    $user = $_SESSION['username'];
    $tickets_number = $_POST['search'];


    $selectsql = "SELECT * FROM reservation_booking_view WHERE ticket_number = '$tickets_number' AND username = '$user'";
    $status_result = $con->query($selectsql);
    echo "<div class ='container-fluid bg-row-status w-100 p-5 rounded mb-3'>";

    if ($status_result->num_rows > 0) {

        echo "<div class ='bdr'>";
        echo "<div class ='table-responsive m-3'>";
        echo "<table class='table table-sm table-bordered border-primary-subtle table-hover mx-auto'>";
        echo "<thead class ='table-dark text-center'><tr>";
        echo "<th>Ticket Number</th>";
        echo "<th>Bus Number</th>";
        echo "<th>Route Name</th>";
        echo "<th>Seat Number</th>";
        echo "<th>Departure Time</th>";
        echo "<th>Departure Date</th>";
        echo "<th>Status</th>";
        echo "</tr></thead>";
        echo "<tbody class ='text-center'>";
        while ($fielddata = $status_result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fielddata['ticket_number'] . "</td>";
            "<td>" . $fielddata['payment_method'] . "</td>";
            echo "<td>" . $fielddata['bus_number'] . "</td>";
            echo "<td>" . $fielddata['route_name'] . "</td>";
            echo "<td>" . $fielddata['seat_number'] . "</td>";
            echo "<td>" . date_format(date_create($fielddata['departure_time']), 'g:i A') . "</td>";
            echo "<td>" . $fielddata['departure_date'] . "</td>";
            echo "<td>" . $fielddata['status'] . "</td>";
            echo "</tr>";
            echo "</tbody></table>";
            echo "</div>";
            echo "</div>";

?>
            <form action="StatusLog.php" method="post">
                <input type="hidden" name="ticket_number" value="<?php echo $fielddata['ticket_number']; ?>">
                <input type="hidden" name="seat" value="<?php echo $fielddata['seat_number']; ?>">
                <input type="hidden" name="method" value="<?php echo $fielddata['payment_method']; ?>">
                <input type="hidden" name="status" value="<?php echo $fielddata['status']; ?>">
                <div class="row text-center">
                    <div class="col">
                    <?php if ($fielddata['status'] == 'Reserved' && $fielddata['payment_method'] == 'Cash' || $fielddata['status'] == 'Boarded' || $fielddata['status'] == 'Cancelled') {?>
                            <button type="button" value="PrintBooking" id="printsButton" class="shadows btn btn-success mx-2 w-25 rounded-4"> Print </button>
                    <?php
                        } else {?>
                            <button type="button" value="PrintBooking" id="printsButton" class="shadows btn btn-success mx-2 w-25 rounded-4"> Print </button>
                            <button type="submit" value="CancelBooking" name="cancel" class="shadows btn btn-danger w-25 rounded-4" onclick="return confirm('Are you sure you want to cancel?');"> Cancel Booking </button>
                        <?php } ?>
                    </div>
                </div>
            </form>
<?php
        }
    } else {
        echo "<div class='row mt-3'>";
        echo "<div class='col'>";
        echo "<h2 class ='text-center display-7'><b>No booking found for ".$user." being ticket number: " . $tickets_number . "</b></h2>";
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";
}
?>
<form action="StatusLog.php" method="post" class="text-center" novalidate class="needs-validation" >
    <div class="row">
        <div class="col">
            <div class="invalid-feedback text-start">Please enter your ticket number.</div>
            <div class="valid-feedback text-start">Ticker number entered.</div>
            <input type="text" name="search" id="" class="form-control rounded-5 p-3 w-75 mx-auto gradient-input border-0" aria-label="Input group example" aria-describedby="invalid-feedback" placeholder="Enter your Ticket Number here!" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input type="submit" value="Search" name="searchresbutton" class="rounded-pill w-25 mt-4 btn text-white border-0 mt-1 gradient-search">
        </div>
    </div>
</form>
</div>

<?php
echo "</div'>";
?>
<script>
    document.getElementById('printsButton').addEventListener('click', function() {
        window.print();
    });
</script>
<?php
if (isset($_POST['cancel'])) {
    $ticket_number = $_POST['ticket_number'];
    $seat_num = $_POST['seat'];
    $paymethod = $_POST['method'];

    $sqlcancel = "UPDATE tbl_reservation SET status = 'Cancelled' WHERE ticket_number ='$ticket_number'";
    $result_cancel = $con->query($sqlcancel);

    if ($result_cancel) {
        $seatsql1 = "UPDATE tbl_reservation 
                 SET seat_number = NULL 
                 WHERE ticket_number ='$ticket_number' AND status ='Cancelled'";

        $seatsql2 = "UPDATE tbl_schedule 
                 SET available_seats = available_seats + 1 
                 WHERE schedule_id IN (
                     SELECT DISTINCT schedule_id 
                     FROM tbl_reservation 
                     WHERE ticket_number ='$ticket_number' AND status ='Cancelled'
                 )";

        $result_seat_update = $con->query($seatsql1);
        $result_capacity_update = $con->query($seatsql2);

        if ($result_seat_update && $result_capacity_update) {

            switch ($paymethod) {
                case "Cash":
?> <script>
                        Swal.fire({
                            title: "Your reservation has been cancelled.",
                            icon: "success"
                        }).then((result) => {
                            if (true) {
                                window.location.href = 'HomeLog.php';
                            }
                        });
                    </script> <?php
                                break;
                            case "E-wallet":
                                ?> <script>
                        Swal.fire({
                            title: "Your reservation has been cancelled.",
                            text: "Your payment will be refunded.",
                            icon: "success"
                        }).then((result) => {
                            if (true) {
                                window.location.href = 'HomeLog.php';
                            }
                        });
                    </script> <?php
                        }
                    } else {
                        echo "Error updating seat and/or bus capacity: " . $con->error;
                    }
                    $action = 'Cancelled Booking';
                    logActivity($con, $userID, $action);
                } else {
                    echo "Error cancelling reservation: " . $con->error;
                }
            }
            echo "</div>";
?>

<script src="formvalidation.js"> </script>
</body>

</html>