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
    <li class="breadcrumb-item active" aria-current="page">My Orders</li>
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

     $id=$_SESSION['username'];
      $myorders=$objUser->fetch_myorders($id);

     /*  echo "<pre>";
      print_r($orders);
      echo "</pre>";

       */

  ?>



      <table class="table table-striped table-bordered">
    <thead class="thead-dark">
    <tr>
        <th>S/N</th>
    <th>Firstname</th>
      <th>Lastname</th>
        <th>Order id</th>
          <th>Total amount</th>
           <th>Delivery address provided</th>
            
            <th>Order status</th>
             <th>Date of Order</th>
            <th>Action</th>
    
    </tr>

    </thead>

    <tbody>

    <?php

    $counter=1;
    foreach($myorders as $c){
        $order_id=$c['order_id'];
        //$link=$customer_id;
        //retrieve gifts for each guest
     
     

    ?>
    <tr>
    <td><?php echo $counter++?></td>
    <td><a href="my-order_details.php?id=<?php echo $order_id; ?>"><?php echo $c['first_name'];?></a></td>
     <td><a href="my-order_details.php?id=<?php echo $order_id; ?>"><?php echo $c['last_name'];?></a></td>
    <td><?php echo $c['order_id'];?></td>
     <td><span>	&#8358;</span><?php echo number_format($c['total_amount'],2);?></td>
      <td><?php echo $c['delivery_address']?></td>

       <td><?php echo $c['order_status']?></td>
    <td><?php echo date('F j, Y , g:i a',strtotime($c['order_date']))?></td>
   
    <td><a href="track_order.php?id=<?php echo $order_id;?>" class="btn btn-sm btn-warning" onclick='return confirm("Are you sure you want track this order?")'>Track Order</a> 
    
  
    
    </tr>


    <?php
    
    }?>
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