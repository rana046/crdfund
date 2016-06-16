<?php
include_once ("z_db1.php");
include_once ("z_db2.php");

//add variables///
$payment_id = $_GET["id"];

//////////scan field///////////
if($payment_id == ""){header('Location:transaction_list.php'); };
// Check connection
if ($con_don->connect_error) {
    die("Connection failed: " . $con_don->connect_error);
} 
if ($con_don2->connect_error) {
    die("Connection failed: " . $con_don2->connect_error);
} 

$q="SELECT * FROM  payments WHERE id=$payment_id";
$payment_data = mysqli_query($con_don2,$q); 
while($payment_row = mysqli_fetch_array($payment_data))
{
	//echo "<pre>"; print_r($payment_row); echo "</pre>";
	$payment_amount = $payment_row["payment_amount"];
	$itemid = $payment_row["itemid"];
	$userid = $payment_row["userid"];
	$q="SELECT * FROM don_list WHERE auto_id=$itemid";
	$don_data = mysqli_query($con_don,$q); 
	while($don_row = mysqli_fetch_array($don_data))
	{		//echo "<pre>"; print_r($don_row); echo "</pre>";
		$donation_user_id = $don_row["user_id"];		
	}
		$q="SELECT * FROM users WHERE users_id=$donation_user_id";
		$user_data = mysqli_query($con_don2,$q); 
		while($user_row = mysqli_fetch_array($user_data))
		{
			$users_id = $user_row["users_id"];
			$users_donation = $user_row["users_donation"];
			$users_package = $user_row["users_package"];
		}
		
		$q="SELECT * FROM packages WHERE packages_id=$users_package";
		$package_data = mysqli_query($con_don2,$q); 
		while($package_row = mysqli_fetch_array($package_data))
		{
			$packages_percent = $package_row["packages_percent"];
		}
	$report_don_bonus = ($packages_percent*100)/$payment_amount;
}

//exit;

$sql = "INSERT INTO report (report_don_bonus,payment_id,users_id,doner_user_id,donation) VALUES ('$report_don_bonus',$payment_id,'$userid','$donation_user_id','$payment_amount')";
if ($con_don2->query($sql) === TRUE) {
	$sql_user = "UPDATE users set users_donation=users_donation+$report_don_bonus WHERE users_id=$users_id";
	if ($con_don2->query($sql_user) === TRUE) {
		$sql_user = "UPDATE payments set adjust=2 WHERE id=$payment_id";
		if ($con_don2->query($sql_user) === TRUE) {
			$con_don2->close();
			header('Location:transaction_list.php');
		}
	}
	
} else {
    echo "Error: " . $sql . "<br>" . $con_don2->error;
}


?>