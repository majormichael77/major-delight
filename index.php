<?php
session_start();





?>













<?php include("header.php") ?>
<title>Major delights</title>


<?php

if(!empty($_SESSION['admin'])){
include('nav_admin.php');
}else{

?>


<?php include('nav.php')?>



<?php }?>




 


<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="list-group mt-2 ">

                <?php
                //beginning of foreach statement to loop through the array
                 foreach($category_menu as $cat){
                    $category_name=$cat['category_name'];
                    $category_id=$cat['category_id'];
                
                ?>

<!------the content is noinside the php directly but the closing foreach tag closes it in order to get data on the run of each loop also for echo of the contents (category id and category name into the cat list group  ------>
                <a href="product_category.php?id=<?php echo $category_id;?>" class="list-group-item list-group-item-action list-group-item-success"><?php echo $category_name;?></a>
            



  
            <?php
                 //end of loop 
                }
            ?>        
                </div>

            </div>

            <div class="col-md-8">
                <div id="carousel-slider" class="carousel slide " data-ride="carousel">
                    <!----------indicator code starts here -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-slider" data-slide-to="1"></li>
                        <li data-target="#carousel-slider" data-slide-to="2"></li>
                    </ol>
                    <!----------indicator code ends here -->

                    <!----------carousel items code  starts here -->

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/fruit.jpg" class="d-block w-100" alt="fruit section">
                        </div>

                        <div class="carousel-item">
                            <img src="images/dairy.jpg" class="d-block w-100" alt="dairy">
                        </div>

                        <div class="carousel-item">
                            <img src="images/veggie.jpg" class="d-block w-100" alt="veggie">
                        </div>

                        <div class="carousel-item">
                            <img src="images/beverage.jpg" class="d-block w-100" alt="beverage">
                        </div>

                        <div class="carousel-item">
                            <img src="images/cereal.jpg" class="d-block w-100" alt="cereal">
                        </div>
                        <div class="carousel-item">
                            <img src="images/soda.jpg" class="d-block w-100" alt="soda">
                        </div>

                        <div class="carousel-item">
                            <img src="images/delivery.jpg" class="d-block w-100" alt="soda">
                        </div>
                    </div>
                    <!----------carousel items code ends here -->

                    <!----------control code starts here -->
                    <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!----------control code ends here -->


                </div>

            </div>

            <!---------carousel code ends here-->

            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center mb-5 feature-border mt-2 animate__animated animate__backInDown">
                            <img src="images/shipping.png" height="40px" class="img-fluid ">
                            <p class="text-center mb-0"><b>FAST DELIVERY</b></p>
                            <p class="pt-0">Very Reliable</p>

                        </div>



                    </div>

                    <div class="col-md-12">
                        <div class="text-center mb-5 feature-border animate__animated animate__backInDown">
                            <img src="images/fresh.png" height="40px" class="img-fluid ">
                            <p class="text-center mb-0"><b>FRESH GROCERIES</b></p>
                            <p class="pt-0"> Product well packaged</p>

                        </div>

                    </div>


                    <div class="col-md-12">
                        <div class="text-center mb-2 feature-border animate__animated animate__backInDown">
                            <img src="images/payment.png" height="40px" class="img-fluid ">
                            <p class="text-center mb-0"><b>ONLINE PAYMENT</b></p>
                            <p class="pt-0">Secured online Payment</p>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

</section>






<section>
    <!---home banner 1 and banner 2 code starts here-->

    <div class="container-fluid">
        <div class="row">

            <!---full code text over     code starts here-->
            <div class="col-md-6">
                <div class="home-banner1-bg w-100 img-fluid my-2">
                    <div class=" img-fluid">

                        <!---text over home banner1   code starts here-->
                        <div>
                            <h6 class=" my-4 pl-5 ml-5 home-banner-text text-success">Green Vegetable</h6>
                            <h3 Class=" my-5 pl-5 ml-3">100% ORGANIC</h3>

                            <h6 class=" my-4 pl-5 ml-5 text-success">Healthy Nutrition</h6>
                        </div>

                        <div class="text-center">
                            <a class=" ghost-button" href="product_category.php?id=14" role="button">BUY NOW</a>


                        </div>

                    </div>

                </div>
                <!---text over home banner1   code ends here-->


            </div>


            <!---text over home banner2   code starts here-->
            <div class="col-md-6">
                <div class="home-banner2-bg w-100 img-fluid my-2">
                    <div class=" img-fluid">
                        <div>
                            <h6 class=" my-4 pl-5 ml-5 home-banner-text text-success">Fresh Herbs</h6>
                            <h3 Class=" my-5 pl-5 ml-3">SPINNACH</h3>

                            <h6 class=" my-4 pl-5 ml-5 text-success">Healthy Food</h6>
                        </div>

                        <div class="text-center">
                            <a class=" ghost-button" href="" role="button">BUY NOW</a>


                        </div>


                    </div>

                </div>

            </div>
            <!---text over home banner2   code starts here-->

        </div>
        <!---full code text over home banners 1$ 2     code ends here---->

    </div>

    <!-----------end of 4th row -->

</section>



<section>

    <div class="container">
        <!---------5th row starts here-->
        <div class="row">
            <div class="col-md-9">
                <h2 class="my-5 black">Top Categories</h2>

            </div>

            <div class="col-md-3">
                <div class="text-center">
                    <a class=" ghost-button my-5" href="more_categories.php" role="button">MORE CATEGORIES</a>
                </div>

            </div>


        </div>

             </div>

            </section>        
            





<!------product displaying from the datatabase  using php  with class admin-------->

            <?php $products=$adm->display_products(); 

/*  echo"<pre>";
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

                <form method="POST" action="item-selected.php?id=<?=$product_id?>">
                    <div class="card">
<!-----product _id is hidden at the front-end----->
                    
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
























             








        


        



    <?php include("footer.php") ?>