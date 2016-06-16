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
    <title>Transaction - mylifestylewealth</title>
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
        
           <img src="images/login_logo.png"></div>
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
        <li><a href="#/">Paydae</a></li>
        <li ng-bind="pageTitle" class="active ng-binding">Transaction Statement</li>
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
  .left { width:305px; }
  .left li { width:75px; float:left; list-style:none; text-align:center; }
  .left li span{ ;  background: #fff none repeat scroll 0 0; border:solid 1px #ccc; border-bottom: 3px solid #ccc; border-radius: 7px; color: #7dc223;font-size: 2rem;
    font-weight: 700;  margin: 0 1rem; padding: 1rem; }
	.left li p.countdown-period{  color: #777; font-size: 0.875rem; font-weight: 700; padding-top: 10px; text-align: center; }
</style>
  <div class="page-header">
    <h1>
      <i class="md md-list"></i>
    My transaction
    </h1>
  </div>




<?php
$username = $_SESSION['username'];
//$username = 'adminadmin';
if($username)
{
    $sql = "SELECT * FROM users WHERE users_name='$username' OR users_email='$username'";
    $user_data = mysqli_query($con_don2,$sql);
    while($user_row = mysqli_fetch_array($user_data))
    { 

        $user_id = $user_row['users_id'];
    }
    $q="SELECT * FROM  payments WHERE userid='$user_id'";
}
else
{
    $q="SELECT * FROM  payments"; 
}
$payment_data = mysqli_query($con_don2,$q); 

?>

<div class="card">
    <div class="row">
     <div class="col-md-12">
        <h3 class="table-title p-20 ng-binding">All Transactions</h3>
      </div>
    </div>

    <div class="table-responsive white">
      <table ng-table="tableParams" class="table table-full table-full-small ng-scope ng-table">
         <thead ng-include="templates.header" class="ng-scope">
             <tr class="ng-scope">
                 <th>ID</th>
                 <th>SENDER</th>
                 <th>DONATION ID</th>
                 <th>DONATION NAME</th>
                 <th>AMOUNT</th>
                 <th>STATUS</th>
                 <th>CREATED</th>
				 <th>TIME LEFT</th>
             </tr>  
         </thead>
        <tbody>
            
        <?php
		$counter = 1;
        while($payment_row = mysqli_fetch_array($payment_data))
        {    

        
            
            $don_id = $payment_row['itemid'];
            $sql = "SELECT * FROM don_list WHERE auto_id='$don_id'";
            $doner_data = mysqli_query($con_don,$sql);
            while($doner_row = mysqli_fetch_array($doner_data))
            { 
                $doner_name = $doner_row['name'];
                $doner_id = $doner_row['id'];
            }
			
            ?>
        <tr ng-repeat="item in $data" class="ng-scope">
          <td data-title="'ID'" filter="{ 'firstname': 'text' }" sortable="'firstname'" data-title-text="ID" class="ng-binding">
              <?php echo $payment_row['id'];?>
          </td>
          <td data-title="' Possible Bank '" sortable="'lastname'" data-title-text=" Possible Bank " class="ng-binding">
              <?php echo $username."(me)";?>
          </td>
          <td data-title="' Possible Bank '" sortable="'lastname'" data-title-text=" Possible Bank " class="ng-binding">
              <?php echo $doner_id;?>
          </td>
          <td data-title="' Possible Bank '" sortable="'lastname'" data-title-text=" Possible Bank " class="ng-binding">
              <?php echo $doner_name;?>
          </td>
          <td data-title="' Possible Bank '" sortable="'lastname'" data-title-text=" Possible Bank " class="ng-binding">
              <?php echo $payment_row['payment_amount'];?>
          </td>
          <td data-title="' Possible Bank '" sortable="'lastname'" data-title-text=" Possible Bank " class="ng-binding">
              <?php if($payment_row['payment_status']==1) echo "Paid"; else echo "Pending";?>
          </td>
          <td data-title="' Recipient '" sortable="'lastname'" data-title-text=" Recipient " class="ng-binding">
              <?php echo $payment_row['createdtime'];?>
          </td>
		  <td>
		  		<?php

							$timestamp = time();

							$prev_time = strtotime($payment_row['createdtime']);
							$prev_time += 3600*48;
							$diff = 0; //<-Time of countdown in seconds.  ie. 3600 = 1 hr. or 86400 = 1 day.
							
							//MODIFICATION BELOW THIS LINE IS NOT REQUIRED.
							$hld_diff = $diff;
							
								$slice = ($timestamp - $prev_time);	
								$diff = $diff - $slice;
							
							//Below is demonstration of output.  Seconds could be passed to Javascript.
							//$diff; //$diff holds seconds less than 3600 (1 hour);
							$hours = floor($diff / 3600);
							$diff = $diff % 3600;
							$minutes = floor($diff / 60);
							$diff = $diff % 60;
							$seconds = $diff;
						?>
                        <ul class="left">
							<li><span id="hour_block<?php echo $counter; ?>"><?php echo $target_hour; ?></span><p class="countdown-period">Hours</p></li>
                            <li><span id="min_block<?php echo $counter; ?>"><?php echo $target_min; ?></span><p class="countdown-period">Minutes</p></li>
                            <li><span id="sec_block<?php echo $counter; ?>"><?php echo $target_sec; ?></span><p class="countdown-period">Seconds</p></li>
                        </ul>
						
						<script type="text/javascript">
 var hour<?php echo $counter; ?> = <?php echo floor($hours); ?>;
 var min<?php echo $counter; ?> = <?php echo floor($minutes); ?>;
 var sec<?php echo $counter; ?> = <?php echo floor($seconds); ?>

function countdown<?php echo $counter; ?>() {
 if(sec<?php echo $counter; ?> <= 0 && min<?php echo $counter; ?> > 0) {
  sec<?php echo $counter; ?> = 59;
  min<?php echo $counter; ?> -= 1;
 }
 else if(min<?php echo $counter; ?> <= 0 && sec<?php echo $counter; ?> <= 0) {
  min<?php echo $counter; ?> = 0;
  sec<?php echo $counter; ?> = 0;
 }
 else {
  sec<?php echo $counter; ?> -= 1;
 }
 
 if(min<?php echo $counter; ?> <= 0 && hour<?php echo $counter; ?> > 0) {
  min<?php echo $counter; ?> = 59;
  hour<?php echo $counter; ?> -= 1;
 }
 
 
 var pat<?php echo $counter; ?> = /^[0-9]{1}$/;
 sec<?php echo $counter; ?> = (pat<?php echo $counter; ?>.test(sec<?php echo $counter; ?>) == true) ? '0'+sec<?php echo $counter; ?> : sec<?php echo $counter; ?>;
 min<?php echo $counter; ?> = (pat<?php echo $counter; ?>.test(min<?php echo $counter; ?>) == true) ? '0'+min<?php echo $counter; ?> : min<?php echo $counter; ?>;
 hour<?php echo $counter; ?> = (pat<?php echo $counter; ?>.test(hour<?php echo $counter; ?>) == true) ? '0'+hour<?php echo $counter; ?> : hour<?php echo $counter; ?>;
 
 document.getElementById('hour_block<?php echo $counter; ?>').innerHTML = hour<?php echo $counter; ?>;
 document.getElementById('min_block<?php echo $counter; ?>').innerHTML = min<?php echo $counter; ?>;
 document.getElementById('sec_block<?php echo $counter; ?>').innerHTML = sec<?php echo $counter; ?>;
 setTimeout("countdown<?php echo $counter; ?>()",1000);
 }
 countdown<?php echo $counter; ?>();
</script>
		  </td>
        </tr><!-- end ngRepeat: item in $data -->
        <?php 
			$counter++;
			}
		?>
        
        
      </tbody>
      </table>
        
      <div ng-table-pagination="params" template-url="templates.pagination" class="ng-scope ng-isolate-scope">
          <div ng-include="templateUrl" class="ng-scope">
              <div class="p-20 ng-scope">
              </div>
          </div>            
      </div>
    </div>
  </div>


	

</section>
</div>
    </div>  </main>
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
    
    <script>
    (function(i, s, o, g, r, a, m)
    {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function()
      {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o), m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-62479268-1', 'auto');
    ga('send', 'pageview');
    </script>
    
    <script charset="utf-8" src="assets/js/vendors.min.js"></script>
    <script charset="utf-8" src="assets/js/app.min.js"></script>
  </body>

</html>