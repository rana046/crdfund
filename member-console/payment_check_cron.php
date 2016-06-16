<?php
include_once ("z_db.php");
include_once ("z_db1.php");
include_once ("z_db2.php");

/* time duration in hour */
$time_duration = 8;

/* Get all pending donations */

$query = "SELECT * FROM payments WHERE payment_status='0'";      
$payments_data = mysqli_query($con,$query);
while($result = mysqli_fetch_object($payments_data)){
	$current_time = new \DateTime();
	$payment_time = new \DateTime($result->createdtime);
	$interval = $payment_time->diff($current_time);
	$hour_diff = $interval->h; 
	if( $hour_diff >= $time_duration) {
		/* deactivate donor of this payment */
		$query = "update users set users_status = 0 where users_id = '".$result->userid."'";
		mysqli_query($con,$query);
	}
}



?>