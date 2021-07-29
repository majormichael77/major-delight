<!---------the php class admin is included on the nav bar

<?php include('header.php')?>
<title>Product Upload</title>
<?php include('nav_admin.php')?>


<!-------bread crumb-->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item text-success"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item "><a href="products.php">Products</a></li>


        <li class="breadcrumb-item active" aria-current="page">Product Upload</li>
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

            <p> From your here you can easily upload new products</p>
            
            <?php
             if(isset($_GET['response'])){

               echo"<div class='alert alert-info'>".$_GET['response']."</div>";
             }
            ?>
            
            

            <h4>Product Upload</h4>
            <form method="POST" action="upload-submit.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="product-name">Product name</label>
                    <input type="text" name="productname" class="form-control" id="product-name"
                        aria-describedby="emailHelp">

                </div>


                <div class="form-group">
                    <label for="product-price">Product Price</label>
                    <input type="number" name="price" class="form-control" id="product-price">
                </div>

                <div class="form-group">


                    <label for="exampleInputPassword1">Product Category</label>
                    <?php $r=$adm->get_Category();?>
                </div>


                <div class="form-group">
                    <label for="product-status">Product description</label>



                    <select class="custom-select custom-select"  name="product-status"  id="product-status" class="form-control">
                    <option >Status of Product</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                
                    </select>
                   

                </div>




                <div class="form-group">
                    <label for="product-desc">Product description</label>
                    <textarea type="text" name="product-desc" class="form-control" id="product-desc"></textarea>

                </div>

                <div class="form-group">
                    <label for="brand-name">Brand name</label>
                    <textarea type="text" name="brand-name" class="form-control" id="brand-name"></textarea>

                </div>


                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" class="form-control" id="quantity">

                </div>

                <div class="form-group">
                    <p><b>Browse & Upload Product pictures</b></p>
                    <label for="pix"></label>
                    <input type="file" id="pix" name="pix">


                </div>


                <button type="submit" name="btn" class="btn btn-success btn-sm">Upload</button>
            </form>




        </div>

    </div>

</div>





<?php include('footer.php')?>