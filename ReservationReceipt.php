<?php
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
    echo $receipt_id;
    echo  $receipt_num;
    echo $receipt_type;
    echo $receipt_ddate;
    echo $receipt_dtime;
    echo $receipt_atime;
    echo $receipt_depart;
    echo  $receipt_desti;
    echo  $receipt_price;
    echo $receipt_tseats;
    echo $receipt_aseats;
    echo  $receipt_p_name;
    echo $receipt_c_number;
    echo  $receipt_seatnum;

}



?>

<!-- Now you can use $book_id, $book_num, $book_type, etc., anywhere in your HTML/PHP code

-->
