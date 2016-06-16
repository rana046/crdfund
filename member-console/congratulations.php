<?php
include_once ("z_db.php");
include_once ("z_db1.php");
include_once ("z_db2.php");
// Inialize session
//session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
        print "
				<script language='javascript'>
					window.location = 'index.php';
				</script>
			";
}


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
    <title>Paydaeco</title>
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
      <!-- ngInclude:  --><div ng-include="" src="'assets/tpl/partials/topnav.php'" class="ng-scope"><nav class="navbar navbar-default navbar-fixed-top ng-scope" ng-class="{scroll: (scroll>10)}">
  <div class="container-fluid">
    <div class="navbar-header pull-left">
      <button type="button" class="navbar-toggle pull-left m-15" data-activates=".sidebar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <ul class="breadcrumb">
        <li><a href="#/">PAYDAECO</a></li>
        <li ng-bind="pageTitle" class="active ng-binding">Congratulations</li>
      </ul>
    </div>

    <ul class="nav navbar-nav navbar-right navbar-right-no-collapse">
      <li class="dropdown pull-right">
        <button class="dropdown-toggle pointer btn btn-round-sm btn-link withoutripple ng-scope" bs-dropdown="" data-template="assets/tpl/partials/dropdown-navbar.php" data-animation="mat-grow-top-right">
          <i class="md md-more-vert f20"></i>
        </button>
      </li>

      <li navbar-search="" class="pull-right"><div>
  <!-- ngIf: showNavbarSearch -->

  <div class="pull-right">
    <button ng-click="toggleSearch()" class="btn btn-sm btn-link pull-left withoutripple">
      <i class="md md-search f20"></i>
    </button>
  </div>
</div>
</li>
    </ul>
  </div>
</nav>
</div>
      <!-- ngView:  --><div class="main-content ng-scope" autoscroll="true" ng-view="" bs-affix-target=""><section class="tables-data ng-scope" ng-controller="TablesDataController">
