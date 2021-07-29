<?php
include('admin.php');
$adm=new Admin;

if(isset($_POST['btn'])){


    $productname=$_POST['productname'];
    $productprice=$_POST['price'];
    $category=$_POST['category'];
    $product_status=$_POST['product-status'];
    $product_desc=$_POST['product-desc'];
    $brandname=$_POST['brand-name'];
    $quantity=$_POST['quantity'];
    $product_pix=$_FILES['pix'];//this is retrieving the file with global variable $_FILES which is then passed into product_pix and sent as aparameter
    
     $picture=$adm->get_filename($product_pix);




$upload=$adm->Upload_product($productname,$productprice,$category,$product_status,$product_desc,$brandname,$quantity,$picture);
if($upload>0){
header("location:upload_product.php?response=product was successfully uploaded!");

}

else{


    header("location:upload_product.php?response='Upload failed");

}





    }




?>