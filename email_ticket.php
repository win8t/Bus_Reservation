<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALPS Ticket Number</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
<?php
if (!isset($_SESSION)) {
    session_start();
  }
require "dbconnect.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function send_ticket($username, $email, $ticket_id)
{

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ]
    ];
    try {
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'dawnandal18@gmail.com';                 // SMTP username
        $mail->Password = 'oaqhgrbdiwuezpax';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        
        $mail->setFrom( 'dawnandal18@gmail.com', 'Alps Bus Booking Details');

        // $mail->setFrom('dawnandal18@gmail.com', 'Alps Bus Booking Details');
        
        $mail->addAddress($email);     // Add a recipient
        //Content
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = "Bus Ticket Number";
        $mail->Body    = "Hello, " . $username . "!" ."<br> This your ticket number details: " . $ticket_id;

        $mail->send();
?>
        <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Please check your email for your ticket number receipt.",
                showConfirmButton: false,
                timer: 1500,
            });
        </script>
<?php
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
