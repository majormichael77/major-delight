<?php session_start();
if(empty($_SESSION['admin'])){

header('location:admin_login.php');
}



?>


<?php include("header.php") ?>

<title>Admin Account</title>

<?php include("nav_admin.php") ?>
<?php


$products=$adm->fetch_products();
/* echo"<pre>";
print_r($products);
echo"</pre>";  */


?>


<!-------bread crumb-->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item text-success"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item "><a href="admin_page.php">Admin</a></li>


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
            <div class="vertical-menu dashboard">
                <a href="admin_page.php"><i class="fas fa-tachometer-alt "></i><span>Admin Dashboard</span></a>
                <a href="all_orders.php"><i class="fas fa-shopping-bag "></i><span>All Orders</span></a>
                <a href="subscription.php"><i class="fas fa-receipt"></i><span>Receipt /subscription</span></a>
                <a href="Payments_records.php"><i class="fas fa-money-check-alt"></i><span>Payment Records</span></a>
                <a href="delivery_records.php"><i class="fas fa-location-arrow"></i><span>Delivery Records</span></a>
                <a href="products.php" class="active"><i class="fas fa-user-circle"></i><span>Products</span></a>
                <a href="customer_record.php"><i class="fas fa-user-circle"></i><span>All customer records</span></a>
            </div>

        </div>

        <div class="col-md-10">

        <h5 >Product table</h5>

            <table class="table table-striped table-responsive">
                <thead class="thead-light">
                    <tr>
                        <th>S/N</th>
                        <th>Product name</th>
                        <th>Product Price</th>
                        <th>Product Image</th>
                        <th>Brand name</th>
                        <th>Unit stock</th>
                        <th>Product Category</th>
                        <th>Date Uploaded</th>
                        <th>Action</th>


                    </tr>

                </thead>

                <tbody>

                    <?php

    $counter=1;
    foreach($products as $p){
        $product_id=$p['product_id'];
        //$link=$guest_id;
    
     

    ?>
                    <tr>
                        <td><?php echo $counter++?></td>
        
                        <td><a href="product_details.php?id=<?php echo $product_id; ?>"><?php echo $p['product_name']?></a>
                        </td>
                        <td><span>&#8358;</span><?php echo $p['product_price']?></td>
                        <td><?php echo "<img src='images/".$p['product_image']."'width=30px'>";?></td>
                         <td><?php echo $p['brand_name']?></td>
                          <td><?php echo $p['unit_stock']?></td>
                           <td><?php echo $p['category_name']?></td>
                        <td><?php echo date('F j, Y , g:i a',strtotime($p['date_created']))?></td>
                      
                        <td><a href="product_delete.php?id=<?php echo $product_id;?>" class="btn btn-sm btn-danger mb-2"
                                onclick='return confirm("Are you sure you want to delete this?")'>Delete</a>
                              
                              <a href="product_update.php?id=<?php echo $product_id;?>" class="btn btn-sm btn-success mb-2"
                                onclick='return confirm("Are you sure you want to Update this?")'>Update</a>

                     
                        </td>

                    </tr>


                  <?php
    
                  }?>
                </tbody>
            </table>




        </div>

    </div>

</div>




<!--------vertical menu codes start here -->






















<?php include("footer.php") ?>