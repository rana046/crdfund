<?php
include_once ("z_db1.php");

//add variables///
$help_banking = $_POST["help_banking"];
$user_id = $_POST["user_id"];
$tid = $_POST["transaction_id"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$bank_name = $_POST["bank_name"];
//$amount = $_POST["amount"];
$name_of_bank = $_POST["name_of_bank"];
$account_holder = $_POST["account_holder"];
$account_number = $_POST["account_number"];
$account_type = $_POST["account_type"];
$branch_name = $_POST["branch_name"];
$branch_code = $_POST["branch_code"];
$active = $_POST['active'];
$donor_list = $_POST['donor_list'];
$donors = "";
if(count($donor_list) > 0) {
	foreach($donor_list as $single_donor) {
		$donors .= $single_donor.",";
	}
}


//////////scan field///////////
if($user_id == ""){header('Location:add_help_banking.php'); };
// Check connection
if ($con_don->connect_error) {
    die("Connection failed: " . $con_don->connect_error);
} 

if($help_banking=='add')
{
$sql = "INSERT INTO don_list (id,user_id, name, lastname, bank, bank_name, acount_holder, account_number, account_type, branch, branch_code)
VALUES ('$tid', $user_id, '$first_name', '$last_name', '$bank_name', '$name_of_bank', '$account_holder', '$account_number', '$account_type', '$branch_name', '$branch_code')";
}
else if($help_banking=='edit')
{
	$auto_id = $_POST["auto_id"];
	$sql = "UPDATE don_list set id='$tid', user_id=$user_id, name='$first_name', lastname='$last_name', bank='$bank_name', bank_name='$name_of_bank'
, acount_holder='$account_holder', account_number='$account_number', account_type='$account_number', branch='$branch_name', branch_code='$branch_code', active='$active', assigned_donor = '".trim($donors,',')."' WHERE auto_id=$auto_id";
	
}
if ($con_don->query($sql) === TRUE) {
	$con_don->close();
	header('Location:manage_help_banking.php');
} else {
    echo "Error: " . $sql . "<br>" . $con_don->error;
}


?>