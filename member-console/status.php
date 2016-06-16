<?php
    require("z_db.php");

	// require POST request
	if ($_SERVER['REQUEST_METHOD'] != "POST") die;
	
	$number = mysql_real_escape_string($_POST["phone_number"]);
	$code = mysql_real_escape_string($_POST["verification_code"]);
	$result = db(sprintf("select * from numbers where phone_number='%s'", $number));
	
	$msg = "Invalid code. Please try again.";
	if($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		if ($line["verification_code"] == $code) {
			db(sprintf("UPDATE numbers SET verified = 1 WHERE phone_number = '%s'", $number));
			$msg = "Verified!";
		}
	}
	
	mysql_close();
	die($msg);
?>