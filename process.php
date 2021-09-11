<?php 

include('config/connect.php');
session_start();
//mysql_select_db("spm");

//Get values from login.php
$id = $_POST['id'];
$password = $_POST['pass'];


//Preventing the system from SQL Injection

 $id = htmlspecialchars($id);
 $password = htmlspecialchars($password);

//Query the db

$login = "SELECT * FROM tbl_login WHERE id = '$id' AND password = '$password'";
$studentLogin = "SELECT * FROM tbl_loginstd WHERE id = '$id' AND password = '$password'";

$result = mysqli_query($conn, $login);

$studentResult = mysqli_query($conn, $studentLogin);


$row = mysqli_fetch_array($result);

$studentRow = mysqli_fetch_array($studentResult);

if($row['id'] == $id && $row['password'] == $password)
{   $_SESSION['id'] = $id;
    $_SESSION['password'] = $password;

    header("Location: http://localhost/spm-v2/faculty.php ");
}

else if ($studentRow['id'] == $id && $studentRow['password']) {
    $_SESSION['id'] = $id;
    $_SESSION['password'] = $password;
    header("Location: http://localhost/spm-v2/student.php ");
}

else{
     echo "Login failed";
}

mysqli_close($conn);


?>