<?php 
    
    include('config/connect.php');
      
      $sql = sprintf('SELECT loginId, password FROM login');
      
      $result = mysqli_query($conn, $sql);

      $loginArr = array();

      foreach ($result as $row) {
          $loginArr[] = $row;
      }
      
      $result->close();
      $conn->close();
      
      print json_encode($loginArr);
?>