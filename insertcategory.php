<?php include('admin.php');

//create object of faculty class 
$objCat=new Admin;

//access createCategory method to insert new category name

$output=$objCat->createCategory($_POST["category_name"]);


//redirect back to category form.php you make use of function header
header("Location: http://localhost/grocery/category_form.php?result=$output");

?>
