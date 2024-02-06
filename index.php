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

</style>

  </head>
  <body>
  <div class="rtop"> 
       
       <h1 style="text-transform:uppercase;"> <img src="web_img/logo_skp.png" alt=""><a href=""> skp library management system </a></h1>
      
     <?php 
     // Check if $_SESSION is defined before trying to access its values
     
         echo "<a href='index.php' class='log'><i class='fa-solid fa-user'></i> </a>";
     ?>
</div>

    <form action="index.php" method="post">
    <div class="cen">
      
      <div class="in_card">
      <div class="img_card"><img src="web_img/slider/1.jpeg" alt="" srcset=""></div>
      <label for="decide" value ="" name="in_time"> <b>Enter in time entry : </b> </label>
    <input type="text" class="input-group-text in_time" placeholder="Enter Reg.No" name="in_reg"><br>
    <a href=""><input type="submit" value="Submit" name="insub_login" class="btn btn-primary"></a>
    <?php
    include "con1.php";
    $oh=new ls();
    if(isset($_POST["insub_login"]) && isset($_POST["in_reg"])){
      $in_re=$_POST["in_reg"];
     
      // $in_re1="#";
    $sql="SELECT * FROM login";
    $resu=mysqli_query($oh->connection,$sql);
    while($row=mysqli_fetch_assoc($resu))
    {  
        $reg_in=$row["Reg_No"];
        if($in_re===$reg_in){
          // $in_reg=$_POST["in_reg"];
           $in_re1=$in_re;
        }
        else{
          echo "";
        } 
   
    }
    if(isset($in_re1))
    {

    
      $_SESSION['reg_in']=$in_re;
      $sql = "INSERT INTO intime (Reg_No,date,In_Time) VALUES ('$in_re',now(), now())";

      if(mysqli_query($oh->connection, $sql)) {
        echo " <label style='color:#06792a;'> <b> Successfully Register</b></label>";
     
      } else {
        echo "Error: " . mysqli_error($obj->connection);
      }
    }
      else{
        // exit();
        echo " <label style='color:#000000;'>Invalid Register Number </label>";   
      }
    }
   
    ?>
    </div> 
  
    <div class="cont">
   
       <img src="https://startup.mp.gov.in/assets/img/login-bg.png" alt="">
       
       </div>
        <div class="rig">

            <h3 class="custom-control-indicator" >login form</h3>
            <br>
            <!-- <form action="login.php" method="post"> -->
             <input type="email" class="input-group-text" name="email" placeholder="Email"> 
             <br><input type="password" class="input-group-text"  name="password"  id="" placeholder="Password">
        <br><a href=""><input type="submit" value="Login" name="login" class="btn btn-primary"></a>
<label for="decide" value ="" name="deci"></label>
        <!-- login code   </form> -->
    <br>
    <a href="forget.php"> Frogate Password ? </a> <br>
    <a href="crt_new.php">  Create new account </a></form>

  
    <?php


$obj=new ls();






if(isset($_POST["login"]))
{  
    $email=$_POST['email'];
    $password=$_POST['password'];
    $log_email="#";
    $log_password="#";
    $sql="SELECT * FROM login Where Email= '$email' AND Password='$password'";
    $resu=mysqli_query($obj->connection,$sql);
    while($row=mysqli_fetch_assoc($resu))
    {
        $log_email=$row["Email"];
        $log_password=$row["Password"];
        $_SESSION['Name'] = $row["Name"];
        $_SESSION['reg_no']=$row["Reg_No"];
        $_SESSION['Department']=$row["Department"];
        $_SESSION['date']=$row["date"];

        $_SESSION['Email']=$row["Email"];
        
        
    }
    if($log_email===$email && $log_password===$password)
    {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
     
      
        if (isset($_SESSION['email']) && isset($_SESSION['Name']) && isset($_SESSION['reg_no']) && isset($_SESSION['password']) && isset($_SESSION['Department']) && isset($_SESSION['date'])) 
        {
          $email=$_SESSION['email'];
          $sql="SELECT Name FROM login Where Email= '$email'";
          $resu=mysqli_query($obj->connection,$sql);
          $row=mysqli_fetch_assoc($resu);
         
            header("Location: 1d.php");
           
            exit();
        
          }
          
     
    }
    else{
        echo " <label style='color:#D92525;'> wrong password</label>";
    }
}
?>

    </div> 
    <div class="out_card">
    <div class="img_card">
      <img src="web_img/slider/1.jpeg" alt="" srcset="">
    </div>
    <label for="decide" value ="" name="in_time"> <b>Enter out time entry : </b> </label>
    <input type="text" class="input-group-text out_time" placeholder=" Enter Reg.No " name="out_reg"><br>
    <a href=""><input type="submit" value="Submit" name="outsub_login" class="btn btn-primary"></a>
    <?php
    // include "con1.php";
    $oh1=new ls();
    if(isset($_POST["outsub_login"]) && isset($_POST["out_reg"])){
      $out_re=$_POST["out_reg"];
      // $reg_out="#";
    $sql="SELECT * FROM login";
    $resu=mysqli_query($obj->connection,$sql);
    while($row=mysqli_fetch_assoc($resu))
    {  
        $reg_out=$row["Reg_No"];
        if($out_re===$reg_out){
          // $in_reg=$_POST["in_reg"];
          $out_re1=$out_re;}
          else{
            echo "";
          }
  
        } 
        if(isset($out_re1))
        {
  
          $sql = "INSERT INTO outtime (Reg_No,date,Out_Time) VALUES ('$out_re',now(), now())";
    
          if(mysqli_query($oh->connection, $sql)) {
            echo " <label style='color:#06792a;'> <b> Thank You... </b></label> ";
          
          } else {
            echo "Error: " . mysqli_error($obj->connection);
          }
        }
        else{
          echo " <label style='color:#000000;'>Invalid Register Number </label>";
         
          
        }         
        }
      

   
    ?>
    </div>
    

    </div>
    
        </div>        

        <div class="sid">
      <div class="side_in">
          <label for='' class='  '> IN </label>
          <label for='' class=' in_sid input-group-text '><?php 
          
          $sql = "SELECT COUNT(*) as count FROM intime";
          $resu=mysqli_query($obj->connection,$sql);
          if(mysqli_num_rows($resu) > 0) {
            $row = mysqli_fetch_assoc($resu);
            echo  $row['count'];
          }    
          ?></label> 
      
    </div>
    <div class="side_in1">
          <label for='' class='  '> OUT </label>
          <label for='' class=' in_sid input-group-text '><?php 
          
          $sql = "SELECT COUNT(*) as count FROM outtime";
          $resu=mysqli_query($obj->connection,$sql);
          if(mysqli_num_rows($resu) > 0) {
            $row = mysqli_fetch_assoc($resu);
            echo  $row['count'];
          }    
          ?></label> 
      
    </div>
    </div>
      
       
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>