<style>
  .btn-danger { background-size: 187%; background-color: #F44336; height: 25px; padding-top: 1px;}
  
</style>
  <div class="page-header">
    <h1>
      <i class="md md-list"></i>
     Congratulations
    </h1>
  </div>

  <div class="card" style="padding: 20px;"><br><br>
      
<h1>Congratulations you donation has successful been reserved <br>Thank You for providing help.</h1>


<?php
    

    $username = $_SESSION['username'];
    if($username)
    {
        $sql = "SELECT * FROM users WHERE users_name='$username' OR users_email='$username'";
        $user_data = mysqli_query($con_don2,$sql);
        while($user_row = mysqli_fetch_array($user_data))
        { 

            $user_id = $user_row['users_id'];
        }
    }

    $payemnt = 0;

    if(isset($_GET['pay_method'])) 
    {
        $payment_method = $_GET['pay_method'];
        echo "Payment Completed By '".$payment_method."'<br />";        
        $status = 0;
        $payemnt = 1;
        $payment_amount = $_GET['payment'];
        $don_id = $_GET['don_id'];
    }
    
    if(isset($_GET['not_paid'])) 
    {
        if($_GET['not_paid']==1)
        echo "Payment Not Completed.<br />";
    }
    
    if(isset($_POST['mc_gross'])) { 
        $payments=$_POST;
        $paydata = base64_encode(serialize($payments));
        $custom_value=$_POST['custom'];
        $custom_data = explode("::",$custom_value);
        $don_id = $custom_data[0];
        $total_donation_amount = $custom_data[1];
        $donate_amount = $custom_data[2];
        $currency = $custom_data[3];
        $current_date = date("Y-m-d");
        
        $status = 1;
        $payemnt = 1;
        $payment_amount = $donate_amount;
        
            $remainning_amount = number_format($total_donation_amount-$donate_amount,2);
			$sql = "SELECT * FROM don_list WHERE auto_id=$don_id";
			$don_data = mysqli_query($con_don,$sql); 
			while($don_row = mysqli_fetch_array($don_data))
			{
				$assign_user_id = $don_row['user_id'];	
			}			
			$sql1 = "UPDATE users set users_donation='$remainning_amount' WHERE users_id=$assign_user_id";
            if (mysql_query($sql1) === TRUE) {
				
                echo "Payment Completed By PayPal.<br />"; 
            } 
            else {
                echo "DB Not Updated.<br />"; 
            }
            
            
        
    }
    
    if(isset($_GET['paypal_cancel'])) {
        echo "PayPal payment cancelled.<br />";
    }
    
	$show_bank_details = false;
    if($payemnt==1)
    {        

        $sql = "INSERT INTO payments (userid, payment_amount, payment_status, itemid) VALUES ($user_id, $payment_amount, $status, $don_id)";
        if (mysql_query($sql) === TRUE) {           
			$show_bank_details = true;
			$q="SELECT * FROM  don_list WHERE auto_id=$don_id"; 
            $single_data = mysqli_query($con_don2,$q);
            while($single_row = mysqli_fetch_array($single_data))
            { 
                $bank_name = $single_row['bank_name'];    
                $acount_holder = $single_row['acount_holder'];    
                $account_number = $single_row['account_number'];    
                $account_type = $single_row['account_type'];    
                $branch = $single_row['branch'];    
                $branch_code = $single_row['branch_code'];  
                $donation_id = $single_row['id'];

            }       
        }
        else
        {
            
        }
    }
	
	if($show_bank_details) {    
?>
<div class="table-responsive white">
      <table ng-table="tableParams" class="table table-full-small ng-scope ng-table">
         <thead ng-include="templates.header" class="ng-scope">
             <tr class="ng-scope">
                 <th>BANK NAME</th>
                 <th>ACCOUNT HOLDER</th>
                 <th>ACCOUNT NUMBER</th>
                 <th>ACCOUNT TYPE</th>
                 <th>BRANCH NAME</th>
                 <th>BRANCH CODE</th>
             </tr>  
         </thead>
        <tbody>
          
        <tr ng-repeat="item in $data" class="ng-scope">
          <td data-title="'ID'" filter="{ 'firstname': 'text' }" sortable="'firstname'" data-title-text="ID" class="ng-binding">
              <?php echo $bank_name;?>
          </td>
          <td data-title="' Possible Bank '" sortable="'lastname'" data-title-text=" Possible Bank " class="ng-binding">
              <?php echo $acount_holder;?>
          </td>
          <td data-title="' Recipient '" sortable="'lastname'" data-title-text=" Recipient " class="ng-binding">
              <?php echo $account_number;?>
          </td>
           <td data-title="'AMount '" sortable="'lastname'" data-title-text="AMount " class="ng-binding">
               <?php echo $account_type;?>
           </td>
          <td data-title="' Recipient '" sortable="'lastname'" data-title-text=" Recipient " class="ng-binding">
              <?php echo $branch;?>
	 	   </td>
           <td data-title="'AMount '" sortable="'lastname'" data-title-text="AMount " class="ng-binding">
               <?php echo $branch_code;?>
           </td>
        </tr>
        
        
      </tbody>
      </table>
        
        
      <div ng-table-pagination="params" template-url="templates.pagination" class="ng-scope ng-isolate-scope">
          <div ng-include="templateUrl" class="ng-scope">
              <div class="p-20 ng-scope">
              </div>
          </div>            
      </div>
    </div>

   <?php } ?>
   <br><br>
<!--    <button onclick="javascript:location.href='#'" class="btn btn-primary" style="background:#00A65A;">BACK</button>-->
 <button onClick="javascript:location.href='GiveHelp.php'" class="btn btn-primary" style="background:#3C8DBC;">CONTINUE</button>
   <br><br>

  </div>



</section>
</div>
    </div> </main>
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
    

    <script charset="utf-8" src="assets/js/vendors.min.js"></script>
    <script charset="utf-8" src="assets/js/app.min.js"></script>
  </body>
</html>