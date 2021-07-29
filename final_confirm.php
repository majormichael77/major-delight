<?php session_start()?>
<?php





if(empty($_SESSION['cart'])){

    $error="Your cannot check out with an empty cart!";
    header("location:mycart.php?error=$error");

}




if(!isset($_SESSION['username']) &&!empty($_SESSION['cart'])){

    header("location:login.php");

}


?>
<?php include('header.php')?>



<title>Check out Page</title>
<?php include('nav.php')?>

<?php 

$objUser=new User;

 $data= $objUser->get_user($_SESSION['username']);

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
            <h3 class="text-success">Thank You <?php echo $data['first_name'];?> for confirming your order</h3>
            <p>Your Order will be confirmed by the admin and delivered within 24 hrs.</p>
            </div>
            </div>
            <marquee><h6>Thank you for shopping with Major Delights, we hope to serve you beter</h6></marquee>


        </div>

    </div>


<?php


unset($_SESSION['cart']);
?>

</div>



<?php include('footer.php')?>


