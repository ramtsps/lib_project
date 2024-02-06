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
</head>
<style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 1,
  'wght' 700,
  'GRAD' 200,
  'opsz' 48
  
}</style>
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
  
    include "top.php"
    ?>
            <div class="sec">
              

            <div class="insec">


                      <form action="book.php" method="post">
                        <label for="decide" value="" name="in_time"><b>Search By Author Name Or Book Name : </b></label>
                        <div class="inle">
                          
                        <input type="search" name="search_in" class="search input-group-text" placeholder="Search By Book Name">
                        
                          <button type="submit" name="search_btn" value="" class="bte btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                      </form>

            </div>
</div>
    <div class="bok">
      <!-- <div class="con_ifo">
    
          </div> -->
<?php
if (isset($_POST['search_btn'])) {
  $search_query = $_POST['search_in'];
  $sql = "SELECT * FROM add_book WHERE books_name LIKE '%$search_query%' OR Book_Author LIKE '%$search_query%' OR book_id LIKE '%$search_query%'";
  $resu = mysqli_query($obj->connection, $sql);
  if (mysqli_num_rows($resu) > 0) {
   
    while ($row = mysqli_fetch_assoc($resu)) 
    {
      // $Book_Name= $row['books_name'];
      $lib_id= $row['books_name'];
      $Book_Author=$row['Book_Author'];
      $image_type=$row['image_type'];
      $bk_id=$row['book_id'];

      echo " <div class='Book' ><div class='c'><img src='data:image/jpeg;base64," . $image_type . "'><br><br>
      $lib_id<br>
      <div class='info' ><h6>By:{$Book_Author}</h6></div>

              <div class='info' ><h6>Book Id:{$bk_id}</h6></div>
      <span class='material-symbols-outlined material'>
  grade
  </span><span class='material-symbols-outlined material'>
  grade
  </span><span class='material-symbols-outlined material'>
  grade
  </span><span class='material-symbols-outlined material'>
  grade
  </span><span class='material-symbols-outlined material'>
  star_half
  </span></div></div>";
      $Book_Name="";
    
    }
  
  } 
  else {
    echo "<h1>No results found.</h1>";
  }
}

              else{        
            $sql="SELECT * FROM add_book";
          $resu=mysqli_query($obj->connection,$sql);
          $row=mysqli_fetch_assoc($resu);
          while($row=mysqli_fetch_assoc($resu))
          // for($i=0;$i<=count($row);$i++)
          {
              $lib_id=  ucfirst($row['books_name']);
              $Book_Author= ucfirst($row['Book_Author']);
              $image_type= $row['image_type'];
              $bk_id=$row['book_id'];

              
              // echo "$reg=$name=$Department <br>";
              echo "<div class='Book' ><div class='c'><img src='data:image/jpeg;base64," . $image_type . "'><br><br>
              $lib_id<br>

              <div class='info' ><h6>By:{$Book_Author}</h6></div>

              <div class='info' ><h6>Book Id:{$bk_id}</h6></div>
              <span class='material-symbols-outlined material'>
          grade
          </span><span class='material-symbols-outlined material'>
          grade
          </span><span class='material-symbols-outlined material'>
          grade
          </span><span class='material-symbols-outlined material'>
          grade
          </span><span class='material-symbols-outlined material'>
          star_half
          </span></div>
       
          </div>
         ";
              echo "";
              echo "";
              // echo "<img src='data:image/jpeg;base64,$image_type >";    
          }}
          
          ?>
          </div>

<span></span>
</div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer><script src="javas/1d.js"></script>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>