<?php session_start();
$_SESSION['username'];


//this checks if the user already has a sesssion if it is not set it redirects to the form 
if(!isset($_SESSION['username'])){
    header("location:login.php");
}

?>
<?php include("header.php") ?>
<title>My account</title>
<?php include("nav.php") ?>

<?php  


$objUser=new User;
?>


<?php
           $data= $objUser->get_user($_SESSION['username']);
            /* echo"<pre>";
            print_r($data);
            echo"</pre>";  */
            ?>
  






<!-------bread crumb-->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item text-success"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item text-success"><a href="my-account.php">My account</a></li>
     <li class="breadcrumb-item text-success"><a href="my-order.php">My Orders</a></li>
    <li class="breadcrumb-item active" aria-current="page">Orders details</li>
  </ol>
</nav>

<!------end of bread crumb-->






<div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
      <div class="vertical-menu ">
        <a href="my-account.php" class="active"><i class="fas fa-tachometer-alt "></i><span>Dashboard</span></a>
        <a href="my-order.php"><i class="fas fa-shopping-bag "></i><span>My Orders</span></a>
        <a href=""><i class="fas fa-receipt"></i><span>Receipt /subscription</span></a>
        <a href="#"><i class="fas fa-money-check-alt"></i><span>Payment Method</span></a>
        <a href="#"><i class="fas fa-location-arrow"></i><span>Address</span></a>
        <a href="profile.php"><i class="fas fa-user-circle"></i><span>Account Details</span></a>
         <a href="user_logout.php"><i class="fas fa-sign-out-alt"></i><span>Log Out</span></a>
      </div>

    </div>

    <div class="col-md-9">
        <h5>All my orders</h5>


<?php

     $id=$_GET['id'];
    
      $order_deets=$objUser->my_order_details($id);

    $product_id=$order_deets['product_id'];
      $data=$objUser->get_product_image($product_id);

     /*  echo "<pre>";
      print_r($orders);
      echo "</pre>";

       */

  ?>

  <table class="table table-striped table-bordered">
    <thead class="thead-dark">
    <tr>
    <th>S/N</th>
    <th>Product name</th>
    <th>Picture</th>
      <th>Quantity</th>
        <th>Order_id</th>
          <th>Unit Product Price</th>
           <th>Total price</th>
           
              
    </tr>

    </thead>

    <tbody>

    <?php

    $counter=1;
   
        //$link=$customer_id;
     
     foreach($order_deets as $deets){
     $product_id=$deets['product_id'];
     $data=$objUser->get_product_image($product_id);
     
     

    ?>
    <tr>
    <td><?php echo $counter++?></td>
    <td><?php echo $deets['product_name'];?></a></td>
    <td><?php echo "<img src='images/".$data['product_image']."'width=50px'>";?></td>
    
     <td><?php echo $deets['quantity'];?></td>
    <td><?php echo $deets['order_id'];?></td>
     <td><span>	&#8358;</span><?php echo number_format($deets['price'],2);?></td>
     <td><span>	&#8358;</span><?php echo number_format($deets['total_price'],2);?></td>
    
    
  
    
    </tr>


    <?php
     ;}
    ?>
    </tbody>
    </table>
        




        

      
    </div>

  </div>

</div>







<!----Java script files and they must follow this sequence because it runs starting with the first--->
<script type="text/javascript" src="bootstrap/js/jquery-3.6.0.js"></script>
<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>



</html>