<?php
include_once ("z_db.php");
include_once ("z_db1.php");
// Inialize session
//session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
        print "
				<script language='javascript'>
					window.location = 'login.php';
				</script>
			";
}

$user_query = "SELECT * FROM users WHERE users_name='".$_SESSION['username']."'";      
$user_data = mysql_query($user_query);
$user_details_data = (object)mysql_fetch_array($user_data);

$start_date = new \DateTime();
$end_date = new \DateTime("tomorrow");

$payment_query = "SELECT SUM(payment_amount) total_pay FROM payments WHERE userid='".$user_details_data->users_id."' and payment_status = '1' and createdtime > '".$start_date->format('Y-m-d h:i:s')."' and createdtime < '".$end_date->format('Y-m-d h:i:s')."'";      
$payment_data = mysql_query($payment_query);
$payment_details_data = (object)mysql_fetch_array($payment_data);

$donation_query = "select * from payments where userid = '".$user_details_data->users_id."' and payment_status = '0'";
$donation_data = mysql_query($donation_query);
$donation_details_data = mysql_fetch_array($donation_data);
$reserve_block = false;
if(empty($donation_details_data)) { $reserve_block = true; }

?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="mylifestylewealth Angular Admin Theme">
    <meta name="author" content="Theme Guys - The Netherlands">
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
    <title>Reserved Payements - paydaeco</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>  <![endif]-->
    <link href="assets/css/vendors.min.css" rel="stylesheet" />
    <link href="assets/css/styles.min.css" rel="stylesheet" />
    <script charset="utf-8" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  </head>
  <body scroll-spy="" id="top" class=" theme-template-dark theme-pink alert-open alert-with-mat-grow-top-right">
    <main>
      <aside class="sidebar fixed" style="width: 260px; left: 0px; ">
        <div class="brand-logo">
         
            <img src="images/login_logo.png"> </div>
        <div class="user-logged-in">
          <div class="content">
            <div class="user-name">Paydae</div>
            
            
          </div>
        </div>
      <?php include_once ("sidebar.php"); ?>
	  </aside>
      </aside>
      <div class="main-container">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header pull-left">
              <button type="button" class="navbar-toggle pull-left m-15" data-activates=".sidebar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <ul class="breadcrumb">
                <li><a href="#/">PAYDAECO</a></li>
                <li class="active">Reserved Payments</li>
              </ul>
            </div>
            <ul class="nav navbar-nav navbar-right navbar-right-no-collapse">
              <li class="dropdown pull-right">
                <button class="dropdown-toggle pointer btn btn-round-sm btn-link withoutripple" data-template-url="assets/tpl/partials/dropdown-navbar.php"> <i class="md md-more-vert f20"></i> </button>
              </li>
              <li class="dropdown pull-right">
                <button class="dropdown-toggle pointer btn btn-round-sm btn-link withoutripple" data-template-url="assets/tpl/partials/theme-picker.php"> <i class="md md-settings f20"></i> </button>
              </li>
              <li navbar-search="" class="pull-right">
                <div>
                  <div class="mat-slide-right pull-right">
                    <form class="search-form form-inline pull-left ">
                      <div class="form-group">
                        <label class="sr-only" for="search-input">Search</label>
                        <input type="text" class="form-control" id="search-input" placeholder="Search" autofocus=""> </div>
                    </form>
                  </div>
                  <div class="pull-right">
                    <button class="btn btn-sm btn-link pull-left withoutripple"> <i class="md md-search f20"></i> </button>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
    <div class="main-content ng-scope" autoscroll="true" ng-view="" bs-affix-target=""><section class="messages ng-scope">
  <style>
    
    .alert-success {
    background-color: transparent !important;padding-left: 8px; padding-top: 0px; margin-bottom: 0px;
}
.col-lg-3 {
    width: 28%;
}
  
.fa {     padding-top: 15px;
    font-size: 47px;
}

  </style>

  

  
  
    
  
  <?php 
