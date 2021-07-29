<?php
session_start();
include('user.php');
$objUser=new User;


if(!isset($_SESSION['username'])){
header("location:login.php");


}



if(isset($_SESSION['cart'])){
 
//function to update order table
if(isset($_GET['id'])){
    echo $GET['id'];
    return $order_id;
}

foreach($_SESSION['cart'] as $key=>$value){
        $product_id=$value[0];
        $product_name=$value[2];
        $quantity=$value[3];
        $price=$value[4];
        $total_price=$quantity*$price;
        $order_id=$_POST['order_id'];
      $order_details=$objUser->insert_order_details($quantity,$order_id,$product_id,$product_name,$price,$total_price);
    }

//$id=$_GET['id'];
 $order_id=$_POST['order_id'];
$delivery_address=$_POST['address'];
$state=$_POST['state'];
$alternate_phone=$_POST['phonenumber'];

$objUser->create_delivery($delivery_address,$state,$alternate_phone,$order_id);
          
   header("location:delivery_details.php");
         //header("location:payment.php?id");

         


    
}
 
?>