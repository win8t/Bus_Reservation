<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="bootstrap.min.css" rel="stylesheet" />
  <link href="stylez.css" rel="stylesheet" />
  <style>
    body {
      background-image: linear-gradient(to right, #000000b6, #00000006, #000000b6), url("Alps2.jpg");
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-size: cover;
    }

    .table-container {
      margin-top: 20%;
      /* Adjust as needed */
    }

    .table {
      width: 100% !important;
      border: 2px solid;
      border-radius: 5%;
      text-align: center;
      vertical-align: middle;
    }

    th {
      background-image: linear-gradient(#1717178c, #29292947), url('./FinalsTable/Sidebar.jpg');
    }

    td {
      background-color: #FFF !important;
    }
  </style>
</head>

<body>
  <script src="bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
<?php
echo "<div class ='container-fluid bg-row w-75 p-4 rounded '>";
echo "<div class='row'>";

echo  "<div class='col p-4  bg-light rounded-2 m-2'>";
?>

<?php
echo   "</div>";

echo  "<div class='col p-4 bg-info-subtle rounded-2 m-2'>";
?>

<?php
echo  "</div>";

echo "</div>";
echo "</div'>";


?>

<script>
  document.getElementById('printButton').addEventListener('click', function() {
    window.print();
  });
</script>

</body>

</html>