<?php 

include 'header.php';
$useris=mysql_fetch_array(mysql_query("select * from users where users_name = '".$_SESSION['username']."'"));
	?>
	<style type="text/css">
	.page-content {
    padding: 16px 13px 5px;
    transition: all 0.2s ease-in-out 0s;
}
	</style>
<div ng-include="" src="'assets/tpl/partials/topnav.html'" class="ng-scope">
<nav class="navbar navbar-default navbar-fixed-top ng-scope" ng-class="{scroll: (scroll>10)}">
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
        <li ng-bind="pageTitle" class="active ng-binding"> Bonuses</li>
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
<div class="col-xs-12">

<div class="panel panel-info">
<div class="panel-heading">
<h4>Bonuses</h4>
</div>
<div class="panel-body">
<table class="table table-striped table-bordered">
<tr>
<th>User Name </th><td><?php echo $_SESSION['username']; ?> </td>
</tr>
<tr>
<th>Donation</th><td><?php  echo $useris['users_donation']; ?></td>
</tr>

<tr>
<th>Register Bonus </th><td><?php echo $useris['users_bonus']; ?></td>
</tr>
<tr>
<th>Referal Bonus </th><td><?php echo $useris['users_ref_bonus']; ?></td>
</tr>
<tr>
<th>Testimonial Bonus </th><td><?php echo $useris['users_testimonial']; ?></td>
</tr>
</table>
</div>
</div>
<hr>
<div class="panel panel-info">
<div class="panel-heading">
<h4>Transaction Report</h4>
</div>
<div class="panel-body">

<table id="example" class="table table-striped table-bordered" >
<tr>

<th>Date</th>
<th>Register Bonuse</th>
<th>Referal Bonus </th>
<th>Testimonisal Bonus</th>

<th>Remark</th>
</tr>
<?php
$reg=0;
$ref=0;
$test=0;
$sql=mysql_query("select * from report where users_id='".$useris['users_id']."'");
while($rows=mysql_fetch_array($sql)) {
	 $reg=$rows['report_reg_bonus']+$reg;
$ref= $rows['report_ref_bonus'] +$ref;
$test=$test +$rows['report_testimonial'];
	?>
	<tr>

       <td><?php echo $rows['report_date']; ?></td>	
       <td><?php echo $rows['report_reg_bonus']; ?></td>	
       <td><?php echo $rows['report_ref_bonus']; ?></td>	

      	
       <td><?php echo $rows['report_testimonial']; ?></td>	

       <td>  <?php echo $rows['report_region']; ?> <?php
       $useris1=mysql_fetch_array(mysql_query("select * from users where users_id = '".$rows['doner_user_id']."'"));
                 echo $useris1['users_name']; ?></td>	
	</tr>
	<?
	
	}
?>
<tr><th>Total</th><td><?php echo $reg;?></td><td><?php echo $ref;?></td><td colspan="2"><?php echo $test;?></td></tr>
</table>

</div>
</div>
</div>

</div>

</div><!--.container-fluid-->
</div><!--.page-content-->
</div>
<?php include "footer.php";?>



