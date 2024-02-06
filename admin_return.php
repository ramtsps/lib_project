<?php
session_start();
include "con1.php";

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


    
 <div class="right">
 <div class="rtop"> 
       
       <h1 style="text-transform:uppercase;"><?php 
         $obj=new ls(); ?> <img src="web_img/logo_skp.png" alt=""><a href=""> skp library management system </a></h1>
      
     <?php 
   
     // Check if $_SESSION is defined before trying to access its values
     if (isset($_SESSION['email'])) {
         echo "<a href='admin_lo.php' class='log'><i class='fa-solid fa-user'></i>" .  ucfirst($_SESSION['Name'] ) . " Log out </a>";
     } else {
         echo "<a href='admin_lo.php' class='log'><i class='fa-solid fa-user'></i> Log out </a>";
     }
     ?>
</div>
<div class="sec">
              

            <div class="insec">


                      <form action="admin_return.php" method="post">
                        <label for="decide" value="" name="in_time"><b>Search By Register Id : </b></label>
                        <div class="inle">
                          
                        <input type="search" name="search_in" class="search input-group-text" placeholder="Search By Register Id">
                        
                          <button type="submit" name="search_btn" value="" class="bte btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                      </form>

            </div>
</div>
    
  <div class="box1">

            <form action="admin_return.php" method="post">
            <?php

if(isset($_POST["submit2"])){



  echo " {$_SESSION['Sel_id']}<a href='select.php' class='chk'> Continue  </a>";

 
}
?>
              <h3>Not Return books</h3>
              <table class=" tg1 tile_tb" >
                
                <tr class="td12 tt"  >
                <th class="td12 tt"><label for="" class="lt lk1">Reg No</label></th>
                  <th class="td12 tt"><label for="" class="lt lk1">Book Author</label></th>
                  <th class="td12 tt"><label for="" class="lt lk1">Book Name</label></th>
                  <th class="td12 tt"><label for="" class="lt lk1">User Image</label></th>
                  <!-- <th class="tt"><label for="" class="lt">Book Name</label></th> -->
                  <th class="td12 tt"><label for="" class="lt lk1">Date</label></th> 
                  <!-- <th class="tt td12 "><label for="" class="lt lk1">Select</label></th> -->
                  
                </tr>
                
                <?php
  if (isset($_POST['search_btn'])) {
    $search_query = $_POST['search_in'];
    $sql = "SELECT * FROM buy WHERE lib_id LIKE '%$search_query%' OR Book_Author LIKE '%$search_query%' OR Book_Name LIKE '%$search_query%'OR  date LIKE '%$search_query%'";
    $resu = mysqli_query($obj->connection, $sql);
    if (mysqli_num_rows($resu) > 0) {
     
      while ($row = mysqli_fetch_assoc($resu)) 
      {
        $lib_id = $row['lib_id'];
    $Book_Author =  ucfirst($row['Book_Author']);
    $Book_Name =  ucfirst($row['Book_Name']);
    $image_type = $row['image_type'];
    $date = $row['date'];

    echo "
    <tr>
  <td class='td1'> <label for='' class='input-group-text lk1'> $lib_id</label></td>
  <td class='td1'><label for='' class='input-group-text lk1 '> $Book_Author</label></td>
  <td class='td1'><label for='' class='input-group-text lk1'> $Book_Name</label> </td>
  <td class='td1'> <label for='' class='input-group-text imgtype '> <img src='data:image/jpeg;base64," . $image_type . "'></label> </td>
  <td class='td1'> <label for='' class='input-group-text lk1 '> $date</label> </td> 

  
</tr>";
        $Book_Name="";
      }
    
    } 
    else {
      echo "<h1>No results found.</h1>";
    }
  }


else{
$sql = "SELECT * FROM buy";
$resu = mysqli_query($obj->connection, $sql);
while($row = mysqli_fetch_assoc($resu)) {
    $lib_id = $row['lib_id'];
    $Book_Author =  ucfirst($row['Book_Author']);
    $Book_Name =  ucfirst($row['Book_Name']);
    $image_type = $row['image_type'];
    $date = $row['date'];
    $_SESSION['Sel_id'] = $lib_id;
    $_SESSION['Sel_aut'] = $Book_Author;
    $_SESSION['Sel_name'] = $Book_Name;
    $_SESSION['Sel_img'] =$image_type;
    echo "
    <tr>
  <td class='td1'> <label for='' class='input-group-text lk1' name='Sel_id'> $lib_id</label></td>
  <td class='td1'><label for='' name='Sel_aut' class='input-group-text lk1 '> $Book_Author</label></td>
  <td class='td1'><label for='' name='Sel_name' class='input-group-text lk1'> $Book_Name</label> </td>
  <td class='td1'> <label for='' name='Sel_img' class='input-group-text imgtype '> <img src='data:image/jpeg;base64," . $image_type . "'></label> </td>
  <td class='td1'> <label for='' class='input-group-text lk1 '> $date</label> </td> 
  
   
</tr>";
}}
?>


<!-- <td class='td1'>  
    <form action='admin_return.php' method='post'>
      <input type='hidden' name='id1' value='$lib_id'>
      <button type='submit' name='submit2' class='btn btn-primary btr'>Select</button>
    </form>
  </td> -->


                  
           
               
              </table>  
                
       </form> 
        </div>
      <br><br>
       <br><br>
       
      <!-- <button id="change-chart">Change to Classic</button>
    <br><br> -->



  </main>
  <!-- <script src="path/to/chartjs/dist/chart.umd.js"></script> -->



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