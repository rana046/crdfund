<?php
include ('../includes/connection.php');
if(!isset($_SESSION['ADMINID']))
{
echo"<script>window.location='index.php'</script>";
}
rotationalReferal();
?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from responsiweb.com/themes/preview/ace/1.3.3/ by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 23 Dec 2014 12:02:31 GMT -->
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?php echo $settingresult['setting_title'];?></title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo $baseurl ?>dist/css//bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo $baseurl ?>dist/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?php echo $baseurl ?>dist/css/colorbox.min.css" />
		<!-- page specific plugin styles -->
		
		<link rel="stylesheet" href="<?php echo $baseurl ?>dist/css/bootstrap-datepicker3.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo $baseurl ?>dist/css/css5c0a.css?family=Open+Sans:400,300" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo $baseurl ?>dist/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

			<script src="<?php echo $baseurl ?>dist/js/jquery.min.js"></script>
		<script src="<?php echo $baseurl ?>dist/js/ace-extra.min.js"></script>

	
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
				
					<a href="#" class="navbar-brand">
						<small>
						<img src="addimages/<?php echo $settingresult['setting_logo'];?>" alt="" style="height:20px;">
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
					
<?php
$admin = mysql_fetch_array(mysql_query("SELECT * FROM 6btb_admin"));
?>

				

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
	<img class="nav--photo" src="<?php echo $baseurl;?>/admin/addimages/<?php echo $admin['admin_photo'];?>" alt="Jason's Photo" style="height:20px; width:20px;" />
								<span class="user-info">
									<small>Welcome,</small> <?php echo $admin['admin_fname'];?>
								
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="setting.php">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="account.php">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="logout.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>
		
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>
