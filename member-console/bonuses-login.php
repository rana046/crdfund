<?php
include_once ("z_db.php");
// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
        print "
				<script language='javascript'>
					window.location = 'index.php';
				</script>
			";
}
$payto=$_SESSION['username'];



if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['todo']) && (($_POST['todo'])=="paymentpost"))
{

$username=mysqli_real_escape_string($con,$_SESSION['username']);

$status = "OK"; //initial status
$msg="";



$rr=mysqli_query($con,"SELECT Id FROM affiliateuser WHERE username = '$username'");
$r = mysqli_fetch_row($rr);
$uid = $r[0];

$rr=mysqli_query($con,"SELECT pcktaken FROM affiliateuser WHERE username = '$username'");
$r = mysqli_fetch_row($rr);
$pc = $r[0];

$rr=mysqli_query($con,"SELECT mpay FROM packages WHERE id='$pc'");
$r = mysqli_fetch_row($rr);
$mpay = $r[0];

$rr=mysqli_query($con,"SELECT tamount FROM affiliateuser WHERE username = '$username'");
$r = mysqli_fetch_row($rr);
$nr = $r[0];

if($nr<$mpay){
$msg=$msg."You are not eligible for payment!!!! Contact support for more info.<BR>";
$status= "NOTOK";
}

if($status=="OK")
{
$res11=mysqli_query($con,"update affiliateuser set tamount=0 where username='$username'");
$res1=mysqli_query($con,"INSERT INTO payments (userid, payment_amount, createdtime) VALUES ('$uid', '$nr', NOW())");

if($res1)
{
$errormsg= "
<div class='alert alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <i class='fa fa-ban-circle'></i><strong>Success : </br></strong>Your Payment Request Has Been Sent! Payment Will be Processed After Successful Verification On Time.</div>"; //printing error if found in validation

}
else
{
$errormsg= "
<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <i class='fa fa-ban-circle'></i><strong>Please Fix Below Errors : </br></strong>Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help. </div>"; //printing error if found in validation
				
	 
}


} 
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
  
<!-- Mirrored from www.theme-guys.com/mylifestylewealth/html/ui-elements-grid.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Apr 2016 22:29:24 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="mylifestylewealth Angular Admin Theme">
    <meta name="author" content="Theme Guys - The Netherlands">
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
    <title>Grid - mylifestylewealth</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>  <![endif]-->
    <link href="assets/css/vendors.min.css" rel="stylesheet" />
    <link href="assets/css/styles.min.css" rel="stylesheet" />
    <script charset="utf-8" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	
<link rel="stylesheet" href="css/app.v1.css" type="text/css" />
<!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
  
  </head>
  <body scroll-spy="" id="top" class=" theme-template-dark theme-pink alert-open alert-with-mat-grow-top-right">
    <main>
      <aside class="sidebar fixed" style="width: 260px; left: 0px; ">
        <div class="brand-logo">
         <img src="images/login_logo.png"></div>
        <div class="user-logged-in">
          <div class="content">
            <div class="user-name">BRANDWORKDESIGNS <span class="text-muted f9">admin</span></div>
            
          </div>
        </div>
     <ul>
    <li menu-link="" href="index.php" icon="md md-blur-on" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}"  href="index.php" ><i class="md md-blur-on"></i>&nbsp;<span class="ng-scope">Dashboard</span><div class="ripple-wrapper"></div></a>
</li>
    <li menu-toggle="" path="/apps" name="My Profile" icon="md md-camera" class="ng-isolate-scope">
  <a href="#" data-toggle="collapse" data-target="#MyProfile" aria-expanded="false" aria-controls="MyProfile" class="collapsible-header waves-effect ng-binding" ng-class="{active: isOpen()}"><i class="md md-camera"></i>&nbsp;My Profile</a>
  <ul id="MyProfile" class="collapse" ng-class="{in: isOpen()}" ng-transclude="">
        <li menu-link="" href="userprofile" name="User Profile" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="userprofile.php"><span class="ng-scope">
        User Profile
      </span></a>
</li>
	   <li menu-link="" href="messagechat" name="User Profile" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="messagechat.php"><span class="ng-scope">
        Message &amp; Chat
      </span></a>
