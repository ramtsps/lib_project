<?php
session_start();


?>


<!doctype html>
<html lang="en">
  <head>
    <title>SKP LIBRARY MANAGEMENT SYSTEM</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/login_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
  <div class="rtop"> 
       
       <h1 style="text-transform:uppercase;"> <img src="web_img/logo_skp.png" alt=""><a href=""> skp library management system </a></h1>
      
     <?php 
     // Check if $_SESSION is defined before trying to access its values
     
         echo "<a href='index.php' class=' log'><i class='fa-solid fa-user'></i> Back </a>";
     ?>
</div>
    <form action="admin_lo.php" method="post">
    <div class="cen">
     
     <div class="cont1">
      
     <img src="data:image/jpeg;base64,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" alt="">
     
     </div>
        <div class="rig">

            <h3 class="custom-control-indicator" >Admin login form</h3>
            <br>
            <!-- <form action="login.php" method="post"> -->
             <input type="email" class="input-group-text" name="email" placeholder="Email"> 
             <br><input type="password" class="input-group-text"  name="password"  id="" placeholder="Password">
        <br><a href=""><input type="submit" value="login" name="login" class="btn btn-primary"></a>
<label for="decide" value ="" name="deci"></label>
        <!-- login code   </form> -->
    <br>
    <!-- <a href="forget.php"> Frogate Password ? </a> <br>
    <a href="crt_new.php">  Create new account </a></form> -->
    <?php

include "con1.php";
$obj=new ls();

if(isset($_POST["login"]))
{  
    $email=$_POST['email'];
    $password=$_POST['password'];
    $log_email="#";
    $log_password="#";
    $sql="SELECT * FROM admin Where Email= '$email' AND Password='$password'";
    $resu=mysqli_query($obj->connection,$sql);
    while($row=mysqli_fetch_assoc($resu))
    {
        $log_email=$row["Email"];
        $log_password=$row["Password"];
        $_SESSION['Name'] = $row["Name"];
        // $_SESSION['reg_no']=$row["Reg_No"];
        // $_SESSION['Department']=$row["Department"];
        $_SESSION['date']=$row["date"];
       
        
        
    }
    if($log_email===$email && $log_password===$password)
    {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
     
      
        if (isset($_SESSION['email']) && isset($_SESSION['Name']) && isset($_SESSION['password'])&& isset($_SESSION['date'])) 
        {
          $email=$_SESSION['email'];
          $sql="SELECT Name FROM admin Where Email= '$email'";
          $resu=mysqli_query($obj->connection,$sql);
          $row=mysqli_fetch_assoc($resu);
         
          echo " <p> Do you want to go admin page <a href='admin.php'>click here</a></p>";
           
            exit();
        
          }
          
     
    }
    else{
        echo " <label style='color:#D92525;'> wrong password</label>";
    }
}
?>

    </div> 
    </div>
      
        </div>        

   
     

       
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>