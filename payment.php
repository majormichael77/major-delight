<?php

include('constants.php');

class Payment{

public $dbcon;
     //member methods
    public function __construct(){
        //create db connection by creating object of mysqli class
       $this->dbcon=new Mysqli(DB_SERVERNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASENAME);
       if($this->dbcon->connect_error){
           die("connection Error: ".$this->dbcon->connect_error);
       }


    }

//initialize paystack method
     function initializePaystack($email,$amount,$userid){
        //url of paystack initilization get it from the Paystack API documentation
  $url = "https://api.paystack.co/transaction/initialize";

  //go to client folder and create a page "verifypaystack" this page will handle the callback response from paystack,what ever it sends will be passed into verifypaystack method in class payment

  //we need to  declare the call back url
  $callback_url="http://localhost/grocery/verifypaystack.php";


  //next is to prepare request data to initialize data
  //you also include your call back ur in the fields array
  $fields = [
    'email' => $email,
    'amount' => $amount,
    'user_id'=>$userid,
    'callback_url'=>$callback_url
  ];

//next we use http_build query to turn the array $fields into query string 
  $fields_string=http_build_query($fields);


//major steps
//step 1:open connection
$ch=curl_init();

//step 2:set the  curl option i.e url number of POST data
curl_setopt($ch,CURLOPT_URL,$url);
//specify the method
curl_setopt($ch,CURLOPT_POST,true);
//specify the data we sending
curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
//header

//specify the http header and inside the array will contain authorization and test key from paystack,it is in your get started section when u login on paystack (for php we use secret key while for js it is public key)
curl_setopt($ch,CURLOPT_HTTPHEADER,array("Authorization: Bearer sk_test_a972be13ea04cedd982fa8e5ba1215a9ae7367e3 ","Cache-Control:no-cache"));

//we are specifying that what ever data that is retrieve shoudn't not be displayed directly to the browser but stored 
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        //the api end point that we are conuming requires https but since we are on local host we have to set the curlsession  ssl verification to false so that it doesn't check for a secured http(doesn't apply in live production)
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
	


//step 3:execute curl;
$response=curl_exec($ch);
$errors=curl_error($ch);

//step4:close curl session
curl_close($ch);

if($errors){
    $result=$errors;
}

//here we are decoding the response from  json to php format 
$result=json_decode($response);
return $result;


    }



    //second leg  is to verify
    //verify paystack  transaction

	public function verifyPaystack($reference, $userid){
		$url = "https://api.paystack.co/transaction/verify/$reference";
    

		// step 1
		$ch = curl_init();

		// step 2 set the url, headers
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			"Authorization: Bearer sk_test_a972be13ea04cedd982fa8e5ba1215a9ae7367e3",
			"Cache-Control: no-cache"
		));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

		// STEP 3
		$response = curl_exec($ch);
		$errors = curl_error($ch);

		// step 4: close curl session
		curl_close($ch);

		if ($errors) {
			$result = $errors;
		}

		$result = json_decode($response);

		return $result;



	}

  //this is a function that inserts into the annual due table
 public function order($user_id, $amount, $transid, $trans_status){
		// write the query
		$sql = "INSERT INTO orders(user_id, amount_paid,transid, trans_status) VALUES('$user_id', '$amount', '$transid', '$trans_status')";

		if ($result = $this->dbcon->query($sql)) {
			$response = $this->dbcon->insert_id;
		}else{
			$response = $this->dbcon->error;
		}

		return $response;
	}

	public function update_order($reference, $trans_status){
		// write the query
		$sql = "UPDATE orders SET trans_status = '$trans_status' WHERE transid = '$reference'";

		if ($result = $this->dbcon->query($sql)) {
			$response = $this->dbcon->affected_rows;
		}else{
			$response = $this->dbcon->error;
		}

		return $response;
	}


  






    










}







?>