<html lang="en">
    <?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alps OTP</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="stylez.css" rel="stylesheet" />
</head>

<body class="login-content-container7">
    <script src="scripts.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <div class="container-fluid d-flex flex-container">


        <div class="row login-container w-75 mx-auto">
            <div class="col-7 bg-info-subtle p-5 text-center mx-auto banner-shadow rounded">


                <div class="row">
                    <div class="col">



                        <h2 class="display-2 about-login">Gcash</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="link-text">Please enter your reference number.</p>
                    </div>
                </div>

                <form action="GCash.php" method="post" novalidate class ="needs-validation">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <!-- OTP input -->
                            <div class="form-floating mb-3 link-text">
                                <input type="text" class="form-control" name="refnum" id="floatingInput" required>
                                <label for="floatingInput" class="link-text">Reference Number<span class ="text-danger">*</span></label>
                            </div>
                            
                        </div>


                    </div>


                    <div class="row mb-4">
                        <div class="col text-center">
                            <input type="submit" name="ver" value="Verify" class="btn btn-primary btn-block w-25 link-text">
                        </div>
                      
                    </div>
                </form>



            </div>

        </div>

    </div>
    </div>

<script>
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      

      form.classList.add('was-validated')
    }, false)
  })
})() 
</script>
    
</body>

</html>
<?php
require_once "dbconnect.php";

if (isset($_POST['ver'])) {  
   
   $refnum = $_POST['refnum'];
   $pay_ticket = $_SESSION['ticket_pay']; 

  
   $sql = "UPDATE tbl_reservation SET reference_num = ? WHERE ticket_number = ?";
   $stmt = $con->prepare($sql);
   $stmt->bind_param('ss', $refnum, $pay_ticket);
   $stmt->execute();

   $refsql = "SELECT * FROM tbl_reservation WHERE reference_num = ?";
   $stmt = $con->prepare($refsql);
   $stmt->bind_param('s', $refnum);
   $stmt->execute();
   $result = $stmt->get_result();

   if ($result->num_rows == 1) {
       $updatesql = "UPDATE tbl_reservation SET status = 'Reserved' WHERE ticket_number = ?";
       $stmt = $con->prepare($updatesql);
       $stmt->bind_param('s', $pay_ticket);
       $stmt->execute();

       header("Location: BookingLog.php");
       exit(); 
   } else {
       ?>
       <script>
           Swal.fire({
               icon: "error",
               title: "Oops...",
               text: "Something went wrong!",
           });
       </script>
       <?php
   }
   
}
?>
