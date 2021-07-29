<?php session_start();?>
<?php include('header.php')?>
<title>Product Category</title>

<?php

if(!empty($_SESSION['admin'])){
include('nav_admin.php');
}else{

?>


<?php include('nav.php')?>



<?php }?>

<?php

//id is on the URL so it is a parameter to the two functions on this page
$id=$_GET['id'];

 $adm->display_category_products($id);





 //function to get the category name for the breadcrumb;

 $category_crumb=$adm->Category_name_crumb($id);

/* echo"<pre>";
print_r($category_crumb);
echo"</pre>"; */

foreach($category_crumb as $crumb){
$categorycrumb_name=$crumb['category_name'];
//echo $categorycrumb_name;

}
//php code for bread crumb ends here
?>




<!------product displaying from the datatabase  using php  with class admin-------->

<?php $products=$adm->display_category_products($id); 
/* 
 echo"<pre>";
print_r($products);
echo"</pre>"; */
 


//php code calling the function display product and using a for each to display it

?>


<div class="container-fluid">
<div>
<div class="row">
        <div class="col-md-4">
        <a href="index.php" class="crumb">Home</a><a href="#"><?php echo $categorycrumb_name;?></a>
        
        </div>
        
        </div>

</div>

</div>










<!--------the section houses the products ------>
<section>
    <div class="container">
        <div class="row">


        



    <?php

foreach($products as $p){
        $product_id=$p['product_id'];
        $product_name=$p['product_name'];
         $product_price=$p['product_price'];
          $product_image=$p['product_image'];
          

       

    ?>

            <div class="col-md-3">

                <form method="POST" action="item-selected.php?id=<?=$product_id?>">
                    <div class="card">
<!-----product _id is hidden at the front-end----->
                    <input type="text" name="product_id" class="form-control" hidden value="<?php echo $p['product_id'];?>">
                     <input type="text" name="product_id" class="form-control" hidden value="<?php echo $p['product_id'];?>">
    
                    <a href="product_main.php?id=<?php echo $product_id; ?>" class="product-link" title="<?php echo $p['product_name'];?>"><?php echo "<img src='images/".$p['product_image']."'class='img-fluid'>";?></a>
                        
                        <a href="product_main.php?id=<?php echo $product_id; ?>" class="product-link"><span><b><?php echo $p['product_name'];?></span></b></a>

                        <!------price ------->
                        <p class="price"><span>&#8358;</span><span><?php echo $p['product_price'];?></span></p>

                        <input type="hidden" name="name" value="<?php echo $p['product_name'];?>" >
                        
                        <input type="hidden" name="price" value="<?php echo $p['product_price'];?>">
                   <!--      <input type="number" name="quantity" value="1" class="form-control"> -->
                        <span><a class="btn text-center pt-0"><i class="far fa-heart "></i></a></span> </a>
                       


                       <!--  <p><button type ="submit" name ="add_to_cart"   class="btn btn-success">Add to Cart</button></p> -->
                    </div>
                </form>
            </div>
        



 <?php
    
                  }?>

                  <!----end of php loop just after the div holding the product directly---->


        </div>




    </div>

</section>


<!---end of product section-------->

















<?php include('footer.php')?>
