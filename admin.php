<?php
include('constants.php');
error_reporting(0);
class Admin{


    public $dbcon;
    public function __construct(){

        $this->dbcon = new mysqli(DB_SERVERNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASENAME);

      //check connection  using the new object to access a property that stores error(connect_error) 
      $this->dbcon->connect_error;

      //a conditional statement to check for a successful connection if false it will print the message you want and the error in connect _error and then exit the script
      //die is an in-built function 
      if($this->dbcon->connect_error){
          die("connection failed".$this->dbcon->connect_error);

      }
      else{
          //echo"Successful connection";
      }

        
    }
    


    
     function Admin_login($id,$password){

         $sql="SELECT * FROM admin WHERE admin_id='$id' AND admin_password='$password' ";
         $result=$this->dbcon->query($sql);
         if($result->num_rows>0){
             return true;
         }
         else{
             return false;

     }

     }








     
 public function Admin_logout(){
     if(isset($_SESSION['admin'])){
         unset($_SESSION['admin']);
     }
         session_destroy();
         header('location:admin_login.php');

     
    }




         public function createCategory($category_name){
    //write the sql query to insert the name of the variable can be anything 
    $sql="INSERT INTO category(category_name) VALUES('$category_name')";

    //run the query ,we use query a msqli php function
    if($result= $this->dbcon->query($sql)){
        //then you decide to concatenate the mysqli property to get the id of the query written to the data base like below using insert_id
        $msg="Category was sucessfully created ".$this->dbcon->insert_id;


    }
    else{
        //this is used for the error handing while trying to insert 

        $msg="oops ,category creation failed !".$this->dbcon->error;
    }
    return $msg;


}


//function for category dropdown for the admin
public function get_Category($selected=''){
    $sql="SELECT * FROM category";
    $result=$this->dbcon->query($sql);
    
    echo "<select name='category' class='custom-select '>";


while($data=$result->fetch_assoc()){



    $category=$data['category_name'];
    $category_id=$data['category_id'];
    
    if($selected ==$category_id){
        echo "<option class='bg-success' value='$category_id' selected>$category</option>";

    }

    echo "<option class='bg-success' value='$category_id'>$category</option>";

   
}

echo "</select>";

}





//function for category link via url
public function category_link(){
    $sql="SELECT *  FROM category";
    $result=$this->dbcon->query($sql);

    $data=array();
    while($row=$result->fetch_assoc()){

        $data[]=$row;

    }
    return $data;

        $category=$data['category_name'];
        $category_id=$data['category_id'];
         
 
//  echo "<a href='product_category.php?id=<?php echo $category_id; ' class='list-group-item list-group-item-action'>$category</a>";
      
}









//function for getting the name of each category from the url using id 
//it is for the breadcrumb for category names from the db
public function Category_name_crumb($id){
    $sql="SELECT * FROM category WHERE category_id='$id'";
    //echo $sql;
    $result=$this->dbcon->query($sql);
    
   
$data=array();
while($row=$result->fetch_assoc()){
    $data[]=$row;



    $category=$data['category_name'];
    $category_id=$data['category_id'];
    

}
return $data;
}









//delete category function
Public function delete_category($category_id){
    $sql="DELETE FROM category WHERE category_id='$category_id'" ;
    if($result=$this->dbcon->query($sql)){
        $message="Selected category was successfully deleted";
        return $message;
    }
    else{
        $message="Deleting of category failed";
    }
    


}





public function get_filename($product_pix){//$_FILES['pix'] retrieved by action page the file (name attribute was named pix)
    
       $pics_array=$product_pix;
        $filename=$pics_array['name'];
        $tmplocation=$pics_array['tmp_name'];
        $type=$pics_array['type'];
        $size=$pics_array['size'];

        $ext=pathinfo($filename,PATHINFO_EXTENSION);
        $newfilename=time().".$ext";

        if($ext=="jpg" || $ext=='jpeg'|| $ext=='png'|| $ext=='jfif'){
            move_uploaded_file($tmplocation,"images/$newfilename");
            
        }else{
            header('location:upload_product.php?msg=upload failed');
        }
    return $newfilename;
    echo $pics_array['name'];
    
}




public function Upload_product($productname,$product_price,$category,$product_status,$product_desc,$brandname,$quantity,$picture){
   


$sql="INSERT INTO product(product_name,product_price,product_image,brand_name,unit_stock,product_description,product_category,product_status) VALUES('$productname','$product_price','$picture','$brandname','$quantity','$product_desc', '$category','$product_status') ";
//echo $sql;

//echo $sql;

if($result= $this->dbcon->query($sql)){

    $product_id=$this->dbcon->insert_id;
    return $product_id;
        //then you decide to concatenate the mysqli property to get the id of the query written to the data base like below using insert_id
        $msg="Product was sucessfully uploaded ".$this->dbcon->insert_id;
       return $msg;

    }
    else{
        //this is used for the error handing while trying to insert 

       return  $msg="oops ,Product upload failed !".$this->dbcon->error;
    }



}

public function fetch_products(){
    $mysql="SELECT * FROM product JOIN category ON product_category=category_id WHERE product_status='active'";
    $output=$this->dbcon->query($mysql);

    $data=array();
    while($row=$output->fetch_assoc()){
        $data[]=$row;

    }
    return $data;


}

public function delete_product($product_id){
//this function is too hide product as regards to visiiblity
     $q="UPDATE product SET product_status='inactive' WHERE product_id='$product_id'";
   // $q="DELETE FROM product WHERE product_id='$product_id'";
    echo $q;
    $result=$this->dbcon->query($q);

}

public function update_product($product_id,$productname,$product_price,$category,$product_status,$product_desc,$brandname,$quantity){

echo $product_id;

    $sql="UPDATE product SET product_name='$productname',product_price='$product_price',product_category='$category',brand_name='$brandname',unit_stock='$quantity',product_description='$product_desc',product_status='$product_status' WHERE   product_id='$product_id'";
    echo $sql;

    
         //echo $sql;
       if($output=$this->dbcon->query($sql)){
        $message="product was successfully updated";
        return $message;

       }
       else{
           $message="updating of product failed!";
       }



}






function get_product($id){
    

    $sql="SELECT * FROM product WHERE product_id='$id'";
    $result=$this->dbcon->query($sql);
    $row=$result->fetch_assoc();
    return $row;

 }

