<?php
session_start();


?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
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

    
 <div class="right">
     
   <?php

   include "top.php";
   ?> <?php
   if(isset($_POST["submit"])&& isset($_FILES['image']) && $_FILES['image']['error'] == 0 )
   {
     $lib_id=$_POST["lib_id"];
     $name=$_POST["name"];
     $email=$_POST["email"];
     $Book_Name=$_POST["Book_Name"];
     $book_id=$_POST["book_id"];
     $date=$_POST["date"];
      $image = $_FILES['image']['tmp_name'];
      $name1 = $_FILES['image']['name'];
      $image = file_get_contents($image);
      $image = base64_encode($image);
      $lib_id1 = $_POST["book_id"];
    $Author = $_POST["Book_Name"];

     $sql="INSERT INTO book_submit(lib_id,name,email_id,Book_name,Book_Author,book_image,date) VALUES ('$lib_id','$name','$email','$Book_Name','$book_id','$image','$date')";
     $sql1 = "INSERT INTO add_book (books_name, Book_Author,image_name, image_type) VALUES ('$lib_id1','$Author','$name1' ,'$image')";

    //  $resu=mysqli_query($obj->connection,$sql);
    if( $_SESSION['reg_no']== $lib_id){
     if(mysqli_query($obj->connection,$sql)==TRUE && mysqli_query($obj->connection, $sql1))
     {
      echo "<h4 class='thank'> Book Submit Thank You!</h4>";
      
  }

    }else{
      echo "<h4 class='thank1'> Please select an image.</h4>";
    }


   }else{
    echo "<h4 class='thank1'>Please Fill In All The Mandatory Details</h4>";
  }
    ?>
   <style>
    .thank{
      color:green;
    }
   
   </style>
        <div class="box">
          
        <form id="myForm" action="1d.php" method="post" enctype="multipart/form-data">

  <h3>Books Submit</h3> 
  <table class="tg tile_tb">
    <tr class="tt">
      <th class="tt"><label for="" class="lt">Reg No</label></th>
      <th class="tt"><label for="" class="lt">Name</label></th>
      <th class="tt"><label for="" class="lt">Email ID</label></th>
      <th class="tt"><label for="" class="lt">Book Author Name</label></th>
      <th class="tt"><label for="" class="lt">Book Name</label></th>
      <th class="tt"><label for="" class="lt">Book Image</label></th>
      <th class="tt"><label for="" class="lt">Date</label></th>
    </tr>
    <tr>
      <td class="td1"><input type="text" class="input-group-text lk"  name="lib_id" id="lib_id"></td>
      <td class="td1"><input type="text" class="input-group-text lk"  name="name" id="name"></td>
      <td class="td1"><input type="email" class="input-group-text lk"  name="email" id="email"></td>
      <td class="td1"><input type="text" class="input-group-text lk" name="Book_Name" id="Book_Name"></td>
      <td class="td1"><input type="text" class="input-group-text lk "  name="book_id" id="book_id"></td>

      <td class="td1"> <input type="file" class="input-group-text lk2" name="image" id="image">
</td>

      <td class="td1"><input type="date" class="input-group-text lk "  name="date" id="date"></td>
    </tr>
  </table>  
  <button type="submit" name="submit" class="btn btn-primary bt">Submit</button>
  <button type="button" name="clear" class="btn btn-danger btc">Clear</button>

  <script>
    document.querySelector('.btc').addEventListener('click', function() {
      document.getElementById('myForm').reset();
    });
  </script>
</form>

        </div>
      <br><br>
       <br><br>
       <h1 class="user" >Current User Details </h1>
      <!-- <button id="change-chart">Change to Classic</button>
    <br><br> -->
<div class="chart"></div> <div id="chart_div" style="width: 800px; height: 500px;"></div></div></div>


  </main>
  <!-- <script src="path/to/chartjs/dist/chart.umd.js"></script> -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

        var button = document.getElementById('change-chart');
        var chartDiv = document.getElementById('chart_div');

        var data = google.visualization.arrayToDataTable([
          ['Books && Student', 'Books', 'Student'],
          ['Oop Book && Student', 8000, 23.3],
          ['PHP Book && Student', 24000, 4.5],
          ['Html Book && Student', 30000, 14.3],
          ['JavaScript Book && Student', 2000, 19],
          ['Python && Student', 10000, 13.1]
        ]);

        var materialOptions = {
          width: 900,
          chart: {
            title: '*',
            // subtitle: 'distance on the left, brightness on the right'
          },
          series: {
            0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            y: {
              distance: {label: 'usage'}, // Left y-axis.
              // brightness: {side: 'right', label: 'apparent magnitude'} // Right y-axis.
            }
          }
        };

        var classicOptions = {
          width: 900,
          series: {
            0: {targetAxisIndex: 0},
            1: {targetAxisIndex: 1}
          },
        
          vAxes: {
         
          }
        };

        function drawMaterialChart() {
          var materialChart = new google.charts.Bar(chartDiv);
          materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
         
        }

        function drawClassicChart() {
          var classicChart = new google.visualization.ColumnChart(chartDiv);
          classicChart.draw(data);
        
        }

        drawMaterialChart();
    };
    </script>

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