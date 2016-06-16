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
    <title>Mylifestylewealth</title>
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
            <div class="user-name">Paydae</span></div>
            
            
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
                <li><a href="#/">mylifestylewealth</a></li>
                <li class="active">Give Help</li>
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
    <div class="main-content ng-scope" autoscroll="true" ng-view="" bs-affix-target=""><section class="tables-data ng-scope" ng-controller="TablesDataController">
<style>
  .btn-danger { background-size: 187%; background-color: #F44336; height: 25px; padding-top: 1px;}
  
</style>
  <div class="page-header">
    <h1>
      <i class="md md-list"></i>
     Today's Donations
    </h1>
  </div>

  




<?php
        //$q="SELECT * FROM  don_list";
		$q="SELECT * FROM  don_list where user_id = '".$user_details_data->users_id."' and active = '1'";		
        $single_data = mysqli_query($con_don,$q); 
		$single_row = mysqli_fetch_array($single_data);
		$assigned_donor = $single_row['assigned_donor'];
		
		$q="SELECT * FROM  don_list inner join users on don_list.user_id = users.users_id where don_list.user_id in (".$assigned_donor.") and users.users_donation > 0";		
        $single_data = mysqli_query($con_don,$q);
        ?>
<div class="card">
    <div class="row">
     <div class="col-md-12">
        <h3 class="table-title p-20 ng-binding"><?php echo $single_data->num_rows; if($single_data->num_rows > 1) echo " Donations"; else echo " Donation";?></h3>
      </div>
    </div>

    <div class="table-responsive white">
      <table ng-table="tableParams" class="table table-full-small ng-scope ng-table">
         <thead ng-include="templates.header" class="ng-scope">
             <tr class="ng-scope">
                 <th>ID</th>
                 <th>POSSIBLE BANK</th>
                 <th>RECIPIENT</th>
                 <th>AMOUNT</th>
                 <th>ACTION</th>
             </tr>  
         </thead>
        <tbody>
            
        <?php
		if($assigned_donor != NULL) {
		
        while($single_row = mysqli_fetch_array($single_data))
        { 
			$user_id = $single_row['user_id'];
			$q="SELECT * FROM  users where users_id = $user_id";		
			$user_data = mysql_query($q); 
			while($user_row = mysql_fetch_array($user_data))
			{
				$users_donation = number_format($user_row['users_donation'],2);
			}			

        ?>
        <tr ng-repeat="item in $data" class="ng-scope">
          <td data-title="'ID'" filter="{ 'firstname': 'text' }" sortable="'firstname'" data-title-text="ID" class="ng-binding">
              <?php echo $single_row['id'];?>
          </td>
          <td data-title="' Possible Bank '" sortable="'lastname'" data-title-text=" Possible Bank " class="ng-binding">
              <?php echo $single_row['bank'];?>
          </td>
          <td data-title="' Recipient '" sortable="'lastname'" data-title-text=" Recipient " class="ng-binding">
              <?php echo $single_row['lastname'];?>
          </td>
           <td data-title="'AMount '" sortable="'lastname'" data-title-text="AMount " class="ng-binding">
               <?php echo $users_donation;?>
           </td>
           <td data-title="'Actions'" sortable="'lastname'" data-title-text="Actions">
               <button onClick="javascript:location.href='ReservedPayments.php?id=<?php echo $single_row['auto_id'];?>'" class="btn btn-danger">Donate</button>
           </td>
        </tr><!-- end ngRepeat: item in $data -->
        <?php }
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
    

    
    <script charset="utf-8" src="assets/js/vendors.min.js"></script>
    <script charset="utf-8" src="assets/js/app.min.js"></script>
  </body>

</html>