</li>
	   <li menu-link="" href="login" name="User Profile" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="login.php"><span class="ng-scope">
        Login
      </span></a>
</li>
    </ul>
</li>
    <li menu-toggle="" path="/ui-elements" name="Personal Account" icon="md md-photo" class="ng-isolate-scope">
  <a href="#" data-toggle="collapse" data-target="#PersonalAccount" aria-expanded="false" aria-controls="PersonalAccount" class="collapsible-header waves-effect ng-binding" ng-class="{active: isOpen()}"><i class="md md-photo"></i>&nbsp;Personal Account</a>
  <ul id="PersonalAccount" class="collapse" ng-class="{in: isOpen()}" ng-transclude="">
      <li menu-link="" href="GiveHelp" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="GiveHelp.php"><span class="ng-scope">Give Help</span></a>
</li>
      <li menu-link="" href="ReservedPayments" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="ReservedPayments.php"><span class="ng-scope">Reserved Payments</span></a>
</li>
      <li menu-link="" href="congratulations" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="congratulations.php"><span class="ng-scope">Congratulations</span></a>
</li>
      <li menu-link="" href="transaction" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="transaction.php"><span class="ng-scope">Transaction Statement</span></a>
</li>
      <li menu-link="" href="BankingDetails" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="BankingDetails.php"><span class="ng-scope">Banking Details</span></a>
</li>
    </ul>
</li>
    <li menu-toggle="" path="/forms" name="MiRewards" icon="md md-input" class="ng-isolate-scope">
  <a href="#" data-toggle="collapse" data-target="#MiRewards" aria-expanded="false" aria-controls="MiRewards" class="collapsible-header waves-effect ng-binding" ng-class="{active: isOpen()}"><i class="md md-input"></i>&nbsp;MiRewards</a>
  <ul id="MiRewards" class="collapse" ng-class="{in: isOpen()}" ng-transclude="">
      <li menu-link="" href="downline" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="bonuses.php"><span class="ng-scope">Bonuses</span></a>
</li>
      <li menu-link="" href="downline" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="downline.php"><span class="ng-scope">Downline</span></a>
</li>
    </ul>
</li>
    <li menu-link="" href="#" icon="md md-insert-chart" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="myfollowers.php"><i class="md md-insert-chart"></i>&nbsp;<span class="ng-scope">My Followers</span></a>
</li>
    <li menu-link="" href="#/newsupdates" icon="md md-insert-chart" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="newsupdates.php"><i class="md md-insert-chart"></i>&nbsp;<span class="ng-scope">News Updates</span></a>
</li>
    <li menu-link="" href="#/support" icon="md md-favorite-outline" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="support.php"><i class="md md-favorite-outline"></i>&nbsp;<span class="ng-scope">Support Desks</span><div class="ripple-wrapper"></div></a>
</li>
    
  </ul></aside>
       </aside>
