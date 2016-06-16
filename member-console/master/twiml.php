<?php
	require("twilio.php");
	require("database.php");
	
	$r = new Response();
	
	if (empty($_POST["Digits"])) {
	    $g = $r->append(new Gather(array("numDigits" => "6")));
		$g->append(new Say("Please enter your verification code."));
	}
	else {
		// grab db record and check for match
		$result = db(sprintf("select * from numbers where phone_number='%s'", $_POST["Called"]));
		if($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
	        if ($_POST["Digits"] === $line["verification_code"]) {
	            db(sprintf("UPDATE numbers SET verified = 1 WHERE phone_number = '%s'", $_POST["Called"]));
				$r->append(new Say("Thank you! Your phone number has been verified."));
	        }
	        else {
        		// if incorrect, prompt again
        		$g = $r->append(new Gather(array("numDigits" => "6")));
        		$g->append(new Say("Verification code incorrect, please try again."));	        
    	    }
	    }
	
		mysql_close();
	}
	 
	$r->Respond();
?>