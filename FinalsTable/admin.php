<?php
    session_start();

    if(!isset($_SESSION["loggedIn"]) || !$_SESSION["loggedIn"])
    {
        header("location: Overview1.php");
    }

    $loggedIn = true;
?>