<div class="main-container">

 
<section class="vbox">
  <header class="bg-primary header header-md navbar navbar-fixed-top-xs box-shadow">
    <div class="navbar-header aside-md dk"> <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav"> <i class="fa fa-bars"></i> </a> 
	<a href="#" class="navbar-brand"><img src="images/logo.png" class="m-r-sm"><?php $query="SELECT header from settings where sno=0"; 
 
 
 $result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
	$header="$row[header]";
	print $header;
	}
  ?></a> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a> </div>
  
    
    <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
      
      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/a0.jpg"> </span> <?php
		  $sql="SELECT fname FROM  affiliateuser WHERE username='".$_SESSION['username']."'";
		  if ($result = mysqli_query($con, $sql)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_row($result)) {
        print $row[0];
    }

}

   
	   
	   ?><b class="caret"></b> </a>
        <ul class="dropdown-menu animated fadeInRight">
          <span class="arrow top"></span>
          
          <li> <a href="profile.php">Profile</a> </li>
          <li> <a href="notifications.php"> Notifications </a> </li>
          <li> <a href="contact.php">Help</a> </li>
          <li class="divider"></li>
          <li> <a href="logout.php" data-toggle="ajaxModal" >Logout</a> </li>
        </ul>
      </li>
    </ul>
  </header>
  <section>
    <section class="hbox stretch">
      <!-- .aside -->
      <aside class="bg-light aside-md hidden-print" id="nav">
        <section class="vbox">
          <section class="w-f scrollable">
            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-color="#333333">
              <div class="clearfix wrapper dk nav-user hidden-xs">
                <div class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb avatar pull-left m-r"> <img src="images/a0.jpg"> <i class="on md b-black"></i> </span> <span class="hidden-nav-xs clear"> <span class="block m-t-xs"> <strong class="font-bold text-lt"><?php
		  $sql="SELECT fname,country,pcktaken FROM  affiliateuser WHERE username='".$_SESSION['username']."'";
		  if ($result = mysqli_query($con, $sql)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_row($result)) {
        print $row[0];
		$coun=$row[1];
		$pcktaken=$row[2];
		 $sql2="SELECT name FROM packages WHERE id=$pcktaken";
		 if ($result2 = mysqli_query($con, $sql2)) {
		  while ($row2 = mysqli_fetch_row($result2)) {
		 
		 $pkname=$row2[0];
		 }
		 }
		
    }

}

   
	   
	   ?></strong> <b class="caret"></b> </span> <span class="text-muted text-xs block"><?php print "$pkname Member"; ?></span> </span> </a>
                  <ul class="dropdown-menu animated fadeInRight m-t-xs">
                    <span class="arrow top hidden-nav-xs"></span>
                    
                    <li> <a href="profile.php">Profile</a> </li>
                    <li> <a href="notifications.php">  Notifications </a> </li>
                    <li> <a href="contact.php">Help</a> </li>
                    <li class="divider"></li>
                    <li> <a href="logout.php" data-toggle="ajaxModal" >Logout</a> </li>
                  </ul>
                </div>
              </div>
              <!-- nav -->
              <nav class="nav-primary hidden-xs">
                <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
                <ul class="nav nav-main" data-ride="collapse">
                  <li class="active"> <a href="#" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Dashboard</span> </a> </li>
                  
                  <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-lab icon"> </i> <span class="font-bold">Account</span> </a>
                    <ul class="nav dk">
                     <li class="active" > <a href="downline-login.php" class="auto"> <i class="i i-dot"></i> <span>Downline/Earnings</span> </a> </li>
                       <li class="active" > <a href="bonuses-login.php" class="auto"> <i class="i i-dot"></i> <span>Bonuses</span> </a> </li>
                      
                      
                      
                      <li > <a href="#" class="auto"> <i class="i i-dot"></i> <span>Invoice/Account Status</span> </a> </li>
                      <li> <a href="#" class="auto"> <i class="i i-dot"></i> <span>Payments History</span> </a> </li>
                    </ul>
                  </li>
                  
                  <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-grid2 icon"> </i> <span class="font-bold">Help</span> </a>
                    <ul class="nav dk">
                      <li > <a href="#" class="auto"><i class="i i-dot"></i> <span>Notifications</span> </a> </li>
                      <li > <a href="#" class="auto"> <i class="i i-dot"></i> <span>Contact</span> </a> </li>
                    </ul>
                  </li>
                </ul>
                <div class="line dk hidden-nav-xs"></div>
                
                
              </nav>
              <!-- / nav -->
            </div>
          </section>
          <footer class="footer hidden-xs no-padder text-center-nav-xs"> <a href="logout.php" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs"> <i class="i i-logout"></i> </a> <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a> </footer>
        </section>
      </aside>
      <!-- /.aside -->
      <section id="content">
        <section class="hbox stretch">
          <section>
            <section class="vbox">
              <section class="scrollable padder">
                <section class="row m-b-md">
                  <div class="col-sm-6">
				  
                    <h3 class="m-b-xs text-black">Dashboard</h3>
                    <small>Welcome back, <?php
		  $sql="SELECT fname FROM  affiliateuser WHERE username='".$_SESSION['username']."'";
		  if ($result = mysqli_query($con, $sql)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_row($result)) {
        print $row[0];
    }

}
if($_SERVER['REQUEST_METHOD'] == 'POST')
						{
						print $errormsg;
						}
   
	   
	   ?>, <i class="fa fa-map-marker fa-lg text-primary"></i> <?php print $coun ?></small> </div>
	   
                  <div class="col-sm-6 text-right text-left-xs m-t-md">
				  
                    
                    <a href="#" class="btn btn-icon b-2x btn-default btn-rounded hover"><i class="i i-bars3 hover-rotate"></i></a> <a href="#nav, #sidebar" class="btn btn-icon b-2x btn-info btn-rounded" data-toggle="class:nav-xs, show"><i class="fa fa-bars"></i></a> </div>
                </section>
                <div class="row">
				<div class="col-sm-12">
				
                      <div class="panel b-a">
                        <div class="row m-n">
                        
                          <div class="col-md-6 b-b">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i>
                                <i class="i i-users2 i-sm text-white"></i>
                              </span>
                              <span class="clear">
							  <?php
							  $sqlquery="SELECT username,country,doj,pcktaken FROM affiliateuser where referedby='".$_SESSION['username']."' ORDER BY Id DESC LIMIT 1"; //fetching website from databse
