
<?php session_start();?>

<?php include("header.php") ?>
<title>Admin Login page</title>
<?php include("nav.php") ?>



<!-------bread crumb-->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item text-success"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Admin login page</li>
    </ol>
</nav>

<!------end of bread crumb-->




<!--------login form code starts here -->
<section class="pt-1 mb-1 mt-2 pb-3">
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <form method="POST" action="admin_submit-form.php" class="login-form py-3 px-3 mx-3 my-3 animate__animated animate__bounceInUp">
                    <h4><b>Admin Login</b></h4>



                    <?php
             if(isset($_GET['response'])){
                        $response=$_GET['response'];
                     echo"<div class='alert alert-danger'>".$response."</div>";
                

              
             }

?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        <a href="forgotpassword.php" class="">Forgot password?</a>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">show password</label>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block"><b>LOGIN</b></button>
                </form>

            </div>


        </div>
    </div>

</section>





<?php include("footer.php") ?>