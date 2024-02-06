<?php


?>
<div class="rtop"> 
       
       <h1 style="text-transform:uppercase;"><?php include "con1.php";
          $obj=new ls();
          ?> <img src="web_img/logo_skp.png" alt=""><a href=""> skp library management system </a></h1>
      
     <?php 

     if (isset($_SESSION['email'])) {
         echo "<a href='index.php' class='log'><i class='fa-solid fa-user'></i>" .  ucfirst($_SESSION['Name'] ). " Log out </a>";
     } else {
         echo "<a href='index.php' class='log'><i class='fa-solid fa-user'></i> Log out </a>";
     }
     ?>
</div>

