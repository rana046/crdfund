<?php 
include 'header.php';


?>
	<style type="text/css">
	.page-content {
    padding: 16px 13px 5px;
  //  transition: all 0.2s ease-in-out 0s;
}
	</style>
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
  <h2> Verification Center </h2>
  
 <?
 $info=mysql_query("select * from users verification where users_name='".$_SESSION['username']."'");
 $count=mysql_num_rows($info);
 if($count>0) {
 	$rows=mysql_fetch_array($info);
if($info['verification_document_status']=='0') { 	
echo "<div class='alert alert-info'>Your Document under The Review </div>";

}elseif($info['verification_document_status']=='1') {
	 	echo "<div class='alert alert-danger'>Your Document Has been Rejected  Please Upload Again</div>";
	}

 	
 	}
 
 ?>

  <div class="panel panel-primary">
    <div class="panel-heading"> Verification Process :</div>
    <div class="panel-body">
    <?php 
    $Note=mysql_fetch_array(mysql_query("select * from verification where verification_id='1'"));
    echo html_entity_decode($Note['verification_note']);
    ?>
    </div>
    <div class="panel-footer" style="text-align:center">
    <div class="panel-footer col-xs-12" style="text-align:center">
  
    <?
     if($user_record['users_verification']==1) {  
         		echo '<button class="btn btn-info col-xs-12 verify" style="margin:auto;">START</button>';
     }else {  
     if(empty($row_v['verification_document']) or empty($row_v['users_image']) or empty($row_v['address_image']) or empty($row_v['address_image2'])) { 
    
    echo '<a  href="verification_step.php?start"><button class="btn btn-info col-xs-12 " style="margin:auto;">START</button></a>';
    }else {
    	     if($row_v['f_verify']==2 or $row_v['s_verify']==2 or $row_v['s_verify']==2 ) { 
    		    echo '<a  href="verification_step.php?start"><button class="btn btn-info col-xs-12  " style="margin:auto;">START</button></a>';
    		
    		}else{echo '<button class="btn btn-info col-xs-12 review" style="margin:auto;">START</button>';
    		
    	}	}}
    ?>
  <br>
  <br>

 
 </br>
    </div>
        
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