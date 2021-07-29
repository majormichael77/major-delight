<?php
//var_dump($_REQUEST);
// include the payment class
include("payment.php");

// create object of payment class
$obj = new Payment;

// make refrence to verify paystack
$output = $obj->verifyPaystack($_REQUEST['trxref'],$_SESSION['userid']);

echo "<pre>";
print_r($output);
echo "</pre>";

if ($output->data->status == 'success') {
	// update annualdue table
	$trans_status = "Completed";

	$obj->update_order($output->data->reference,$trans_status);

	header('success.php');

}else{
	// redirect user to failed page
	die("Failed");
}

?>