


<?php include('header.php')?>
<?php
/* if(!isset($_GET['id'])){
    header('location:products.php');
} */

$id=$_GET['id'];
$product_deets=$adm->get_product($id);
/* echo "<pre>";
print_r($product_deets);
echo"</pre>";
 */




?>



<title>Product Upload</title>
<?php include('nav.php')?>


<!-------bread crumb-->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item text-success"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item "><a href="my-account.html">Admin</a></li>


        <li class="breadcrumb-item active" aria-current="page">Update Product </li>
    </ol>
</nav>

<!------end of bread crumb-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="vertical-menu sticky ">
                <a href="admin_page.php" class="active"><i class="fas fa-tachometer-alt "></i><span>Admin
                        Dashboard</span></a>
                <a href="all_orders.php"><i class="fas fa-shopping-bag "></i><span>All Orders</span></a>
                <a href="subscription.php"><i class="fas fa-receipt"></i><span>Receipt /subscription</span></a>
                <a href="Payments_records.php"><i class="fas fa-money-check-alt"></i><span>Payment Records</span></a>
                <a href="delivery_records.php"><i class="fas fa-location-arrow"></i><span>Delivery Records</span></a>
                <a href="products.php"><i class="fas fa-user-circle"></i><span>Products</span></a>
                <a href="customer_record.php"><i class="fas fa-user-circle"></i><span>All customer records</span></a>
            </div>

        </div>

        <div class="col-md-8">


            <p>Hello ,<b>Admin</b> Welcome to <i>Major Delights!</i></p>

            <p> From your here you can easily update product details</p>
            <?php
             if(isset($_GET['response'])){
                 $response=$_GET['response'];

                if(strpos($response,'successfully')){

                  echo"<div class='alert alert-success'>".$response."</div>";
                }
                else{
                     echo"<div class='alert alert-danger'>".$response."</div>";
                }

              
             }
            ?>

            
            

            <h4> Update Product</h4>
            <form method="POST" action="product_update_submit.php" enctype="multipart/form-data">
                <div class="form-group">

                <input type="text" name="product_id" class="form-control" id="product_id"
                        aria-describedby="emailHelp"  value="<?php echo $product_deets['product_id'];?>" hidden>
                    <label for="product-name">Product name</label>
                    <input type="text" name="productname" class="form-control" id="product-name"
                        aria-describedby="emailHelp"  value="<?php echo $product_deets['product_name'];?>">

                </div>


                <div class="form-group">
                    <label for="product-price">Product Price</label>
                    <input type="number" name="price" class="form-control" id="product-price"  value="<?php echo $product_deets['product_price'];?>">
                </div>

                <div class="form-group">


                    <label for="category">Product Category</label>
                    <?php $r=$adm->get_Category($product_deets['product_category']);?>
                </div>


                 <div class="form-group">



                    <label for="product-status">Product status</label>
                    <select class="custom-select custom-select"  name="product-status"  id="product-status" class="form-control">
                    <option selected><?php echo $product_deets['product_status'];?></option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                
                    </select>
                   

                </div>




                <div class="form-group">
                    <label for="product-desc">Product description</label>
                    <textarea type="text" name="product-desc" class="form-control" id="product-desc"><?php echo $product_deets['product_description'];?></textarea>

                </div>

                <div class="form-group">
                    <label for="brand-name">Brand name</label>
                    <textarea type="text" name="brand-name" class="form-control" id="brand-name"> <?php echo $product_deets['brand_name'];?></textarea>

                </div>


                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" class="form-control" id="quantity"value="<?php echo $product_deets['unit_stock'];?>">

                </div>
<!----decide not implemented temporarily----->
                <!-- <div class="form-group">
                    <p><b>Browse & Upload Product pictures</b></p>
                    <label for="pix"></label>
                  <p><span></span></p>
                    <input type="file" id="pix" name="pix">  


                </div>
 -->
                   
                              <button type="submit" name="btn" class="btn btn-primary btn-sm">Update</button>
            
            </form>




        </div>




    <div class="col-md-2">
    <a href="products.php?" class="btn btn-sm btn-success mb-2"
                                onclick='return confirm("Are you sure you want to go back to all product page?")'>Go back to product page</a>

    
    </div>

    </div>

</div>





<?php include('footer.php')?>