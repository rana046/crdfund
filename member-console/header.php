<?php
				include('z_db.php');
				if(!isset($_SESSION['username'])) 
				{
					echo "<script>window.location='index.php'</script>";
				}
				else 
				{
					$user_select = "select * from users where users_name = '".$_SESSION['username']."'";
					$user_result = mysql_query($user_select);
					$user_record = mysql_fetch_array($user_result);
					
				}
				
	if(isset($_SESSION['username'])) 
	{
	$update =mysql_query("update  users  set users_online='1'  where users_name = '".$_SESSION['username']."' ");
	
	}
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
	<style>
		.brand-logo img {
			width:130px;
		}
	</style>
  </head>
  <body scroll-spy="" id="top" class=" theme-template-dark theme-pink alert-open alert-with-mat-grow-top-right">
    <main>
      <aside class="sidebar fixed">
        <div class="brand-logo">
         <img src="images/login_logo.png"></div>
        <div class="user-logged-in">
          <div class="content">
            <div class="user-name"><?php echo $settingresult['setting_title'];?><span class="text-muted f9"><?php echo $user_record['users_name'];?></span></div>
            
            
          </div>
        </div>
<ul>
    
    <li menu-toggle="" path="/apps" name="My Profile" icon="md md-camera" class="ng-isolate-scope">
  <a href="#" data-toggle="collapse" data-target="#MyProfile" aria-expanded="false" aria-controls="MyProfile" class="collapsible-header waves-effect ng-binding" ng-class="{active: isOpen()}"><i class="md md-camera"></i>&nbsp;My Profile</a>
  <ul id="MyProfile" class="collapse" ng-class="{in: isOpen()}" ng-transclude="">
        <li menu-link="" href="userprofile" name="User Profile" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="userprofile.php"><span class="ng-scope">
        User Profile
      </span></a>
</li>
        <!--<li menu-link="" href="userverification" name="User Verification" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="verification_process.php"><span class="ng-scope">
        Verification Center
      </span></a>
</li>-->
	   <!--<li menu-link="" href="messagechat" name="User Profile" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="messagechat.php"><span class="ng-scope">
        Message &amp; Chat
      </span></a>
</li>
	   <li menu-link="" href="logout.php" name="User Profile" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="logout.php"><span class="ng-scope">
        Logout
      </span></a>
</li>-->
    </ul>
</li>
    <li menu-toggle="" path="/ui-elements" name="Personal Account" icon="md md-photo" class="ng-isolate-scope">
  <a href="#" data-toggle="collapse" data-target="#PersonalAccount" aria-expanded="false" aria-controls="PersonalAccount" class="collapsible-header waves-effect ng-binding" ng-class="{active: isOpen()}"><i class="md md-photo"></i>&nbsp;Personal Account</a>
  <ul id="PersonalAccount" class="collapse" ng-class="{in: isOpen()}" ng-transclude="">
      <li menu-link="" href="GiveHelp" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="GiveHelp.php"><span class="ng-scope">Give Help</span></a>
</li>
      <li menu-link="" href="transaction" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="transaction.php"><span class="ng-scope">Transaction Statement</span></a>
</li>
<li menu-link="" href="transaction" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="payment_proof.php"><span class="ng-scope">Payment Proof</span></a>
</li>

<li menu-link="" href="transaction" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="payment_request.php"><span class="ng-scope">Payment Request</span></a>
</li>
<li menu-link="" href="transaction" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="dashboard.php"><span class="ng-scope">Account Status</span></a>
</li>
    </ul>
</li>
    <li menu-toggle="" path="/forms" name="MiRewards" icon="md md-input" class="ng-isolate-scope">
  <a href="#" data-toggle="collapse" data-target="#MiRewards" aria-expanded="false" aria-controls="MiRewards" class="collapsible-header waves-effect ng-binding" ng-class="{active: isOpen()}"><i class="md md-input"></i>&nbsp;MiRewards</a>
  <ul id="MiRewards" class="collapse" ng-class="{in: isOpen()}" ng-transclude="">
      <li menu-link="" href="downline" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="bonuses.php"><span class="ng-scope">Bonuses</span></a>
</li>
      <li menu-link="" href="withdrawl" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="withdrawl.php"><span class="ng-scope">Bonuses Withdrawl</span></a>
</li>
      <li menu-link="" href="downline" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="downline.php"><span class="ng-scope">Downline</span></a>
</li>
    <li menu-link="" href="downline" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="testimonial.php"><span class="ng-scope">Testimonial Reward</span></a>
</li>
    </ul>
</li>
    <li menu-link="" href="#/support" icon="md md-favorite-outline" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="support.php"><i class="md md-favorite-outline"></i>&nbsp;<span class="ng-scope">Support Desks</span><div class="ripple-wrapper"></div></a>
</li>
    
  </ul></aside>
       
  <div class="main-container">
      <!-- ngInclude:  -->
<style type="text/css">
.profile-header-photo
{
background:url('images/<?php echo $user_record['users_profile'];?>') !important;
background-repeat: no-repeat;
width: 100%;
background-size: cover;
}	
.btn-black
{
background-color: black;
}
.cursordisable
{
cursor:wait;
   pointer-events: none;
    opacity: 0.4;
}
</style>	
      <!-- ngView:  -->
     