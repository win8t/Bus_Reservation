<?php

if (!isset($_SESSION)) {
    session_start();
}
require "dbconnect.php";
$userID = $_SESSION['user_id'];

function logActivity($con, $userID, $action) {
    $logsql = $con->prepare("INSERT INTO tbl_logs (user_id, action, DateTime) VALUES (?, ?, NOW())");
    if (!$logsql) {
        // Error Message
        return "Error: " . $con->error;
    }
    
    $logsql->bind_param('is', $userID, $action);

    if ($logsql->execute()) {
        // Log successfully
        return true;
    } else {
        // Error Message
        return "Error: " . $logsql->error;
    }
}

?>