$rec2=mysqli_query($con,$sqlquery);
$row2 = mysqli_fetch_row($rec2);
$referusername=$row2[0];
$refcountry=$row2[1];
$refdate=$row2[2];
$refpckid=$row2[3];
$sqlquery11="SELECT name FROM packages where id = $refpckid"; //fetching no of days validity from package table from databse
$rec211=mysqli_query($con,$sqlquery11);
@$row211 = mysqli_fetch_row($rec211);
$refpckname=$row211[0]; //assigning we
							  
							  ?>
                                <span class="h3 block m-t-xs text-success"><?php print $referusername; ?></span>
                                <small class="text-muted text-u-c">Last Referral Username</small>
                              </span>
                            </a>
                          </div>
						    <div class="col-md-6 b-b b-r">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-danger hover-rotate"></i>
                                <i class="i i-plus2 i-1x text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-danger"><?php print $refpckname; ?></span>
                                <small class="text-muted text-u-c">Package Purchased</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-6 b-b b-r">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i>
                                <i class="i i-location i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-info"><?php print $refcountry; ?><span class="text-sm"></span></span>
                                <small class="text-muted text-u-c">location</small>
                              </span>
                            </a>
                          </div>
                          <div class="col-md-6 b-b">
                            <a href="#" class="block padder-v hover">
                              <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i>
                                <i class="i i-alarm i-sm text-white"></i>
                              </span>
                              <span class="clear">
                                <span class="h3 block m-t-xs text-primary"><?php print $refdate; ?></span>
                                <small class="text-muted text-u-c">Date</small>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
					
				<div class="col-lg-12">
                <section class="panel panel-default">
                  <div class="panel-body">
                    <?php $query="SELECT id,fname,email,doj,active,username,address,pcktaken,tamount FROM  affiliateuser where username = '".$_SESSION['username']."'"; 
 
 
 $result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
 $aid="$row[id]";
 $regdate="$row[doj]";
 $name="$row[fname]";
 $address="$row[address]";
 $acti="$row[active]";
 $pck="$row[pcktaken]";
 $ear="$row[tamount]";
 
 }
 ?> 
 <?php $query="SELECT * FROM  packages where id=$pck"; 
 
 
 $result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
 $pname="$row[name]";
 $pdetails="$row[details]";
 $pprice="$row[price]";
 $pcur="$row[currency]";
 $ptax="$row[tax]";
 $mpay="$row[mpay]";
 }
 @$left=$mpay-$ear; 
@$pro=(($ear/$mpay)*100);
 ?>
 
                  <footer class="panel-footer bg-info text-center">
                    <div class="row pull-out">
                      <div class="col-xs-6">
                        <div class="padder-v"> <span class="m-b-xs h3 block text-white"><?php @print $pcur ?><?php print $ear ?></span> <small class="text-muted">Earnings</small> </div>
                      </div>
                      <div class="col-xs-6 dk">
					  <?php
$result = mysqli_query($con,"SELECT count(*) FROM  affiliateuser where referedby = '".$_SESSION['username']."'");
$row = mysqli_fetch_row($result);
$numrows = $row[0];

