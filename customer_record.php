<?php session_start();
if(empty($_SESSION['admin'])){

header('location:admin_login.php');
}

?>

<?php include("header.php") ?>

<title>Admin Account</title>

<?php include("nav_admin.php") ?>


<?php
//instantiation of object is already don in the header so no need since the header is included in this page
$adm=new Admin;
$customer=$adm->fetch_users();
?>

  <!-------bread crumb-->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
     <li class="breadcrumb-item text-success"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item "><a href="admin_page.php">Admin</a></li>


      <li class="breadcrumb-item active" aria-current="page">All customer Records</li>
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

      <table class="table table-striped table-bordered">
    <thead class="thead-dark">
    <tr>
    <th>S/N</th>
    <th>Firstname</th>
      <th>Lastname</th>
        <th>Customer's Address</th>
          <th>Customer's email</th>
           <th>Phone Number</th>
            <th>Customer's pix</th>
             <th>Date of sign up</th>
            <th>Action</th>
              
    </tr>

    </thead>

    <tbody>

    <?php

    $counter=1;
    foreach($customer as $c){
        $customer_id=$c['customer_id'];
        //$link=$customer_id;
        //retrieve gifts for each guest
     
     

    ?>
    <tr>
    <td><?php echo $counter++?></td>
    <td><a href="customer_details.php?id=<?php echo $customer_id; ?>"><?php echo $c['first_name'];?></a></td>
     <td><a href="customer_details.php?id=<?php echo $customer_id; ?>"><?php echo $c['last_name'];?></a></td>
    <td><?php echo $c['user_address'];?></td>
     <td><?php echo $c['user_email'];?></td>
      <td><?php echo $c['phonenumber']?></td>
       <td><?php echo $c['customer_pix']?></td>
    <td><?php echo date('F j, Y , g:i a',strtotime($c['user_reg_date']))?></td>
   
    <td><a href="delete.php?id=<?php echo $customer_id;?>" class="btn btn-sm btn-danger" onclick='return confirm("Are you sure you want to delete this customer?")'>Delete</a> 
    
  
    
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