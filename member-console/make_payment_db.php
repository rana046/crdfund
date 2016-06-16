<?php 
include_once ("z_db.php");
include_once ("z_db1.php");
$payid = $_GET["payid"];
$itemid = $_GET["itemid"];
$payment_amount = $_GET["payment_amount"];
$sql = "UPDATE payments set payment_status=1 WHERE id=$payid AND itemid=$itemid";
if (mysql_query($sql) === TRUE) {
	$sql = "SELECT * FROM don_list WHERE auto_id=$itemid";
			$don_data = mysqli_query($con_don,$sql); 
			while($don_row = mysqli_fetch_array($don_data))
			{
				$assign_user_id = $don_row['user_id'];	
			}			
			$sql1 = "UPDATE users set users_donation=users_donation-$payment_amount WHERE users_id=$assign_user_id";
	if (mysql_query($sql1) === TRUE) 
	{    
	}       
}
	header('Location:payment_request.php'); 

?>