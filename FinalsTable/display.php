<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <form action="display.php" method="post">
      <div class="row m-5">
        <div class="col-4">
          <input type="search" name="search" id="" class ="form-control">
          
        </div>
        <div class="col-2">
        <input type="submit" value="search" name ="searchbutton" class="btn btn-primary">
        </div>
      </div>


  </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<?php
require_once "dbconnect.php";

//button function
if (isset($_POST['searchbutton'])) {

  //to check the search box if empty or not 
  if ($_POST['search'] != NULL) {
    $search = $_POST['search'];
    $selectsql = "Select * from tbl_userdetails where 
    account_id LIKE '%".$search."%' 
    OR l_name LIKE'%".$search."%' 
    OR gender LIKE'%".$search."%' 
    OR address LIKE'%".$search."%' 
    OR email LIKE'%".$search."%' 
    OR phone LIKE'%".$search."%'  
    OR f_name LIKE'%".$search."%' ";
  } else {
    $selectsql = "Select * from tbl_userdetails";
  }
  
  
}else {
  $selectsql = "Select * from tbl_userdetails";
}


$result = $con->query($selectsql);

//check table if there is a record
//num_rows - will return the no of rows inside a table
if ($result->num_rows > 0) {
    
    echo "<div class ='container'>";
    echo "<div class ='row'>";
   foreach ($result as $index => $fielddata){
?>
    <div class="col-3">
        <div class="container bg-light m-3 p-5 border border-1 text-center">
            <div class="row">
                <div class="col">
                    <img src="<?php echo $fielddata['img'] ?>" alt="" width=100 height=100>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2><?php echo $fielddata['l_name']?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <i class ="small"> <?php echo $fielddata['address'] ?> </i>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="button" value="View" class ="btn btn-primary">
                </div>
            </div>

        </div>



    </div>

<?php
if(($index+1)% 4 ==0){
    echo "</div><div class ='row'>";
}
   }


    
} else {
    echo "No record found!";
}

?>