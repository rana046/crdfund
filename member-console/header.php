<?php 
if(!$page_title)
	$page_title = 'Dashboard';

include_once ("z_db.php");
include_once ("z_db1.php");
include_once ("z_db4.php");

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
        print "
				<script language='javascript'>
					window.location = 'index.php';
				</script>
			";
}



?>

<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>PAYDAECO | <?php echo $page_title;?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
		<!-- BEGIN COUNTDOWN CLOCK STYLES -->
		<link rel="stylesheet" href="../css/countdown-clock-normalize.css">
		<link rel="stylesheet" href="../css/countdown-clock-style.css">
		<!-- END COUNTDOWN CLOCK STYLES -->
		<!-- BEGIN LIVE CHAT STYLES -->
		<link rel="stylesheet" href="../css/live-chat-style.css">
		<!-- END LIVE CHAT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
	
	<link href="css/custom-style.css" rel="stylesheet" />
	<link rel="shortcut icon" href="assets/img/favicon/favicon.ico">

    <body class="page-container-bg-solid">
		<?php 
		?>
		<!-- BEGIN LIVE CHAT CODE -->
		<html lang="en">
			<head>
				<meta charset="UTF-8">
				<title>Live Chat</title>
				<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
			</head>
			
			<body>
				<div id="live-chat">
					<header class="clearfix">
						<a href="#" class="chat-close">x</a>
						<h4>Vishal Shukla</h4>
						<span class="chat-message-counter">3</span>
					</header>
					
					<div class="chat">
						<div class="chat-history">
							<div class="chat-message clearfix">
								<img src="http://lorempixum.com/32/32/people" alt="" width="32" height="32">
								<div class="chat-message-content clearfix">
									<span class="chat-time">13:35</span>
									<h5>Vishal </h5>
									<p>hey hws u </p>
								</div> <!-- end chat-message-content -->
							</div> <!-- end chat-message -->
							<hr>
							<div class="chat-message clearfix">
								<img src="http://gravatar.com/avatar/2c0ad52fc5943b78d6abe069cc08f320?s=32" alt="" width="32" height="32">
								<div class="chat-message-content clearfix">
									<span class="chat-time">13:37</span>
									<h5>Sanket</h5>
									<p>good ajsfjsdfhkdsg</p>
								</div> <!-- end chat-message-content -->
							</div> <!-- end chat-message -->
							<hr>
							<div class="chat-message clearfix">
								<img src="http://lorempixum.com/32/32/people" alt="" width="32" height="32">
								<div class="chat-message-content clearfix">
									<span class="chat-time">13:38</span>
									<h5>Vishal</h5>
									<p>dsggdhdsgksgdjlkdgs
									dsgkjhdgjksdgjhhsdg
									sdgkjdsgjkhsdgjhkgsd
									dsgkdsgjksdghsdg</p>
								</div> <!-- end chat-message-content -->
							</div> <!-- end chat-message -->
							<hr>
						</div> <!-- end chat-history -->
						<p class="chat-feedback">Your partner is typing…</p>
						<form action="#" method="post">
							<fieldset>
								<input type="text" placeholder="Type your message…" autofocus>
								<input type="hidden">
							</fieldset>
						</form>
					</div> <!-- end chat -->
				</div> <!-- end live-chat -->
				<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
			</body>
		</html>
		<!-- END LIVE CHAT CODE -->
		
		<?php 
		?>
        <!-- BEGIN HEADER -->
        <div class="page-header">
            <!-- BEGIN HEADER TOP -->
            <div class="page-header-top">
                <div class="container">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo brand-logo">
                        <a href="index.php">
                            <img src="images/login_logo.png" alt="logo" class="logo-default">
                        </a>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler"></a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
            </div>
            <!-- END HEADER TOP -->
            <!-- BEGIN HEADER MENU -->
            <div class="page-header-menu">
                <div class="container">
                    <!-- BEGIN HEADER SEARCH BOX -->
                    <form class="search-form" action="page_general_search.html" method="GET">
                        
                    </form>
                    <!-- END HEADER SEARCH BOX -->
                    <!-- BEGIN MEGA MENU -->
                    <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                    <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                    <div class="hor-menu  ">
                        <ul class="nav navbar-nav">
							<li class=" <?php if($page_title=='Dashboard') echo "active";?>">
								<a href="dashboard.php" class="nav-link  active">Dashboard</a>
							</li>
                            <li class="menu-dropdown classic-menu-dropdown">
                                <a href="javascript:;"> Bank Account
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu pull-left">
                                    <li class=" ">
                                        <a href="warnings.html" class="nav-link  ">Warnings</a>
                                    </li>
                                    <li class=" ">
                                        <a href="my_bank_account.html" class="nav-link  ">My Bank Account</a>
                                    </li>
                                    <li class=" ">
                                        <a href="add_or_confirm_bank_details.html" class="nav-link  ">Add/Confirm Bank Details</a>
                                    </li>
                                    <li class=" ">
                                        <a href="new_bank_account.html" class="nav-link  ">New Bank Account</a>
                                    </li>
                                </ul>
                            </li>
							<li class=" <?php if($page_title=='Give Help') echo "active";?>">
								<a href="GiveHelp.php" class="nav-link  ">Give Help</a>
							</li>
                            <li class="menu-dropdown classic-menu-dropdown">
                                <a href="javascript:;"> Payment
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu pull-left">
                                    <li class=" ">
                                        <a href="payment_confirmation.html" class="nav-link  ">Payment Confirmation</a>
                                    </li>
                                    <li class=" ">
                                        <a href="proof_of_payment.html" class="nav-link  ">Proof of Payment</a>
                                    </li>
                                    <li class=" ">
                                        <a href="transaction_history.html" class="nav-link  ">Transaction History</a>
                                    </li>
                                </ul>
                            </li>
							<li class=" ">
								<a href="testimonial_reward_request.html" class="nav-link  ">Testimonial Reward Request</a>
							</li>
							<li class=" ">
								<a href="downline.html" class="nav-link  ">Downline</a>
							</li>
							<li class=" ">
								<a href="bonuses.html" class="nav-link  ">Bonuses</a>
							</li>
                        </ul>
                    </div>
                    <!-- END MEGA MENU -->
                </div>
            </div>
            <!-- END HEADER MENU -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1><?php echo $page_title;
							if($page_title=='Dashboard'){?>
                                <small>dashboard & statistics</small>
								<?php } ?>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar">
                            
                        </div>
                        <!-- END PAGE TOOLBAR -->
                    </div>
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span><?php echo $page_title;?></span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">