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
    <title>Payment Method Gateway</title>
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
        <li ng-bind="pageTitle" class="active ng-binding">Payment Gateway</li>
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
      <!-- ngView:  --><div class="main-content ng-scope" autoscroll="true" ng-view="" bs-affix-target=""><section ng-controller="TablesBasicController" class="ng-scope">
 <style>
    
    .alert-success {
    background-color: transparent !important;padding-left: 4px; padding-top: 0px; margin-bottom: 0px;
}
.col-lg-3 {
    background: white;border: 1px solid rgba(190, 190, 190, 0.43);padding: 0px;margin-left: 5%;width: 93%;
}
  
.fa {     padding-top: 15px;
    font-size: 47px;
}

.p-20 {
    padding: 10px;
    background: #111111;
   color:white;
  
}

  .btn-danger { background-size: 187%; background-color: #F44336; height: 25px; padding-top: 1px;    float: right;}
  
</style>

  

          
          
          
         <?php        
     
        if(isset($_GET['id'])) 
        {
            $don_id = $_GET['id'];                  
            $total_donation_amount = $_POST["total_donation_amount"];
            $donate_amount = $_POST["donate_amount"];
            $package_name = $_POST["package_name"];
            $don_id = $_POST["don_id"];       
            

            
            $q="SELECT * FROM  don_list WHERE auto_id=$don_id"; 
            $single_data = mysqli_query($con_don,$q);
            while($single_row = mysqli_fetch_array($single_data))
            {   
                $donation_id = $single_row['id'];

            }       
            

        
        ?>


<div class="page-header">
    <h1>
      <i class="md md-list"></i>
     Donation item <?php echo "#".$donation_id;?>
    </h1>
  </div>

<style>
    .custom_change_code_form { float: left; width: 100%; padding: 50px 2%;}
    .custom_change_code_form row { margin: 10px 0;}
    .select_box_payment { float: left; padding: 5px 10px;}
    </style>
<div class="card">
   
    <form class="" action="payment_method_db.php" method="post">
        <div class="table-responsive white custom_change_code_form">
         
            <div class="row">
              <div class="col-md-4">
                  <p><b>Select Payments Method:</b></p>
              </div>                  
              <div class="col-md-8">
                  <select name="payment_method" required class="select_box_payment">
                      <option value="">select payments method..</option>
                      <option value="paypal">PayPal</option>
                      <option value="cashDeposit">Cash Deposit</option>
                      <option value="electronicFundTransfer">Electronic Fund Transfer</option>
                      <option value="bitcoins">Bitcoins</option>         
                  </select>
              </div>
          </div>
            
            <div class="row">
              <div class="col-md-4">
              </div>                  
              <div class="col-md-8">
                  <br ></br>
                  <input type="submit"class="btn btn-primary" value="Submit">
                  <input type="button" onClick="javascript:location.href='GiveHelp.php'" value="CANCEL" class="btn btn-primary" style="background:#3C8DBC;">
 
              </div>
          </div>
            
        </div>
        <input type="hidden" value="<?php echo $total_donation_amount;?>" name="total_donation_amount">
        <input type="hidden" value="<?php echo $donate_amount;?>" name="donate_amount">
        <input type="hidden" value="<?php echo $package_name;?>" name="package_name">
        <input type="hidden" value="<?php echo $don_id;?>" name="don_id"> 
        
    </form>
    <?php }

            ?>
    
    
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