?>
                        <div class="padder-v"> <span class="m-b-xs h3 block text-white"><?php print $numrows ?></span> <small class="text-muted">Referrals (direct) </small> </div>
                      </div>
                      
                    </div>
                  </footer>
				     <section class="panel panel-default" id="progressbar">
                  <header class="panel-heading">
                    <ul class="nav nav-pills pull-right">
                      
                    </ul>
					<div class="form-group">
					  <input type="hidden" name="todo" value="post">
                        <label>Your Referral Invite URL</label>
                        <input type="text" value="<?php $query121="SELECT * FROM  settings"; $result121 = mysqli_query($con,$query121);
$i=0;
while($row121 = mysqli_fetch_array($result121))
{
	
	
	$wlink="$row121[wlink]";
	
	}
				
					  
		$pathu="/User/signup.php?aff=";		 print $wlink.$pathu.$_SESSION['username'] ?>" class="form-control" placeholder="Your Invite URL" name="inviteurl" >
                      </div>
                    Next Payment Progress bar </header>
                  <ul class="list-group">
                    
                    <li class="list-group-item">
                      <div class="progress progress-sm m-t-sm">
                        <div class="progress-bar bg-primary" data-toggle="tooltip" data-original-title="<?php print $pro ?>%" style="width: <?php print $pro ?>%">
						
						</div>
						
                      </div>
					  
                      
                    </li>
					<br/>
					<h3 align="center"><?php 
					
					
					if($left<=0)
					{
					$congomsg1="Congratulations you have reached minimum payout!!!! You can submit request for payment. </br>";
					print $congomsg1;
					$congomsg2="<form action='"; 
					print $congomsg2;
					echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8");
					$congomsg3="' method='post'></br><input type='hidden' name='todo' value='paymentpost'><button type='submit' class='btn btn-success btn-s-xs'>Click Here To Send Payment Request</button>  </form> ";
					print $congomsg3;
					}
					
					else
					{
					print " You need to earn <b>$pcur $left</b> more to become eligible for payment. ";
					}
					
					?></h3>
                    
                  </ul>
                </section>
                </section>
              </div>

                  
                  <div class="col-md-6 col-sm-6">
                    <div class="panel b-a">
						  <?php $query="SELECT * FROM  settings"; 
 
 
 $result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result))
{
 $fblink="$row[fblink]";
 $twilink="$row[twitterlink]";
 
 }
 ?>
                      <div class="panel-heading no-border bg-primary lt text-center"> <a href="<?php print $fblink ?>"> <i class="fa fa-facebook fa fa-3x m-t m-b text-white"></i> </a> </div>
                      <div class="padder-v text-center clearfix">
                        <div class="col-xs-6 b-r">
						<div class="h3 font-bold">Like</div>
                          <small class="text-muted">us on facebook</small> 
                          </div>
                        <div class="col-xs-6">
						<div class="h3 font-bold">Right</div>
                          <small class="text-muted">now</small>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="panel b-a">
                      <div class="panel-heading no-border bg-info lter text-center"> <a href="<?php print $twilink ?>"> <i class="fa fa-twitter fa fa-3x m-t m-b text-white"></i> </a> </div>
                      <div class="padder-v text-center clearfix">
                        <div class="col-xs-6 b-r">
                          <div class="h3 font-bold">Follow</div>
                          <small class="text-muted">us on twitter</small> </div>
                        <div class="col-xs-6">
                          <div class="h3 font-bold">Right</div>
                          <small class="text-muted">now</small> </div>
                      </div>
                    </div>
                  </div>
               
                </div>
                
                
              
            </section>
          </section>

        </section>
        <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>
    </section>
  </section>
</section>
<!-- Bootstrap -->
<!-- App -->
<script src="js/app.v1.js"></script>
<script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
<script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
<script src="js/charts/flot/jquery.flot.min.js"></script>
<script src="js/charts/flot/jquery.flot.tooltip.min.js"></script>
<script src="js/charts/flot/jquery.flot.spline.js"></script>
<script src="js/charts/flot/jquery.flot.pie.min.js"></script>
<script src="js/charts/flot/jquery.flot.resize.js"></script>
<script src="js/charts/flot/jquery.flot.grow.js"></script>
<script src="js/charts/flot/demo.js"></script>
<script src="js/calendar/bootstrap_calendar.js"></script>
<script src="js/calendar/demo.js"></script>
<script src="js/sortable/jquery.sortable.js"></script>
<script src="js/app.plugin.js"></script>
</body>
</html>