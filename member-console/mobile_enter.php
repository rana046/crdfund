<?php
include_once("z_db.php");
ob_start();
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['phone']))
{
   session_start();
  
    $query ="SELECT * FROM users WHERE (users_name = '" . mysql_real_escape_string($_SESSION['username_in_mobile']) . "') AND (users_phone = '" . mysql_real_escape_string($_POST['phone']) . "') AND (users_status = '" . mysql_real_escape_string("1") . "') ";
if ($stmt = mysql_query( $query)) {
    $num=mysql_num_rows($stmt);
if (($num) == 1) {
    $result_signin=mysql_fetch_array($stmt);
         $phone= $result_signin['users_phone'];
        $_SESSION['fst_sign']=$result_signin['f_sign_in'];
       $_SESSION['username_for_otp'] = $_SESSION['username_in_mobile'];
     
	$user=$_SESSION['username_for_otp'];
    $five_digit_random_number = mt_rand(10000, 99999);
    $url = 'https://rest.nexmo.com/sms/json?' . http_build_query(
    array(
      'api_key' =>  'a261a0e1',
      'api_secret' => '9d79ec3113598f42',
      'to' => $phone,
      'from' => 'Paydae',
     'text' => 'Dear Member, for your online transaction. Please use this Paydae Secure Code, your One-Time Password is'.$five_digit_random_number.'use within 15 minutes. Thank You!' 
       
    )
);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$date= date('Y-m-d H:i:s');
          $up_date = mysql_query("update users set otp = '$five_digit_random_number',otp_time='$date' where users_name = '$user'");
  $decoded_response = json_decode($response, true);
  error_log('You sent ' . $decoded_response['message-count'] . ' messages.');
  foreach ( $decoded_response['messages'] as $message ) {
      if ($message['status'] == 0) {
          error_log("Success " . $message['message-id']);
      } else {
          error_log("Error {$message['status']} {$message['error-text']}");
      }
  }
  print "	<script language='javascript'>
					window.location = 'otp.php?page=dashboard%location=index.php';
				</script>"; 

}
else{$msg="Please use the same cellphone number that you enter at the time of registartion <BR>";
$status= "NOTOK";
$errormsg= "<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <i class='fa fa-ban-circle'></i><strong>Please Fix Below Errors : </br></strong>".$msg."</div>";}
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="chrome=1">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login - <?php echo $settingresult['setting_title'];?></title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
  <body>

		<!-- multistep form -->
		<form id="msform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>" method="post">
			<!-- progressbar -->
			<ul id="progressbar">
				<li class="active">Login Details</li>
				<li class="active">Mobile</li>
				<li>Pin Number</li>
			</ul>
			<!-- fieldsets -->
			<?php 
						if($_SERVER['REQUEST_METHOD'] == 'POST' && ($errormsg!=""))
						{
						print $errormsg;
						}
						?>
			<fieldset>
				<h2 class="fs-title">Mobile Verification</h2>
				<h3 class="fs-subtitle">This is step 2</h3>
				<input type="text" maxlength=13 pattern="[0-9]+" title="Only Numbers" required placeholder='Mobile Number' name="phone" />
				<a href="index.php" class="previous action-button" style="text-decoration:none; padding:11px 18px;">Previous</a>
				<input type="submit" name="next" class="next action-button" value="Next" />
			</fieldset>
		</form>

<script src='js/jquery.min.js'></script>
<script src='js/jquery.easing.min.js'></script>		


  </body>

</html>