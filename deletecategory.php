<?php
include('admin.php');


 $categoryname=$_POST['category'];
 if(isset($categoryname)){
$output=$adm->delete_category($categoryname);
header("location:category_form.php?message=$output");

 }
 else{

 header("Location: http://localhost/grocery/category_form.php?message=$output");
 }

    


?>