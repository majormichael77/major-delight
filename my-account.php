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
    <li class="breadcrumb-item text-success"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">My account</li>
  </ol>
</nav>

<!------end of bread crumb-->






<div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
      <div class="vertical-menu ">
        <a href="#" class="active"><i class="fas fa-tachometer-alt "></i><span>Dashboard</span></a>
        <a href="my-order.php"><i class="fas fa-shopping-bag "></i><span>My Orders</span></a>
        <a href=""><i class="fas fa-receipt"></i><span>Receipt /subscription</span></a>
        <a href="#"><i class="fas fa-money-check-alt"></i><span>Payment Method</span></a>
        <a href="#"><i class="fas fa-location-arrow"></i><span>Address</span></a>
        <a href="profile.php"><i class="fas fa-user-circle"></i><span>Account Details</span></a>
         <a href="user_logout.php"><i class="fas fa-sign-out-alt"></i><span>Log Out</span></a>
      </div>

    </div>

    <div class="col-md-8">
      <div class="row">
        <div class="col-md-12">
          <h3>Dashboard</h3>

      <p>Hello ,<b><?php echo $data['first_name']?></b> Welcome to <i>Major Delights!</i></p>

      <p> From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.
      </p>



        </div>


        


          </div>
          
          </div>



        





      </div>
      

      

    </div>

  </div>

</div>







<!----Java script files and they must follow this sequence because it runs starting with the first--->
<script type="text/javascript" src="bootstrap/js/jquery-3.6.0.js"></script>
<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>



</html>