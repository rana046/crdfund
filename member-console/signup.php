<?php

include_once("z_db.php");
include_once ("z_db1.php");
//session_start();

function referal_bonus($id ,$donation,$old_ref,$lastid){
		 $sql= mysql_fetch_array(mysql_query("select * from users where  users_id='$lastid'  ")); 
		 $package=$sql['users_package'];
		 $query=mysql_query("select * from packages where packages_id='$package'");
		$re_setting = mysql_fetch_array($query);	
		
		$per=$re_setting['packages_ref'];
		//echo "functiohn<br>";
		
	 	$amt=($donation*$per)/100;
	$add_bonus=$old_ref+$amt;
		$minus=$donation-$amt;

		$region="add referal bonus ";
		//echo "insert into report (users_id, report_ref_bonus, report_region, doner_user_id) values 
		//('$id','$amt','$region','$lastid') ";
		
		$update =mysql_query("update users set  users_ref_bonus='$add_bonus' where users_id='$id'");
		
		$insert =mysql_query("insert into report (users_id, report_ref_bonus, report_region, doner_user_id) values 
		('$id','$amt','$region','$lastid') ");
		//echo "insert into report (users_id,donation, doner_user_id,report_region ) values 
		//('admin','$minus','$lastid','donation') ";
			$insert1 =mysql_query("insert into report (users_id,donation, doner_user_id,report_region ) values 
		('admin','$minus','$lastid','donation') ");

	return ;
	}



$sql="SELECT maintain FROM  settings WHERE sno=0";
		  if ($result = mysql_query($sql)) {

    /* fetch associative array */
    while ($row = mysql_fetch_array($result)) {
        $main= $row['maintain'];
    }
	if($main==2 || $main==3)
	{
	print "
				<script language='javascript'>
					window.location = 'maintain.php';
				</script>
			";
	}

}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']) && isset($_POST['todo']))
{
// Collect the data from post method of form submission // 
$todo=mysql_real_escape_string($_POST['todo']);
$name=mysql_real_escape_string($_POST['fname']);
$username=mysql_real_escape_string($_POST['username']);
$userid=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);
$password2=mysql_real_escape_string($_POST['password2']);

$email=mysql_real_escape_string($_POST['email']);

$mobile=mysql_real_escape_string($_POST['mobile']);
$ref=mysql_real_escape_string($_POST['referral']);
/*$address=mysql_real_escape_string($_POST['address']);*/
$country=mysql_real_escape_string($_POST['country']);
$country_code =mysql_real_escape_string($_POST['country_code']);
$package=mysql_real_escape_string($_POST['package']);
$donation=mysql_real_escape_string($_POST['donation']);
$id_passport_number = mysql_real_escape_string($_POST['id_passport_number']);
$bank_name = mysql_real_escape_string($_POST['bank_name']);
$card_holder = mysql_real_escape_string($_POST['card_holder']);
$branch = mysql_real_escape_string($_POST['branch']);
$account_number = mysql_real_escape_string($_POST['account_number']);
$branch_code = mysql_real_escape_string($_POST['branch_code']);

$status = "OK";
$msg="";
//validation starts
// if userid is less than 6 char then status is not ok
if(!isset($username) or strlen($username) <6){
$msg=$msg."User Id Should Contain Minimum 6 CHARACTERS.<BR>";
$status= "NOTOK";}					

if(!ctype_alnum($username)){
$msg=$msg."User Id Should Contain Alphanumeric Chars Only.<BR>";
$status= "NOTOK";}					



$rr=mysql_query("SELECT * FROM users WHERE users_name = '$username'");
$r = mysql_num_rows($rr);
$nr = $r;
if($nr==1){
$msg=$msg."Userid Already Exists. Please Try Another One.<BR>";
$status= "NOTOK";
}	

$rrr=mysql_query("SELECT * FROM users WHERE users_phone = '$mobile'");
$r3 = mysql_num_rows($rrr);
$nr3 = $r3;
if($nr3==1){
$msg=$msg."Mobile Number Already Registered.<BR>";
$status= "NOTOK";
}	

$id_check_query=mysql_query("SELECT * FROM users WHERE id_passport_number = '$id_passport_number'");
$no_of_id_passport = mysql_num_rows($id_check_query);
if($no_of_id_passport==1){
$msg=$msg."ID/Passport Number Already Registered.<BR>";
$status= "NOTOK";
}

$remail=mysql_query("SELECT COUNT(*) FROM users WHERE users_email = '$email'");
$re = mysql_num_rows($remail);
$nremail = $re;
if($nremail>1){
$msg=$msg."E-Mail Id Already Registered.<BR>";
$status= "NOTOK";
}				

$result = mysql_query("SELECT * FROM  users where users_name = '$ref'");
$row = mysql_fetch_array($result);
$numrows = $row['users_id'];


if ( $package=="" ){
$msg=$msg."Please Select The Package.<BR>";
$status= "NOTOK";}	


if ( strlen($password) < 8 ){
$msg=$msg."Password Must Be More Than 8 Char Length.<BR>";
$status= "NOTOK";}	

/*if ( strlen($address) < 1 ){
$msg=$msg."Not Available<BR>";
}*/

if ( strlen($mobile) > 10 ){
$msg=$msg."Please Enter Correct Mobile Number<BR>";
}

if ( strlen($email) < 1 ){
$msg=$msg."Please Enter Your Email Id.<BR>";
$status= "NOTOK";}
			


if ( $password <> $password2 ){
$msg=$msg."Both Passwords Are Not Matching.<BR>";
$status= "NOTOK";}		


if ( $country == "" ){
$msg=$msg."Please Enter Your Country Name.<BR>";
$status= "NOTOK";}	

//Test if it is a shared client
if (!empty($_SERVER['HTTP_CLIENT_IP'])){
  $ip=$_SERVER['HTTP_CLIENT_IP'];
//Is it a proxy address
}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
  $ip=$_SERVER['REMOTE_ADDR'];
}
//The value of $ip at this point would look something like: "192.0.34.166"
$ip = ip2long($ip);
//The $ip would now look something like: 1073732954




if ($status=="OK") 
{

$address = "";
if($_REQUEST['streetNo'] != "") {
	$address .= $_REQUEST['streetNo'];
}
if($_REQUEST['streetName'] != "") {
	$address .= ",".$_REQUEST['streetName'];
}
if($_REQUEST['city'] != "") {
	$address .= ",".$_REQUEST['city'];
}
if($_REQUEST['suburbOrTown'] != "") {
	$address .= ",".$_REQUEST['suburbOrTown'];
}
if($_REQUEST['stateOrProvinceOrDistrict'] != "") {
	$address .= ",".$_REQUEST['stateOrProvinceOrDistrict'];
}
if($_REQUEST['zipOrPostalCode'] != "") {
	$address .= ",".$_REQUEST['zipOrPostalCode'];
}



$scode=rand(1111111111,9999999999); //generating random code, this will act as signup key

$bonus=mysql_fetch_array(mysql_query("select * from packages where packages_id='".$_REQUEST['package']."'"));
 $bonusper=($donation*$bonus['packages_percent'])/100;
$date =date("d-m-Y");
//echo "insert into  users(users_uname,users_pwd,users_fullname,users_address,users_email,users_refuname,users_phone,users_country,users_bonus,users_package,users_status) values('$username','$password','$name','$address','$email','$ref','$mobile','$country','1','$package','1')";
$query=mysql_query("insert into  users(users_date,users_image,users_name,users_pass,users_fullname,users_address,users_email,users_reff_name,users_phone,users_country,country_code,users_bonus,users_package,users_status,users_donation,users_ref_date,id_passport_number) values('$date','a0.png','$username','$password','$name','$address','$email','$ref','$mobile','$country','$country_code','$bonusper','$package','1','$donation','$date','$id_passport_number')");
$lastid1=mysql_insert_id();

/* Add banking details */
$query_banking="INSERT INTO don_list (id,user_id, name, lastname, bank, amount, bank_name, acount_holder, account_number, account_type, branch, branch_code)
VALUES ('".rand()."', $lastid1, '$username', '$name', '$bank_name', '$donation', '$bank_name', '$card_holder', '$account_number', '', '$branch', '$branch_code')";
if ($con_don->query($query_banking) === TRUE) {
	$con_don->close();
} else {
    echo "Error: " . $sql . "<br>" . $con_don->error;
}


//echo "insert into report (users_id,report_reg_bonus,report_region ) values 
	//	('$lastid1','$bonusper','Register Bonus') ";
$insertbonus =mysql_query("insert into report (users_id,report_reg_bonus,report_region ) values 
		('$lastid1','$bonusper','Register Bonus') ");
		
$_SESSION['paypalidsession'] = $userid;



// last id

 $last_select = "select * from users ORDER BY users_id DESC LIMIT 1";
 $last_result = mysql_query($last_select);
$last_record = mysql_fetch_array($last_result);
 $donation=$last_record['users_donation'];
 
 $ref=$last_record['users_reff_name'];
$lastid=$last_record['users_id'];

		
$lastuser=mysql_query("select * from users where users_name='$ref' ");

$count=mysql_num_rows($lastuser);
if($count>0) {
	$row1=mysql_fetch_array($lastuser);
	$row=mysql_fetch_array(mysql_query("select * from users where users_name='".$row1['users_name']."'"));
    
      $user_id=$row['users_id'];
	   $old_ref=$row['users_ref_bonus'];

echo 	referal_bonus($user_id  ,$donation ,$old_ref, $lastid);
	
	}else {
		
			$insert1 =mysql_query("insert into report (users_id,donation, doner_user_id,report_region ) values 
		('admin','$donation','$lastid','donation') ");
		
	}

 $sqlquery="SELECT  * FROM 6btb_setting "; //fetching website from databse
$rec2=mysql_query($sqlquery);
$row2 = mysql_fetch_array($rec2);
$wlink=$row2['setting_web']; 



$message = '<style>
td,th
{
padding:5px;
}
body{
background: #fff;
}

</style>
<html>
<head>
  <title> Contact Mail</title>
</head>
<body>
  <p> <b>' .$settingresult['setting_title']. '</b> </p>
  <p> <strong>Thank you for signing up with ' .$settingresult['setting_title']. '</strong></p></br>
  
 
  
  

<p><strong>For activate account.</strong> </p><br>

 
   <a href="'.$baseurl.'index.php?status=active&id='.$last_record['users_id'].'">
Click Here</a> 
   <br>  <br><br>   
 



</body>
</html>';


// More headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <no-reply@'.$wlink.'>' . "\r\n";
$to=$email;
$subject="Email verification";
//$message=$emailtext;
mail($to,$subject,$message,$headers);
print "
				<script language='javascript'>
					window.location = 'thankyou.php?username=$username';
				</script>
			"; 

}



else
{ 
$errormsg= "
<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <i class='fa fa-ban-circle'></i><strong>Please Fix Below Errors : </br></strong>".$msg."</div>"; //printing error if found in validation
					
}

}

?>

<!DOCTYPE html>
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="chrome=1">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Userprofile - <?php echo $settingresult['setting_title'];?></title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		
		<style>
			#progressbar li {
				width: 16.16%;
			}
		</style>
	</head>
  <body>
<!-- multistep form -->
		<form id="msform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>" method="post">
			<!-- progressbar -->
			<ul id="progressbar">
				<li class="active"></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
			<?php
			if($_SERVER['REQUEST_METHOD'] == 'POST' && ($status=="NOTOK"))
						{
						print $errormsg;
						}
			?>
			<!-- fieldsets -->
			<fieldset>
				<h2 class="fs-title">Account Details</h2>
				<h3 class="fs-subtitle">This is step 1</h3>
				<input type="email" name="email" id="email" placeholder="Email" />
				<input type="text" name="username" id="username" placeholder="Username" />
				<input type="password" name="password" id="password" placeholder="Password" />
				<input type="password" name="password2" id="password2" placeholder="Confirm Password" />
				<input type="button" name="next" class="next action-button" value="Next" />
			</fieldset>
			<?php 
				if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
					$ip = $_SERVER['HTTP_CLIENT_IP'];
				} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
					$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
				} else {
					$ip = $_SERVER['REMOTE_ADDR'];
				}

				$details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip={$ip}"));
				$country = $details->geoplugin_countryName;
				$phone_code = "";
				if($country != "") {
					$id1=mysql_query("SELECT * FROM country where nicename = '".$country."'");
					$country_result = mysql_fetch_object($id1);
					$phone_code = $country_result->phonecode;
				}
			
			?>
			<fieldset>
				<h2 class="fs-title">Personal Details</h2>
				<h3 class="fs-subtitle">This is step 2</h3>
				<input type="text" name="fname" placeholder="Full Name" />
				<!--<input type="text" name="surname" placeholder="Surname" />-->
				<input type="text" name="id_passport_number" id="id_passport_number" placeholder="ID/Passport" />
				<input type="text" name="streetNo" placeholder="Street No" />
				<input type="text" name="streetName" placeholder="Street Name" />
				<input type="text" name="city" placeholder="city" />
				<input type="text" name="suburbOrTown" placeholder="Suburb/Town" />
				<input type="text" name="country" placeholder="Country" value="<?php echo $country; ?>" />
				<input type="text" name="stateOrProvinceOrDistrict" placeholder="State/Province/District" />
				<input type="text" name="zipOrPostalCode" placeholder="Zip/Postal Code" />
				<input type="button" name="previous" class="previous action-button" value="Previous" />
				<input type="button" name="next" class="next action-button" value="Next" />
			</fieldset>
			<fieldset>
				<h2 class="fs-title">Mobile Details</h2>
				<h3 class="fs-subtitle">This is step 3</h3>
				<input type="text" name="mobile" placeholder="Mobile Number" />
				<input type="text" name="country_code" placeholder="Network Operator" value="<?php echo $phone_code; ?>" />
				<input type="button" name="previous" class="previous action-button" value="Previous" />
				<input type="button" name="next" class="next action-button" value="Next" />
			</fieldset>
			<fieldset>
				<h2 class="fs-title">Membership Plan</h2>
				<h3 class="fs-subtitle">This is step 4</h3>
				<select  class="form-control m-t selectChange" id="package" name="package" required>
                                
								<?php $query="SELECT * FROM  packages where packages_status=1"; 
 
 
 $result = mysql_query($query);
