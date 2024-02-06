<?php

class ls
{
   public $connection;
   public $name;
   
   function __construct()
   {
        $this->connection=new mysqli("localhost","root","","lib_skp");
        if($this->connection->connect_error){
            echo "not connect <i class='fa fa-fighter-jet' aria-hidden='true'></i>" . $connection->connect_error;
        }
        else {
            echo " <a href='#' style=' display: flex 
            justify-content: center color:#A89F96  position: absolute;' ><i class='fa fa-rss' aria-hidden='true'></i></a>";
        }
        
        // Get the user name from the login table and overwrite the default name
        if (isset($_SESSION['email']) && isset($_SESSION['Name']) && isset($_SESSION['reg_no']) && isset($_SESSION['password']) && isset($_SESSION['Department']) && isset($_SESSION['date'])) 
        {
            $email=$_SESSION['email'];
            $sql="SELECT Name FROM login Where Email= '$email'";
            $resu=mysqli_query($this->connection,$sql);
            $row=mysqli_fetch_assoc($resu);
            $this->name = $_SESSION['Name'];
                     
        }
   }
}
?>