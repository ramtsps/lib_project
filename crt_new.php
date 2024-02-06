<!doctype html>
<html lang="en">

<head>
  <title>SKP LIBRARY MANAGEMENT SYSTEM</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="css/1d.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
  <div >
     
     
     <div class="rtop"> 
       
       <h1 style="text-transform:uppercase;"> <img src="web_img/logo_skp.png" alt=""><a href=""> skp library control system </a></h1>
     <a href="index.php" class="log"><i class="fa-solid fa-user"></i> Back to login</a>
</div>
     <div class="ad_right">
<div class="ad_con">


<form action="crt_new.php" method="post">
        <!-- <h3>SKP
ENGINEERING COLLEGE</h3> -->
<label for="" class="lt">SKP
ENGINEERING COLLEGE</label>
<h6>create new library account</h6>  
        <label for="" class="lt">Reg .No</label><br>
        <input type="text" class="input-group-text lk" placeholder="Reg .No" name="Reg_no" id="Reg_no">
        <label for="" class="lt">Enter Your Name</label><br>
        <input type="text" class="input-group-text lk" placeholder="Enter Your Name" name="name" id="name">
        <label for="" class="lt">Gender</label><br>
        <input type="text" class="input-group-text lk" placeholder="Enter Your Name" name="Gender" id="Gender">
        <label for="" class="lt">Enter Your Department</label><br>
        <input type="text" class="input-group-text lk" placeholder="Enter Your Department"  name="Department" id="Department">
        <label for="" class="lt">Enter Your Email Id</label><br>
        <input type="email" class="input-group-text lk" placeholder="Enter Your Email Id" name="Email" id="Email">
        <label for="" class="lt">Enter Password</label><br>
        <input type="Password" class="input-group-text lk" placeholder="Enter Your Password"  name="Password" id="Password">
        <button type="submit" name="Submit" class="btn btn-primary ad_bt">Submit</button>
       <button type="button" name="clear" class="btn btn-danger ad_btc">Clear </button> 
    <?php
    include "con1.php";
    $obj=new ls();
    if(isset($_POST["Submit"]))
    {
       $Reg_no=$_POST["Reg_no"];
       $Gender=$_POST['Gender'];
       $name=$_POST["name"];
       $Department=$_POST["Department"];
       $Email=$_POST["Email"];
       $Password=$_POST["Password"];
    
       $sql="INSERT INTO login VALUES ('$Reg_no','$name','$Gender','$Department','$Email','$Password', now())";
    
     
       if($obj->connection->query($sql)) 
       {
          echo "<div class='re'><p1 color='red'><b>Successfully Registere<br>your library Id is {$Reg_no}</p1> <span class='material-symbols-outlined'>
          check_small 
          </span> </b></div>";
       }
       else{
          $error_message = mysqli_error($obj->connection);
          echo "<br> <a href='#'>*Already exists Details</a>";
       }
    }
    ?>
   
    </form>
</div> </div></div> 
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>