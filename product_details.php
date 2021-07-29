


<?php include("header.php") ?>
<?php

if(!isset($_GET['id'])){
    header('location:products.php');

}

$id=$_GET['id'];

 $rsp=$adm->get_product_details($id);

 


 /* echo"<pre>";
 print_r($rsp);
 echo"</pre>"; */
?>


<title>Product details</title>

<?php include("nav.php") ?>
<?php


/* echo"<pre>";
print_r($products);
echo"</pre>"; */


?>


<!-------bread crumb-->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item text-success"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item "><a href="my-account.html">Admin</a></li>


        <li class="breadcrumb-item active" aria-current="page">Product Upload</li>
    </ol>
</nav>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 offset-md-8">
            <div class="text-right">
                <a href="upload_product.php" class="btn btn-sm btn-primary pt-2 mb-2">Upload New Product</a>
                
            </div>
        </div>





        <div class="col-md-2">
            <div class="text-right">
                <a href="category_form.php" class="btn btn-sm btn-warning pt-2 mb-2">Add New Category</a>
            </div>
        </div>
    </div>


</div>

<!------end of bread crumb-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="vertical-menu sticky ">
                <a href="admin_page.php"><i class="fas fa-tachometer-alt "></i><span>Admin Dashboard</span></a>
                <a href="all_orders.php"><i class="fas fa-shopping-bag "></i><span>All Orders</span></a>
                <a href="subscription.php"><i class="fas fa-receipt"></i><span>Receipt /subscription</span></a>
                <a href="Payments_records.php"><i class="fas fa-money-check-alt"></i><span>Payment Records</span></a>
                <a href="delivery_records.php"><i class="fas fa-location-arrow"></i><span>Delivery Records</span></a>
                <a href="products.php" class="active"><i class="fas fa-user-circle"></i><span>Products</span></a>
                <a href="customer_record.php"><i class="fas fa-user-circle"></i><span>All customer records</span></a>
            </div>

        </div>




        <div class="col-md-6">

        
<details class="text-success ">
    <summary  class="text-dark bg-light rounded">Product name</summary>
  <?php echo $rsp['product_name']?>
</details>


<details class="text-dark ">
    <summary  class="text-success bg-light rounded">Product price</summary>
  <span>&#8358;</span><?php echo $rsp['product_price']?>
</details>


<details class="text-success ">
    <summary  class="text-dark bg-light rounded">Product Image</summary>
  <?php echo "<img src='images/".$rsp['product_image']."'class='img-fluid'>";?>
</details>



<details class="text-dark ">
    <summary  class="text-success bg-light rounded">Product Brand</summary>
  <?php echo $rsp['brand_name']?>
</details>





<details class="text-success ">
    <summary  class="text-dark bg-light rounded">Unit Stock</summary>
  <?php echo $rsp['unit_stock'] ?>
</details>



<details class="text-dark ">
    <summary  class="text-success bg-light rounded">Product status</summary>
  <?php echo $rsp['product_status']?>
</details>



<details class="text-success ">
    <summary  class="text-dark bg-light rounded">Date of Upload</summary>
  <?php echo $rsp['product_upload_date'] ?>
</details>






        </div>

    </div>

</div>




<!--------vertical menu codes start here -->






















<?php include("footer.php") ?>