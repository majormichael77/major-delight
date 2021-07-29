<?php session_start();
if(empty($_SESSION['admin'])){
    header("Location:admin_login.php");
}
?>


<?php include("header.php") ?>

<title>Admin Account</title>


<?php include("nav_admin.php") ?>


  <!-------bread crumb-->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item text-success"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
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
          <a href="admin_logout.php"><i class="fas fa-sign-out-alt"></i><span>Log Out</span></a>
        </div>

      </div>

      <div class="col-md-10 ">
        <div class="row">
          <div class="col-md-3">

          <div class="dashboard-box-green dashboard-text">


         
          <h5 class='text-center pt-5 mb-0'><b>Registered Users</b></h5>

           <?php
           //calling the function get_total users to get total for admin view
          $total_users=$adm->get_total_users();
          echo  "<h2 class='text-center pt-4'><b> $total_users[0]</b></h2>";
        
      
          ?>

    

          </div>
          
          </div>



          <div class="col-md-3">

           <div class="dashboard-box-orange ">

           <h5 class='text-center pt-5 mb-0'><b>Total Products</b></h5>

           <?php
           //calling the function get_total products to get total for admin view
          $total_products=$adm->get_total_products();
          echo  "<h2 class='text-center pt-4'><b> $total_products[0]</b></h2>";
        
      
          ?>

          


          </div>
          
          </div>



          <div class="col-md-3">
            <div class="dashboard-box-vermillion  dashboard-text">


            <h5 class='text-center pt-5 mb-0'><b>Total Categories</b></h5>

           <?php
           //calling the function get_total products to get total for admin view
          $total_category=$adm->get_total_category();
          echo  "<h2 class='text-center pt-4'><b> $total_category[0]</b></h2>";
        
      
          ?>
          


          </div>
          </div>



          <div class="col-md-3">
            <div class="dashboard-box-marigold">
                <h5 class='text-center pt-5 mb-0'><b>Active Products</b></h5>

           <?php
           //calling the function get_total products to get total for admin view
          $total_active=$adm->get_total_active();
          echo  "<h2 class='text-center pt-4'><b> $total_active[0]</b></h2>";
        
      
          ?>



            </div>
          
          </div>

        </div>

      </div>

    </div>

  </div>




  















  <?php include("footer.php") ?>