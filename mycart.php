<?php include('header.php')?>
<?php include('nav.php')?>





<?php  

/* 
echo"<pre>";
print_r($_SESSION['cart']);
echo"</pre>"; */

?>







<div class="container">
    <div class="row">

        <div class="col-md-12">


            <?php if(isset($_GET['error'])){
         $error=$_GET['error'];
         //php code alerting  the error status of an empty cart
				echo"<div class='col-md-4 offset-md-4 alert alert-danger'>$error</div>";
			}?>




            <h3>My Cart </h3>

            <p class=""><b> <?php if (empty($_SESSION['cart'])){echo "Your cart is empty !!";}?></b></p>

            <table class="table table-striped  table-hover  table-responsive-sm">
                <thead class="thead-dark">
                    <tr>
                        <th>S/N</th>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Quantity</th>
                        <th>Product Price</th>
                        <th>Total Price</th>
                        <th>Action</th>


                    </tr>

                </thead>

                <tbody>

                    <?php

    $p=0;
if(!empty($_SESSION['cart'])){

    $total=0;
    $counter=1;
    foreach($_SESSION['cart'] as $key=>$value){
        $product_id=$value['product_id'];
        //echo $product_id;
        //$link=$guest_id;
  //$total=$value['quantity']*$value['price'];

  //$total_price=array($total);
   // array_values($total_price) ;
   //var_dump($total_price) ;
     

    ?>
                    <tr>
                        <td><?php echo $counter++?></td>
                        <td><?php echo "<img src='images/".$value[1]."'class='' height='120px'>";?></td>
                        <td><?php echo $value[2]?></td>
                        <td><?php echo $value[3]?></td>
                        <td><span>&#8358;</span><?php echo number_format( $value[4],2);?></td>
                        <td><span>&#8358;</span><?php echo number_format($value[3]*$value[4],2);?></td>
                        <td><a href="product_cart.php?cartitem=<?php echo $p?>" class="btn btn-sm btn-danger">Remove
                                Item</a></td>

                    </tr>

                    <?php if(!empty($_SESSION['cart'])){
                    $price=($value[3]*$value[4]);
                    $total=$total+$price;
                    
                    ?>


                    <?php
    
                  }
                }
                //to see what total was returning will be removed later
                //var_dump($total);?>

                    <tr>
                        <td colspan='4'></td>
                        <td><b>Total price</b></td>
                        <td><b><span>&#8358;</span><?php echo number_format($total,2);  $p++;}?></b></td>


                    </tr>
                </tbody>
            </table>

           
<a href="more_categories.php" class="col-md-5 offset-md-5">Continue Shopping</a>
        <form method="POST" action="checkout_submit.php">
            <button  class="btn btn-sm btn-block btn-success mb-2" name="btn"
                onclick='return confirm("Are you sure you want to Check Out? You need to be signed in to check out.")'>CHECK OUT</button>
        </div>
       </form>


    </div>



</div>




















<?php include('footer.php')?>