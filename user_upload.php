<?php session_start();
include('user.php');
$obj=new User;
if(isset($_FILES['pix']) && isset($_SESSION['username'])){
$profile_pix=$_FILES['pix'];

$obj->upload_pix($profile_pix);
}
else{
    header("location:profile.php");
}





?>