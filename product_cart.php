<?php 
ob_start();
session_start();
$_SESSION['cart'];?>



<?php include('header.php')?>






<?php //to add an item to cart
	if(isset($_POST['add_to_cart'])){
		$product_id=$_GET['id'];
        $product_image=$_POST['product_image'];
        $product_name=$_POST['product_name'];
        $quantity=$_POST['quantity'];
        $product_price=$_POST['product_price'];
     
		$product_array=[$product_id, $product_image,  $product_name,$quantity,  $product_price];
		if (isset($_SESSION['cart'])){
			array_push($_SESSION['cart'], $product_array);
		} else{
		$_SESSION['cart']=array();
		array_push($_SESSION['cart'], $product_array);}

        echo"<pre>";
print_r($_SESSION['cart']);
echo "</pre>";
 echo "y";

    $id=$_POST['product_id'];
		header ('location:product_main.php?id='.$id.'&msg=1');

	}
//to remove an item from a cart
	if(isset($_GET['cartitem'])) {
		$product_id =$_GET['cartitem'];
		array_splice($_SESSION['cart'], $product_id,1);
		header('location:mycart.php');
	}
	?>






























<?php include('footer.php')?>
<?php ob_end_flush();?>