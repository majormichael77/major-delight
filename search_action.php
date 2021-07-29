<?php include('header.php')?>

<?php include("nav.php")?>

<?php
$objUser= new User;

$keyword=$_GET['search'];
$product=$objUser->search($keyword);

/* echo"<pre>";
print_r($product);
echo"<pre>";
 */
?>


<?php
if(isset($_GET['submit'])){
            //$keyword=$_GET['search'];
?>


<section>
    <div class="container">
        <div class="row">



            <?php

foreach($product as $p){
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
















<?php
}
?>






























<?php include("footer.php")?>