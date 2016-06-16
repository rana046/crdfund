<?php

include("../z_db.php");

if(isset($_POST['submit']))
{
$email = $_POST['email'];
$password = $_POST['password'];



//echo $query= "SELECT * FROM 6btb_admin WHERE admin_email  = '".$_POST['email']."' AND admin_password = '" . md5($_POST['password']) ."'";
	   $result = mysql_query("SELECT * FROM 6btb_admin WHERE admin_email  = '".$_POST['email']."' AND admin_password = '".md5($_POST['password'])."'");
$query_result = mysql_fetch_array($result);
$numrows=mysql_num_rows($result);


if($numrows==1) {
 $row=mysql_fetch_array($result);


 $_SESSION['ADMINID'] = $query_result['admin_id'];

echo'<script>location.assign("'.$baseurl .'admin/account.php")</script>';

} 
else{
echo'<script>location.assign("'.$baseurl .'admin/index.php?error=1")</script>';
}


if(isset($_GET['error'])) {
echo"<font color='#FFFFFF'>Incorrect login please try again!</font>";
}
}



?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from responsiweb.com/themes/preview/ace/1.3.3/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 23 Dec 2014 12:03:57 GMT -->
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page<?php echo $settingresult['setting_title'];?></title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo $baseurl ?>dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo $baseurl ?>dist/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo $baseurl ?>dist/css/css5c0a.css?family=Open+Sans:400,300" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo $baseurl ?>dist/css/ace.min.css" />

		
		<link rel="stylesheet" href="<?php echo $baseurl ?>dist/css/ace-rtl.min.css" />

	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<img src="addimages/<?php echo $settingresult['setting_logo'];?>" alt=""><br>
									<span class="red"><?php  echo $settingresult['setting_title'];?></span><br>
									<span class="white" id="id-text2">Admin Panel</span>
								</h1>
								
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter Your Information
											</h4>

											<div class="space-6"></div>

											<form method="post" action="">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
					<input type="email" class="form-control" placeholder="Username" / name="email">
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
	<input type="password" class="form-control" placeholder="Password" / name="password">
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Remember Me</span>
														</label>

														<button type="submit" name="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

										
								
										</div><!-- /.widget-main -->

									
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

				

				
							</div><!-- /.position-relative -->

							
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<script src="<?php echo $baseurl ?>dist/js/jquery.min.js"></script>


		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo $baseurl ?>dist/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) 
			document.write("<script src='<?php echo $baseurl ?>dist/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>

<!-- Mirrored from responsiweb.com/themes/preview/ace/1.3.3/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 23 Dec 2014 12:03:58 GMT -->
</html>
