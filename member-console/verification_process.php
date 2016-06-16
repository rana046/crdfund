<?php 
include 'header.php';

	$sql_v=mysql_query("select * from  user_verification where users_name='".$_SESSION['username']."' ");
	$count=mysql_num_rows($sql_v);
	$row_v=mysql_fetch_array($sql_v);
?>
<style type="text/css">

	.page-content {
    padding: 16px 13px 5px;
 //   transition: all 0.2s ease-in-out 0s;
}

.icon
{
height: 49px;
margin: auto;
text-align: center;
margin-top: -32px;
}
.panel-icon
{
margin: auto;
text-align: center;
}
.panel_border
{
border: 2px solid lightblue;
}
.panel-back
{

    background-image: url('assets/img/img1.png');
    background-size: cover;
    background-repeat: no-repeat;
}
.body-img1 {
    height: 100PX;
    width: 43%;
}
.body-img2 {
    height: 100PX;
    width: 68%;
}
.body-img3 {
    height: 100PX;
    width: 43%;
}
.icon1
 {
height:15px; 
 }
 .alert-info {
    background-color: #00BCD4;
    padding: 7px;
}
@media screen and (max-width: 750px) {

.body-img1 {
    height: 48px;
    width: 9%;
}

.body-img2 {
    height: 47px;
    width: 20%;
}
.body-img3 {
    height: 48px;
    width: 9%;
}	
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

  <div class="panel panel-primary ">
    <div class="panel-heading" style="    background-color: #00BCD4;"> <h5 style="color:white" class="text-center">Verification Process</h5> </div>
    <br>
    <div class="panel-body">
    <div class="row">
     <?php 
    $Note=mysql_fetch_array(mysql_query("select * from verification where verification_id='1'"));
  
    ?>
     <div class="col-sm-4">
       <div class="panel panel-default panel_border panel-icon">
       <div class="panel-heading "><img src="<?php echo $baseurl;?>assets/img/icon-Number1.png" alt="" class="icon"></div>
       <div class="panel-body">
       <h4><?   echo $Note['verification_1']; ?></h4>
       <img src="<?php echo $baseurl;?>assets/img/identity.png" alt=""  class="body-img1"></div>
        <div class="panel-footer">
      <div class="">
            
       <? if(empty($row_v['verification_document'])) { ?>
        <div class="alert alert-info">
                 <img src="<?php echo $baseurl;?>assets/img/wrong.png" alt="" class="icon1"> Document Not uploaded.        
        </div>
       
        <?php }else {
        	if($row_v['f_verify']=='0'){
        	?>
              <div class="alert alert-info">
        <img src="<?php echo $baseurl;?>assets/img/preview.png" alt="" class="icon1">  Under Review
        </div>  


     <?   
        }else if($row_v['f_verify']==1){
        ?>
            <div class="alert alert-info">
        <img src="<?php echo $baseurl;?>assets/img/right.png" alt="" class="icon1">  Document Accepted
        </div>  
        <?
        }else if($row_v['f_verify']==2){
        ?>
            <div class="alert alert-info">
        <img src="<?php echo $baseurl;?>assets/img/wrong.png" alt="" class="icon1">  Document Rejected
        </div>  
        <?
        }
      }?> 
        </div>       
          
        </div>
       </div>
     </div>
     
     <div class="col-sm-4">
       <div class="panel panel-default panel_border panel-icon">
       <div class="panel-heading  "><img src="<?php echo $baseurl;?>assets/img/icon-Number2.png" alt=""  class="icon" ></div>
       <div class="panel-body  " >
        <h4><?   echo $Note['verification_2']; ?></h4>
       <img src="<?php echo $baseurl;?>assets/img/code.png" alt="" class="body-img2">
       </div>
        <div class="panel-footer">
   <div class="">
            
       <? if(empty($row_v['users_image'])) { ?>
        <div class="alert alert-info">
                 <img src="<?php echo $baseurl;?>assets/img/wrong.png" alt="" class="icon1"> Document Not uploaded.        
        </div>
       
        <?php }else {
        	if($row_v['s_verify']=='0'){
        	?>
              <div class="alert alert-info">
        <img src="<?php echo $baseurl;?>assets/img/preview.png" alt="" class="icon1">  Under Review
        </div>  


     <?   
        }else if($row_v['s_verify']==1){
        ?>
            <div class="alert alert-info">
        <img src="<?php echo $baseurl;?>assets/img/right.png" alt="" class="icon1">  Document Accepted
        </div>  
        <?
        }else if($row_v['s_verify']==2){
        ?>
            <div class="alert alert-info">
        <img src="<?php echo $baseurl;?>assets/img/wrong.png" alt="" class="icon1">  Document Rejected
        </div>  
        <?
        }
      }?> 
        </div> 
       </div>
       </div>
     </div> 
     
     <div class="col-sm-4">
       <div class="panel panel-default panel_border panel-icon">
       <div class="panel-heading  "><img src="<?php echo $baseurl;?>assets/img/icon-Number3.png" alt="" class="icon"> </div>
       <div class="panel-body">
        <h4><?   echo $Note['verification_3']; ?></h4>
       <img src="<?php echo $baseurl;?>assets/img/address.png" alt="" class="body-img3"></div>
        <div class="panel-footer">
              <div class="">
            
       <? if(empty($row_v['address_image'])) { ?>
        <div class="alert alert-info">
                 <img src="<?php echo $baseurl;?>assets/img/wrong.png" alt="" class="icon1"> Document Not uploaded.        
        </div>
       
        <?php }else {
        	if($row_v['t_verify']=='0'){
        	?>
              <div class="alert alert-info">
        <img src="<?php echo $baseurl;?>assets/img/preview.png" alt="" class="icon1">  Under Review
        </div>  


     <?   
        }else if($row_v['t_verify']==1){
        ?>
            <div class="alert alert-info">
        <img src="<?php echo $baseurl;?>assets/img/right.png" alt="" class="icon1">  Document Accepted
        </div>  
        <?
        }else if($row_v['t_verify']==2){
        ?>
            <div class="alert alert-info">
        <img src="<?php echo $baseurl;?>assets/img/wrong.png" alt="" class="icon1">  Document Rejected
        </div>  
        <?
        }
      }?> 
        </div> 

       </div>
       </div>
     </div> 
         
    </div>
    </div>
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
<b>FOR MORE USER VERIFICATION READ THE</b> <a href="verification_note.php"><strong><button class="btn btn-info col-xs-12 " style="margin:auto;">Instruction</button></strong></a>
 <br>
 
 </br>
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
<script type="text/javascript">
$(".review").click(function () {
	alert("Your Document Uploaded Sucessfully  Please Wait For verification");
})
</script>
<script type="text/javascript">
$(".verify").click(function () {
	alert("Your Document has been Verified");
})
</script>

  </body>

</html>