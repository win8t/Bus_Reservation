<?php
require "dbconnect.php";
session_start();

if (isset($_POST['logout'])) {
    if (isset($_SESSION['user_id'])) {
        $userID = $_SESSION['user_id'];
        $full = $_SESSION['full_name'];
        $role = $_SESSION['role'];

        // Prepare the SQL statement
        $logoutsql = "INSERT INTO tbl_logs(user_id, full_name, role, action, DateTime) 
        VALUES ($userID, '$full', '$role', 'Logged Out', NOW())";
        $stmt = $con->prepare($logoutsql);

        // Execute the statement
        if ($stmt->execute()) {
            // Successfully logged logout time
        } else {
            // Handle the error
            echo "Error: " . $stmt->error;
        }

        $stmt->close();

        // Unset all session variables
        $_SESSION = array();

        // Destroy the session
        session_destroy();

        // Redirect to the login page or another page
        header("Location: \Bus_Reservation\Login.php");
        exit();
    }
}
?>