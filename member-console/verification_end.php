<?php 
include 'header.php';
if(isset($_REQUEST['question'])) {
	$sql=mysql_query("UPDATE  user_verification set 
		verification_q='".$_REQUEST['q']."', 
		verification_a='".$_REQUEST['a']."' 

				
		 where users_name='".$_SESSION['username']."' ");
		echo "<script>window.location='verification_end.php?message=success'</script>";
	}

	$sql_v=mysql_query("select * from  user_verification where users_name='".$_SESSION['username']."' ");
	$count=mysql_num_rows($sql_v);
	$row_v=mysql_fetch_array($sql_v);
?>
<style type="text/css">
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
 .body-img
 {
height: 200px;
width: 100%;
 }.icon1
 {
height:15px; 
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
        <li ng-bind="pageTitle" class="active ng-binding"> User Verification </li>
      </ul>
    </div>

 <div class="dropdown pull-right">
    <button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown"> 
    <i class="fa fa-ellipsis-v"></i>
</button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a href="userverification.php" role="menuitem" tabindex="-1" href="#">User Verification</a></li>

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
  <h2>User Verification </h2>

  <div class="panel panel-primary ">
    <div class="panel-heading"> Verification Process :</div>
    <div class="panel-body">
    <div class="row">
     <?php 
    $Note=mysql_fetch_array(mysql_query("select * from verification where verification_id='1'"));
  
    ?>
     <div class="col-sm-12">
       <div class="panel panel-default panel_border panel-icon">
       <div class="panel-heading "><img src="<?php echo $baseurl;?>assets/img/icon-Number1.png" alt="" class="icon"></div>
       <div class="panel-body">
       <div class="row">
      <div class="col-xs-6">
       <img src="<?php echo $baseurl;?>assets/img/identity.jpeg" alt=""  class="body-img">
       
      </div>       
      <div class="col-xs-6">
             <h2><?   echo $Note['verification_1']; ?></h2>
       <? if(empty($row_v['verification_document'])) { ?>
        <img src="<?php echo $baseurl;?>assets/img/wrong.jpeg" alt="" class="icon1">
        <?php }else {?>
        <img src="<?php echo $baseurl;?>assets/img/right.jpeg" alt="" class="icon1">
        <? }?> 
        </div>       
       </div>
      
       
       
       </div>
       <hr>
        <div class="panel-footer">
        <div class="text-left">
<br> Your Uploaded Document .<br><strong>
       <? if(empty($row_v['verification_document'])) { echo "not Found";}else {
      
        echo $row_v['verification_document']; }?></strong>        
        </div>
        
        </div>
       </div>
     </div>
     
     <div class="col-sm-12">
       <div class="panel panel-default panel_border panel-icon">
       <div class="panel-heading  ">
       <img src="<?php echo $baseurl;?>assets/img/icon-Number2.png" alt=""  class="icon" ></div>
       <div class="panel-body  " >
          <div class="row">
      <div class="col-xs-6">
       <img src="<?php echo $baseurl;?>assets/img/code.png" alt="" class="body-img">

      </div>       
      <div class="col-xs-6">
             <h2><?   echo $Note['verification_2']; ?></h2>
       <? if(empty($row_v['users_image'])) { ?>
        <img src="<?php echo $baseurl;?>assets/img/wrong.jpeg" alt="" class="icon1">
        <?php }else {?>
        <img src="<?php echo $baseurl;?>assets/img/right.jpeg" alt="" class="icon1">
        <? }?> 
        </div>       
       </div>

       </div>
       <hr>
        <div class="panel-footer">
               <div class="text-left">
       <br> Your Uploaded Document .<br><strong>
       <? if(empty($row_v['users_image'])) { echo "not Found";}else {
      
        echo $row_v['users_image']; }?></strong>
        </div>
 </div>
       </div>
     </div> 
     
     <div class="col-sm-12">
       <div class="panel panel-default panel_border panel-icon">
       <div class="panel-heading  "><img src="<?php echo $baseurl;?>assets/img/icon-Number3.png" alt="" class="icon"> </div>
       <div class="panel-body">
         <div class="row">
      <div class="col-xs-6">
       <img src="<?php echo $baseurl;?>assets/img/resi.png" alt="" class="body-img">
   
      </div>       
      <div class="col-xs-6">
             <h2><?   echo $Note['verification_3']; ?></h2>
       <? if(empty($row_v['address_image'])) { ?>
        <img src="<?php echo $baseurl;?>assets/img/wrong.jpeg" alt="" class="icon1">
        <?php }else {?>
        <img src="<?php echo $baseurl;?>assets/img/right.jpeg" alt="" class="icon1">
        <? }?> 
        </div>       
       </div>

       </div>
       <hr>
        <div class="panel-footer">
    <div class="text-left">
       Your Uploaded Document .<br><strong>
       <? if(empty($row_v['address_image'])) { echo "not Found";}else {
      
        echo $row_v['address_image']; }?></strong>
        </div>
        </div>
       </div>
     </div> 
        <div class="col-sm-12">
       <div class="panel panel-default panel_border panel-icon">
	       <div class="panel-heading text-left "><h3>Enter  a Question of your choice  and give the answer for the security region .</h3> </div>
       <form method="post">
          <div class="panel-body">
       <div class="form-group">
       <input type="text" class="form-control" placeholder="Enter Question?" name="q" required=""  onblur="handleChange(this);"> 
       </div>          
             <div class="form-group">
       <input type="text" class="form-control" placeholder="Enter Answer." name="a" required="">
       </div>
          </div>
        <div class="panel-footer">
      <?
      if(empty($row_v['verification_document'])) { 
      ?>
          <button type="button" name="" class="btn btn-primary identity" style="margin:auto;">Submit</button>
      <?
      
      }else {
      	 if(empty($row_v['users_image'])) { 
      	 ?>
      	     <button type="button" name="" class="btn btn-primary keycode" style="margin:auto;">Submit</button>
      	 <?
      	 }else {
      	 	
      	 	 if(empty($row_v['address_image'])) { 
      	?> 	     <button type="button" name="" class="btn btn-primary address " style="margin:auto;">Submit</button><?
      	 	 }else {
      	 	 	if(!empty($row_v['verification_q'])) { 
      	 	 	?>
      	 	 	<button type="submit" name="question" class="btn btn-default " style="margin:auto;">Submit</button>
      	 	 	<?
      	 	 	
      	 	 	}else {
      	 	 		?>
      	 	 		
      	 	
      	 	 	     
<button type="submit" name="question" class="btn btn-primary " style="margin:auto;">Submit</button>
      	 	 	      	<?  }
      	 	 	}
      	 	}
      	
      	
      	}
      ?>        
<?php 
if(!empty($row_v['verification_q'])) { 
?>
<a href="verification_thank_you.php?review"><button type="" class="btn btn-primary">Review </button></a>
<?

}

?>
    
        </div>
       </form>
    
       </div>
     </div> 
         
    </div>
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script>
  function handleChange(input) {
    if (input.value < 10){ input.value = 0; alert("Please enter 10 words");}
    if (input.value > 100) input.value = 100;
  }
</script>
<script type="text/javascript">
$(document).ready(function () {
	$(".identity").click(function () {
		alert("First Complete <?   echo $Note['verification_1']; ?> process  ");
	})
	$(".keycode").click(function () {
		alert("First Complete <?   echo $Note['verification_2']; ?> process  ");
	})
		$(".address").click(function () {
		alert("First Complete <?   echo $Note['verification_3']; ?> process  ");
	})
	
});
</script>
  
    <script charset="utf-8" src="assets/js/vendors.min.js"></script>
    <script charset="utf-8" src="assets/js/app.min.js"></script>

  </body>

</html>