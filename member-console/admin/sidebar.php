
<ul class="nav nav-list">
<li class="active"> <a href="account.php"> <i class="menu-icon fa fa-tachometer"></i> <span class="menu-text"> Dashboard </span> </a> <b class="arrow"></b> </li>
<li class=""><a href="ad_register.php"><i class="menu-icon fa fa-caret-right"></i>Add User</a></li>
<li class=""><a href="view_register.php"><i class="menu-icon fa fa-caret-right"></i>Registerd users</a></li>
<li class=""> <a href="" class="dropdown-toggle"> <i class="menu-icon fa fa-list"></i> <span class="menu-text"> Packages </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
  <ul class="submenu">
    <li><a href="package.php">Add Package</a></li>
    <?php /*

 $pcount= countq("*",$package_table,"");
 if($pcount>0) {
 	?>
<!--<li><a href="register_bonus_package_seeting.php"> Register Bonus package setting</a></li> -->	
<li><a href="referal_bonus_package_seeting.php">Referal Bonus  setting</a></li> 	
 	
 <?	}*/

?>
  </ul>
</li>
<li class=""> <a href="" class="dropdown-toggle"> <i class="menu-icon fa fa-list"></i> <span class="menu-text"> Admin	Reports </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
  <ul class="submenu">
    <li ><a href="donation_report.php">Admin Donation</a></li>
  </ul>
</li>
<li class=""> <a href="" class="dropdown-toggle"> <i class="menu-icon fa fa-list"></i> <span class="menu-text"> User 	Reports </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
  <ul class="submenu">
    <li><a href="register_bonus_report.php">Register Bonus Report</a></li>
    <li><a href="referal_bonus_report.php">Referal Bonus Report</a></li>
    <li><a href="testi_bonus_report.php">Testimonial Bonus Report</a></li>
	<li><a href="donation_bonus_report.php">Donation Bonus Report</a></li>
  </ul>
</li>
<li class=""> <a href="" class="dropdown-toggle"> <i class="menu-icon fa fa-list"></i> <span class="menu-text"> Testimonial Bonus </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
  <ul class="submenu">
    <li><a href="add_testimonial.php"> Add Testmonial Bonus Type</a></li>
    <?
	$select_sl1 = select("*",$testimonial_table,"where testimonial_status='1' ");
												while($sl_row1 = mysql_fetch_array($select_sl1)) {
?>
    <li><a href="reg_testimonial.php?type=<?php echo $sl_row1[$testimonial_table.'_id'] ;?>"> <? echo $sl_row1[$testimonial_table.'_bonus_type'];?> Request</a></li>
    <? }?>
  </ul>
</li>
<li class=""> <a href="" class="dropdown-toggle"> <i class="menu-icon fa fa-list"></i> <span class="menu-text"> Withdrawl Option </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
  <ul class="submenu">
    <li><a href="with_setting.php">Withdrawl Setting </a></li>
    <li><a href="with_request.php">Withdrawl Request </a></li>
  </ul>
</li>
<li class=""> <a href="" class="dropdown-toggle"> <i class="menu-icon fa fa-list"></i> <span class="menu-text"> User Verification </span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
  <ul class="submenu">
    <li><a href="verification_note.php">Verification Note</a></li>
    <li><a href="add_question.php">Verification Question</a></li>
    <li><a href="add_document.php">Verification  Document</a></li>
    <li><a href="verification_user.php">Verification User</a></li>
  </ul>
</li>
<li class=""> <a style="height:55px;" href="" class="dropdown-toggle"> <i class="menu-icon fa fa-list"></i> <span class="menu-text">Donation Transactions</span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
  <ul class="submenu">
    <li><a href="transaction_list.php">All Transaction</a></li>
  </ul>
</li>
<li class=""> <a style="height:55px;" href="" class="dropdown-toggle"> <i class="menu-icon fa fa-list"></i> <span class="menu-text">Manage Donation Users</span> <b class="arrow fa fa-angle-down"></b> </a> <b class="arrow"></b>
  <ul class="submenu">
    <li><a href="manage_help_banking.php">Donation User Selection</a></li>
	<li><a href="activate_donation_users.php">Activate All Users</a></li>
	<li><a href="deactivate_donation_users.php">Deactivate All Users</a></li>
  </ul>
</li>
<li class=""><a href="export_users.php"><i class="menu-icon fa fa-caret-right"></i>Export Donation Users</a></li>
<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse"> <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i> </div>
<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
</div>
<div class="main-content">
<div class="main-content-inner">
<div class="breadcrumbs" id="breadcrumbs">
<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>
