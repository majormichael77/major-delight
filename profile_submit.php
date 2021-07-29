<?php
session_start();
$_SESSION['username'];


//this checks if the user already has a sesssion if it is not set it redirects to the form 
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
include('user.php');

$objUser=new User;
/* if(isset($_POST[''])){
if( empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) ||empty($_POST['address'])  ||empty($_POST['phonenumber'])){ */
$id=$_POST['customer_id'];
//echo $id;
//header("location:edit_profile.php?id=$id & response=All fields must be filled");

//}
//else{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$address=$_POST['address'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$customer_id=$_POST['customer_id'];


$response=$objUser->update_profile($customer_id,$firstname,$lastname,$address,$phonenumber);

echo $response;

header("location:edit_profile.php?id=$product_id & response=$response");


//}




// }

 /* else{
 header("location:edit_profile.php?msg=All fields are required to be filled");
} */
 



?>