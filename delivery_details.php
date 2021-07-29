<?php session_start()?>
<?php

if(empty($_SESSION['cart'])){

    $error="Your cannot check out with an empty cart!";
    header("location:mycart.php?error=$error");

}




if(!isset($_SESSION['username']) &&!empty($_SESSION['cart'])){

    header("location:login.php");

}


?>


<?php include('header.php')?>



<title>Check out Page</title>
<?php include('nav.php')?>


<div class="container">
    <div class="row">
        <div class="col-md-12 ">
        <div style="border:1px solid grey"class="pb-2 mx-5 px-5 py-5 mb-5" >

            <form  method="POST" action="">

            <h6 class="ml-0">SHIPMENT DETAILS</h6>
            <HR>
            <p>Shipment 1 of 1</p>


        <p  class=""><b> <?php if (empty($_SESSION['cart'])){echo "Your cart is empty !!";}?></b></p>

            

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
                
                     <p>  <span><?php echo $value[3].'X'?></span>
                     <span><?php echo $value[2]?></span>
                           

                    </p> 
                        
                  

                    <?php if(!empty($_SESSION['cart'])){
                    $price=($value[3]*$value[4]);
                    $total=$total+$price;
                    $deliveryfee=1000;
                    $final_price=$total+$deliveryfee;
                    ?>


                  <?php
    
                  }
                }
                //to see what total was returning will be removed later
                //var_dump($total);?>

                <?php echo "<hr>";?>
        
               
                 <span class="subtotal">Subtotal</span>
                    <span class="subtotal-price"><b><span>&#8358;</span><?php echo number_format($total,2);  $p++;}?></b></span>
            
                    <p><span class="left">Delivery fee</span>  <b><span class="right"><span>&#8358;</span><?php echo number_format($deliveryfee,2);?></b></span></p>

                    <hr>

                    <p><span>Final Total</span> <b><span class="right"><span>&#8358;</span><?php echo number_format($final_price,2);?></b></span></p>
                    

               

<p><a href="final_confirm.php" class="btn btn-sm btn-block marigold ghostwhite mb-2"
                              >CONFIRM ORDER </a></p>



           
           
           
           
           </form>


        </div>

    </div>

    </div>

</div>












<?php include('footer.php')?>

<?php  //header("location:delivery.php?id=");?>