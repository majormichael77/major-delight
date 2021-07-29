<?php include("header.php") ?>

<title>Admin Account</title>

<?php include("nav.php") ?>


  <!-------bread crumb-->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item text-success"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item "><a href="my-account.html">Admin</a></li>


      <li class="breadcrumb-item active" aria-current="page">Product Upload</li>
    </ol>
  </nav>

  <!------end of bread crumb-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        <div class="vertical-menu sticky ">
          <a href="admin_page.php" ><i class="fas fa-tachometer-alt "></i><span>Admin Dashboard</span></a>
          <a href="all_orders.php"><i class="fas fa-shopping-bag "></i><span>All Orders</span></a>
          <a href="subscription.php"><i class="fas fa-receipt"></i><span>Receipt /subscription</span></a>
          <a href="Payments_records.php"><i class="fas fa-money-check-alt"></i><span>Payment Records</span></a>
          <a href="delivery_records.php"><i class="fas fa-location-arrow"></i><span>Delivery Records</span></a>
          <a href="products.php" class="active"><i class="fas fa-user-circle"></i><span>Products</span></a>
          <a href="customer_record.php"><i class="fas fa-user-circle"></i><span>All customer records</span></a>
        </div>

      </div>

      <div class="col-md-10">

      

        

      </div>

    </div>

  </div>




  <!--------vertical menu codes start here -->






















  <?php include("footer.php") ?>