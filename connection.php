<?php
 
   $servername="localhost";
   $username="Tarunesh";
   $password="Tarunesh";
   $db_name = "shareup";
   $connection = new mysqli($servername,$username,$password,$db_name);
   
   if($connection-> connect_error){
      die($connection-> connect_error);
     }
   echo "SUCCESS";  
?>