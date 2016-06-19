<?php
include_once("z_db.php");
$sql="SELECT maintain FROM  6btb_setting";
		$result = mysql_query($sql);

    $main=0;
    $row = mysql_fetch_array($result);
       $main= $row['maintain'];
   
	if($main==1 || $main==3)
	{
	print "
				<script language='javascript'>
					window.location = 'maintain.php';
				</script>
			";
	}
	
if(isset($_SESSION['username'])) {
   
       
print "
				<script language='javascript'>
					window.location = 'dashboard.php';
				</script>"; 	
	
	
        }

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']))
{
$status = "OK"; //initial status
$msg="";
	$username=mysql_real_escape_string($_POST['username']); //fetching details through post method
     $password = mysql_real_escape_string($_POST['password']);

if ( strlen($username) < 6 ){
$msg=$msg."Username must be more than 5 char legth<BR>";
$status= "NOTOK";}

if ( strlen($password) < 6 ){ //checking if password is greater then 8 or not
$msg=$msg."Password must be more than 5 char legth<BR>";
$status= "NOTOK";}

if($status=="OK"){

// Retrieve username and password from database according to user's input, preventing sql injection
//echo "SELECT * FROM users WHERE (users_email = '" . mysql_real_escape_string($_POST['username']) . "') AND (users_pass = '" . mysql_real_escape_string($_POST['password']) . "') AND (active = '" . mysql_real_escape_string("1") . "') AND (level = '" . mysql_real_escape_string("2") . "')";

$query ="SELECT * FROM users WHERE (users_name = '" . mysql_real_escape_string($_POST['username']) . "') AND (users_pass = '" . mysql_real_escape_string($_POST['password']) . "') AND (users_status = '" . mysql_real_escape_string("1") . "') ";
if ($stmt = mysql_query( $query)) {

    /* execute query */
    //mysql_stmt_execute($stmt);

    /* store result */
   // mysql_stmt_store_result($stmt);

    $num=mysql_num_rows($stmt);

    /* close statement */
   // mysql_stmt_close($stmt);
}
//mysql_close($con);
// Check username and password match

if (($num) == 1) {
    $result_signin=mysql_fetch_array($stmt);
////otp sending code by saurabh shukla////

if($result_signin['f_sign_in']==0)
{
    
     session_start();
        // Set username session variable
        $_SESSION['username_in_mobile'] = $_POST['username'];
    print "	<script language='javascript'>
					window.location = 'mobile_enter.php?page=dashboard%location=index.php';
				</script>";
}


////otp sending code by saurabh shukla////
else{
     session_start();
        // Set username session variable
        $_SESSION['username'] = $username;
		
        // Jump to secured page
		print "	<script language='javascript'>
					window.location = 'userprofile.php?page=dashboard%location=index.php';
				</script>";
}


}



else{
$errormsg= "
<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <i class='fa fa-ban-circle'></i><strong>Please Fix Below Errors : </br></strong>Username And Password Does Not Match Or Your Account Is Inactive.</div>"; //printing error if found in validation
				
}} 
else {
        
$errormsg= "
<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <i class='fa fa-ban-circle'></i><strong>Please Fix Below Errors : </br></strong>".$msg."</div>"; //printing error if found in validation
				
	 
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
				<li>Mobile</li>
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
				<h2 class="fs-title">Login Details</h2>
				<h3 class="fs-subtitle">This is step 1</h3>
				<input type="text" name="username" placeholder="Username" />
				<input type="password" name="password" placeholder="Password" />
				<input type="submit" name="next" class="next action-button" value="Next" />
			</fieldset>
		</form>

<!-- App -->
<script src='js/jquery.min.js'></script>
<script src='js/jquery.easing.min.js'></script>		
	  

  </body>

</html>