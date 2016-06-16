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
$address=mysql_real_escape_string($_POST['address']);
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

if ( strlen($address) < 1 ){
$msg=$msg."Not Available<BR>";
}

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
	echo "executed succesfully";
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
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="mylifestylewealth Angular Admin Theme">
    <meta name="author" content="oxedes" >
    <meta name="msapplication-TileColor" content="#9f00a7">
    <meta name="msapplication-TileImage" content="assets/img/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="assets/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="assets/img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/img/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="assets/img/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="assets/img/favicon/manifest.json">
    <link rel="shortcut icon" href="assets/img/favicon/favicon.ico">
    <title>Userprofile - <?php echo $settingresult['setting_title'];?></title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>  <![endif]-->
    <link href="assets/css/vendors.min.css" rel="stylesheet" />
    <link href="assets/css/styles.min.css" rel="stylesheet" />
    <script charset="utf-8" src="http://maps.google.com/maps/api/js?sensor=true"></script>
</head>
  <body>

<div class="main-container">
<section id="content" >
	
  <div class="container aside-xl"> 
  <div id="logo_section" style="text-align:center">
		<img src="images/login_logo.png" alt="Logo" style="width:230px;" />
	</div>
  <a class="navbar-brand block" href="#" style="    color: #e91e63;">Great Decision... ;)</a>
  <div class="row">
                <div class="col-sm-18">
                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>" method="post" data-validate="parsley">
                    <section class="panel panel-default">
                      
					  <div class="page-header" style="    margin: -24px 0 40px;"><br><br>
    <h1>
      <i class="md md-input"></i>
    Register
    </h1>
  </div>
                      <div class="panel-body">
					  
                        <p class="text-muted">Please fill the information to continue</p>
						<?php 
						if($_SERVER['REQUEST_METHOD'] == 'POST' && ($status=="NOTOK"))
						{
						print $errormsg;
						}
						?>
						

						
						<input type="hidden" name="todo" value="post">
						<div class="form-group pull-in clearfix">
                        <div class="col-sm-6">
                          <label>Username</label>
                          <input type="text" class="form-control" data-required="true" name="username" value="" required>                        
                        </div>
                        <div class="col-sm-6">
                          <label>Full Name</label>
                         <input type="text" class="form-control" data-required="true" name="fname" required>                          
                        </div>
						</div>
                        <div class="form-group pull-in clearfix">
                          <div class="col-sm-6">
                            <label>Enter password</label>
                            <input type="password"  class="form-control" data-required="true" id="pass1" name="password" required>   
                          </div>
                          <div class="col-sm-6">
                            <label>Confirm password</label>
                            <input type="password" class="form-control" id="pass2" data-equalto="#pwd" data-required="true" name="password2" required>      
                          </div>
                          <span data-ng-show="myForm.emailReg2.$error.match">Passwords have to match!</span>   
                        </div>
						<div class="form-group pull-in clearfix">
						<div class="col-sm-6">
                          <label>Email</label>
                          <input type="email" class="form-control" data-type="email" data-required="true" name="email" required>                        
                        </div>
						<div class="col-sm-6">
                          <label>Phone</label>
                          <input type="text" class="form-control" data-type="phone" placeholder="(XXX) XXXX XXX" data-required="true" name="mobile" required>
                        </div>
						</div>
						
                        <div class="form-group">
                          <label>Address</label>
                          <input type="text" class="form-control" data-required="true" name="address">
                        </div>
						
						<div class="form-group">
						<label>Country</label>
	
                            <select data-required="true" class="form-control m-t" name="country" required>
                                <option value="">Please choose</option>
                               	<?php 
	$id1=mysql_query("SELECT * FROM country");
while($country=mysql_fetch_array($id1)) {

                                              
                                          
	?>

	<option value="<?php echo $country['nicename']; ?>"> <?php echo $country['nicename']; ?></option>
	<? }?>
</select>
                        </div>
						
						<div class="form-group">
						<label>Country Code</label>
	
                            <select data-required="true" class="form-control m-t" name="country_code" required>
                                <option value="">Please choose</option>
                               	<?php 
	$id1=mysql_query("SELECT * FROM country");
while($country=mysql_fetch_array($id1)) {

                                              
                                          
	?>

	<option value="<?php echo $country['phonecode']; ?>"> <?php echo $country['phonecode']; ?></option>
	<? }?>
