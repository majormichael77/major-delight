<?php session_start();
if(empty($_SESSION['admin'])){

header('location:admin_login.php');
}

?>

<?php include("header.php") ?>

<title>Admin Account</title>

<?php include("nav_admin.php") ?>


  <!-------bread crumb-->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item text-success"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item "><a href="admin_page.php">Admin dashboard</a></li>


      <li class="breadcrumb-item active" aria-current="page">All Orders</li>
    </ol>
  </nav>

  <!------end of bread crumb-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        <div class="vertical-menu sticky ">
          <a href="admin_page.php" class="active"><i class="fas fa-tachometer-alt "></i><span>Admin Dashboard</span></a>
          <a href="all_orders.php"><i class="fas fa-shopping-bag "></i><span>All Orders</span></a>
          <a href="subscription.php"><i class="fas fa-receipt"></i><span>Receipt /subscription</span></a>
          <a href="Payments_records.php"><i class="fas fa-money-check-alt"></i><span>Payment Records</span></a>
          <a href="delivery_records.php"><i class="fas fa-location-arrow"></i><span>Delivery Records</span></a>
          <a href="products.php"><i class="fas fa-user-circle"></i><span>Products</span></a>
          <a href="customer_record.php"><i class="fas fa-user-circle"></i><span>All customer records</span></a>
        </div>

      </div>

      <div class="col-md-9">
<h5>All Customer orders</h5>


<?php
      $orders=$adm->fetch_orders();

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
        <th>Order  id</th>
          <th>Total amount</th>
           <th>Delivery address</th>
              <th>Contact</th>
            <th>Order status</th>
             <th>Date of Order</th>
            <th>Action</th>
              
    </tr>

    </thead>

    <tbody>

    <?php

    $counter=1;
    foreach($orders as $c){
        $order_id=$c['order_id'];
        //$link=$customer_id;
        //retrieve gifts for each guest
     
     

    ?>
    <tr>
    <td><?php echo $counter++?></td>
    <td><a href="order_details.php?id=<?php echo $order_id; ?>"><?php echo $c['first_name'];?></a></td>
     <td><a href="order_details.php?id=<?php echo $order_id; ?>"><?php echo $c['last_name'];?></a></td>
    <td><?php echo $c['order_id'];?></td>
     <td><span>	&#8358;</span><?php echo number_format($c['total_amount'],2);?></td>
      <td><?php echo $c['delivery_address']?></td>
         <td><?php echo $c['alternative_phone']?></td>
       <td><?php echo $c['order_status']?></td>
    <td><?php echo date('F j, Y , g:i a',strtotime($c['order_date']))?></td>
   
    <td><a href="confirm_order.php?id=<?php echo $order_id;?>" class="btn btn-sm btn-success" onclick='return confirm("Are you sure you want confirm this order?")'>Confirm Order</a> 
    
  
    
    </tr>


    <?php
    
    }?>
    </tbody>
    </table>
        

      </div>

    </div>

  </div>




  <!--------vertical menu codes start here -->





  
















  <?php include("footer.php") ?>