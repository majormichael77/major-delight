<?php session_start();
$_SESSION['admin'];
include('admin.php');

$objUser= new Admin;



$email=strip_tags(htmlentities(trim($_POST['id'])));
$password=$_POST['password'];


$rsp=$objUser->Admin_login($email,$password);
if($rsp==true){
    $_SESSION['admin']=$rsp;
    //save in a session & redrect
header('location:admin_page.php');


}
else{
$msg="invalid username or password is invalid";
    header("location:admin_login.php?response=$msg");

}





?>