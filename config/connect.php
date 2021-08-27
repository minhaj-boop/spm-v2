<?php 
    //header('Content-Type: application/json');
    //connect to database
    $conn = mysqli_connect('localhost', 'root', '', 'spm');

    //check connection
      if(!$conn) {
          echo 'Connection error ' . mysqli_connect_error();
      }    
?>