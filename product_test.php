<?php include("header.php")?>
<title>Test products</title>
<?php include("nav.php")?>

<?php $products=$adm->display_products(); 

 /* echo"<pre>";
print_r($products);
echo"</pre>";

 */

//php code calling the function display product and using a for each to display it

?>
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

                <form>
                    <div class="card">
<!-----product _id is hidden at the front-end----->
                    <input type="text" name="product_id" class="form-control" hidden value="<?php echo $p['product_id'];?>">

                    <a href="" class="product-link" title="<?php echo $p['product_name'];?>"><?php echo "<img src='images/".$p['product_image']."'class='img-fluid'>";?></a>
                        
                        <a href="" class="product-link"><span><b><?php echo $p['product_name'];?></span></b></a>

                        
                        <p class="price"><span>&#8358;</span><span><?php echo $p['product_price'];?></span></p>
                        <span><a class="btn text-center pt-0"><i class="far fa-heart "></i></a></span> </a>
                       


                        <p><button class="btn btn-success">Add to Cart</button></p>
                    </div>
                </form>
            </div>
        



 <?php
    
                  }?>

                  <!----end of php loop just after the div holding the product directly---->


        </div>




    </div>

</section>





























<?php include("footer.php")?>