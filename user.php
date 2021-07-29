<?php
//include the contstant page into this file
require("constants.php");
error_reporting(E_ALL & ~E_NOTICE);
 class User{
     public $customer_id;
     public $firstname;
     public $lastname;
     public $address;
     public $email;
     public $password;

     public $dbcon; //dtatbase connection handler variable;


     //member methods starts here
     //this runs without being called,it initializes the database connection
     public function __construct(){
         //creating connection by instantiating an object of class mysqli an inbuilt class in php
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



     //UserReg method
     function UserRegistration($firstname,$lastname,$address,$email,$password,$phonenumber){
         //the initial password stored in $password is now passed into a new varaible $pwd after encrypting with md5 then i pass the new variable into the db (hashed password)
         $encrypted_pwd=md5($password);
         //write the sql query to insert the name of the variable can be anything 
    //insert into (this will contain the exact names of your db column)
    $sql="INSERT INTO user(first_name,last_name,user_address,user_email,user_password,phonenumber) VALUES('$firstname','$lastname','$address','$email','$encrypted_pwd','$phonenumber')";
    
    //to run the query ,we use query a msqli php function called query
    if($result=$this->dbcon->query($sql)){
        //then you decideto concatenate the mysqli property to get the id of the query written to the data base like below using insert_id
         $msg="Your have successfully created an account ! ";

    }
    else{
         //this is used for the error handing while trying to insert 
        $msg="User account creation failed! ".$this->dbcon->error;
    }
    return $msg;



     }


     function User_login($email,$password){
         $encrypted_pwd=md5($password);
         $sql="SELECT * FROM user WHERE user_password='$encrypted_pwd' AND user_email='$email' ";
         $result=$this->dbcon->query($sql);
        $deets=$result->fetch_assoc();
        if(!empty($deets)){
            return $deets['customer_id'];

        }
        else{
            return 0;
        }
     }




      


      function get_user($id){

    $sql="SELECT * FROM user WHERE customer_id='$id'";
    $result=$this->dbcon->query($sql);
    $row=$result->fetch_assoc();
    return $row;

 }



 public function logout(){
     if(isset($_SESSION['username'])){
         unset($_SESSION['username']);
     }
         session_destroy();
         header('location:login.php');

     
    }


    public function upload_pix($pics_array){//pics_array contains $_FILES['pix']
      /*  echo  '<pre>';
        print_r($pics_array);
        echo'</pre>'; */
 //session_start();
        $filename=$pics_array['name'];
        $tmplocation=$pics_array['tmp_name'];
        $type=$pics_array['type'];
        $size=$pics_array['size'];

        $ext=pathinfo($filename,PATHINFO_EXTENSION);
        $newfilename=time().".$ext";

        if($ext=="jpg" || $ext=='jpeg'|| $ext=='png'){
            move_uploaded_file($tmplocation,"images/$newfilename");
            
        // print_r($_SESSION);   //write a query to update and run the query redir
          $m= $_SESSION['username'];
          
            $sql= "UPDATE user SET customer_pix='$newfilename' WHERE customer_id='$m'";
            $output=$this->db->query($sql);
            echo $sql;

            


        
        }
        else{
            header('location:profile.php?msg=upload failed');
        }

    echo $pics_array['name'];
    
    }








    public function update_profile($customer_id,$firstname,$lastname,$address,$phonenumber){



    $sql="UPDATE user SET first_name='$firstname',last_name='$lastname',user_address='$address', phonenumber='$phonenumber' WHERE   customer_id='$customer_id'";
    //echo $sql;

    
         //echo $sql;
       if($output=$this->dbcon->query($sql)){
        $message="profile was successfully updated";
        return $message;

       }
       else{
           $message="updating of profile failed!";
       }



}




      public function Search($keyword){

          $sql="SELECT * FROM product WHERE product_name LIKE '%$keyword%' AND product_status='active';";
          //echo $sql;
         if( $result=$this->dbcon->query($sql)){
          $data=array();
          while($row=$result->fetch_assoc()){
          $data[]=$row;

          }
          return $data;
        }
        else{

           $msg="This product is unavailable or maybe out of stock at the moment";
            return $msg;
            }
             
          }



      public    function get_State($selected=''){
        


   $q="SELECT  * FROM states";
   $result= $this->dbcon->query($q);
   //echo $q;
   

echo "<select name='state' class='custom-select form-control' id='allstate'>";


while($data=$result->fetch_assoc()){



    $state=$data['state_name'];
    $stateid=$data['state_id'];
    
    if($selected ==$stateid){
        echo "<option class='form-control' value='$stateid' selected>$state</option>";

    }

    echo "<option class='bg-light' value='$stateid'>$state</option>";

   
}

echo "</select>";
}
          




public function create_delivery($delivery_address,$state,$alternate_phone,$order_id){
    //insert into (this will contain the exact names of your db column)

      $sql="UPDATE orders  SET delivery_address='$delivery_address',state_id='$state',alternative_phone='$alternate_phone' WHERE   order_id='$order_id'";


    
    echo $sql;
    $result=$this->dbcon->query($sql);
   
    //to run the query ,we use query a msqli php function called query
    
    




}

public function insert_order($total_amount,$delivery_fee,$customer_id,$order_status){
    

     $sql="INSERT INTO orders(total_amount,delivery_fee,customer_id,order_status) VALUES('$total_amount','$delivery_fee','$customer_id','$order_status')";
    echo $sql;
    //to run the query ,we use query a msqli php function called query
    if($result=$this->dbcon->query($sql)){
        //then you decideto concatenate the mysqli property to get the id of the query written to the data base like below using insert_id
         $id=$this->dbcon->insert_id;
         return $id;

    }
    else{
         //this is used for the error handing while trying to insert 
        $msg=" failed! ".$this->dbcon->error;
    }
    return $msg;


}



public function insert_order_details($quantity,$order_id,$product_id,$product_name,$price,$total_price){
    
     $sql="INSERT INTO order_details(quantity,order_id,product_id,product_name,price,total_price) VALUES('$quantity','$order_id','$product_id','$product_name','$price','$total_price')";
    echo $sql;
     $result=$this->dbcon->query($sql);
   

}


   

     
public function fetch_myorders($id){
    $mysql="SELECT user.first_name,user.last_name ,orders.order_id, orders.total_amount,orders.delivery_address,orders.alternative_phone,orders.order_status,orders.order_date FROM orders INNER JOIN user ON orders.customer_id=user.customer_id WHERE orders.customer_id='$id'";
   // echo $mysql;
    $output=$this->dbcon->query($mysql);

    $data=array();
    while($row=$output->fetch_assoc()){
        $data[]=$row;

    }
    return $data;


}


function my_order_details($id){
      $sql="SELECT * FROM order_details WHERE order_id='$id'";
    $result=$this->dbcon->query($sql);
  $data=array();
    while($row=$result->fetch_assoc()){
        $data[]=$row;

    }
    return $data;

 }

 function get_product_image($product_id){
      $sql="SELECT product_image FROM product WHERE product_id='$product_id'";
    $result=$this->dbcon->query($sql);
    $row=$result->fetch_assoc();
    return $row;

 }



       





















      
 }


     
         
     
 
?>