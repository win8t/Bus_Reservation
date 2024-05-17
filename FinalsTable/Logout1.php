<?php
require "dbconnect.php";
session_start();

if (isset($_POST['logout1'])) {
    if (isset($_SESSION['user_id'])) {
        $userID = $_SESSION['user_id'];

        // Prepare the SQL statement
        $logoutsql = "INSERT INTO tbl_logs(user_id, action, DateTime) VALUES (?, 'Logged Out', NOW())";
        $stmt = $con->prepare($logoutsql);
        $stmt->bind_param("i", $userID);

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
        header("Location: \FINAL_ALPS_BUS\Login.php");
        exit();
    }
}
?>