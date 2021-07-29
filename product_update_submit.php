<?php
include('admin.php');


if(isset($_POST)){
if( empty($_POST['productname']) || empty($_POST['price']) || empty($_POST['category']) ||empty($_POST['product-status']) || empty(htmlentities(trim($_POST['product-desc']))) || empty(htmlentities(trim($_POST['brand-name']))) || empty($_POST['quantity'])  ){
$product_id=$_POST['product_id'];
header("location:product_update.php?id=$product_id & response=All fields must be filled");

}
else{
$product_id=$_POST['product_id'];
$product_name=$_POST['productname'];
$product_price=$_POST['price'];
$product_category=$_POST['category'];
$product_status=$_POST['product-status'];
$product_description=$_POST['product-desc'];
$brand_name=$_POST['brand-name'];
$product_quantity=$_POST['quantity'];

$response=$adm->update_product($product_id,$product_name,$product_price,$product_category,$product_status,$product_description,$brand_name,$product_quantity);

header("location:product_update.php?response=$response");

header("location:product_update.php?id=$product_id & response=$response");


}




}

 else{
 header("location:product_update.php?msg=All fields are required to be filled");
}
 



?>