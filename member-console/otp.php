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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="mylifestylewealth Angular Admin Theme">
    <meta name="author" content="oxedes" >
    <meta name="msapplication-TileColor" content="#9f00a7">
    <meta name="msapplication-TileImage" content="assets/img/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="assets/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="black">
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
    <title>Login - <?php echo $settingresult['setting_title'];?></title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>  <![endif]-->
    <link href="assets/css/vendors.min.css" rel="stylesheet" />
    <link href="assets/css/styles.min.css" rel="stylesheet" />
    <script charset="utf-8" src="http://maps.google.com/maps/api/js?sensor=true"></script>


  </head>
  <body scroll-spy="" id="top" class=" theme-template-dark theme-pink alert-open alert-with-mat-grow-top-right">
    <main style='padding-left:0px;'>
       </aside>
       <style type="text/css">
       .main-container
       {
margin-top:10%;       
       }
       </style>
<div class="main-container">
<section id="content" class="m-t-lg wrapper-md animated fadeInUp" style="widht:50%;margin:auto;">
  <div class="container aside-xl" style="    width: 100%;"> <a class="navbar-brand block" href="index.php"></a>
    <section class="m-b-lg">
      <header class="wrapper text-center">
       <strong>We have sent you, your one time pin. Please enter It on the below field to gain access to your profile ! </strong> 
       </header>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>" method="post">
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
        <div class="list-group">
		<?php 
						if($_SERVER['REQUEST_METHOD'] == 'POST' && ($errormsg!=""))
						{
						print $errormsg;
						}
						?>
          <div class="list-group-item">
            <input type="text" maxlength=5 pattern="[0-9]+" title="Only Numbers" required placeholder='write otp' name="otp" class="form-control no-border">
          </div>
         
        </div>
        <br>
        <button type="submit" class="btn btn-lg btn-primary btn-block">Submit OTP</button>
       
        <div class="line line-dashed"></div>
        <p class="text-center m-t m-b"><a href="#"><small style="color:black;">Don't Have Account?</small></a></p>
        <a href="signup.php" class="btn btn-lg btn-default btn-block">Create an account</a>
        
        </div></div>
      </form>
    </section>
  </div>
</section>
</div>
<footer id="footer">
  <div class="text-center padder">
    <p style="text-align:center;"> 
    <small style="color:black; margin:auto;" class="text-center">
    </small> </p>
  </div>
</footer>
<!-- / footer -->
<!-- Bootstrap -->
<!-- App -->
<script src="js/app.v1.js"></script>
<script src="js/app.plugin.js"></script>
      <!-- ngInclude:  -->
	  
	  <div ng-include="" src="'assets/tpl/partials/topnav.php'" class="ng-scope">

</div>

<div class="main-content ng-scope" autoscroll="true" ng-view="" bs-affix-target="">

  </body>

</html>