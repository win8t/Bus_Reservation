<?php
require "dbconnect.php";
if (!isset($_SESSION)) {
    session_start();
}
$userID = $_SESSION['user_id'];

function logActivity($con, $userID, $action) {
    $logsql = $con->prepare("INSERT INTO tbl_logs (user_id, action, DateTime) VALUES (?, ?, NOW())");
    if (!$logsql) {
        // Handle prepare statement error
        return "Error: " . $con->error;
    }
    
    $logsql->bind_param('is', $userID, $action);

    if ($logsql->execute()) {
        // Log entry added successfully
        return true;
    } else {
        // Handle execution error
        return "Error: " . $logsql->error;
    }
}

?>