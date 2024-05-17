<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="bootstrap.min.css" rel="stylesheet" />
  <link href="stylez.css" rel="stylesheet" />
  <style>
    body {
      background-image: linear-gradient(to right, #0000005b, #ffffff00, #0000005b), url("Alps2.jpg");
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
      background-color: rgb(7, 44, 75) !important;
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
session_start();
require_once "FinalsTable\BusArrays.php";
require_once "dbconnect.php";


$ticket_id = "<h5 class ='mt-1'>" . "ALPSBR" . rand(100000, 999999) . "</h5>";
$receipt_id = $_POST['book_id'];
$receipt_num = $_POST['book_num'];
$receipt_type = $_POST['book_type'];
$receipt_ddate = $_POST['book_ddate'];
$receipt_dtime = $_POST['book_dtime'];
$receipt_atime = $_POST['book_atime'];
$receipt_depart = $_POST['book_depart'];
$receipt_desti = $_POST['book_desti'];
$receipt_route = $receipt_depart." to ".$receipt_desti;

$receipt_price = "<h3 class ='text-success'> ₱ " . $_POST['book_price'] . "</h3>";
$receipt_tseats = $_POST['book_tseats'];
$receipt_aseats = $_POST['book_aseats'];

$receipt_f_name = $_POST['f_name'];
$receipt_l_name = $_POST['l_name'];
$receipt_m_name = $_POST['m_name'];
$receipt_fullname = $receipt_f_name." ".$receipt_m_name." ".$receipt_l_name;

$receipt_c_number = $_POST['c_number'];
$receipt_seatnum = $_POST['seatnum'];
$seatnum = $_SESSION['seatnum'] = $receipt_seatnum;


$receipt_status = "<h5 class ='mt-1'>Reserved</h5>";

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
        title: "Your seat has been reserved ",
        showConfirmButton: false,
        timer: 1500
      });
    </script>
<?php


    $receipt_data = array(
      "Ticket ID" => $ticket_id,
      "Bus Number" => $receipt_num,
      "Bus Type" => $receipt_type,
      "Departure Date" => $receipt_ddate,
      "Departure Time" => $receipt_dtime,
    /*  "Departure" => $receipt_depart,
      "Destination" => $receipt_desti, */
      "Route Name" => $receipt_route,
      "Passenger Name" => $receipt_fullname,
      "Contact Number" => $receipt_c_number,
      "Chosen Seat Number" => $receipt_seatnum,
      "Status" => $receipt_status,
      "Price" => $receipt_price,

    );


    echo "<div class ='container-fluid bg-row w-75 p-4 rounded '>";
    echo "<div class ='table-responsive bdr'>";
    echo "<p class='display-5 text-center text-white'>Booking Information</p>";
    echo "<table class='table table-bordered table-hover mx-auto'>";
    echo "<thead class ='table-dark'>";
    echo "<th class ='col-6'> Bus Reservation Receipt </th>";
    echo "<th class ='col-6'> Details </th>";
    echo "</thead>";
    echo "<tbody class='table-group-divider tbl-body'>";



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
    echo "<a id='backButton' class='btn w-50' href='BookingLog.php'>Check Status</a>";
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