if(isset($_GET['id']))
{
    
    $data_id = $_GET['id'];
        
	$user_package = $user_details_data->users_package;	
    $q="SELECT * FROM  don_list WHERE auto_id=$data_id"; 
    $single_data = mysqli_query($con_don,$q);
    while($single_row = mysqli_fetch_array($single_data))
    { 
         $don_id = $single_row['auto_id'];
         $split_amount = $single_row['amount'];
         $donation_id = $single_row['id'];
		 
		 $user_id = $single_row['user_id'];
		 $q="SELECT * FROM  users where users_id = $user_id";		
		 $user_data = mysql_query($q); 
		 while($user_row = mysql_fetch_array($user_data))
		 {
		 	$users_donation = $user_row['users_donation'];
		 }
    }
    
    

?>
  
  <div class="page-header">
    <h1>
     Donation Split <?php echo "#".$donation_id;?>
    </h1>
  </div>
  
    <div class="row">
        <?php 
		$user_package_lower_limit = 0;
		$user_package_higher_limit = 0;
        $q="SELECT * FROM packages WHERE packages_status=1"; 
        $package_data = mysql_query($q);
        while($package_row = mysql_fetch_array($package_data))
        { 
            
             $package_name = $package_row['packages_packages'];
             $package_percentage = $package_row['packages_percent'];
             $minimum_donation = $package_row['packages_price'];
             $maximum_donation = $package_row['packages_price1'];
			 if($package_row['packages_id'] == $user_package){
				$user_package_lower_limit = $minimum_donation;
				$user_package_higher_limit = $maximum_donation;
			 }
             ?>
             <div class="col-md-3">
                <div style="background: white; border: 1px solid rgba(190, 190, 190, 0.43); padding: 10px; ">
                    <b style="font-size: 20px;"><?php echo $package_name;?></b>
                    <br>Percentage <?php echo $package_percentage;?>%
                    <br>Minimum Donation <?php echo $minimum_donation;?>
                    <br>Maximum Donation <?php echo $maximum_donation;?>
                </div>
            </div>

            <?php         
        }
		$user_package_higher_limit = $user_package_higher_limit - $payment_details_data->total_pay;
        ?>
    </div>
	<?php if(!$reserve_block) { ?>
  <h3 class="reserve_error">You got a pending reservation. Please pay it first. You can see it on <a href="transaction.php">Transaction Statement</a></h3>
  <?php } ?>
  <form class="add" action="BankingDetails.php?id=<?php echo $don_id;?>" method="post">
    <div class="row">
        
        
	<h3 id="package_error"></h3>
    <div class="col-lg-4"><br><br>
      Your split amount:
      
            <div class="form-group">
              <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
              <div class="input-group">
                 
                <input type="text" <?php if(!$reserve_block) { echo "disabled"; } ?> name="donate_amount" class="form-control" value="<?php echo $users_donation; ?>" id="exampleInputAmount" placeholder="Amount" required="required">
				<input type="hidden" name="min_amount" id="min_amount" value="<?php echo $users_donation; ?>" />
				<input type="hidden" name="max_amount" id="max_amount" value="<?php echo $user_package_higher_limit; ?>" />
				<input type="hidden" name="user_package" id="user_package" value="<?php echo $user_package; ?>" />
                <!--<div class="input-group-addon">.00</div>-->
              </div>
            </div>
   
    </div><br>
    
    
 </div>
 
   <div class="row">
  <div class="col-lg-4">
  
 <button type="submit" <?php if(!$reserve_block) { echo "disabled"; } ?> onClick="javascript:location.href='BankingDetails.php'" class="btn btn-primary" style="background:#00A65A;">RESERVE NOW</button>
 <input type="button" onClick="javascript:location.href='GiveHelp.php'" value="BACK" class="btn btn-primary" style="background:#3C8DBC;">
 
 
    </div>    </div>
  
  <input type="hidden" value="<?php echo $users_donation;?>" name="total_donation_amount">
  <input type="hidden" value="<?php echo $don_id;?>" name="don_id">
  <input type="hidden" value="<?php echo $donation_id;?>" name="id">
</form>
  
  <?php 
}
?>

</section>
</div>  </div>
    </main>
    <style>
    .glyphicon-spin-jcs {
      -webkit-animation: spin 1000ms infinite linear;
      animation: spin 1000ms infinite linear;
    }
    
    @-webkit-keyframes spin {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }
      100% {
        -webkit-transform: rotate(359deg);
        transform: rotate(359deg);
      }
    }
    
    @keyframes spin {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }
      100% {
        -webkit-transform: rotate(359deg);
        transform: rotate(359deg);
      }
    }
    </style>
    <label style="visibility: hidden; position: absolute; overflow-x: hidden; overflow-y: hidden; width: 0px; height: 0px; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-width: initial; border-color: initial; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; " tabindex="-1">upload
      <input type="file" ngf-select="">
    </label>
    <label style="visibility: hidden; position: absolute; overflow-x: hidden; overflow-y: hidden; width: 0px; height: 0px; border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none; border-width: initial; border-color: initial; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; " tabindex="-1">upload
      <input type="file" ngf-drop="" ngf-select="" ngf-drag-over-class="dragover" ngf-multiple="true" ngf-allow-dir="true" ngf-accept="'.jpg,.png,.gif'" multiple="multiple" accept=".jpg,.png,.gif">
    </label>
    
    
    <script charset="utf-8" src="assets/js/vendors.min.js"></script>
    <script charset="utf-8" src="assets/js/app.min.js"></script>
	<script>
		$("#exampleInputAmount").on("change", function() {
			var high_limit = parseInt($("#max_amount").val());
			var don_amount = parseInt($("#min_amount").val());
			var current_amount = parseInt($(this).val());
			if(current_amount > high_limit) {
				alert("You are exceeding daily limit");
				$(this).val("");
				return;
			}
			if(current_amount > don_amount) {
				alert("You are exceeding user amount");
				$(this).val("");
				return;
			} 
		});
	</script>
  </body>

</html>