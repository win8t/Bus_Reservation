<?php 
session_start(); 
require "dbconnect.php"; 
// set_include_path(get_include_path() . PATH_SEPARATOR . 'C:\xampp\htdocs\FINAL_ALPS_BUS\FinalsTable');
 set_include_path(get_include_path() . PATH_SEPARATOR . 'C:\xampp\htdocs\FINALS PROJECT\FinalsTable');
include "logger.php";

?>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="bootstrap.min.css" rel="stylesheet" />
    <link href="stylez.css" rel="stylesheet" />
    <style>
        body {
            background-image: linear-gradient(to right, #000000b6, #00000006, #000000b6), url("Alps2.jpg");
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-size: cover;
        }

        .table-container {
            margin-top: 20%;
            /* Adjust as needed */
        }

        .table {
            width: 100% !important;
            border: 2px solid;
            border-radius: 5%;
            text-align: center;
            vertical-align: middle;
        }

        th {
            background-image: linear-gradient(#1717178c, #29292947), url('./FinalsTable/Sidebar.jpg');
        }

        td {
            background-color: #FFF !important;
        }
    </style>
</head>

<body>
    <script src="bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
<?php

echo "<div class ='container-fluid bg-row w-75 p-4 rounded '>";

echo "<div class='row bg-info-subtle rounded-2 mx-auto'>";
echo "<h4 class ='text-center display-4 mt-2'><strong>Payment Details</strong></h4>";
echo "<p class ='text-center'>Please select your payment method below.</p>";
echo "</div>";

echo "<div class='row'>";


echo  "<div class='col p-4  bg-info-subtle rounded-2 m-2'>";
?>
<h4 class='text-center'>Payment Breakdown</h4>
<hr>
<?php
if (isset($_POST['pay'])) {
    
    $pay_ticket = $_POST['ticket_pay'];
    $price_ticket = $_POST['receipt_price'];
    $passenger = $_POST['passenger'];

    $_SESSION['ticket_pay'] = $pay_ticket;

    echo "<div class ='table-responsive p-2 mb-0 rounded-2'>";
    echo "<table class ='table border border-dark border-2 rounded-2 table-dark mt-3'>";

    echo "<tr>";
    echo "<th> Ticket ID </th>";
    echo "<td class='text-dark'><b>" .  $pay_ticket . "</b></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th> Passenger Name</th>";
    echo "<td class='text-dark'>" . $passenger . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<th> Price </th>";
    echo "<td class='text-success h3'>" . $price_ticket . "</td>";
    echo "</tr>";
    echo "</table>";
    echo   "</div>";
}
echo   "</div>";

echo  "<div class='col p-4 bg-info-subtle rounded-2 m-2'>";
?>

<h4 class='text-center'>Payment Method</h4>
<hr>
<form action="Payment.php" method="post" novalidate class="needs-validation">
    <div class="bg-rowPay rounded-2 p-4">
        
        <select name="method" id="" class="form-select w-50 mb-3 mx-auto mt-3" required>
            <option default disabled selected value="">Select your payment</option>
            <option value="Cash">Cash</option>
            <option value="E-wallet">E-wallet (GCash) </option>
            
        </select>
        <div class="invalid-feedback text-center">Select a payment method.</div>
        <div class="valid-feedback text-center">Payment method selected.</div>
      

        <input type="hidden" name="pay_ticket" id="" value=<?php echo $_SESSION['ticket_pay'] ?>>
        <div class="row text-center">
            <div class="col">
                <button type="submit" name="paying" class="btn w-25 rounded-4 btn-primary mt-1">Confirm</button>
            </div>
        </div>
    </div>

</form>
<?php
echo  "</div>";
echo "</div>";
echo "</div'>";

if (isset($_POST['paying'])) {
    $paymethod = $_POST['method'];
    $payticket = $_POST['pay_ticket'];
    switch ($paymethod) {
        case "Cash":
            $updatesql = "UPDATE tbl_reservation SET payment_method = ? WHERE ticket_number = ?";
            $stmt = $con->prepare($updatesql);
        
            // Bind parameters and execute the statement
            $stmt->bind_param('ss', $paymethod, $payticket);
            $stmt->execute();


?>
            <script>
                var cashier = Math.floor(Math.random() * 5) + 1;

                // Display the SweetAlert popup
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Please proceed to Cashier " + cashier + ".",
                    showConfirmButton: false,
                    timer: 4500
                }).then(() => {
                    window.location.href = 'HomeLog.php';
                });
            </script>
<?php
            $action = 'Over-the-Counter Payment';
            logActivity($con, $userID, $action);
            break;

        case "E-wallet":
            $updatesql = "UPDATE tbl_reservation SET payment_method = ? WHERE ticket_number = ?";
            $stmt = $con->prepare($updatesql);
        
            // Bind parameters and execute the statement
            $stmt->bind_param('ss', $paymethod, $payticket);
            $stmt->execute();

            header("Location:GCash.php");
            break;
    }
}
?>

<script src="formvalidation.js"> </script>
</body>

</html>