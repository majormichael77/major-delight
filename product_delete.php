<?php
include('admin.php');
$obj=new Admin;
if(isset($_GET['id'])){
$product_id=$_GET['id'];
$obj->delete_product($product_id);
header('location:products.php');
}