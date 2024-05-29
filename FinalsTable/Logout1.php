<?php
require "dbconnect.php";
session_start();

if (isset($_POST['logout1'])) {
    if (isset($_SESSION['user_id'])) {
        $userID = $_SESSION['user_id'];
        $full = $_SESSION['full_name'];
        $role = $_SESSION['role'];

        $logoutsql = "INSERT INTO tbl_logs(user_id,action, DateTime) 
        VALUES ($userID,'Logged Out', NOW())";
        $stmt = $con->prepare($logoutsql);

        if ($stmt->execute()) {
        } else {
            // Handle the error
            echo "Error: " . $stmt->error;
        }

        $stmt->close();

        $_SESSION = array();

        session_destroy();

        session_start();
        $_SESSION['message'] = "You have been logged out successfully.";

        //Helps direct to the login page or another page
            //set_include_path(get_include_path() . PATH_SEPARATOR . 'C:\xampp\htdocs\FINAL_ALPS_BUS');
            set_include_path(get_include_path() . PATH_SEPARATOR . 'C:\xampp\htdocs\FINALS PROJECT');
            header("Location: /FINALS PROJECT/Login.php");
            //header("Location: /FINAL_ALPS_BUS/Login.php");
        exit();
    }
}
?>