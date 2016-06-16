<?php 
include 'header.php';
	$sql_v=mysql_query("select * from  user_verification where users_name='".$_SESSION['username']."' ");
	$count=mysql_num_rows($sql_v);
	$row_v=mysql_fetch_array($sql_v);
	if(isset($_REQUEST['review'])) {
		$sql=mysql_query("UPDATE  user_verification set 
			verification_document_status='0'	
		 where users_name='".$_SESSION['username']."' ");
		 		echo "<script>window.location='verification_thank_you.php?message=success'</script>";	
		 		}

?>
 <div ng-include="" src="'assets/tpl/partials/topnav.html'" class="ng-scope"><nav class="navbar navbar-default navbar-fixed-top ng-scope" ng-class="{scroll: (scroll>10)}">
  <div class="container-fluid">
    <div class="navbar-header pull-left">
      <button type="button" class="navbar-toggle pull-left m-15" data-activates=".sidebar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <ul class="breadcrumb">
        <li><a href="#/"><?php echo $settingresult['setting_title'];?></a></li>
        <li ng-bind="pageTitle" class="active ng-binding">  Verification Center </li>
      </ul>
    </div>

 <div class="dropdown pull-right">
    <button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown"> 
    <i class="fa fa-ellipsis-v"></i>
</button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a href="userverification.php" role="menuitem" tabindex="-1" href="#"> Verification Center</a></li>

      <li role="presentation" class="divider"></li>
      <li role="presentation"><a href="logout.php" role="menuitem" tabindex="-1" href="#">Logout</a></li>    
    </ul>
  </div>


</nav>
</div>
      <div class="main-content ng-scope" autoscroll="true" ng-view="" bs-affix-target="">
<div class="page-content ng-scope">

<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 ">
				<section class="tabs-section">

				
<div class="h">
  <h2> Verification  Center</h2>

  <div class="panel panel-primary">
    <div class="panel-heading"> Verification Process :</div>
    <div class="panel-body">
    <?php 
    $Note=mysql_fetch_array(mysql_query("select * from verification where verification_id='1'"));
    echo html_entity_decode($Note['verification_end']);
    ?>
    </div>
    <div class="panel-footer" style="text-align:center">

        
    </div>
  </div>

  

</div>
</section>


</div>
</div>
</div>
</div>


   
   </div>
    </div> </main>
    
    <style>
    @media screen and (max-width: 992px){

}
    </style>
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