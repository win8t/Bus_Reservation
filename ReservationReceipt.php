<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<?php

require_once "dbconnect.php";

  $receipt_id = $_POST['book_id'];
  $receipt_num = $_POST['book_num'];
  $receipt_type = $_POST['book_type'];
  $receipt_ddate = $_POST['book_ddate'];
  $receipt_dtime = $_POST['book_dtime'];
  $receipt_atime = $_POST['book_atime'];
  $receipt_depart = $_POST['book_depart'];
  $receipt_desti = $_POST['book_desti'];
  $receipt_price = $_POST['book_price'];
  $receipt_tseats = $_POST['book_tseats'];
  $receipt_aseats = $_POST['book_aseats'];
  $receipt_p_name = $_POST['p_name'];
  $receipt_c_number = $_POST['c_number'];
  $receipt_seatnum = $_POST['seatnum'];
  if (isset($_POST['booking'])) {

    $dec_seat = "UPDATE tbl_schedule SET available_seats = available_seats - 1 WHERE schedule_id = ? AND available_seats > 0";
    $stmt = $con->prepare($dec_seat);
    $stmt->bind_param("i", $receipt_id); // Assuming user_id is an integer
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
    }
    
    echo $receipt_id."<br>"; 
    echo  $receipt_num."<br>";
    echo $receipt_type."<br>";
    echo $receipt_ddate."<br>";
    echo $receipt_dtime."<br>";
    echo $receipt_atime."<br>";
    echo $receipt_depart."<br>";
    echo  $receipt_desti."<br>";
    echo  $receipt_price."<br>";
    echo $receipt_tseats."<br>";
    echo $receipt_aseats."<br>";
    echo  $receipt_p_name."<br>";
    echo $receipt_c_number."<br>";
    echo  $receipt_seatnum."<br>";

}



?>

<!-- Now you can use $book_id, $book_num, $book_type, etc., anywhere in your HTML/PHP code

-->
