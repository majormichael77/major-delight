<?php include("header.php") ?>


<title>Create your major delight account</title>

<?php include("nav.php") ?>



<!------end of bread crumb-->


<!------create account code  pt mb pb mt (bootstarp class to align adding paddng and margin--->
<section class="pt-1 mb-3 pb-3 mt-2">

    <div class="container">
        <div class="row">

            <div class="offset-md-2 col-md-8">
                <form method="POST" action="register-action.php" class="create-account mt-2 px-3 py-3"
                    onsubmit="validate(event);">
                    <h5 class="text-center text-orange"><b>Create your Major delight account</b></h5>

                    <!----this is to echo the message of insertion to db  from user.php that was retrieved from--->
                    <?php
             if(isset($_GET['result'])){
                $success=$_GET['result'];
                if(strpos($success,"created")){

                    echo"<div class='alert alert-success'>".$_GET['result']."</div>";

                }
                else{
                    echo"<div class='alert alert-danger'>".$_GET['result']."</div>";
                }

              
             }
            ?>




                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="firstname">First name <b class="red">*</b></label>
                            <input type="text" name="firstname" class="form-control" id="firstname">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="lastname">Last name <b class="red">*</b></label>
                            <input type="text" name="lastname" class="form-control" id="lastname">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputAddress">Address <b class="red">*</b></label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Password<b class="red">*</b></label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Confirm password <b class="red">*</b></label>

                            <input type="password" name="password2" class="form-control" id="password2">
                        </div>

                    </div>


                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="email">Email address<b class="red">*</b></label>
                            <input type="email" name="email" required class="form-control" id="email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="phonenumber">Phone number<b class="red">*</b></label>
                            <input type="tel" name="phonenumber" class="form-control" id="phonenumber">
                        </div>


                    </div>


                    <!-- <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="check" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                I agree to terms and conditions
                            </label>
                        </div>
                    </div> -->
                    <button type="submit" class="orange btn-block btn text-white" id="btn"><b>CREATE
                            ACCOUNT</b></button>



                    <p class="text-center pt-4 mb-1">Already have an account?</p>
                    <a href="login.php" class="login-link">LOGIN</a>



                </form>

            </div>


            <div class="col-md-2">




            </div>








        </div>
    </div>

</section>












<?php include('footer.php') ?>