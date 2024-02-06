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
       <a href='index.php' class='log'>Back</a>
     <?php 
     // Check if $_SESSION is defined before trying to access its values
     
         echo " ";
     ?>
</div>
<div class="hole">
<div class="center">
    <h3>
    Frogate Password ?
    </h3>
    <form action="forget.php" method="post">
    <input type="text" class="input-group-text" name="Reg_No" placeholder="Reg_No"> 
    <br>
    <input type="email" class="input-group-text" name="email" placeholder="Email"> 
             <br><input type="password" class="input-group-text"  name="password"  id="" placeholder="Password">
        <br><a href=""><input type="submit" value="Update Password " name="Update" class="bts btn btn-primary"></a>
        <a href="index.php"><input type="BUtton" value="Back" name="login" class="btn btn-danger"></a>
    </form>
    <br><br>
    <?php
    include "con1.php";
    $obj=new ls();
if(isset($_POST["Update"])){ 
    $fg_ema=$_POST['email'];
    $fg_re=$_POST["Reg_No"];
    $log_email="#";
    $sql="SELECT * FROM login Where Email= '$fg_ema'";
    $resu=mysqli_query($obj->connection,$sql);
    while($row=mysqli_fetch_assoc($resu))
    {   $log_reg1=$row["Reg_No"];
        $log_email=$row["Email"];

    }
    if($log_email===$fg_ema && $log_reg1===$fg_re){
if(isset($_POST["password"]))
{
    
   $fg_ema=$_POST['email'];
   $fg_pass=$_POST["password"];
    // $in_re1="#";
    if($fg_pass!=NULL)
    {
  $sql="UPDATE login set  Password ='$fg_pass' where Email= '$fg_ema'";

  if(mysqli_query($obj->connection, $sql)) {
    echo "<h4  style='color:#06ffff;'>Your Password Is Update</h4>";
  } else {
    echo "Error: " . mysqli_error($obj->connection);
  }
}
else{
    echo "<h4 style='color:red;'  >your password is null</h4>" ;
}
}
else{
    
    echo "<h4 class='thank' style='color:red;'>Please Fill In All The Mandatory Details</h4>";
}
   
}else{
    
    echo "<h4 class='thank' style='color:red;'>Your Eamil Id Is Not Register Or Register Number Is Invalid</h4>";
}


}

?>
</div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>