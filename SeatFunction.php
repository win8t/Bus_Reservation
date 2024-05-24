<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
  require_once "dbconnect.php";
function seattype($bus_type, $schedule_id, $con) {
    
    // Determine the number of seats based on the bus type
    switch ($bus_type) {
        case 'Executive':
            $num_seats = 48;
            break;
        case 'Executive Solo':
            $num_seats = 32;
            break;
        case 'Executive Class':
            $num_seats = 40;
            break;
        case 'Executive Luxury':
            $num_seats = 36;
            break;
        default:
            $num_seats = 0; // Default to 0 if the bus type is not recognized
    }

    // Database connection

    $query = "SELECT seat_number FROM tbl_reservation WHERE schedule_id = $schedule_id";
    $select_result = $con->query($query);
    

    // Generate the HTML for the seat number dropdown
    if ($select_result == true) {
        $booked_seats = array();
        while ($row = mysqli_fetch_assoc($select_result)) {
            $booked_seats[] = $row['seat_number'];
        }
        echo '<select name="seatnum" class="form-select" required>';
        echo "<option selected disabled value=''>Please choose your seat</option>";
        for ($seat = 1; $seat <= $num_seats; $seat++) {
            
            if (array_search($seat, $booked_seats) === false) {
                echo "<option value='$seat'>$seat</option>";
            }            
        }
        echo '</select>';
    } else {
        echo "Error: " . $con->error;
    }
}
?>
