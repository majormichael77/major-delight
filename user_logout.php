<?php session_start();
include('user.php');
$objUser=new User;
$objUser->logout();
?>