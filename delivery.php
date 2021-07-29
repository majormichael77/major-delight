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

<?php 

$objUser=new User;

 $data= $objUser->get_user($_SESSION['username']);
?>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">

         <?php
             if(isset($_GET['msg'])){
                 $response=$_GET['msg'];

               

                  echo"<div class='alert alert-danger'>".$response."</div>";
                }
                

?>




        </div>


        <div  style="border:1px solid grey"  class="col-md-6 offset-md-3">

       

            <form method="POST" action="delivery_submit.php">

            <p><b>DELIVERY ADDRESS DETAILS</b></p>
            <hr>
                <div class="form-row">


                 <input type="hidden" class="form-control" value="<?php echo $_GET['id'];?>" id="order_id" name="order_id">
                    <div class="form-group col-md-6">
                        <label for="firstname">First Name *</label>
                        <input type="text" class="form-control" value="<?php echo $data['first_name'];?>" id="firstname" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">Last Name *</label>
                        <input type="text" class="form-control" value="<?php echo $data['last_name'];?>" id="lastname" disabled>
                    </div>
                </div>



                <div class="form-group">
                    <label for="phonenumber">Alternative Phone Number</label>
                    <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Alternative phone number" required>
                </div>


                <div class="form-group">
                    <label for="address">Delivery Address *</label>
                    <input type="text" class="form-control" id="address" name="address" required  value="<?php echo $data['user_address'];?>" >
                </div>

                
                <div class="form-group ">
                    
                    <label for="state">State/Region</label>
                    
                     <?php
                   $objUser->get_State();
                   ?>
                </div>





             


                <div>
                <div class="form-group">
                    <div class="form-group">

                 <button type="submit" class="marigold btn btn-block" name="btn">SAVE AND PROCEED</button> 
                        
                    </div>
                </div>
               </div>
            </form>


        </div>

    </div>

</div>












<?php include('footer.php')?>