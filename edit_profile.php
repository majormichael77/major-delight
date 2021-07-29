<?php session_start();
$_SESSION['username'];


//this checks if the user already has a sesssion if it is not set it redirects to the form 
if(!isset($_SESSION['username'])){
    header("location:login.php");
}

?>
<?php include("header.php") ?>
<title>Edit Profile</title>
<?php include("nav.php") ?>

<?php  


$objUser=new User;
?>


<?php
           $data= $objUser->get_user($_SESSION['username']);
           /*  echo"<pre>";
            print_r($data);
            echo"</pre>";  */
            ?>
  


<div class='container'>
    <div class="row">
        <div class="col-md-10 offset-md-1">

        <form method="POST" action="profile_submit.php" class="create-account mt-2 px-3 py-3">
            
          <h5 class="text-center text-orange"><b>Edit your details</b></h5>








              <!----this is to echo the message of insertion to db  from user.php that was retrieved from--->
              <?php
             if(isset($_GET['response'])){
                 $response=$_GET['response'];

                if(strpos($response,'successfully')){

                  echo"<div class='alert alert-success'>".$response."</div>";
                }
                else{
                     echo"<div class='alert alert-danger'>".$response."</div>";
                }

              
             }

?>
        

      


          <div class="form-row">

            <div class="form-group col-md-6">
                <input type="hidden" name="customer_id" value="<?php echo $data['customer_id']?>">
              <label for="firstname">First name <b class="red"></b></label>
              <input type="text" name="firstname" class="form-control" id="inputEmail4" value="<?php echo $data['first_name']?>">
            </div>

            <div class="form-group col-md-6">
              <label for="inputPassword4">Last name <b class="red"></b></label>
              <input type="text" name="lastname" class="form-control" id="inputPassword4" value="<?php echo $data['last_name']?>">
            </div>
          </div>


          <div class="form-group">
            <label for="inputAddress">Address <b class="red"></b></label>
            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St" value="<?php echo $data['user_address']?>">
          </div>

         


          <div class="form-row">

            <div class="form-group col-md-6">
              <label for="email">Email address<b class="red"></b></label>
              <input type="email" name="email" class="form-control" id="inputEmail4" disabled   value="<?php echo $data['user_email']?>">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>


            <div class="form-group col-md-6">
              <label for="phonenumber">Phone number<b class="red"></b></label>
              <input type="tel" name="phonenumber" class="form-control" id="inputEmail4" value="<?php echo $data['phonenumber']?>">
            </div>


          </div>


          <div class="form-group">
            <div class="">
               <button type="submit" name="submit" class="orange btn-block btn text-white"><b>Update</b></button>

            </div>
          </div>
         



          


        </form>



        </div>

    </div>

</div>









<?php include('footer.php')?>