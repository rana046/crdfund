<?php
include_once("z_db.php");
ob_start();
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['otp']))
{
     session_start();
    $otp=$_POST['otp'];
    if ( strlen($otp) < 5 ){
$msg="OTP must be 5 char legth<BR>";
$status= "NOTOK";
$errormsg= "<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <i class='fa fa-ban-circle'></i><strong>Please Fix Below Errors : </br></strong>".$msg."</div>";
                    }
else
{
     session_start();
   $query ="SELECT * FROM users WHERE (otp = '" . mysql_real_escape_string($_POST['otp']) . "') AND (users_name = '" . mysql_real_escape_string($_SESSION['username_for_otp']) . "') AND (f_sign_in = '" . mysql_real_escape_string("0") . "') ";
   $stmt_otp = mysql_query($query);
    $num=mysql_num_rows($stmt_otp);
   
    
if (($num) == 1) {
    $result_signin=mysql_fetch_array($stmt_otp);
 $diff_time = $result_signin['otp_time'];
  $now = strtotime(date('Y-m-d H:i:s'));
  $event_time = strtotime($diff_time);
 $y=abs(($now-$event_time)/60);

// Check mins and hours
if( $y > 15) {
    
    $msg="OTP time experied<BR>";
    $errormsg= "
<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <i class='fa fa-ban-circle'></i><strong>Please Fix Below Errors : </br></strong>".$msg."</div>";
} else {
    session_start();
   // $_SESSION['username_for_otp']=$_SESSION['username'];
    $user=$_SESSION['username_for_otp'];
    $_SESSION['username']=$user;
      // $sql="update users set otp = '',otp_time='$t',f_sign_in=1 where users_name = '$user'";
      
      $up_date = mysql_query("update users set otp = '',otp_time='$t' where users_name = '$user'"); 
    print "	<script language='javascript'>
					window.location = 'userprofile.php?page=dashboard%location=index.php';
				</script>";
}
}
else{$msg="OTP is wrong<BR>";
    $errormsg= "
<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <i class='fa fa-ban-circle'></i><strong>Please Fix Below Errors : </br></strong>".$msg."</div>";}
}
}
 //printing error if found in validation
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
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
				<li class="active">Pin Number</li>
			</ul>
			<!-- fieldsets -->
			<?php 
						if($_SERVER['REQUEST_METHOD'] == 'POST' && ($errormsg!=""))
						{
						print $errormsg;
						}
						?>
			
			<fieldset>
				<h2 class="fs-title">Pin Number Verification</h2>
				<h3 class="fs-subtitle">This is step 3</h3>
				<input type="text" name="otp" type="text" maxlength=5 pattern="[0-9]+" title="Only Numbers" required  placeholder="One Time Pin" />
				<a href="mobile_enter.php" class="previous action-button" style="text-decoration:none; padding:11px 18px;">Previous</a>
				<input type="submit" name="submit" class="submit action-button" value="Submit" />
			</fieldset>
		</form>
		
    
<script src='js/jquery.min.js'></script>
<script src='js/jquery.easing.min.js'></script>	


  </body>

</html>