$sent_package_id = $_GET['package'];
while($row = mysql_fetch_array($result))
{
	$id="$row[packages_id]";
	$pname="$row[packages_packages]";
	$pprice=$row['packages_price'];
	$pprice1=$row['packages_price1'];
	$pcur="$row[packages_currency]";
?>
  <option value='<?php echo $id ?>' <?php if($sent_package_id == $id) echo ' selected="selected"'; ?>> <?php echo $pcur." ".$pprice." - ".$pcur." ".$pprice1."  ".$pname ?></option>
 <?php 
  }
  ?>
							</select>
								<input type="hidden" id="l1"  value="">
								<input type="hidden" id="l2"  value="">
				<input type="number" placeholder="Donation Amount" id="donation" value="" name="donation" required="required"  onkeypress="return isNumberKey(event)">
				<input type="button" name="previous" class="previous action-button" value="Previous" />
				<input type="button" name="next" class="next action-button" value="Next" />
			</fieldset>
			<fieldset>
				<h2 class="fs-title">Bank Details</h2>
				<h3 class="fs-subtitle">This is step 5</h3>
				<input type="text" name="bank_name" placeholder="Bank Name" />
				<input type="text" name="card_holder" placeholder="Cardholder" />
				<input type="text" name="account_number" placeholder="Account Number" />
				<input type="text" name="branch" placeholder="Branch" />
				<input type="text" name="branch_code" placeholder="Branch Code" />
				<input type="button" name="previous" class="previous action-button" value="Previous" />
				<input type="button" name="next" class="next action-button" value="Next" />
			</fieldset>
			<fieldset>
				<h2 class="fs-title">Sponsors/Referral Details</h2>
				<h3 class="fs-subtitle">This is step 6</h3>
				<input type="text" name="referral" placeholder="Username/Link" />
				<input style="width:12px" type="checkbox" name="check" /> I agree to the terms of services<br>
				<input type="button" name="previous" class="previous action-button" value="Previous" />
				<input type="hidden" name="todo" value="post">
				<input type="submit" name="submit" class="next action-button" value="Submit" />
			</fieldset>
		</form>

