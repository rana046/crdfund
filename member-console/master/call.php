<?php
	require("twilio.php");
	require("database.php");
	
	// require POST request
	if ($_SERVER['REQUEST_METHOD'] != "POST") die;
	
	// generate "random" 6-digit verification code
	$code = rand(100000, 999999);
	
	// save verification code in DB with phone number
	// does not check for duplicates like it should
	$number = mysql_real_escape_string($_POST["phone_number"]);
	 db(sprintf("DELETE FROM numbers WHERE phone_number='%s'", $number));
	db(sprintf("INSERT INTO numbers (phone_number, verification_code) VALUES('%s', %d)", $number, $code));
	
	mysql_close();
	
	// initiate phone call via Twilio REST API    
    // Set our AccountSid and AuthToken 
    $AccountSid = "AC61e61bccd83caf4af84ccd5d2f26f543";
    $AuthToken = "c216b32039ce1d7b2f150a8dd8dcdd23";
    
    // Instantiate a new Twilio Rest Client 
    $client = new TwilioRestClient($AccountSid, $AuthToken);
    
    // call data
    $message = array(
    	
    	"To" => $number,
    	"From" => '+919424732858',	
    	 "Message" => $code, 
    	
    );
    
	// make call

    $response = $client->request("/2008-08-01/Accounts/'$AccountSid'/SMS/Messages", "POST", $message); 
    
    // error handling would go here
   // if($response->IsError)
  //echo "Error starting phone call: {$response->ErrorMessage}\n";
	
//return verification code as JSON

	$json = array();	
	$json["verification_code"] = $code;
	
	header('Content-type: application/json');
	echo(json_encode($json));
?>