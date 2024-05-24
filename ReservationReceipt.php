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
date_default_timezone_set("Asia/Manila");
session_start();
require_once "FinalsTable\BusArrays.php";
require_once "dbconnect.php";
include "logger.php";


$ticket_id = "ALPSBR" . rand(1000, 9999);
$receipt_id = $_POST['book_id'];
$receipt_num = $_POST['book_num'];
$receipt_type = $_POST['book_type'];
$receipt_ddate = $_POST['book_ddate'];
$receipt_dtime = $_POST['book_dtime'];
$receipt_depart = $_POST['book_depart'];
$receipt_desti = $_POST['book_desti'];
$receipt_route = $receipt_depart . " to " . $receipt_desti;
$reserve_date = $_POST['r_date'];
$receipt_price =  $_POST['book_price'];
$receipt_tseats = $_POST['book_tseats'];
$receipt_aseats = $_POST['book_aseats'];

$receipt_f_name = $_POST['f_name'];
$receipt_l_name = $_POST['l_name'];
$receipt_m_name = $_POST['m_name'];
$receipt_fullname = $receipt_f_name . " " . $receipt_m_name . " " . $receipt_l_name;

$receipt_c_number = $_POST['c_number'];
$receipt_seatnum = $_POST['seatnum'];
$seatnum = $_SESSION['seatnum'] = $receipt_seatnum;
$receipt_payment = "Undecided";

$receipt_status = "Pending";

if (isset($_POST['booking'])) {

  $dec_seat = "UPDATE tbl_schedule SET available_seats = available_seats - 1 WHERE schedule_id = ? AND available_seats > 0";
  $stmt = $con->prepare($dec_seat);
  $stmt->bind_param("i", $receipt_id);
  $dec_result = $stmt->execute();

  //check if successfully updated
  if ($dec_result == True) {
?>
    <script>
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Please proceed to payment!",
        showConfirmButton: false,
        timer: 4000
      });
    </script>
<?php
    $action = 'Booked';
    logActivity($con, $userID, $action);

    $reservationsql = "Insert into tbl_reservation (schedule_id, ticket_number, passenger_name ,contact_information,seat_number,reservation_date, payment_method, status)
    values ('$receipt_id','$ticket_id','$receipt_fullname','$receipt_c_number','$receipt_seatnum','$reserve_date','$receipt_payment','$receipt_status')
    ";

    $reserved = $con->query($reservationsql);

    $reservation_datetime = new DateTime($reserve_date);
    $reservation_datetime->setTimezone(new DateTimeZone('Asia/Manila'));
    $reservation_date_formatted = $reservation_datetime->format('Y-m-d g:i A');
    

    $receipt_data = array(
      "Ticket Number" => "<h3 class ='mt-1'>" . $ticket_id . "</h5>",
      "Reservation Date" => $reservation_date_formatted,
      "Bus Number" => $receipt_num,
      "Bus Type" => $receipt_type,
      "Departure Date & Time" => $receipt_ddate . " " . date_format(date_create($receipt_dtime), 'g:i A'),
      "Route" => $receipt_depart . " to " . $receipt_desti,
      "Passenger Name" => $receipt_fullname,
      "Contact Number" => $receipt_c_number,
      "Chosen Seat Number" => $receipt_seatnum,
      "Status" => "<h5 class ='mt-1'>" . $receipt_status . "</h5>",
      "Payment Method" => $receipt_payment,
      "Price" => "<h3 class ='text-success'> ₱ " . $receipt_price  . "</h3>",

    );


    echo "<div class ='container-fluid bg-row w-75 p-4 rounded '>";
    echo "<div class ='table-responsive bdr'>";
    echo "<table class='table table-sm table-bordered border-primary-subtle table-hover mx-auto'>";
    echo "<thead class ='table-dark'>";
    echo "<th class ='col-12 h2 p-4' colspan='2'> Bus Reservation Details </th>";
    echo "</thead>";
    echo "<tbody class='table-group-divider border-primary-subtle tbl-body'>";



    foreach ($receipt_data as $data => $reserve) {
      echo "<tr>";
      echo "<td class='h6'>" . $data . "</td>";
      echo "<td>" . $reserve . "</td>";
      echo "</tr>";
    }

    echo "</table>";

    echo "</div>";
    echo "<div class ='row'>";
    echo "<div class ='col'>";
    echo "<button id='printButton' class='btn w-50'>Print</button>";
    echo "</div>";
    echo "<div class ='col'>";
    echo "<form action='Payment.php' method ='post'>";
    echo "<input type='hidden' class='form-control' name='ticket_pay' value=".$ticket_id." >";
    echo "<input type='hidden' class='form-control' name='passenger' value=".$receipt_fullname." >";
    echo "<input type='hidden' class='form-control' name='receipt_price' value=".$receipt_price." >";
    echo "<button id='backButton' name='pay' class='btn w-50'>Payment</button>";
    echo "</form>";
    echo "</div>";

    echo "</div>";
  }
}
?>

<script>
  document.getElementById('printButton').addEventListener('click', function() {
    window.print();
  });
</script>

</body>

</html>