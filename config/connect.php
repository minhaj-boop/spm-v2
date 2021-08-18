<?php 
    header('Content-Type: application/json');
    //connect to database
    $conn = mysqli_connect('127.0.0.1:3307', 'root', '', 'spm');

    //check connection
      if(!$conn) {
          echo 'Connection error ' . mysqli_connect_error();
      }    
?>