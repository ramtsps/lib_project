<?php
session_start();

// include "con1.php"; 
include "mailer.php";
// $obj = new ls();
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
.left{
  background-color: #518ae6;
}
</style>
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>


  <div  class="cont">
    

  <div class="left">
    <ul>
    
    <li class="act "><a href="admin.php" class=" act_in act_in1"><span class="material-symbols-outlined">
note
</span> Users</a> </li>
    <li class="act "><a href="admin_books.php" class="act_in act_in2"> <span class="material-symbols-outlined">
library_books
</span> Books</a>   </li> 
    <li class="act "><a href="admin_add.php" class="act_in act_in3"><span class="material-symbols-outlined">
overview_key
</span> Add New Books</a></li>
    <li class="act "><a href="admin_return.php" class="act_in act_in4"><span class="material-symbols-outlined">
person_2
</span> Not Return books</a></li>
   
</ul>

<div class="icon">
<div  id="contact">
    <h2 >Contact Me</h2>
    <hr style="width:200px" >

    <div >
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Chicago, US</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
    </div><br>
    <p>Let's get in touch. Send me a message:</p>

    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>


  <div class="in">
  <a href="#"><i class="fa-brands fa2 fa-twitter"></i></a>
  <a href="#"><i class="fa-brands fa2 fa-facebook"></i></a>
  <a href="#"><i class="fa-brands fa2 fa-github"></i></a>
  <a href="#"><i class="fa-brands fa2 fa-google"></i></a>
  <a href="#"><i class="fa-brands fa2 fa-telegram"></i></a></div>
    <p >Powered by <a class="w3" href="#">tspsram.com</a></p>
  <!-- End footer -->
  </div>
    </div>

    
 <div class="Abuyright">
 <div class="rtop"> 
       
       <h1 style="text-transform:uppercase;"><?php 
       include "con1.php";
         $objw=new ls(); ?> <img src="web_img/logo_skp.png" alt=""><a href=""> skp library management system </a></h1>
      
     <?php 
   
     // Check if $_SESSION is defined before trying to access its values
     if (isset($_SESSION['email'])) {
         echo "<a href='admin_lo.php' class='log'><i class='fa-solid fa-user'></i>" .  ucfirst($_SESSION['Name'] ) . " Log out </a>";
     } else {
         echo "<a href='admin_lo.php' class='log'><i class='fa-solid fa-user'></i> Log out </a>";
     }
     ?>
</div>
   <style>
    .thank{
        margin-top: 30px;
        margin-left: 35%;
      color:white;
    }
   </style>
<?php
$obj = new ls(); 

if(isset($_POST["submit"])) {
    $lib_id = $_POST["Lib_Id"];
    $Author = $_POST["Author"];

    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = $_FILES['image']['tmp_name'];
        $name = $_FILES['image']['name'];
        $image = file_get_contents($image);
        $image = base64_encode($image);
    } else {
        echo "Please select an image.";
        exit;
    }

    $sql = "INSERT INTO add_book (books_name, Book_Author,image_name, image_type) VALUES ('$lib_id','$Author','$name' ,'$image')";

    if(mysqli_query($obj->connection, $sql)) {
        echo "<h4 class='thank'>Book Submit Thank You!</h4>";

        // Fetch all user emails
        $result = mysqli_query($obj->connection, "SELECT Email FROM login"); // Adjust table and column name if necessary
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $email = $row['Email'];
                $subject = "New Book Added to Library";
                $message = "Dear Library Member,\n\nA new book titled '$lib_id' by $Author has been added to the library. Visit us to check it out!\n\nRegards,\nThe Library Team";
                // Send email to each user
                if (mailer($email, $message, $subject)) {
                    echo "Mail sent to: $email<br>";
                } else {
                    echo "Error sending email to: $email<br>";
                }
            }
        } else {
            echo "Error fetching user emails: " . mysqli_error($obj->connection);
        }
    } else {
        echo "Error: " . mysqli_error($obj->connection);
    }
}



?>


        <div class="Abuy">
        
        
        <form id="2myForm" action="admin_add.php" method="post" enctype="multipart/form-data">
  <h3><i class="fa faalign-center"="true"></i>Add New Books</h3><br>
  <label for="lib_id">Book Name</label><br>
  <input type="text" class="input-group-text lk2" name="Lib_Id" id="Lib_Id">
  <label for="lib_id">Book Author Name</label><br>
  <input type="text" class="input-group-text lk2" name="Author" id="Author">
 
  <label for="Upload Your Image">Upload Your Image</label><br>
  <input type="file" class="input-group-text lk2" name="image" id="image">
  <button type="submit" name="submit" class="btn btn-primary bt">Submit</button>
  <button type="button" name="clear" class="btn btn-danger btc">Clear</button>

  <script>
    document.querySelector('.btc').addEventListener('click', function() {
      document.getElementById('2myForm').reset();
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