</select>
                        </div>
						
						  <div class="form-group">
						<label>Package</label>
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
                          </div>
                         <div class="form-group">
                         <label>How Much Do You Want To Donate?</label>
                          <input type="text" class="form-control" id="donation" value="" name="donation" required="" >
                          <div >
									<span  class="msg" style="color:red"></span>
                          </div>
                        </div>
						  <div class="form-group">
                         	<label>ID/Passport Number</label>
                          <input type="text" class="form-control" id="id_passport_number" value="" name="id_passport_number" required="" >
                          <div >
									<span  class="msg" style="color:red"></span>
                          </div>
                          </div>
						  <div class="form-group">
                         	<label>Bank Name</label>
                          <input type="text" class="form-control" id="bank_name" value="" name="bank_name" required="" >
                          <div >
									<span  class="msg" style="color:red"></span>
                          </div>
                          </div>
						  <div class="form-group">
                         	<label>Card Holder</label>
                          <input type="text" class="form-control" id="card_holder" value="" name="card_holder" required="" >
                          <div >
									<span  class="msg" style="color:red"></span>
                          </div>
                          </div>
						  <div class="form-group">
                         	<label>Branch</label>
                          <input type="text" class="form-control" id="branch" value="" name="branch" required="" >
                          <div >
									<span  class="msg" style="color:red"></span>
                          </div>
                          </div>
						  <div class="form-group">
                         	<label>Account Number</label>
                          <input type="text" class="form-control" id="account_number" value="" name="account_number" required="" >
                          <div >
									<span  class="msg" style="color:red"></span>
                          </div>
                          </div>
						  <div class="form-group">
                         	<label>Branch Code</label>
                          <input type="text" class="form-control" id="branch_code" value="" name="branch_code" required="" >
                          <div >
									<span  class="msg" style="color:red"></span>
                          </div>
                          </div>


<?php 
			if(isset($_GET["aff"])){
			$aff=mysql_real_escape_string($_GET["aff"]);
			$_SESSION['aff'] = $aff;
			
			

	}		
	
	
	// get referal user name
	
	$ref_select = "select * from users";
	$ref_result = mysql_query($ref_select);
	$ref_count = mysql_num_rows($ref_result); 
			if($ref_count == 0) {
			?>
			<div class="form-group">
                          <label>Sponsor/Referral Username</label>
                          <input type="text" class="form-control" name="referral" value="<?php if (isset($_SESSION['aff'])){
			echo $_SESSION['aff']; } ?>"  required="required" >                        
                        </div>

<?php
			}
			else if(isset($_REQUEST['user1'])) 
			{
				$select_users=mysql_query("select * from users where users_name='".$_REQUEST['user1']."'");
    $row_users=mysql_fetch_array($select_users);

$users_name=$row_users['users_name'];

if(!isset($users_name)){


    
  echo "<script>window.location='index.php'</script>";

    
}
?>

		<div class="form-group">
                          <label>Sponsor/Referral Username</label>
                          <input type="text" class="form-control"  name="referral" value="<?php echo $_REQUEST['user1']; ?>"  required="required" >                        
                        </div>


<?php
			}
			else {
				$last_select = "select * from users ORDER BY users_id DESC LIMIT 1";
				$last_result = mysql_query($last_select);
				$last_record = mysql_fetch_array($last_result);
?>
								<div class="form-group">
                          <label>Sponsor/Referral Username</label>
                          <input type="text" class="form-control"  name="referral" value="" >                        
                        </div>
                        
<?php
			}
?>

							<div class="checkbox i-checks">
                          <label>
                            <input type="checkbox" name="check" data-required="true" required><i></i> I agree to the <a href="../terms_condition.html" target="_blank" class="text-info">Terms of Service</a>
                          </label>
                        </div>
                        
                      </div>
                      <footer class="panel-footer text-right bg-light lter">
                       
                      </footer>
                    </section>
					<div class="line line-dashed"></div>
          <p class="text-muted text-center"><small style="color:black;"> <button type="submit" class="btn btn-success btn-s-xs">Register</button><br><br><br>Already have an account?</small></p>
          <a href="index.php" class="btn btn-lg btn-default btn-block">Sign in</a>
                  </form>
                </div>
                
    </div>
  </div>
</section>
</div>
<!-- footer -->

<!-- / footer -->
<!-- Bootstrap -->
<!-- App -->
<script src="js/app.v1.js"></script>
<script src="js/app.plugin.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	
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
  </body>
  </html>