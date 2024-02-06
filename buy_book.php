<?php
session_start();


?>
<!doctype html>
<html lang="en">

<head>
  <title>SKP LIBRARY MANAGEMENT SYSTEM</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <mat-icon class="mat-icon-rtl-mirror" svgIcon="thumb-up"></mat-icon>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/1d.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 1,
  'wght' 700,
  'GRAD' 200,
  'opsz' 48
  
}

</style>
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>


  <div  class="cont">
    

   <?php
   include "left.php"
   ?>

    
 <div class="buyright">
 <?php

include "top.php";
?>
   <style>
    .thank{
        margin-top: 30px;
        margin-left: 35%;
      color:white;
    }
    .thank1{
      margin-top: 30px;
        margin-left: 35%;
      color:blue;
    }
   </style>
<?php
if(isset($_POST["submit"])) {
  $book_Id=$_POST['book_Id'];
  $lib_id = $_POST["Lib_Id"];
  $Author = $_POST["Author"];
  $Book_Name = $_POST["Book"];
  $book_id=$_POST["book_Id"];

  if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $image = $_FILES['image']['tmp_name'];
    $name = $_FILES['image']['name'];
    $image = file_get_contents($image);
    $image = base64_encode($image);
  } else {
    echo "Please select an image.";
    exit;
  }
  if($_SESSION['reg_no'] == $lib_id && !empty($Book_Name) && !empty($Author) && !empty($book_id))
  
  {
  $sql = "INSERT INTO buy (lib_Id, Book_Author, Book_Name,image_name, image_type, Date) VALUES ('$lib_id','$Author','$Book_Name','$name' ,'$image', now())";
      $sql1= "DELETE FROM add_book WHERE `add_book`.`book_id` =  $book_Id";
  if(mysqli_query($obj->connection, $sql) && mysqli_query($obj->connection, $sql1) ) {
    echo "<h4 class='thank'>Add Your Detail ..</h4>";
  } else {
    echo "Error: " . mysqli_error($obj->connection);
   } }
   else{
    echo "<h4 class='thank1'> Reg No is Incorret Or Please Fill In All The Mandatory Details</h4>";
  }
}



?>


        <div class="buy">
        
        
        <form id="1myForm" action="buy_book.php" method="post" enctype="multipart/form-data">
        <!-- <h3 >Buy Books</h3>  -->
        <h3><i class="fa faalign-center"="true"></i>Student Details </h3>
  <?php echo "<h6><br> Your Register No Is ".$_SESSION['reg_no']."</h6>"; ?> <br>

  <label for="lib_id">Book Id</label><br>
  <input type="text" class="input-group-text lk2" name="book_Id" id="book_Id">
  <label for="lib_id">Reg No</label><br>
  <input type="text" class="input-group-text lk2" name="Lib_Id" id="Lib_Id">

  <label for="lib_id">Book Author Name</label><br>
  <input type="text" class="input-group-text lk2" name="Author" id="Author">
  <label for="lib_id">Book Name</label><br>
  <input type="text" class="input-group-text lk2" name="Book" id="Book">
  <label for="Upload Your Image">Upload Your Image</label><br>
  
  <input type="file" class="input-group-text lk2" name="image" id="image">
  <button type="submit" name="submit" class="btn btn-primary bt">Submit</button>
  <button type="button" name="clear" class=" bta btn btn-danger btc">Clear</button>
  <script>
    document.querySelector('.bta').addEventListener('click', function() {
      document.getElementById('1myForm').reset();
    });
  </script>
</form>
        </div>
      <br><br>
       <br><br>
       
      


  </main>
  <!-- <script src="path/to/chartjs/dist/chart.umd.js"></script> -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   

<script src="javas/1d.js"></script>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>