 function get_product_details($id){
      $sql="SELECT * FROM product WHERE product_id='$id'";
    $result=$this->dbcon->query($sql);
    $row=$result->fetch_assoc();
    return $row;

 }


 public function display_products(){
     $sql="SELECT * FROM product  JOIN category ON product_category=category_id WHERE product_status='active'";
     $result=$this->dbcon->query($sql);
     $data=array();
    while($row=$result->fetch_assoc()){
        $data[]=$row;

    }
    return $data;


 }


 public function display_category_products($id){
     $sql="SELECT * FROM product  JOIN category ON product_category=category_id WHERE product_status='active' AND category_id='$id'";
     $result=$this->dbcon->query($sql);
     $data=array();
    while($row=$result->fetch_assoc()){
        $data[]=$row;

    }
    return $data;


 }


 //function to dipslay all registered users on admin's end
public function fetch_users(){
    $mysql="SELECT * FROM user ";
   // echo $mysql;
    $output=$this->dbcon->query($mysql);

    $data=array();
    while($row=$output->fetch_assoc()){
        $data[]=$row;

    }
    return $data;


}

//function to get sum of total users on the major  grocery
public function get_total_users(){
    $sql="SELECT COUNT(customer_id) FROM user ";
    //echo $sql;

    $result=$this->dbcon->query($sql);
    $output=$result->fetch_array();
    return $output;
   /*   echo"<pre>";
    print_r($output);
    echo "</pre>";
  */
     

}


//total products count
public function get_total_products(){
    $sql="SELECT COUNT(product_id) FROM product ";
    //echo $sql;

    $result=$this->dbcon->query($sql);
    $output=$result->fetch_array();
    return $output;
   /*   echo"<pre>";
    print_r($output);
    echo "</pre>";
  */
     

}




//total category count function

public function get_total_category(){
    $sql="SELECT COUNT(category_id) FROM category ";
    //echo $sql;

    $result=$this->dbcon->query($sql);
    $output=$result->fetch_array();
    return $output;
   /*   echo"<pre>";
    print_r($output);
    echo "</pre>";
  */
     

}



public function get_total_active(){
    $sql="SELECT COUNT(product_id) FROM product WHERE product_status='active' ";
    //echo $sql;

    $result=$this->dbcon->query($sql);
    $output=$result->fetch_array();
    return $output;
   /*   echo"<pre>";
    print_r($output);
    echo "</pre>";
  */
     

}

public function fetch_orders(){
    $mysql="SELECT user.first_name,user.last_name ,orders.order_id, orders.total_amount,orders.delivery_address,orders.alternative_phone,orders.order_status,orders.order_date FROM orders INNER JOIN user ON orders.customer_id=user.customer_id";
   // echo $mysql;
    $output=$this->dbcon->query($mysql);

    $data=array();
    while($row=$output->fetch_assoc()){
        $data[]=$row;

    }
    return $data;


}


function get_order_details($id){
      $sql="SELECT * FROM order_details WHERE order_id='$id'";
    $result=$this->dbcon->query($sql);
  $data=array();
    while($row=$result->fetch_assoc()){
        $data[]=$row;

    }
    return $data;

 }












     


     



    
}
$adm=new Admin;
?>