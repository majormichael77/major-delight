<?php
include("user.php");
$obj_user=new User;
$output=$obj_user->UserRegistration($_POST["firstname"],$_POST["lastname"],$_POST["address"],$_POST["email"],$_POST["password"],$_POST["phonenumber"]);

header("Location: http://localhost/grocery/register.php?result=$output");

exit;


?>