<script src='js/jquery.min.js'></script>
<script src='js/jquery.easing.min.js'></script>
<script type="text/javascript">
$(document).ready(function () {
	
	 	var package = $("#package").val();
			  $.ajax({
      type: "POST",
      url: "ajax1.php?package="+package+"&field="+"price",
          success:function(res1){
          	var l1 = res1;
          	$("#l1").val(l1);
         // alert(res1);
              
}
    });	
		  $.ajax({
      type: "POST",
      url: "ajax1.php?package="+package+"&field="+"price1",
       data: "{}",
       contentType: "application/json",
        dataType: "json",
        success: function (res) {
         	var l2 =res;
        	$("#l2").val(l2);
              
}
	
});

$("#package").change(function () {
		
	 	var package =$("#package").val();
			  $.ajax({
      type: "POST",
      url: "ajax1.php?package="+package+"&field="+"price",
          success:function(res1){
          	var l1 =res1;
          	$("#l1").val(l1);
         // alert(res1);
              
}
    });	
		  $.ajax({
      type: "POST",
      url: "ajax1.php?package="+package+"&field="+"price1",
       data: "{}",
       contentType: "application/json",
        dataType: "json",
        success: function (res) {
         	var l2 =res;
        	$("#l2").val(l2);
              
}
	
});
	
})
$("#donation").blur(function () {
	var amt =$(this).val();
	 var l11= $("#l1").val();
    var l22=$("#l2").val();
  
  if (parseInt(amt)<parseInt(l11)) {
  $(".msg").show();	
$(".msg").html("Amount must be greater loowee");
$("#donation").val('');

  }else if(parseInt(amt)>parseInt(l22)) {
  	$(".msg").show();
$(".msg").html(" Amount must be less up");
$("#donation").val('');

  }else {
  	$(".msg").hide();
  }
 
    });

 });   	

</script>
<script>
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>

<script src="js/index.js"></script>	

  </body>
</html>