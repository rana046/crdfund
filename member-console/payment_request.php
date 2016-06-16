<?php
include_once ("z_db.php");
include_once ("z_db1.php");
include_once ("z_db2.php");// Inialize session


$user_query = "SELECT * FROM users WHERE users_name='".$_SESSION['username']."'";      
$user_data = mysqli_query($con_don2,$user_query);
$user_details_data = (object)mysqli_fetch_array($user_data);

$payment_query = "SELECT * FROM payments inner join don_list on payments.itemid = don_list.auto_id WHERE don_list.user_id='".$user_details_data->users_id."' and payments.payment_status = '0'";      
$payment_data = mysqli_query($con_don2,$payment_query);
$payment_details_data = (object)mysqli_fetch_array($payment_data);
$user_donation_id = $payment_details_data->auto_id;
$or_statement = "";
if($user_donation_id != '') {
	$or_statement = " OR donation_id ='".$user_donation_id."'";
}


//session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {       
print "<script language='javascript'>window.location = 'login.php';</script>";}?>
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
<title>Payment Request</title>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>  
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>  
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>  
<![endif]--><link href="assets/css/vendors.min.css" rel="stylesheet" />
<link href="assets/css/styles.min.css" rel="stylesheet" />
<script charset="utf-8" src="http://maps.google.com/maps/api/js?sensor=true"></script>
</head>
<body scroll-spy="" id="top" class=" theme-template-dark theme-pink alert-open alert-with-mat-grow-top-right">
<main>  
<aside class="sidebar fixed" style="width: 260px; left: 0px; ">    
<div class="brand-logo"> <img src="images/login_logo.png"> 
</div>    
<div class="user-logged-in">      
<div class="content">        
<div class="user-name">mylifestylewealth <span class="text-muted f9">admin</span></div>      
</div>    </div>    
<?php include_once ("sidebar.php"); ?>  
</aside>  </aside>  
<div class="main-container">    
<nav class="navbar navbar-default navbar-fixed-top">      
<div class="container-fluid">        <div class="navbar-header pull-left">          
<button type="button" class="navbar-toggle pull-left m-15" data-activates=".sidebar"> <span class="sr-only">Toggle navigation</span> 
<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>          <ul class="breadcrumb">            
<li><a href="#/">mylifestylewealth</a></li>            <li class="active">Payment Request</li>          </ul>        </div>        
<ul class="nav navbar-nav navbar-right navbar-right-no-collapse">          <li class="dropdown pull-right">            
<button class="dropdown-toggle pointer btn btn-round-sm btn-link withoutripple" data-template-url="assets/tpl/partials/dropdown-navbar.php"> 
<i class="md md-more-vert f20"></i> </button>          </li>          <li class="dropdown pull-right">            
<button class="dropdown-toggle pointer btn btn-round-sm btn-link withoutripple" data-template-url="assets/tpl/partials/theme-picker.php"> 
<i class="md md-settings f20"></i> </button>          </li>          <li navbar-search="" class="pull-right">            
<div>              <div class="mat-slide-right pull-right">                
<form class="search-form form-inline pull-left ">                  
<div class="form-group">                    
<label class="sr-only" for="search-input">Search</label>                    
<input type="text" class="form-control" id="search-input" placeholder="Search" autofocus="">                  
</div>                
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
<div class="main-content ng-scope" autoscroll="true" ng-view="" bs-affix-target="">      
<section class="tables-data ng-scope" ng-controller="TablesDataController">        
<style>  .btn-danger { background-size: 187%; background-color: #F44336; height: 25px; padding-top: 1px;}  </style>        
<div class="page-header">          
<h1> <i class="md md-list"></i> Payment Attachments </h1>        
</div>        
<?php        
$q="SELECT * FROM  attachment where user_id = '".$user_details_data->users_id."' $or_statement ORDER BY id DESC";         
$single_data = mysqli_query($con_don,$q);         
?>        <div class="card">          
<div class="row">            
<div class="col-md-12">              
<h3 class="table-title p-20 ng-binding">
<?php 
echo $single_data->num_rows; if($single_data->num_rows > 1) echo " Attachments"; else echo " Attachment";?>
</h3>            
</div>          
</div>          
<div class="table-responsive white">            
<table ng-table="tableParams" class="table table-full-small ng-scope ng-table">              
<thead ng-include="templates.header" class="ng-scope">                
<tr class="ng-scope">                  
<th width="10%">Request Id</th>                  
<th width="15%">User's Id & Username</th>                  
<th width="15%">File</th>                  
<th width="15%">Description</th>                  
<th width="8%">Request Date And Time</th>                  
<th width="8%">Payment Status</th>                  
<th width="15%">Action</th>                
</tr>              
</thead>              
<tbody>                <?php        
while($single_row = mysqli_fetch_array($single_data))                            {		
$prid="$single_row[id]";	
$pruid="$single_row[user_id]";	                    
$donation_id="$single_row[donation_id]";	
$transaction_id="$single_row[transaction_id]";	
$file_name="$single_row[file_name]";	
$description="$single_row[description]";	
$prdate="$single_row[createdtime]";						   
$query = "SELECT * FROM users WHERE users_id='$pruid'";   
$result = mysqli_query($con_don2,$query);$i=0;while($row = mysqli_fetch_array($result))
{	
$id="$row[users_id]";	

$username="$row[users_name]";
}	?>                
<tr>                  
<td><?php 
echo $prid;?></td>                  
<td>[<?php echo $id;?>] <?php echo $username;?></td>                  
<td><a href="uploads/<?php echo $file_name;?>" target="_blank">
<img height="100" width="200" src="uploads/<?php echo $file_name;?>" alt="attachment pic"></a></td>                  <td>
<?php echo $description;?></td>                  <td>
<?php echo $prdate;?></td>                  <td><?php 
$query = "SELECT * FROM payments WHERE itemid=$donation_id AND id=$transaction_id";      				  
$payment_data = mysql_query($query); 
				   				  
$user_query = "SELECT * FROM users WHERE users_name='".$_SESSION['username']."'";      				  
$user_data = mysql_query($user_query);				  
//$user_details_data = (object)mysqli_fetch_array($user_data);
$user_details_data = (object)mysql_fetch_array($user_data);
				  				  
$don_query = "SELECT * FROM don_list WHERE auto_id=$donation_id";  				  
$donation_data = mysqli_query($con_don,$don_query); 
 				  
$donation_details_data = mysqli_fetch_array($donation_data);				  
$donation_details = (object)$donation_details_data;	

			  
while($payment_row = mysql_fetch_array($payment_data)) {        						
$payment_status=$payment_row['payment_status'];            						
$payment_id=$payment_row['id'];            						
$payment_itemid=$payment_row['itemid'];            						
$payment_amount=$payment_row['payment_amount'];      					
}      					
if($payment_status==1) 		
echo "Paid"; 					
else 						
echo "Pending";							
?>					
</td>                  <td>
<?php 
//echo $_SESSION['username']."<br />";
//echo "d_detail_don: ".$donation_details->user_id."<br />";
//echo "d_detail_user: ".$user_details_data->users_id;
if($payment_status==0  && $donation_details->user_id == $user_details_data->users_id) {
	?>                    
<a href='make_payment_db.php?payid=<?php echo $payment_id;?>&&itemid=<?php echo $payment_itemid;?>&&payment_amount=<?php echo $payment_amount;?>' 
class='btn btn-default btn-sm'>Paid</a>
<br />                    

<?php ?>					
<?php } 
if( $pruid == $user_details_data->users_id) {?>                    
<a href='delete_attachment_db.php?payid=<?php echo $prid;?>' class='btn btn-default btn-sm'>Delete</a>					
<?php } ?>					</td>                </tr>                <?php }?>              
</tbody>            
</table>          </div>        </div>      </section>    </div>  </div>
</main>
<style>    .glyphicon-spin-jcs {      -webkit-animation: spin 1000ms infinite linear;      animation: spin 1000ms infinite linear;    }        @-webkit-keyframes spin {      0% {        -webkit-transform: rotate(0deg);        transform: rotate(0deg);      }      100% {        -webkit-transform: rotate(359deg);        transform: rotate(359deg);      }    }        @keyframes spin {      0% {        -webkit-transform: rotate(0deg);        transform: rotate(0deg);      }      100% {        -webkit-transform: rotate(359deg);        transform: rotate(359deg);      }    }    
</style>
<script charset="utf-8" src="assets/js/vendors.min.js">
</script>
<script charset="utf-8" src="assets/js/app.min.js">
</script>
</body></html>