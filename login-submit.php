<?php
session_start();
include('user.php');

if(!empty($_POST)){
$email=strip_tags(htmlentities(trim($_POST['email'])));
$password=$_POST['password'];


$objUser= new User;
$rsp=$objUser->User_login($email,$password);
if($rsp>0){
    $_SESSION['username']=$rsp;
    //save in a session & redrect
header('location:my-account.php');


}
else{
    $msg="Invalid password or email,please try again";
   header("location:login.php?msg=$msg");
 
    //redirect to the home page to login
}



}


?>