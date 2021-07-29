<?php
session_start();
?>

<?php
include('user.php');
$objUser=new User;

?>


<?php
if(!isset($_SESSION['username'])){
header("location:login.php");


}
?>




            

    <?php

    $p=0;
if(!empty($_SESSION['cart'])){

    $total=0;
    $counter=1;
    foreach($_SESSION['cart'] as $key=>$value){
        /* $product_id=$value[0];
        $product_name=$value[2];
        $quantity=$value[3];
        $price=$value[4];
        $total_price=$quantity*$price; */

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

                $customer_id=$_SESSION['username'];
                     
                $order_status="Pending";
                $order_id=$objUser->insert_order($final_price,$deliveryfee,$customer_id,$order_status);
               //echo $order_id;

                 header("location:delivery.php?id=$order_id");
                //to see what total was returning will be removed later
                //var_dump($total);?>

               
        
               
                 <span class="subtotal">Subtotal</span>
                    <span class="subtotal-price"><b><span>&#8358;</span><?php echo number_format($total,2);  $p++;}?></b></span>
            
                    <p><span class="left">Delivery fee</span>  <b><span class="right"><span>&#8358;</span><?php echo number_format($deliveryfee,2);?></b></span></p>

                    <hr>

                    <p><span>Final Total</span> <b><span class="right"><span>&#8358;</span><?php echo number_format($final_price,2);?></b></span></p>
                    

               


           
           
           
           
           </form>


        </div>

    </div>

    </div>

</div>



































    

 

 
