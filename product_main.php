<?php session_start();?>




<?php include("header.php")?>


<title>Main products</title>


<?php
//condition on which nav to use based on the type of user
if(!empty($_SESSION['admin'])){
include('nav_admin.php');
}else{

?>


<?php include('nav.php')?>



<?php }?>








<?php

if(!isset($_GET['id'])){
    header('location:products.php');

}

$id=$_GET['id'];


 $rsp=$adm->get_product_details($id);

 

 

 
 /* echo"<pre>";
 print_r($rsp);
 echo"</pre>";  */ 
?>






<section class="mb-5 pb-5 pt-3">
<div class="container">


    <div class="row">

    <div class="col-md-12">

    <?php 
//php code that controls the breadcrumbs
         $product=$rsp['product_name'];
         $category=$rsp['product_category'];

$category_crumb=$adm->Category_name_crumb($category);
foreach($category_crumb as $cat){
    $category_name=$cat['category_name'];
}
        
echo" 
  <nav aria-label='breadcrumb'>
    <ol class='breadcrumb'>
      <li class='breadcrumb-item text-success'> <a href='index.php'>Home</a></li>
       <li class='breadcrumb-item text-success'> <a href='product_category.php?id=$category'>$category_name</a></li>
      <li class='breadcrumb-item active' aria-current='page'>$product</li>
    </ol>
  </nav>";

  //end of php code
		?>

    
    </div>



    <div class="offset-md-4 col-md-4">
     <?php if(isset($_GET['msg'])){
         //php code alerting  the success status of adding to cart
				echo"<div class='alert alert-success'>Item has been added to cart <a href='mycart.php'>view cart</a></div>";
			}?>
        
    </div>

    
<!--------product details begins here---------->
        <div class="col-md-12">
            <div class="row">

    <div class="col-md-4">

     <?php echo "<img src='images/".$rsp['product_image']."'class='img-fluid'>";?>





    </div>


    <div class="col-md-8">
        <div class="row">

        <div class="col-md-12">
                <h3><?php echo $rsp['product_name']?></h3>
                <hr>

        </div>


        <div class="col-md-12">
                <h5><?php echo $rsp['brand_name']?></h5>
                <hr>

        </div>


        <div class="col-md-12">
            <form action="product_cart.php?id=<?php echo $rsp['product_id'];?>" method="POST">
            <h5 class="lead">Price</h5>
                <h5><span>&#8358;</span><?php echo $rsp['product_price']?></h5>
                
                   <input type="number" name="quantity" value="1" class="form-control col-sm-1 mb-2">
                   <input type="hidden" name="product_name" value="<?php echo $rsp['product_name'];?>">
                   <input type="hidden" name="product_id" value="<?php echo $rsp['product_id'];?>">
                   <input type="hidden" name="product_image" value="<?php echo $rsp['product_image'];?>">
                        
                        <input type="hidden" name="product_price" value="<?php echo $rsp['product_price'];?>">

                <span><button type ="submit" name ="add_to_cart"   class="btn btn-success">Add to Cart</button></span> 
                <span><a class="btn text-center pt-0"><i class="far fa-heart "></i></a>Add to Wishlist</span> </a>
                       
                <hr>

        </div>
        </form>


        <div class="col-md-12">
            <h5>Product Description</h5>
                <h5 class="lead"><?php echo $rsp['product_description']?></h5>
                <hr>

        </div>



            </div>

        </div>
        


    </div>

</div>
    
    </div>



    </div>
</section>




















<?php include("footer.php")?>


