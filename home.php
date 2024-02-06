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

  <!-- Bootstrap CSS v5.2.1 -->
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

<div class="cont">
<?php
   include "left.php"
   ?>
<div class="right">
<?php
 
 include "top.php"
 ?>
 <div class="slider">
        <div id="img"> 
        <img src="web_img/slider/rect.jpeg"/>
        </div>
 </div>
<div class="the">
<div class="cr1">
<br><br> 
<h5>About SKPEC</h5><br>
S.K.P Engineering College is a self financing college, sponsored by Sri. S. Kuppusaamy Memorial Educational Trust has been started in the year 1999 with a noble aim of imparting technical education to the rural masses in and around Tiruvannamalai. The instituion enables them to be placed as the best professionals in industries and make them enter into high level programmes with competence and confidence. The college is approved by the AICTE, New Delhi and currently affiliated to the Anna University, Chennai. The college, initially approved to start with four B.E. / B.Tech programmes with the student intake of 240, now is offering six B.E. / B.Tech. programmes in UG and seven PG programmes in Engineering and one PG programme in Management with annual approved intake of 1086 students.
</div>
<div class="cr2">
  <br><br><h5>Library</h5><br>
The College Library, which has been established in the year 1999. The total area of the Library building is about 1200 sq.m. user are in access of the library. Many knowledge-based services like that of Reference, Bibliography, MALIBNET service. DELNET, Reprography, CD-ROM Databases, Internet browsing and e-services are provided by the library for its users.
</div>
<div class="cr3"><br><br><h5>Laboratory </h5><br>
The laboratory is equipped with latest instruments and peripherals. The lab has been set up with the objective to motivate and encourage students to take up research projects based on innovative ideas. This provides a platform for students to enhance their knowledge.
</div>

</div>

 <?php
 
 include "footer.php"
 ?>

</div>

</div>

  </main>
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