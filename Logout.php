<?php
if (!isset($_SESSION)) {
    session_start();
  }
require "dbconnect.php";

if (isset($_POST['logout'])) {
    if (isset($_SESSION['user_id'])) {
        $userID = $_SESSION['user_id'];
        $full = $_SESSION['full_name'];
        $role = $_SESSION['role'];

        $logoutsql = "INSERT INTO tbl_logs(user_id,action, DateTime) 
        VALUES ($userID,'Logged Out', NOW())";
        $stmt = $con->prepare($logoutsql);

        if ($stmt->execute()) {
            // Successfully logout
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();

        $_SESSION = array();

        session_destroy();

        session_start();
        $_SESSION['message'] = "You have been logged out successfully.";
        header("Location: Login.php");
        exit();
    }
}
?>