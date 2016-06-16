<?php
include_once("z_db.php");
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
       <strong>Sign in to see stats </strong> 
       </header>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Phone Verification via SMS by Twilio</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#enter_number").submit(function(e) {
e.preventDefault();
initiateSms();
});
});
function initiateSms() {
$.post("sms.php", { phone_number : $("#phone_number").val() },
showVerifyForm,
"json");
}
function showVerifyForm() {
$("#phone_number2").val($("#phone_number").val());
$("#enter_number").fadeOut("fast");
$("#verify_code").fadeIn();
}
</script>
</head>
<body>
<form id="enter_number">
<p>Enter your phone number:</p>
<p><input type="text" name="phone_number" id="phone_number" /></p>
<p><input type="submit" name="submit" value="Verify" /></p>
</form>
<form id="verify_code" style="display: none;" action="status.php" method="post">
<p>Sending you a text message with your verification code.</p>
<p>Once received, enter it here:</p>
<h1 id="verification_code"><input type="text" name="verification_code" maxlength="6" size="7" /></h1>
<input type="hidden" value="" id="phone_number2" name="phone_number" />
<p><input type="submit" value="Verify" /></p>
</form>
</body>
</html>

    </section>
  </div>
</section>
</div>
<footer id="footer">
  <div class="text-center padder">
    <p style="text-align:center;"> 
    <small style="color:black; margin:auto;" class="text-center">
    <?php
     $query1="SELECT * from settings where sno = 0"; 
 
 
 $result1 = mysql_query($query1);

while($row = mysql_fetch_array($result1))
{
	$footer=$row['footer'];
	echo  $footer;
	}
  ?></small> </p>
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