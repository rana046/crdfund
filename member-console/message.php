<?php

	//****************************//
	//**** MAIN PAGE
	//****************************//

	session_start();
	// MYSQL
	require("chat/config/config.php"); // For login mysql
	require("chat/config/mysql.php");
?>
<!DOCTYPE html>
<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<head>
		<title>Index</title>
		<link rel="stylesheet" href="chat/css/style.css" type="text/css" /> <!-- Style -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script> <!-- Library jQuery -->
		<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
		<script type="text/javascript" src="chat/js/default.js"></script>
	</head>

	<body>

		<div id="top_nav"> <!-- TOP MENU -->
			<div id="site_name"><?php echo SITE_NAME; ?></div><!-- NAME -->
		</div>

		<div id="list_friends"> <!-- LIST CONTACT -->
			<?php if(!empty($_SESSION['login'])): // CHECK LOGIN ?>
				<?php
					// Base status
						if($_SESSION['status'] == '1') $status = 'label-online'; // Online
						if($_SESSION['status'] == '3') $status = 'label-occuped'; // Occupied
						if($_SESSION['status'] == '2') $status = 'label-abs'; // Abscent
						if($_SESSION['status'] == '4') $status = 'label-offline'; // Offline
				?>
				<div id="infomrations_account_status">
					<div id="infos_account" class="label friend-num-connected <?php echo $status; ?>">Welcome, <?php echo $_SESSION['name']; // Name account ?></div>
				</div>
			
				<hr/>

				<div id="status-search">
					<div id="change-status"><!-- change in status bar -->
						<a class="href_dyn" data-status="label-online" href="chat/scripts/actions/StatusChange.php?nb=1"><div id="online-status" data-status="Online" class="case-status <?php if($_SESSION['status'] == "1") echo 'status-inc'; ?> first-case-status"><div class="icon_status"></div></div></a>
						<a class="href_dyn" data-status="label-abs" href="chat/scripts/actions/StatusChange.php?nb=2"><div id="abs-status" data-status="Absent" class="case-status <?php if($_SESSION['status'] == "2") echo 'status-inc'; ?>"><div class="icon_status"></div></div></a>
						<a class="href_dyn" data-status="label-occuped" href="chat/scripts/actions/StatusChange.php?nb=3"><div id="occuped-status" data-status="Occupied" class="case-status <?php if($_SESSION['status'] == "3") echo 'status-inc'; ?>"><div class="icon_status"></div></div></a>
						<a class="href_dyn" data-status="label-offline" href="chat/scripts/actions/StatusChange.php?nb=4"><div id="offline-status" data-status="Offline" class="case-status <?php if($_SESSION['status'] == "4") echo 'status-inc'; ?> last-case-status"><div class="icon_status"></div></div></a>
					</div>
					<div id="btn_logout">
						<a id="act_logout" href="chat/scripts/actions/Logout.php"><input type="button" class="btn" value="Logout"/></a> <!-- Button Logout -->
					</div>
				</div>

				<audio id="bip-sound" style="display:none;" controls preload="auto"> <!-- Sound reception of a message  -->
					<source src="sound/bip.mp3" controls></source>
					<source src="sound/bip.ogg" controls></source>
				</audio>

				<hr/>
			<?php endif; ?>

			<div id="list_friends_into">

				<!-- Main login account -->

				<div class="login_or_register"></div> <!-- Image -->

				<div class="btn_registerorlogin">
					<center><input type="button" class="btn btn-big" id="btn_showloginregister" value="Login or register"/></center> <!-- Button login / register -->
				</div>

				<div class="login_box" style="display:none;">
					<div class="top_header_right_cols"> <!-- Label top header -->
						Login <font class="announceLogin" id="announce"></font>
					</div>
					<form action="chat/scripts/actions/login.php" id="actionsLogin" method="post">
						<div class="text_loginre"> <!-- Input for login -->
							<div class="icon_text_loginre">
								<div class="icon_username"></div>
							</div>
							<input name="login" placeholder="Username" type="text"/>
						</div>

						<div class="text_loginre"> <!-- Input for password -->
							<div class="icon_text_loginre">
								<div class="icon_password"></div>
							</div>
							<input name="password" placeholder="Password" type="password"/>
						</div>

						<input type="submit" class="btn form_btn" value="Login"/>
					</form>

					<div class="top_header_right_cols" style="margin-top:36px;"> <!-- Label top header -->
						Register <font class="announceRegister" id="announce"></font>
					</div>
					<form action="chat/scripts/actions/Register.php" id="actionsRegister" method="post">
						<div class="text_loginre"> <!-- Input for login -->
							<div class="icon_text_loginre">
								<div class="icon_username"></div>
							</div>
							<input name="login_register" placeholder="Username" type="text"/>
						</div>

						<div class="text_loginre"> <!-- Input for login -->
							<div class="icon_text_loginre">
								<div class="icon_username"></div>
							</div>
							<input name="fullname" placeholder="Full name" type="text"/>
						</div>

						<div class="text_loginre"> <!-- Input for password -->
							<div class="icon_text_loginre">
								<div class="icon_password"></div>
							</div>
							<input name="password_register" placeholder="Password" type="password"/>
						</div>

						<div class="capcha text_loginre cpatch-div">
							<div class="icon_text_loginre">
								<?php 
									// Capcha
									$number1 = rand(1,10); 
									$number2 = rand(1, 10);
									echo $number1.' + '.$number2; // View capacha
								?>
							</div>
							<input type="hidden" value="<?php echo $number1 + $number2; ?>" name="rstCapcha"/>
							<input name="capcha" placeholder="Sécurity" type="text"/>
						</div>

						<input type="submit" class="btn form_btn" value="Register"/>
					</form>

					<div class="announceRegisterOk" style="color:#3a8e3a; font-weight:bold; display:none; padding-top:10px;"> <!-- Message sucess -->
						<center>Completed registration</center>
					</div>

				</div>

				<center><img class="loader" style="display:none;" src="chat/img/gif/loader.gif"/></center>  <!-- Image for Loader -->

				<!-- MEMBERS OR LOGIN / REGISTER -->
			</div>

		</div>

		<div id="content_msg_box">  <!-- List of contact -->
		</div>

	</body>
</html>