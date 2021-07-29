<?php 


//class admin was called here 
include("admin.php");
require('user.php');
//instantiation of object $adm was already done in class Admin

//passing the data returned by the function category_link in class admin
$category_menu=$adm->category_link();


 /* echo"<pre>";
print_r($category_menu);
echo"</pre>";  */

?> 

<!doctype html>
<html lang="en">

<head>
    <!--required  meta tags all other mata tags can be added-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="mainstyle.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/animate.min.css">