<?php
include('config/connect.php');

session_start();


unset($_SESSION['id']);
unset($_SESSION['password']);

header("Location: http://localhost/spm-v2/login.php ");
?>