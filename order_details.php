<?php session_start();
if(empty($_SESSION['admin'])){

header('location:admin_login.php');
}

?>

<?php include("header.php") ?>

<title>Order details</title>

<?php include("nav_admin.php") ?>


  <!-------bread crumb-->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item text-success"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item "><a href="admin_page.php">Admin dashboard</a></li>
       <li class="breadcrumb-item "><a href="all_orders.php">All customer orders</a></li>
      <li class="breadcrumb-item active" aria-current="page">Order Details</li>
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
<h5>Orders Details</h5>


<?php

    $id=$_GET['id'];
      $deets=$adm->get_order_details($id);

      /*  echo "<pre>";
      print_r($deets);
      echo "</pre>";
 */
       

  ?>
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
    <tr>
    <th>S/N</th>
    <th>Product name</th>
      <th>Quantity</th>
        <th>Order_id</th>
          <th>Unit Product Price</th>
           <th>Total price</th>
            <th>Action</th>
              
    </tr>

    </thead>

    <tbody>

    <?php

    $counter=1;
   
        //$link=$customer_id;
        //retrieve gifts for each guest
     foreach($deets as $deets){
     $product_id=$deets['product_id'];

    ?>
    <tr>
    <td><?php echo $counter++?></td>
    <td><a href="product_main.php?id=<?php echo $product_id; ?>"><?php echo $deets['product_name'];?></a></td>
     <td><?php echo $deets['quantity'];?></td>
    <td><?php echo $deets['order_id'];?></td>
     <td><span>	&#8358;</span><?php echo number_format($deets['price'],2);?></td>
     <td><span>	&#8358;</span><?php echo number_format($deets['total_price'],2);?></td>
    
    <td><a href="confirm_order.php?id=<?php echo $order_id;?>" class="btn btn-sm btn-success" onclick='return confirm("Are you sure you want to delete this customer?")'>Update status</a> 
    
  
    
    </tr>


    <?php
     ;}
    ?>
    </tbody>
    </table>
        


      

      </div>

    </div>

  </div>




  <!--------vertical menu codes start here -->





  
















  <?php include("footer.php") ?>