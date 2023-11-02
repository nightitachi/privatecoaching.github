<?php 
   $servername= "localhost";
   $username = "root";
   $password ="";
   $db_name = "coaching_db";

   $conn = mysqli_connect($servername , $username , $password , $db_name);

   if($conn ->connect_error){
    die("connection failes".$conn -> connect_error);
   
  }
?>