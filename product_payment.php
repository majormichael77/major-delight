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
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		// include the payment class
		include("payment.php");

		// create object of payment class
		$obj = new Payment;

		// make reference to initializepaystack method
		$output = $obj->initializePaystack($_POST['emailaddress'],$userid, $_POST['amount']);

		// echo "<pre>";
		// print_r($output);
		// echo "</pre>";

		if ($output->data->reference) {
			// insert into annualdue
			
			$trans_status = "Pending";
			$transid = $output->data->reference;
			$amount = $_POST['amount']*100;
			$year = $_POST['year'];
			$userid =$_SESSION['username']; // get user id from session

			$obj->order($userid,$amount,$transid, $trans_status);
		}

		$authorization_url = $output->data->authorization_url;
		// redirect to paystack payment engine page
		header("Location: $authorization_url");
	}

	?>
	
	
       <?php

    $p=0;
if(!empty($_SESSION['cart'])){

   
 $final_price=0;
    foreach($_SESSION['cart'] as $key=>$value){
        $product_id=$value[0];
        $product_name=$value[2];
        $quantity=$value[3];
        $price=$value[4];
        $total_price=$quantity*$price;
        //$order_id=$_POST['order_id'];
      $final_price=$final_price+$total_price;
     
    }
     return $final_price;
     $amount=$final_price+1000;
}



$objUser=new User;

 $data= $objUser->get_user($_SESSION['username']);
  
    ?>
	?>

<form method="post" action="">

		<input type="hidden" name="amount" value="<?php echo $amount;?>">
		<input type="email" name="emailaddress" value="<?php echo $data['user_address'];?>">
		
			
		
		<input type="submit" name="submit" value="Make payments">
	</form>


<h1>TEST</h1>
	
</body>
</html>
  

