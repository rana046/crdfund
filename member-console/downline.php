<?php 
include 'header.php';
?>
	<style type="text/css">
	.page-content {
    padding: 16px 13px 5px;
    transition: all 0.2s ease-in-out 0s;
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
        <li ng-bind="pageTitle" class="active ng-binding"> Downline</li>
      </ul>
    </div>

 <div class="dropdown pull-right">
    <button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown"> 
    <i class="fa fa-ellipsis-v"></i>
</button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a href="userprofile.php" role="menuitem" tabindex="-1" href="#">Profile</a></li>

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
  <h2>Downline </h2>
  <div class="panel panel-primary">
    <div class="panel-heading"></div>
    <div class="panel-body">
    <div class="row">
<div class="col-xs-12">
<table class="table">
<tr>
<th>User  Name</th>
<th>Full Name</th>


<th>Country</th>
<th>Contact </th>
<th>Status</th>

</tr>
  <?php 
       $sql="select * from users where users_reff_name='".$_SESSION['username']."'";
       $result=mysql_query($sql);
       while($downline=mysql_fetch_array($result)) {
  ?>
       	
    <tr>
    <td><?php echo $downline['users_name']; ?></td>
    <td><?php echo $downline['users_fullname']; ?></td>

    <td><?php echo $downline['users_country']; ?></td>
    <td><?php echo $downline['users_phone']; ?></td>

    <td><?php  if(empty($downline['users_donation'])){ echo "<button class='btn btn-danger '>unpaid</button>" ;}else {  echo "<button class='btn  btn-primary '>paid</button>";} ?></td>
 
    
    
    </tr>  	
       	
       	
       	
       	
       	
       	<? }?>


</table>

       	 </div>  
 	</div>  
    </div>
    <div class="panel-footer">
        
    </div>
  </div>

</div>
</section>


</div>
</div>
</div>
</div>


   
   </div>
   
   
    <?
      
      include  "footer.php";
      ?>

   
  