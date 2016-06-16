<?php 
				include('z_db.php');
				
				if(isset($_REQUEST['status'])) 
				{
						$up_query = "update users set users_status = '1' where users_id = '".$_REQUEST['id']."'";
						mysql_query($up_query);
				}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="mylifestylewealth Angular Admin Theme">
    <meta name="author" content="oxedes1" >
    <meta name="msapplication-TileColor" content="#9f00a7">
    <meta name="msapplication-TileImage" content="assets/img/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="assets/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="assets/img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/img/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="assets/img/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="assets/img/favicon/manifest.json">
    <link rel="shortcut icon" href="assets/img/favicon/favicon.ico">
    <title>Mylifestylewealth</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>  <![endif]-->
    <link href="assets/css/vendors.min.css" rel="stylesheet" />
    <link href="assets/css/styles.min.css" rel="stylesheet" />
    <script charset="utf-8" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  </head>
  <body scroll-spy="" id="top" class=" theme-template-dark theme-pink alert-open alert-with-mat-grow-top-right">
    <main>
      <aside class="sidebar fixed">
        <div class="brand-logo">
         <img src="images/login_logo.png"> </div>
        <div class="user-logged-in">
          <div class="content">
            <div class="user-name">Paydae</div>
            
            
          </div>
        </div>
<ul>
    <li menu-link="" href="#/dashboard" icon="md md-blur-on" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="index.php"><i class="md md-blur-on"></i>&nbsp;<span class="ng-scope">Dashboard</span><div class="ripple-wrapper"></div></a>
</li>
    <li menu-toggle="" path="/apps" name="My Profile" icon="md md-camera" class="ng-isolate-scope">
  <a href="#" data-toggle="collapse" data-target="#MyProfile" aria-expanded="false" aria-controls="MyProfile" class="collapsible-header waves-effect ng-binding" ng-class="{active: isOpen()}"><i class="md md-camera"></i>&nbsp;My Profile</a>
  <ul id="MyProfile" class="collapse" ng-class="{in: isOpen()}" ng-transclude="">
        <li menu-link="" href="userprofile" name="User Profile" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="userprofile.php"><span class="ng-scope">
        User Profile
      </span></a>
</li>
	   <li menu-link="" href="messagechat" name="User Profile" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="messagechat.php"><span class="ng-scope">
        Message &amp; Chat
      </span></a>
</li>
	   <li menu-link="" href="login" name="User Profile" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="login.php"><span class="ng-scope">
        Login
      </span></a>
</li>
    </ul>
</li>
    <li menu-toggle="" path="/ui-elements" name="Personal Account" icon="md md-photo" class="ng-isolate-scope">
  <a href="#" data-toggle="collapse" data-target="#PersonalAccount" aria-expanded="false" aria-controls="PersonalAccount" class="collapsible-header waves-effect ng-binding" ng-class="{active: isOpen()}"><i class="md md-photo"></i>&nbsp;Personal Account</a>
  <ul id="PersonalAccount" class="collapse" ng-class="{in: isOpen()}" ng-transclude="">
      <li menu-link="" href="GiveHelp" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="GiveHelp.php"><span class="ng-scope">Give Help</span></a>
</li>
      <li menu-link="" href="ReservedPayments" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="ReservedPayments.php"><span class="ng-scope">Reserved Payments</span></a>
</li>
      <li menu-link="" href="congratulations" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="congratulations.php"><span class="ng-scope">Congratulations</span></a>
</li>
      <li menu-link="" href="transaction" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="transaction.php"><span class="ng-scope">Transaction Statement</span></a>
</li>
      <li menu-link="" href="BankingDetails" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="BankingDetails.php"><span class="ng-scope">Banking Details</span></a>
</li>
    </ul>
</li>
    <li menu-toggle="" path="/forms" name="MiRewards" icon="md md-input" class="ng-isolate-scope">
  <a href="#" data-toggle="collapse" data-target="#MiRewards" aria-expanded="false" aria-controls="MiRewards" class="collapsible-header waves-effect ng-binding" ng-class="{active: isOpen()}"><i class="md md-input"></i>&nbsp;MiRewards</a>
  <ul id="MiRewards" class="collapse" ng-class="{in: isOpen()}" ng-transclude="">
      <li menu-link="" href="downline" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="bonuses.php"><span class="ng-scope">Bonuses</span></a>
</li>
      <li menu-link="" href="downline" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="downline.php"><span class="ng-scope">Downline</span></a>
</li>
    </ul>
</li>
    <li menu-link="" href="#" icon="md md-insert-chart" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="myfollowers.php"><i class="md md-insert-chart"></i>&nbsp;<span class="ng-scope">My Followers</span></a>
</li>
    <li menu-link="" href="#/newsupdates" icon="md md-insert-chart" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="newsupdates.php"><i class="md md-insert-chart"></i>&nbsp;<span class="ng-scope">News Updates</span></a>
</li>
    <li menu-link="" href="#/support" icon="md md-favorite-outline" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}" href="support.php"><i class="md md-favorite-outline"></i>&nbsp;<span class="ng-scope">Support Desks</span><div class="ripple-wrapper"></div></a>
</li>
    
  </ul></aside>
     </aside>
   <div class="main-container">
      <!-- ngInclude:  --><div ng-include="" src="'assets/tpl/partials/topnav.html'" class="ng-scope"><nav class="navbar navbar-default navbar-fixed-top ng-scope" ng-class="{scroll: (scroll>10)}">
  <div class="container-fluid">
    <div class="navbar-header pull-left">
      <button type="button" class="navbar-toggle pull-left m-15" data-activates=".sidebar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <ul class="breadcrumb">
        <li><a href="#/">Lifestyle Wealth Web</a></li>
        <li ng-bind="pageTitle" class="active ng-binding">Dashboard</li>
      </ul>
    </div>

    <ul class="nav navbar-nav navbar-right navbar-right-no-collapse">
      <li class="dropdown pull-right">
        <button class="dropdown-toggle pointer btn btn-round-sm btn-link withoutripple ng-scope" bs-dropdown="" data-template="assets/tpl/partials/dropdown-navbar.html" data-animation="mat-grow-top-right">
          <i class="md md-more-vert f20"></i>
        </button>
      </li>

      <li navbar-search="" class="pull-right"><div>
  <!-- ngIf: showNavbarSearch -->

  <div class="pull-right">
    <button ng-click="toggleSearch()" class="btn btn-sm btn-link pull-left withoutripple">
      <i class="md md-search f20"></i>
    </button>
  </div>
</div>
</li>
    </ul>
  </div>
</nav>
</div>
      <!-- ngView:  --><div class="main-content ng-scope" autoscroll="true" ng-view="" bs-affix-target=""><div class="dashboard grey lighten-3 ng-scope" ng-controller="DashboardController">
  <div class="row no-gutter">

    <div class="col-sm-12 col-md-12 col-lg-9" style="background:#F9F9F9;">

      <div class="p-20 clearfix">
        <div class="pull-right">
          <a href="#" target="_blank" class="btn btn-round-sm btn-link ng-scope" bs-tooltip="" title="Play material bird"><i class="md md-games"></i></a>
          <div class="btn btn-round-sm btn-link ng-scope" bs-tooltip="" title="Upload media"><i class="md md-crop-original"></i></div>
          <div class="btn btn-round-sm btn-link ng-scope" bs-tooltip="" title="Write new document"><i class="md md-insert-drive-file"></i></div>
          <div class="btn btn-round-sm btn-link ng-scope" bs-tooltip="" title="Add new user"><i class="md md-person-add"></i></div>
        </div>
        <h4 class="grey-text">
          <i class="md md-dashboard"></i>
          <span class="hidden-xs">Account Summary</span>
        </h4>
      </div>

      <div class="p-20 no-p-t">

        <div class="row gutter-14 kpi-dashboard">
          <div class="col-md-4">
            <div class="card small">
              <div class="theme-lighten-1 p-10">
                <div class="pull-right">
                  <div>
                    <i class="md md-trending-up text-rgb-5"></i>
                    3%
                  </div>
                </div>

                <h4 class="no-margin white-text w600">Incoming Funds</h4>
                <div class="f11" style="opacity:0.8">
                  <i class="md md-star-outline"></i> Latest 10 May, 10:00
                </div>

                <div class="p-10 p-t-30">
                  <div bindto-id="chart-line-1" class="ng-isolate-scope"><div id="chart-line-1" class="c3" style="max-height: 100px; position: relative;"><svg width="189.828125" height="100" style="overflow: hidden;"><defs><clipPath id="c3-1460853468818-clip"><rect width="186.828125" height="88"></rect></clipPath><clipPath id="c3-1460853468818-clip-xaxis"><rect x="-31" y="-20" width="248.828125" height="28"></rect></clipPath><clipPath id="c3-1460853468818-clip-yaxis"><rect x="-29" y="-4" width="21" height="112"></rect></clipPath><clipPath id="c3-1460853468818-clip-grid"><rect width="186.828125" height="88"></rect></clipPath><clipPath id="c3-1460853468818-clip-subchart"><rect width="186.828125"></rect></clipPath></defs><g transform="translate(1.5,4.5)"><text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="93.4140625" y="44" style="opacity: 0;"></text><rect class="c3-zoom-rect" width="186.828125" height="88" style="opacity: 0;"></rect><g clip-path="url(http://mylifestylewealth.com/#c3-1460853468818-clip)" class="c3-regions" style="visibility: visible;"></g><g clip-path="url(http://mylifestylewealth.com/#c3-1460853468818-clip-grid)" class="c3-grid" style="visibility: visible;"><g class="c3-xgrid-focus"><line class="c3-xgrid-focus" x1="-10" x2="-10" y1="0" y2="88" style="visibility: hidden;"></line></g></g><g clip-path="url(http://mylifestylewealth.com/#c3-1460853468818-clip)" class="c3-chart"><g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;"><rect class=" c3-event-rect c3-event-rect-0" x="-2.670703125" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-1" x="7.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-2" x="17.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-3" x="26.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-4" x="36.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-5" x="46.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-6" x="55.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-7" x="65.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-8" x="74.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-9" x="84.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-10" x="94.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-11" x="103.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-12" x="113.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-13" x="123.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-14" x="132.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-15" x="142.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-16" x="152.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-17" x="161.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-18" x="171.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-19" x="180.329296875" y="0" width="9.34140625" height="88"></rect></g><g class="c3-chart-bars"><g class="c3-chart-bar c3-target c3-target-Sales" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Sales c3-bars c3-bars-Sales" style="cursor: pointer;"></g></g></g><g class="c3-chart-lines"><g class="c3-chart-line c3-target c3-target-Sales" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Sales c3-lines c3-lines-Sales"><path class=" c3-shape c3-shape c3-line c3-line-Sales" d="M12,8.249999999999984L22,19.403846153846146L31,8.249999999999984L41,13.82692307692307L51,8.249999999999984L60,8.249999999999984L70,24.980769230769223L79,19.403846153846146L89,24.980769230769223L99,24.980769230769223L108,30.5576923076923L118,47.28846153846153L128,36.13461538461539L137,47.28846153846153L147,58.4423076923077L157,75.17307692307693L166,75.17307692307693L176,80.75000000000001" style="stroke: rgb(255, 255, 255); opacity: 1;"></path></g><g class=" c3-shapes c3-shapes-Sales c3-areas c3-areas-Sales"><path class=" c3-shape c3-shape c3-area c3-area-Sales" d="M 2 342.8653846153847" style="fill: rgb(255, 255, 255); opacity: 0.2;"></path></g><g class=" c3-selected-circles c3-selected-circles-Sales"></g><g class=" c3-shapes c3-shapes-Sales c3-circles c3-circles-Sales" style="cursor: pointer;"><circle class=" c3-shape c3-shape-0 c3-circle c3-circle-0" r="2.5" style="fill: rgb(255, 255, 255); opacity: 0;" cx="2" cy="342.8653846153847"></circle><circle class=" c3-shape c3-shape-1 c3-circle c3-circle-1" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="12" cy="8.249999999999984"></circle><circle class=" c3-shape c3-shape-2 c3-circle c3-circle-2" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="22" cy="19.403846153846146"></circle><circle class=" c3-shape c3-shape-3 c3-circle c3-circle-3" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="31" cy="8.249999999999984"></circle><circle class=" c3-shape c3-shape-4 c3-circle c3-circle-4" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="41" cy="13.82692307692307"></circle><circle class=" c3-shape c3-shape-5 c3-circle c3-circle-5" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="51" cy="8.249999999999984"></circle><circle class=" c3-shape c3-shape-6 c3-circle c3-circle-6" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="60" cy="8.249999999999984"></circle><circle class=" c3-shape c3-shape-7 c3-circle c3-circle-7" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="70" cy="24.980769230769223"></circle><circle class=" c3-shape c3-shape-8 c3-circle c3-circle-8" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="79" cy="19.403846153846146"></circle><circle class=" c3-shape c3-shape-9 c3-circle c3-circle-9" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="89" cy="24.980769230769223"></circle><circle class=" c3-shape c3-shape-10 c3-circle c3-circle-10" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="99" cy="24.980769230769223"></circle><circle class=" c3-shape c3-shape-11 c3-circle c3-circle-11" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="108" cy="30.5576923076923"></circle><circle class=" c3-shape c3-shape-12 c3-circle c3-circle-12" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="118" cy="47.28846153846153"></circle><circle class=" c3-shape c3-shape-13 c3-circle c3-circle-13" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="128" cy="36.13461538461539"></circle><circle class=" c3-shape c3-shape-14 c3-circle c3-circle-14" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="137" cy="47.28846153846153"></circle><circle class=" c3-shape c3-shape-15 c3-circle c3-circle-15" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="147" cy="58.4423076923077"></circle><circle class=" c3-shape c3-shape-16 c3-circle c3-circle-16" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="157" cy="75.17307692307693"></circle><circle class=" c3-shape c3-shape-17 c3-circle c3-circle-17" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="166" cy="75.17307692307693"></circle><circle class=" c3-shape c3-shape-18 c3-circle c3-circle-18" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="176" cy="80.75000000000001"></circle><circle class=" c3-shape c3-shape-19 c3-circle c3-circle-19" r="2.5" style="fill: rgb(255, 255, 255); opacity: 0;" cx="185" cy="342.8653846153847"></circle></g></g></g><g class="c3-chart-arcs" transform="translate(93.4140625,39)"><text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 0;"></text></g><g class="c3-chart-texts"><g class="c3-chart-text c3-target c3-target-Sales" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Sales"></g></g></g></g><g clip-path="url(http://mylifestylewealth.com/#c3-1460853468818-clip-grid)" class="c3-grid c3-grid-lines"><g class="c3-xgrid-lines"></g><g class="c3-ygrid-lines"></g></g><g class="c3-axis c3-axis-x" clip-path="url(http://mylifestylewealth.com/#c3-1460853468818-clip-xaxis)" transform="translate(0,88)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-x-label" transform="" x="186.828125" dx="-0.5em" dy="-0.5em" style="text-anchor: end;"></text><g class="tick" transform="translate(2, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><g class="tick" transform="translate(12, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">1</tspan></text></g><g class="tick" transform="translate(22, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">2</tspan></text></g><g class="tick" transform="translate(31, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">3</tspan></text></g><g class="tick" transform="translate(41, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">4</tspan></text></g><g class="tick" transform="translate(51, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">5</tspan></text></g><g class="tick" transform="translate(60, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">6</tspan></text></g><g class="tick" transform="translate(70, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">7</tspan></text></g><g class="tick" transform="translate(79, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">8</tspan></text></g><g class="tick" transform="translate(89, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">9</tspan></text></g><g class="tick" transform="translate(99, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">10</tspan></text></g><g class="tick" transform="translate(108, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">11</tspan></text></g><g class="tick" transform="translate(118, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">12</tspan></text></g><g class="tick" transform="translate(128, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">13</tspan></text></g><g class="tick" transform="translate(137, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">14</tspan></text></g><g class="tick" transform="translate(147, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">15</tspan></text></g><g class="tick" transform="translate(157, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">16</tspan></text></g><g class="tick" transform="translate(166, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">17</tspan></text></g><g class="tick" transform="translate(176, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">18</tspan></text></g><g class="tick" transform="translate(185, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">19</tspan></text></g><path class="domain" d="M0,6V0H186.828125V6"></path></g><g class="c3-axis c3-axis-y" clip-path="url(http://mylifestylewealth.com/#c3-1460853468818-clip-yaxis)" transform="translate(0,0)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-y-label" transform="rotate(-90)" x="0" dx="-0.5em" dy="1.2em" style="text-anchor: end;"></text><g class="tick" transform="translate(0,87)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">46</tspan></text></g><g class="tick" transform="translate(0,76)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">48</tspan></text></g><g class="tick" transform="translate(0,65)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">50</tspan></text></g><g class="tick" transform="translate(0,53)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">52</tspan></text></g><g class="tick" transform="translate(0,42)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">54</tspan></text></g><g class="tick" transform="translate(0,31)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">56</tspan></text></g><g class="tick" transform="translate(0,20)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">58</tspan></text></g><g class="tick" transform="translate(0,9)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">60</tspan></text></g><path class="domain" d="M-6,1H0V88H-6"></path></g><g class="c3-axis c3-axis-y2" transform="translate(186.828125,0)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-y2-label" transform="rotate(-90)" x="0" dx="-0.5em" dy="-0.5em" style="text-anchor: end;"></text><g class="tick" transform="translate(0,88)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,80)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.1</tspan></text></g><g class="tick" transform="translate(0,71)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.2</tspan></text></g><g class="tick" transform="translate(0,62)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.3</tspan></text></g><g class="tick" transform="translate(0,54)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.4</tspan></text></g><g class="tick" transform="translate(0,45)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.5</tspan></text></g><g class="tick" transform="translate(0,36)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.6</tspan></text></g><g class="tick" transform="translate(0,28)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.7</tspan></text></g><g class="tick" transform="translate(0,19)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.8</tspan></text></g><g class="tick" transform="translate(0,10)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.9</tspan></text></g><g class="tick" transform="translate(0,1)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">1</tspan></text></g><path class="domain" d="M6,1H0V88H6"></path></g></g><g transform="translate(1.5,100.5)" style="visibility: hidden;"><g clip-path="url(http://mylifestylewealth.com/#c3-1460853468818-clip-subchart)" class="c3-chart"><g class="c3-chart-bars"></g><g class="c3-chart-lines"></g></g><g clip-path="url(http://mylifestylewealth.com/#c3-1460853468818-clip)" class="c3-brush" style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect class="background" x="0" width="186.828125" style="visibility: hidden; cursor: crosshair;"></rect><rect class="extent" x="0" width="0" style="cursor: move;"></rect><g class="resize e" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g><g class="resize w" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g></g><g class="c3-axis-x" transform="translate(0,0)" clip-path="url(http://mylifestylewealth.com/#c3-1460853468818-clip-xaxis)" style="opacity: 1;"><g class="tick" transform="translate(2, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><g class="tick" transform="translate(12, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">1</tspan></text></g><g class="tick" transform="translate(22, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">2</tspan></text></g><g class="tick" transform="translate(31, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">3</tspan></text></g><g class="tick" transform="translate(41, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">4</tspan></text></g><g class="tick" transform="translate(51, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">5</tspan></text></g><g class="tick" transform="translate(60, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">6</tspan></text></g><g class="tick" transform="translate(70, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">7</tspan></text></g><g class="tick" transform="translate(79, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">8</tspan></text></g><g class="tick" transform="translate(89, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">9</tspan></text></g><g class="tick" transform="translate(99, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">10</tspan></text></g><g class="tick" transform="translate(108, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">11</tspan></text></g><g class="tick" transform="translate(118, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">12</tspan></text></g><g class="tick" transform="translate(128, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">13</tspan></text></g><g class="tick" transform="translate(137, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">14</tspan></text></g><g class="tick" transform="translate(147, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">15</tspan></text></g><g class="tick" transform="translate(157, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">16</tspan></text></g><g class="tick" transform="translate(166, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">17</tspan></text></g><g class="tick" transform="translate(176, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">18</tspan></text></g><g class="tick" transform="translate(185, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">19</tspan></text></g><path class="domain" d="M0,6V0H186.828125V6"></path></g></g><g transform="translate(0,100)" style="visibility: hidden;"></g></svg><div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none;"></div></div><div ng-transclude="">
                    <chart-column column-id="Sales" column-values="[57,60,58,60,59,60,60,57,58,57,57,56,53,55,53,51,48,48,47,49]" column-type="line" class="ng-scope ng-isolate-scope">
                    <chart-axis-y show="false" class="ng-isolate-scope">
                    <div ng-transclude="" show="false" class="ng-isolate-scope">
                    <chart-legend show-legend="false" class="ng-scope ng-isolate-scope">
                    <chart-size chart-height="100px" class="ng-isolate-scope">
                    <chart-tooltip show-tooltip="true" class="ng-isolate-scope">

                    <chart-colors color-pattern="#fff" class="ng-isolate-scope">
                  </chart-colors></chart-tooltip></chart-size></chart-legend></div></chart-axis-y></chart-column></div></div>
                </div>
              </div>

              <div class="card-content p-10">
                <div class="row">
                  <div class="col-md-6 text-center" style="border-right: 1px #F0F0F0 solid;">
                    <h3 class="no-margin w300">$4181,-</h3>
                    <p class="grey-text w600">Total revenue</p>
                  </div>
                  <div class="col-md-6 text-center">
                    <h3 class="no-margin w300">233</h3>
                    <p class="grey-text w600">Today sales</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-md-4">
            <div class="card small">
              <div class="theme-secondary-lighten-1 p-10">
                <div class="pull-right">
                  <div>
                    <i class="md md-trending-up  text-rgb-5"></i>
                    6%
                  </div>
                </div>

                <h4 class="no-margin white-text w600">Outgoing Funds</h4>
                <div class="f11" style="opacity:0.8">
                  <i class="md md-star-outline"></i> Latest 10 May, 10:00
                </div>

                <div class="p-10 p-t-30">
                  <div bindto-id="chart-line-2" class="ng-isolate-scope"><div id="chart-line-2" class="c3" style="max-height: 100px; position: relative;"><svg width="189.828125" height="100" style="overflow: hidden;"><defs><clipPath id="c3-1460853469090-clip"><rect width="186.828125" height="88"></rect></clipPath><clipPath id="c3-1460853469090-clip-xaxis"><rect x="-31" y="-20" width="248.828125" height="28"></rect></clipPath><clipPath id="c3-1460853469090-clip-yaxis"><rect x="-29" y="-4" width="21" height="112"></rect></clipPath><clipPath id="c3-1460853469090-clip-grid"><rect width="186.828125" height="88"></rect></clipPath><clipPath id="c3-1460853469090-clip-subchart"><rect width="186.828125"></rect></clipPath></defs><g transform="translate(1.5,4.5)"><text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="93.4140625" y="44" style="opacity: 0;"></text><rect class="c3-zoom-rect" width="186.828125" height="88" style="opacity: 0;"></rect><g clip-path="url(http://mylifestylewealth.com/#c3-1460853469090-clip)" class="c3-regions" style="visibility: visible;"></g><g clip-path="url(http://mylifestylewealth.com/#c3-1460853469090-clip-grid)" class="c3-grid" style="visibility: visible;"><g class="c3-xgrid-focus"><line class="c3-xgrid-focus" x1="-10" x2="-10" y1="0" y2="88" style="visibility: hidden;"></line></g></g><g clip-path="url(http://mylifestylewealth.com/#c3-1460853469090-clip)" class="c3-chart"><g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;"><rect class=" c3-event-rect c3-event-rect-0" x="-2.670703125" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-1" x="7.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-2" x="17.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-3" x="26.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-4" x="36.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-5" x="46.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-6" x="55.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-7" x="65.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-8" x="74.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-9" x="84.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-10" x="94.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-11" x="103.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-12" x="113.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-13" x="123.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-14" x="132.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-15" x="142.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-16" x="152.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-17" x="161.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-18" x="171.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-19" x="180.329296875" y="0" width="9.34140625" height="88"></rect></g><g class="c3-chart-bars"><g class="c3-chart-bar c3-target c3-target-Customers" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Customers c3-bars c3-bars-Customers" style="cursor: pointer;"></g></g></g><g class="c3-chart-lines"><g class="c3-chart-line c3-target c3-target-Customers" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Customers c3-lines c3-lines-Customers"><path class=" c3-shape c3-shape c3-line c3-line-Customers" d="M12,8.249999999999993L22,8.249999999999993L31,13.428571428571423L41,13.428571428571423L51,28.96428571428571L60,13.428571428571423L70,23.78571428571428L79,39.32142857142857L89,49.67857142857143L99,44.5L108,39.32142857142857L118,54.85714285714286L128,44.5L137,49.67857142857143L147,65.21428571428572L157,65.21428571428572L166,80.75L176,70.39285714285714" style="stroke: rgb(255, 255, 255); opacity: 1;"></path></g><g class=" c3-shapes c3-shapes-Customers c3-areas c3-areas-Customers"><path class=" c3-shape c3-shape c3-area c3-area-Customers" d="M 2 318.9642857142857" style="fill: rgb(255, 255, 255); opacity: 0.2;"></path></g><g class=" c3-selected-circles c3-selected-circles-Customers"></g><g class=" c3-shapes c3-shapes-Customers c3-circles c3-circles-Customers" style="cursor: pointer;"><circle class=" c3-shape c3-shape-0 c3-circle c3-circle-0" r="2.5" style="fill: rgb(255, 255, 255); opacity: 0;" cx="2" cy="318.9642857142857"></circle><circle class=" c3-shape c3-shape-1 c3-circle c3-circle-1" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="12" cy="8.249999999999993"></circle><circle class=" c3-shape c3-shape-2 c3-circle c3-circle-2" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="22" cy="8.249999999999993"></circle><circle class=" c3-shape c3-shape-3 c3-circle c3-circle-3" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="31" cy="13.428571428571423"></circle><circle class=" c3-shape c3-shape-4 c3-circle c3-circle-4" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="41" cy="13.428571428571423"></circle><circle class=" c3-shape c3-shape-5 c3-circle c3-circle-5" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="51" cy="28.96428571428571"></circle><circle class=" c3-shape c3-shape-6 c3-circle c3-circle-6" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="60" cy="13.428571428571423"></circle><circle class=" c3-shape c3-shape-7 c3-circle c3-circle-7" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="70" cy="23.78571428571428"></circle><circle class=" c3-shape c3-shape-8 c3-circle c3-circle-8" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="79" cy="39.32142857142857"></circle><circle class=" c3-shape c3-shape-9 c3-circle c3-circle-9" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="89" cy="49.67857142857143"></circle><circle class=" c3-shape c3-shape-10 c3-circle c3-circle-10" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="99" cy="44.5"></circle><circle class=" c3-shape c3-shape-11 c3-circle c3-circle-11" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="108" cy="39.32142857142857"></circle><circle class=" c3-shape c3-shape-12 c3-circle c3-circle-12" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="118" cy="54.85714285714286"></circle><circle class=" c3-shape c3-shape-13 c3-circle c3-circle-13" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="128" cy="44.5"></circle><circle class=" c3-shape c3-shape-14 c3-circle c3-circle-14" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="137" cy="49.67857142857143"></circle><circle class=" c3-shape c3-shape-15 c3-circle c3-circle-15" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="147" cy="65.21428571428572"></circle><circle class=" c3-shape c3-shape-16 c3-circle c3-circle-16" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="157" cy="65.21428571428572"></circle><circle class=" c3-shape c3-shape-17 c3-circle c3-circle-17" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="166" cy="80.75"></circle><circle class=" c3-shape c3-shape-18 c3-circle c3-circle-18" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="176" cy="70.39285714285714"></circle><circle class=" c3-shape c3-shape-19 c3-circle c3-circle-19" r="2.5" style="fill: rgb(255, 255, 255); opacity: 0;" cx="185" cy="318.9642857142857"></circle></g></g></g><g class="c3-chart-arcs" transform="translate(93.4140625,39)"><text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 0;"></text></g><g class="c3-chart-texts"><g class="c3-chart-text c3-target c3-target-Customers" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Customers"></g></g></g></g><g clip-path="url(http://mylifestylewealth.com/#c3-1460853469090-clip-grid)" class="c3-grid c3-grid-lines"><g class="c3-xgrid-lines"></g><g class="c3-ygrid-lines"></g></g><g class="c3-axis c3-axis-x" clip-path="url(http://mylifestylewealth.com/#c3-1460853469090-clip-xaxis)" transform="translate(0,88)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-x-label" transform="" x="186.828125" dx="-0.5em" dy="-0.5em" style="text-anchor: end;"></text><g class="tick" transform="translate(2, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><g class="tick" transform="translate(12, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">1</tspan></text></g><g class="tick" transform="translate(22, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">2</tspan></text></g><g class="tick" transform="translate(31, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">3</tspan></text></g><g class="tick" transform="translate(41, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">4</tspan></text></g><g class="tick" transform="translate(51, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">5</tspan></text></g><g class="tick" transform="translate(60, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">6</tspan></text></g><g class="tick" transform="translate(70, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">7</tspan></text></g><g class="tick" transform="translate(79, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">8</tspan></text></g><g class="tick" transform="translate(89, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">9</tspan></text></g><g class="tick" transform="translate(99, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">10</tspan></text></g><g class="tick" transform="translate(108, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">11</tspan></text></g><g class="tick" transform="translate(118, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">12</tspan></text></g><g class="tick" transform="translate(128, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">13</tspan></text></g><g class="tick" transform="translate(137, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">14</tspan></text></g><g class="tick" transform="translate(147, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">15</tspan></text></g><g class="tick" transform="translate(157, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">16</tspan></text></g><g class="tick" transform="translate(166, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">17</tspan></text></g><g class="tick" transform="translate(176, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">18</tspan></text></g><g class="tick" transform="translate(185, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">19</tspan></text></g><path class="domain" d="M0,6V0H186.828125V6"></path></g><g class="c3-axis c3-axis-y" clip-path="url(http://mylifestylewealth.com/#c3-1460853469090-clip-yaxis)" transform="translate(0,0)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-y-label" transform="rotate(-90)" x="0" dx="-0.5em" dy="1.2em" style="text-anchor: end;"></text><g class="tick" transform="translate(0,81)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">46</tspan></text></g><g class="tick" transform="translate(0,71)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">48</tspan></text></g><g class="tick" transform="translate(0,61)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">50</tspan></text></g><g class="tick" transform="translate(0,50)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">52</tspan></text></g><g class="tick" transform="translate(0,40)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">54</tspan></text></g><g class="tick" transform="translate(0,29)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">56</tspan></text></g><g class="tick" transform="translate(0,19)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">58</tspan></text></g><g class="tick" transform="translate(0,9)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">60</tspan></text></g><path class="domain" d="M-6,1H0V88H-6"></path></g><g class="c3-axis c3-axis-y2" transform="translate(186.828125,0)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-y2-label" transform="rotate(-90)" x="0" dx="-0.5em" dy="-0.5em" style="text-anchor: end;"></text><g class="tick" transform="translate(0,88)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,80)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.1</tspan></text></g><g class="tick" transform="translate(0,71)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.2</tspan></text></g><g class="tick" transform="translate(0,62)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.3</tspan></text></g><g class="tick" transform="translate(0,54)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.4</tspan></text></g><g class="tick" transform="translate(0,45)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.5</tspan></text></g><g class="tick" transform="translate(0,36)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.6</tspan></text></g><g class="tick" transform="translate(0,28)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.7</tspan></text></g><g class="tick" transform="translate(0,19)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.8</tspan></text></g><g class="tick" transform="translate(0,10)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.9</tspan></text></g><g class="tick" transform="translate(0,1)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">1</tspan></text></g><path class="domain" d="M6,1H0V88H6"></path></g></g><g transform="translate(1.5,100.5)" style="visibility: hidden;"><g clip-path="url(http://mylifestylewealth.com/#c3-1460853469090-clip-subchart)" class="c3-chart"><g class="c3-chart-bars"></g><g class="c3-chart-lines"></g></g><g clip-path="url(http://mylifestylewealth.com/#c3-1460853469090-clip)" class="c3-brush" style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect class="background" x="0" width="186.828125" style="visibility: hidden; cursor: crosshair;"></rect><rect class="extent" x="0" width="0" style="cursor: move;"></rect><g class="resize e" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g><g class="resize w" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g></g><g class="c3-axis-x" transform="translate(0,0)" clip-path="url(http://mylifestylewealth.com/#c3-1460853469090-clip-xaxis)" style="opacity: 1;"><g class="tick" transform="translate(2, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><g class="tick" transform="translate(12, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">1</tspan></text></g><g class="tick" transform="translate(22, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">2</tspan></text></g><g class="tick" transform="translate(31, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">3</tspan></text></g><g class="tick" transform="translate(41, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">4</tspan></text></g><g class="tick" transform="translate(51, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">5</tspan></text></g><g class="tick" transform="translate(60, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">6</tspan></text></g><g class="tick" transform="translate(70, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">7</tspan></text></g><g class="tick" transform="translate(79, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">8</tspan></text></g><g class="tick" transform="translate(89, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">9</tspan></text></g><g class="tick" transform="translate(99, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">10</tspan></text></g><g class="tick" transform="translate(108, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">11</tspan></text></g><g class="tick" transform="translate(118, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">12</tspan></text></g><g class="tick" transform="translate(128, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">13</tspan></text></g><g class="tick" transform="translate(137, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">14</tspan></text></g><g class="tick" transform="translate(147, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">15</tspan></text></g><g class="tick" transform="translate(157, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">16</tspan></text></g><g class="tick" transform="translate(166, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">17</tspan></text></g><g class="tick" transform="translate(176, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">18</tspan></text></g><g class="tick" transform="translate(185, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">19</tspan></text></g><path class="domain" d="M0,6V0H186.828125V6"></path></g></g><g transform="translate(0,100)" style="visibility: hidden;"></g></svg><div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none;"></div></div><div ng-transclude="">
                    <chart-column column-id="Customers" column-values="[57,60,60,59,59,56,59,57,54,52,53,54,51,53,52,49,49,46,48,51]" column-type="line" class="ng-scope ng-isolate-scope">
                    <chart-axis-y show="false" class="ng-isolate-scope">
                    <div ng-transclude="" show="false" class="ng-isolate-scope">
                    <chart-legend show-legend="false" class="ng-scope ng-isolate-scope">
                    <chart-size chart-height="100px" class="ng-isolate-scope">
                    <chart-tooltip show-tooltip="true" class="ng-isolate-scope">

                    <chart-colors color-pattern="#fff" class="ng-isolate-scope">
                  </chart-colors></chart-tooltip></chart-size></chart-legend></div></chart-axis-y></chart-column></div></div>
                </div>
              </div>

              <div class="card-content p-10">
                <div class="row">
                  <div class="col-md-6 text-center" style="border-right: 1px #F0F0F0 solid;">
                    <h3 class="no-margin w300">2584</h3>
                    <p class="grey-text w600">Monthly total</p>
                  </div>
                  <div class="col-md-6 text-center">
                    <h3 class="no-margin w300">89</h3>
                    <p class="grey-text w600">Today total</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-md-4">
            <div class="card small">
              <div class="green lighten-1 p-10">
                <div class="pull-right">
                  <div>
                    <i class="md md-trending-up  text-rgb-5"></i>
                    9%
                  </div>
                </div>

                <h4 class="no-margin white-text w600"> Available Funds</h4>
                <div class="f11" style="opacity:0.8">
                  <i class="md md-star-outline"></i> Latest 10 May, 10:00
                </div>

                <div class="p-10 p-t-30">
                  <div bindto-id="chart-line-3" class="ng-isolate-scope"><div id="chart-line-3" class="c3" style="max-height: 100px; position: relative;"><svg width="189.828125" height="100" style="overflow: hidden;"><defs><clipPath id="c3-1460853469187-clip"><rect width="186.828125" height="88"></rect></clipPath><clipPath id="c3-1460853469187-clip-xaxis"><rect x="-31" y="-20" width="248.828125" height="28"></rect></clipPath><clipPath id="c3-1460853469187-clip-yaxis"><rect x="-29" y="-4" width="21" height="112"></rect></clipPath><clipPath id="c3-1460853469187-clip-grid"><rect width="186.828125" height="88"></rect></clipPath><clipPath id="c3-1460853469187-clip-subchart"><rect width="186.828125"></rect></clipPath></defs><g transform="translate(1.5,4.5)"><text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="93.4140625" y="44" style="opacity: 0;"></text><rect class="c3-zoom-rect" width="186.828125" height="88" style="opacity: 0;"></rect><g clip-path="url(http://mylifestylewealth.com/#c3-1460853469187-clip)" class="c3-regions" style="visibility: visible;"></g><g clip-path="url(http://mylifestylewealth.com/#c3-1460853469187-clip-grid)" class="c3-grid" style="visibility: visible;"><g class="c3-xgrid-focus"><line class="c3-xgrid-focus" x1="-10" x2="-10" y1="0" y2="88" style="visibility: hidden;"></line></g></g><g clip-path="url(http://mylifestylewealth.com/#c3-1460853469187-clip)" class="c3-chart"><g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;"><rect class=" c3-event-rect c3-event-rect-0" x="-2.670703125" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-1" x="7.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-2" x="17.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-3" x="26.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-4" x="36.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-5" x="46.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-6" x="55.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-7" x="65.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-8" x="74.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-9" x="84.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-10" x="94.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-11" x="103.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-12" x="113.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-13" x="123.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-14" x="132.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-15" x="142.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-16" x="152.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-17" x="161.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-18" x="171.329296875" y="0" width="9.34140625" height="88"></rect><rect class=" c3-event-rect c3-event-rect-19" x="180.329296875" y="0" width="9.34140625" height="88"></rect></g><g class="c3-chart-bars"><g class="c3-chart-bar c3-target c3-target-Signups" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Signups c3-bars c3-bars-Signups" style="cursor: pointer;"></g></g></g><g class="c3-chart-lines"><g class="c3-chart-line c3-target c3-target-Signups" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Signups c3-lines c3-lines-Signups"><path class=" c3-shape c3-shape c3-line c3-line-Signups" d="M12,56.58333333333334L22,64.6388888888889L31,56.58333333333334L41,32.41666666666666L51,56.58333333333334L60,80.75L70,80.75L79,64.6388888888889L89,48.52777777777778L99,48.52777777777778L108,48.52777777777778L118,24.361111111111107L128,8.249999999999993L137,16.305555555555546L147,8.249999999999993L157,32.41666666666666L166,40.47222222222222L176,16.305555555555546" style="stroke: rgb(255, 255, 255); opacity: 1;"></path></g><g class=" c3-shapes c3-shapes-Signups c3-areas c3-areas-Signups"><path class=" c3-shape c3-shape c3-area c3-area-Signups" d="M 2 402.97222222222234" style="fill: rgb(255, 255, 255); opacity: 0.2;"></path></g><g class=" c3-selected-circles c3-selected-circles-Signups"></g><g class=" c3-shapes c3-shapes-Signups c3-circles c3-circles-Signups" style="cursor: pointer;"><circle class=" c3-shape c3-shape-0 c3-circle c3-circle-0" r="2.5" style="fill: rgb(255, 255, 255); opacity: 0;" cx="2" cy="402.97222222222234"></circle><circle class=" c3-shape c3-shape-1 c3-circle c3-circle-1" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="12" cy="56.58333333333334"></circle><circle class=" c3-shape c3-shape-2 c3-circle c3-circle-2" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="22" cy="64.6388888888889"></circle><circle class=" c3-shape c3-shape-3 c3-circle c3-circle-3" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="31" cy="56.58333333333334"></circle><circle class=" c3-shape c3-shape-4 c3-circle c3-circle-4" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="41" cy="32.41666666666666"></circle><circle class=" c3-shape c3-shape-5 c3-circle c3-circle-5" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="51" cy="56.58333333333334"></circle><circle class=" c3-shape c3-shape-6 c3-circle c3-circle-6" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="60" cy="80.75"></circle><circle class=" c3-shape c3-shape-7 c3-circle c3-circle-7" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="70" cy="80.75"></circle><circle class=" c3-shape c3-shape-8 c3-circle c3-circle-8" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="79" cy="64.6388888888889"></circle><circle class=" c3-shape c3-shape-9 c3-circle c3-circle-9" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="89" cy="48.52777777777778"></circle><circle class=" c3-shape c3-shape-10 c3-circle c3-circle-10" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="99" cy="48.52777777777778"></circle><circle class=" c3-shape c3-shape-11 c3-circle c3-circle-11" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="108" cy="48.52777777777778"></circle><circle class=" c3-shape c3-shape-12 c3-circle c3-circle-12" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="118" cy="24.361111111111107"></circle><circle class=" c3-shape c3-shape-13 c3-circle c3-circle-13" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="128" cy="8.249999999999993"></circle><circle class=" c3-shape c3-shape-14 c3-circle c3-circle-14" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="137" cy="16.305555555555546"></circle><circle class=" c3-shape c3-shape-15 c3-circle c3-circle-15" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="147" cy="8.249999999999993"></circle><circle class=" c3-shape c3-shape-16 c3-circle c3-circle-16" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="157" cy="32.41666666666666"></circle><circle class=" c3-shape c3-shape-17 c3-circle c3-circle-17" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="166" cy="40.47222222222222"></circle><circle class=" c3-shape c3-shape-18 c3-circle c3-circle-18" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="176" cy="16.305555555555546"></circle><circle class=" c3-shape c3-shape-19 c3-circle c3-circle-19" r="2.5" style="fill: rgb(255, 255, 255); opacity: 0;" cx="185" cy="402.97222222222234"></circle></g></g></g><g class="c3-chart-arcs" transform="translate(93.4140625,39)"><text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 0;"></text></g><g class="c3-chart-texts"><g class="c3-chart-text c3-target c3-target-Signups" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Signups"></g></g></g></g><g clip-path="url(http://mylifestylewealth.com/#c3-1460853469187-clip-grid)" class="c3-grid c3-grid-lines"><g class="c3-xgrid-lines"></g><g class="c3-ygrid-lines"></g></g><g class="c3-axis c3-axis-x" clip-path="url(http://mylifestylewealth.com/#c3-1460853469187-clip-xaxis)" transform="translate(0,88)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-x-label" transform="" x="186.828125" dx="-0.5em" dy="-0.5em" style="text-anchor: end;"></text><g class="tick" transform="translate(2, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><g class="tick" transform="translate(12, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">1</tspan></text></g><g class="tick" transform="translate(22, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">2</tspan></text></g><g class="tick" transform="translate(31, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">3</tspan></text></g><g class="tick" transform="translate(41, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">4</tspan></text></g><g class="tick" transform="translate(51, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">5</tspan></text></g><g class="tick" transform="translate(60, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">6</tspan></text></g><g class="tick" transform="translate(70, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">7</tspan></text></g><g class="tick" transform="translate(79, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">8</tspan></text></g><g class="tick" transform="translate(89, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">9</tspan></text></g><g class="tick" transform="translate(99, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">10</tspan></text></g><g class="tick" transform="translate(108, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">11</tspan></text></g><g class="tick" transform="translate(118, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">12</tspan></text></g><g class="tick" transform="translate(128, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">13</tspan></text></g><g class="tick" transform="translate(137, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">14</tspan></text></g><g class="tick" transform="translate(147, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">15</tspan></text></g><g class="tick" transform="translate(157, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">16</tspan></text></g><g class="tick" transform="translate(166, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">17</tspan></text></g><g class="tick" transform="translate(176, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">18</tspan></text></g><g class="tick" transform="translate(185, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">19</tspan></text></g><path class="domain" d="M0,6V0H186.828125V6"></path></g><g class="c3-axis c3-axis-y" clip-path="url(http://mylifestylewealth.com/#c3-1460853469187-clip-yaxis)" transform="translate(0,0)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-y-label" transform="rotate(-90)" x="0" dx="-0.5em" dy="1.2em" style="text-anchor: end;"></text><g class="tick" transform="translate(0,81)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">40</tspan></text></g><g class="tick" transform="translate(0,73)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">41</tspan></text></g><g class="tick" transform="translate(0,65)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">42</tspan></text></g><g class="tick" transform="translate(0,57)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">43</tspan></text></g><g class="tick" transform="translate(0,49)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">44</tspan></text></g><g class="tick" transform="translate(0,41)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">45</tspan></text></g><g class="tick" transform="translate(0,33)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">46</tspan></text></g><g class="tick" transform="translate(0,25)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">47</tspan></text></g><g class="tick" transform="translate(0,17)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">48</tspan></text></g><g class="tick" transform="translate(0,9)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">49</tspan></text></g><path class="domain" d="M-6,1H0V88H-6"></path></g><g class="c3-axis c3-axis-y2" transform="translate(186.828125,0)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-y2-label" transform="rotate(-90)" x="0" dx="-0.5em" dy="-0.5em" style="text-anchor: end;"></text><g class="tick" transform="translate(0,88)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,80)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.1</tspan></text></g><g class="tick" transform="translate(0,71)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.2</tspan></text></g><g class="tick" transform="translate(0,62)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.3</tspan></text></g><g class="tick" transform="translate(0,54)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.4</tspan></text></g><g class="tick" transform="translate(0,45)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.5</tspan></text></g><g class="tick" transform="translate(0,36)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.6</tspan></text></g><g class="tick" transform="translate(0,28)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.7</tspan></text></g><g class="tick" transform="translate(0,19)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.8</tspan></text></g><g class="tick" transform="translate(0,10)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.9</tspan></text></g><g class="tick" transform="translate(0,1)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">1</tspan></text></g><path class="domain" d="M6,1H0V88H6"></path></g></g><g transform="translate(1.5,100.5)" style="visibility: hidden;"><g clip-path="url(http://mylifestylewealth.com/#c3-1460853469187-clip-subchart)" class="c3-chart"><g class="c3-chart-bars"></g><g class="c3-chart-lines"></g></g><g clip-path="url(http://mylifestylewealth.com/#c3-1460853469187-clip)" class="c3-brush" style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect class="background" x="0" width="186.828125" style="visibility: hidden; cursor: crosshair;"></rect><rect class="extent" x="0" width="0" style="cursor: move;"></rect><g class="resize e" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g><g class="resize w" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g></g><g class="c3-axis-x" transform="translate(0,0)" clip-path="url(http://mylifestylewealth.com/#c3-1460853469187-clip-xaxis)" style="opacity: 1;"><g class="tick" transform="translate(2, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><g class="tick" transform="translate(12, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">1</tspan></text></g><g class="tick" transform="translate(22, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">2</tspan></text></g><g class="tick" transform="translate(31, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">3</tspan></text></g><g class="tick" transform="translate(41, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">4</tspan></text></g><g class="tick" transform="translate(51, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">5</tspan></text></g><g class="tick" transform="translate(60, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">6</tspan></text></g><g class="tick" transform="translate(70, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">7</tspan></text></g><g class="tick" transform="translate(79, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">8</tspan></text></g><g class="tick" transform="translate(89, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">9</tspan></text></g><g class="tick" transform="translate(99, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">10</tspan></text></g><g class="tick" transform="translate(108, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">11</tspan></text></g><g class="tick" transform="translate(118, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">12</tspan></text></g><g class="tick" transform="translate(128, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">13</tspan></text></g><g class="tick" transform="translate(137, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">14</tspan></text></g><g class="tick" transform="translate(147, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">15</tspan></text></g><g class="tick" transform="translate(157, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">16</tspan></text></g><g class="tick" transform="translate(166, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">17</tspan></text></g><g class="tick" transform="translate(176, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">18</tspan></text></g><g class="tick" transform="translate(185, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">19</tspan></text></g><path class="domain" d="M0,6V0H186.828125V6"></path></g></g><g transform="translate(0,100)" style="visibility: hidden;"></g></svg><div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none;"></div></div><div ng-transclude="">
                    <chart-column column-id="Signups" column-values="[44,43,42,43,46,43,40,40,42,44,44,44,47,49,48,49,46,45,48,46]" column-type="line" class="ng-scope ng-isolate-scope">
                    <chart-axis-y show="false" class="ng-isolate-scope">
                    <div ng-transclude="" show="false" class="ng-isolate-scope">
                    <chart-legend show-legend="false" class="ng-scope ng-isolate-scope">
                    <chart-size chart-height="100px" class="ng-isolate-scope">
                    <chart-tooltip show-tooltip="true" class="ng-isolate-scope">

                    <chart-colors color-pattern="#fff" class="ng-isolate-scope">
                  </chart-colors></chart-tooltip></chart-size></chart-legend></div></chart-axis-y></chart-column></div></div>
                </div>
              </div>

              <div class="card-content p-10">
                <div class="row">
                  <div class="col-md-6 text-center" style="border-right: 1px #F0F0F0 solid;">
                    <h3 class="no-margin w300">1597</h3>
                    <p class="grey-text w600">Monthly total</p>
                  </div>
                  <div class="col-md-6 text-center">
                    <h3 class="no-margin w300">34 </h3>
                    <p class="grey-text w600">Today total</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="grey-text small p-t-20">Copyright <a href="www.dci-websolutions.com">DCI Websolutions</a></div>
      </div>
    </div>

    <div class="col-lg-3 col-md-12">

      <div class="p-20">
        <div class="pull-right">
          <ul class="list-unstyled">
            <li class="dropdown">
              <button type="button" class="btn btn-round-sm btn-link ng-scope" bs-dropdown="dropdown" aria-haspopup="true" aria-expanded="false" data-template="assets/tpl/partials/dropdown-list-example.html" data-animation="mat-grow-top-right" bs-tooltip="" title="More stats">
                <i class="md md-equalizer"></i>
              </button>
            </li>
        </ul></div>
        <h4 class="grey-text m-b-30">Action feed</h4>

        <div class="card">
          <div class="p-10 p-l-20 p-r-20 clearfix">
            <div class="badge pull-right">10</div>
            <div class="w600 f11 grey-text">Insights</div>
          </div>
          <div class="table-responsive">
            <table class="table table-small grey-text">
              <colgroup>
                <col width="">
                <col width="60">
                <col width="50">
              </colgroup>
              <tbody>
              <tr>
                <td>Weekly sales</td>
                <td>43</td>
                <td><i class="md md-arrow-drop-up green-text"></i></td>
              </tr>
              <tr>
                <td>Weekly profits</td>
                <td>$4181,-</td>
                <td><i class="md md-arrow-drop-up green-text"></i></td>
              </tr>
              <tr>
                <td>Monthly visits</td>
                <td>14000</td>
                <td><i class="md md-arrow-drop-down red-text"></i></td>
              </tr>
              <tr>
                <td>Bounce rate</td>
                <td>40%</td>
                <td><i class="md md-arrow-drop-up green-text"></i></td>
              </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>

      <div class="p-h-40">

        <div role="tabpanel">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist" ng-init="actionTab=1">
            <li role="presentation" class="active"><a ng-click="actionTab=1" aria-controls="home" role="tab" data-toggle="tab">Log</a></li>
            <li role="presentation" class=""><a ng-click="actionTab=2" aria-controls="home" role="tab" data-toggle="tab">Timeline</a></li>
            <li role="presentation"><a ng-click="actionTab=3" aria-controls="home" role="tab" data-toggle="tab">Messages</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content m-t-10">
            <div role="tabpanel" class="tab-pane active" ng-class="{active: actionTab==1}">

              <ul class="timeline">
                <li>
                  <div class="timeline-badge">
                    <i class="icon-circle theme-border"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">E-mail confirmation</h4>
                    </div>
                    <div class="timeline-body">
                      <p>A new user has registered and confirmed his account</p>
                      <small class="text-muted"><i class="md md-timer"></i> 11 hours ago</small>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-badge">
                    <i class="icon-circle theme-secondary-border"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">User payment</h4>
                    </div>
                    <div class="timeline-body">
                      <p>A new user has payed a premium package</p>
                      <small class="text-muted"><i class="md md-timer"></i> 11 hours ago</small>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="timeline-badge">
                    <i class="icon-circle green-border"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">E-mail confirmation</h4>
                    </div>
                    <div class="timeline-body">
                      <p>A new user has registered and confirmed his account</p>
                      <small class="text-muted"><i class="md md-timer"></i> 11 hours ago</small>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-badge">
                    <i class="icon-circle red-border accent-1"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">User payment</h4>
                    </div>
                    <div class="timeline-body">
                      <p>A new user has payed a premium package</p>
                      <small class="text-muted"><i class="md md-timer"></i> 11 hours ago</small>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="timeline-badge">
                    <i class="icon-circle theme-border"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">E-mail confirmation</h4>
                    </div>
                    <div class="timeline-body">
                      <p>A new user has registered and confirmed his account</p>
                      <small class="text-muted"><i class="md md-timer"></i> 11 hours ago</small>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-badge">
                    <i class="icon-circle brown-border"></i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">User payment</h4>
                    </div>
                    <div class="timeline-body">
                      <p>A new user has payed a premium package</p>
                      <small class="text-muted"><i class="md md-timer"></i> 11 hours ago</small>
                    </div>
                  </div>
                </li>
              </ul>

            </div>
            <div role="tabpanel" class="tab-pane" ng-class="{active: actionTab==2}">

              <ul class="timeline" ng-init="(rows=[]).length=5;">
                <!-- ngRepeat: i in rows track by $index --><li ng-repeat="i in rows track by $index" class="ng-scope">
                  <div class="timeline-badge"><img placeholder-img="" class="img-responsive" src="assets/img/icons/ballicons/passport.svg"></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title" placeholder-name="">Pearline Braun</h4>
                    </div>
                    <div class="timeline-body">
                      <p placeholder-p=""><p>Venenatis a, condimentum vitae sapien.</p></p>
                      <small class="text-muted"><i class="md md-timer"></i> 11 hours ago</small>
                    </div>
                  </div>
                </li><!-- end ngRepeat: i in rows track by $index --><li ng-repeat="i in rows track by $index" class="ng-scope">
                  <div class="timeline-badge"><img placeholder-img="" class="img-responsive" src="assets/img/icons/ballicons/server.svg"></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title" placeholder-name="">Kade Sawayn</h4>
                    </div>
                    <div class="timeline-body">
                      <p placeholder-p=""><p>Mattis molestie a, iaculis at erat pellentesque adipiscing commodo elit, at imperdiet dui accumsan.</p></p>
                      <small class="text-muted"><i class="md md-timer"></i> 11 hours ago</small>
                    </div>
                  </div>
                </li><!-- end ngRepeat: i in rows track by $index --><li ng-repeat="i in rows track by $index" class="ng-scope">
                  <div class="timeline-badge"><img placeholder-img="" class="img-responsive" src="assets/img/icons/ballicons/presentation.svg"></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title" placeholder-name="">Fredrick Ernser</h4>
                    </div>
                    <div class="timeline-body">
                      <p placeholder-p=""><p>Tempor commodo, ullamcorper a lacus vestibulum sed arcu non odio euismod lacinia.</p></p>
                      <small class="text-muted"><i class="md md-timer"></i> 11 hours ago</small>
                    </div>
                  </div>
                </li><!-- end ngRepeat: i in rows track by $index --><li ng-repeat="i in rows track by $index" class="ng-scope">
                  <div class="timeline-badge"><img placeholder-img="" class="img-responsive" src="assets/img/icons/ballicons/passport.svg"></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title" placeholder-name="">Myron Wintheiser</h4>
                    </div>
                    <div class="timeline-body">
                      <p placeholder-p=""><p>Vitae aliquet nec, ullamcorper sit amet risus nullam eget felis eget nunc lobortis mattis aliquam.</p></p>
                      <small class="text-muted"><i class="md md-timer"></i> 11 hours ago</small>
                    </div>
                  </div>
                </li><!-- end ngRepeat: i in rows track by $index --><li ng-repeat="i in rows track by $index" class="ng-scope">
                  <div class="timeline-badge"><img placeholder-img="" class="img-responsive" src="assets/img/icons/ballicons/lamp.svg"></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title" placeholder-name="">Brannon Cremin</h4>
                    </div>
                    <div class="timeline-body">
                      <p placeholder-p=""><p>Habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper.</p></p>
                      <small class="text-muted"><i class="md md-timer"></i> 11 hours ago</small>
                    </div>
                  </div>
                </li><!-- end ngRepeat: i in rows track by $index -->
              </ul>

            </div>
            <div role="tabpanel" class="tab-pane" ng-class="{active: actionTab==3}">

              <ul class="timeline" ng-init="(rows=[]).length=5;">
                <!-- ngRepeat: i in rows track by $index --><li ng-repeat="i in rows track by $index" class="ng-scope">
                  <div class="timeline-badge" placeholder-icon=""><i class="md md-battery-charging-full"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title" placeholder-name="">Harmony Braun</h4>
                    </div>
                    <div class="timeline-body">
                      <p placeholder-p=""><p>Sit amet, dictum sit amet.</p></p>
                      <small class="text-muted"><i class="md md-timer"></i> 11 hours ago</small>
                    </div>
                  </div>
                </li><!-- end ngRepeat: i in rows track by $index --><li ng-repeat="i in rows track by $index" class="ng-scope">
                  <div class="timeline-badge" placeholder-icon=""><i class="md md-more-vert"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title" placeholder-name="">Ebony Moen</h4>
                    </div>
                    <div class="timeline-body">
                      <p placeholder-p=""><p>Dui vivamus arcu felis, bibendum ut tristique et, egestas quis ipsum.</p></p>
                      <small class="text-muted"><i class="md md-timer"></i> 11 hours ago</small>
                    </div>
                  </div>
                </li><!-- end ngRepeat: i in rows track by $index --><li ng-repeat="i in rows track by $index" class="ng-scope">
                  <div class="timeline-badge" placeholder-icon=""><i class="md md-nature"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title" placeholder-name="">Stella Zemlak</h4>
                    </div>
                    <div class="timeline-body">
                      <p placeholder-p=""><p>Egestas tellus rutrum tellus pellentesque eu tincidunt.</p></p>
                      <small class="text-muted"><i class="md md-timer"></i> 11 hours ago</small>
                    </div>
                  </div>
                </li><!-- end ngRepeat: i in rows track by $index --><li ng-repeat="i in rows track by $index" class="ng-scope">
                  <div class="timeline-badge" placeholder-icon=""><i class="md md-flip-to-front"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title" placeholder-name="">Sydni Smitham</h4>
                    </div>
                    <div class="timeline-body">
                      <p placeholder-p=""><p>Nibh nisl, condimentum id venenatis.</p></p>
                      <small class="text-muted"><i class="md md-timer"></i> 11 hours ago</small>
                    </div>
                  </div>
                </li><!-- end ngRepeat: i in rows track by $index --><li ng-repeat="i in rows track by $index" class="ng-scope">
                  <div class="timeline-badge" placeholder-icon=""><i class="md md-vertical-align-center"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title" placeholder-name="">Reynold Koch</h4>
                    </div>
                    <div class="timeline-body">
                      <p placeholder-p=""><p>Lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent.</p></p>
                      <small class="text-muted"><i class="md md-timer"></i> 11 hours ago</small>
                    </div>
                  </div>
                </li><!-- end ngRepeat: i in rows track by $index -->
              </ul>

            </div>
          </div>
        </div>
      </div>

  
      <div bindto-id="chart-pagesviews" padding-bottom="-8px" class="ng-isolate-scope"><div id="chart-pagesviews" class="c3" style="max-height: 100px; position: relative;"><svg width="252.5" height="100" style="overflow: hidden;"><defs><clipPath id="c3-1460853469258-clip"><rect width="249.5" height="96"></rect></clipPath><clipPath id="c3-1460853469258-clip-xaxis"><rect x="-31" y="-20" width="311.5" height="20"></rect></clipPath><clipPath id="c3-1460853469258-clip-yaxis"><rect x="-29" y="-4" width="21" height="120"></rect></clipPath><clipPath id="c3-1460853469258-clip-grid"><rect width="249.5" height="96"></rect></clipPath><clipPath id="c3-1460853469258-clip-subchart"><rect width="249.5"></rect></clipPath></defs><g transform="translate(1.5,4.5)"><text class="c3-text c3-empty" text-anchor="middle" dominant-baseline="middle" x="124.75" y="48" style="opacity: 0;"></text><rect class="c3-zoom-rect" width="249.5" height="96" style="opacity: 0;"></rect><g clip-path="url(http://mylifestylewealth.com/#c3-1460853469258-clip)" class="c3-regions" style="visibility: visible;"></g><g clip-path="url(http://mylifestylewealth.com/#c3-1460853469258-clip-grid)" class="c3-grid" style="visibility: visible;"><g class="c3-xgrid-focus"><line class="c3-xgrid-focus" x1="-10" x2="-10" y1="0" y2="96" style="visibility: hidden;"></line></g></g><g clip-path="url(http://mylifestylewealth.com/#c3-1460853469258-clip)" class="c3-chart"><g class="c3-event-rects c3-event-rects-single" style="fill-opacity: 0;"><rect class=" c3-event-rect c3-event-rect-0" x="-3.2375" y="0" width="12.475" height="96"></rect><rect class=" c3-event-rect c3-event-rect-1" x="9.7625" y="0" width="12.475" height="96"></rect><rect class=" c3-event-rect c3-event-rect-2" x="22.7625" y="0" width="12.475" height="96"></rect><rect class=" c3-event-rect c3-event-rect-3" x="35.7625" y="0" width="12.475" height="96"></rect><rect class=" c3-event-rect c3-event-rect-4" x="47.7625" y="0" width="12.475" height="96"></rect><rect class=" c3-event-rect c3-event-rect-5" x="60.7625" y="0" width="12.475" height="96"></rect><rect class=" c3-event-rect c3-event-rect-6" x="73.7625" y="0" width="12.475" height="96"></rect><rect class=" c3-event-rect c3-event-rect-7" x="86.7625" y="0" width="12.475" height="96"></rect><rect class=" c3-event-rect c3-event-rect-8" x="99.7625" y="0" width="12.475" height="96"></rect><rect class=" c3-event-rect c3-event-rect-9" x="112.7625" y="0" width="12.475" height="96"></rect><rect class=" c3-event-rect c3-event-rect-10" x="125.7625" y="0" width="12.475" height="96"></rect><rect class=" c3-event-rect c3-event-rect-11" x="138.7625" y="0" width="12.475" height="96"></rect><rect class=" c3-event-rect c3-event-rect-12" x="150.7625" y="0" width="12.475" height="96"></rect><rect class=" c3-event-rect c3-event-rect-13" x="163.7625" y="0" width="12.475" height="96"></rect><rect class=" c3-event-rect c3-event-rect-14" x="176.7625" y="0" width="12.475" height="96"></rect><rect class=" c3-event-rect c3-event-rect-15" x="189.7625" y="0" width="12.475" height="96"></rect><rect class=" c3-event-rect c3-event-rect-16" x="202.7625" y="0" width="12.475" height="96"></rect><rect class=" c3-event-rect c3-event-rect-17" x="215.7625" y="0" width="12.475" height="96"></rect><rect class=" c3-event-rect c3-event-rect-18" x="228.7625" y="0" width="12.475" height="96"></rect><rect class=" c3-event-rect c3-event-rect-19" x="241.7625" y="0" width="12.475" height="96"></rect></g><g class="c3-chart-bars"><g class="c3-chart-bar c3-target c3-target-Pageviews" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Pageviews c3-bars c3-bars-Pageviews" style="cursor: pointer;"></g></g></g><g class="c3-chart-lines"><g class="c3-chart-line c3-target c3-target-Pageviews" style="opacity: 1; pointer-events: none;"><g class=" c3-shapes c3-shapes-Pageviews c3-lines c3-lines-Pageviews"><path class=" c3-shape c3-shape c3-line c3-line-Pageviews" d="M3,83.04545454545455L16,78.72727272727272L29,74.40909090909092L42,52.81818181818181L54,9.636363636363638L67,35.54545454545454L80,18.272727272727266L93,44.18181818181819L106,52.81818181818181L119,9.636363636363638L132,52.81818181818181L145,35.54545454545454L157,31.227272727272734L170,52.81818181818181L183,9.636363636363638L196,35.54545454545454L209,18.272727272727266L222,44.18181818181819L235,52.81818181818181L248,9.636363636363638" style="stroke: rgb(255, 255, 255); opacity: 1;"></path></g><g class=" c3-shapes c3-shapes-Pageviews c3-areas c3-areas-Pageviews"><path class=" c3-shape c3-shape c3-area c3-area-Pageviews" d="M3,83.04545454545455L16,78.72727272727272L29,74.40909090909092L42,52.81818181818181L54,9.636363636363638L67,35.54545454545454L80,18.272727272727266L93,44.18181818181819L106,52.81818181818181L119,9.636363636363638L132,52.81818181818181L145,35.54545454545454L157,31.227272727272734L170,52.81818181818181L183,9.636363636363638L196,35.54545454545454L209,18.272727272727266L222,44.18181818181819L235,52.81818181818181L248,9.636363636363638L248,96L235,96L222,96L209,96L196,96L183,96L170,96L157,96L145,96L132,96L119,96L106,96L93,96L80,96L67,96L54,96L42,96L29,96L16,96L3,96Z" style="fill: rgb(255, 255, 255); opacity: 0.2;"></path></g><g class=" c3-selected-circles c3-selected-circles-Pageviews"></g><g class=" c3-shapes c3-shapes-Pageviews c3-circles c3-circles-Pageviews" style="cursor: pointer;"><circle class=" c3-shape c3-shape-0 c3-circle c3-circle-0" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="3" cy="83.04545454545455"></circle><circle class=" c3-shape c3-shape-1 c3-circle c3-circle-1" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="16" cy="78.72727272727272"></circle><circle class=" c3-shape c3-shape-2 c3-circle c3-circle-2" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="29" cy="74.40909090909092"></circle><circle class=" c3-shape c3-shape-3 c3-circle c3-circle-3" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="42" cy="52.81818181818181"></circle><circle class=" c3-shape c3-shape-4 c3-circle c3-circle-4" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="54" cy="9.636363636363638"></circle><circle class=" c3-shape c3-shape-5 c3-circle c3-circle-5" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="67" cy="35.54545454545454"></circle><circle class=" c3-shape c3-shape-6 c3-circle c3-circle-6" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="80" cy="18.272727272727266"></circle><circle class=" c3-shape c3-shape-7 c3-circle c3-circle-7" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="93" cy="44.18181818181819"></circle><circle class=" c3-shape c3-shape-8 c3-circle c3-circle-8" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="106" cy="52.81818181818181"></circle><circle class=" c3-shape c3-shape-9 c3-circle c3-circle-9" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="119" cy="9.636363636363638"></circle><circle class=" c3-shape c3-shape-10 c3-circle c3-circle-10" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="132" cy="52.81818181818181"></circle><circle class=" c3-shape c3-shape-11 c3-circle c3-circle-11" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="145" cy="35.54545454545454"></circle><circle class=" c3-shape c3-shape-12 c3-circle c3-circle-12" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="157" cy="31.227272727272734"></circle><circle class=" c3-shape c3-shape-13 c3-circle c3-circle-13" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="170" cy="52.81818181818181"></circle><circle class=" c3-shape c3-shape-14 c3-circle c3-circle-14" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="183" cy="9.636363636363638"></circle><circle class=" c3-shape c3-shape-15 c3-circle c3-circle-15" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="196" cy="35.54545454545454"></circle><circle class=" c3-shape c3-shape-16 c3-circle c3-circle-16" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="209" cy="18.272727272727266"></circle><circle class=" c3-shape c3-shape-17 c3-circle c3-circle-17" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="222" cy="44.18181818181819"></circle><circle class=" c3-shape c3-shape-18 c3-circle c3-circle-18" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="235" cy="52.81818181818181"></circle><circle class=" c3-shape c3-shape-19 c3-circle c3-circle-19" r="2.5" style="fill: rgb(255, 255, 255); opacity: 1;" cx="248" cy="9.636363636363638"></circle></g></g></g><g class="c3-chart-arcs" transform="translate(124.75,43)"><text class="c3-chart-arcs-title" style="text-anchor: middle; opacity: 0;"></text></g><g class="c3-chart-texts"><g class="c3-chart-text c3-target c3-target-Pageviews" style="opacity: 1; pointer-events: none;"><g class=" c3-texts c3-texts-Pageviews"></g></g></g></g><g clip-path="url(http://mylifestylewealth.com/#c3-1460853469258-clip-grid)" class="c3-grid c3-grid-lines"><g class="c3-xgrid-lines"></g><g class="c3-ygrid-lines"></g></g><g class="c3-axis c3-axis-x" clip-path="url(http://mylifestylewealth.com/#c3-1460853469258-clip-xaxis)" transform="translate(0,96)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-x-label" transform="" x="249.5" dx="-0.5em" dy="-0.5em" style="text-anchor: end;"></text><g class="tick" transform="translate(3, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><g class="tick" transform="translate(16, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">1</tspan></text></g><g class="tick" transform="translate(29, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">2</tspan></text></g><g class="tick" transform="translate(42, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">3</tspan></text></g><g class="tick" transform="translate(54, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">4</tspan></text></g><g class="tick" transform="translate(67, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">5</tspan></text></g><g class="tick" transform="translate(80, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">6</tspan></text></g><g class="tick" transform="translate(93, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">7</tspan></text></g><g class="tick" transform="translate(106, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">8</tspan></text></g><g class="tick" transform="translate(119, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">9</tspan></text></g><g class="tick" transform="translate(132, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">10</tspan></text></g><g class="tick" transform="translate(145, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">11</tspan></text></g><g class="tick" transform="translate(157, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">12</tspan></text></g><g class="tick" transform="translate(170, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">13</tspan></text></g><g class="tick" transform="translate(183, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">14</tspan></text></g><g class="tick" transform="translate(196, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">15</tspan></text></g><g class="tick" transform="translate(209, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">16</tspan></text></g><g class="tick" transform="translate(222, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">17</tspan></text></g><g class="tick" transform="translate(235, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">18</tspan></text></g><g class="tick" transform="translate(248, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">19</tspan></text></g><path class="domain" d="M0,6V0H249.5V6"></path></g><g class="c3-axis c3-axis-y" clip-path="url(http://mylifestylewealth.com/#c3-1460853469258-clip-yaxis)" transform="translate(0,0)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-y-label" transform="rotate(-90)" x="0" dx="-0.5em" dy="1.2em" style="text-anchor: end;"></text><g class="tick" transform="translate(0,96)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,88)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">2</tspan></text></g><g class="tick" transform="translate(0,79)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">4</tspan></text></g><g class="tick" transform="translate(0,71)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">6</tspan></text></g><g class="tick" transform="translate(0,62)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">8</tspan></text></g><g class="tick" transform="translate(0,53)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">10</tspan></text></g><g class="tick" transform="translate(0,45)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">12</tspan></text></g><g class="tick" transform="translate(0,36)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">14</tspan></text></g><g class="tick" transform="translate(0,27)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">16</tspan></text></g><g class="tick" transform="translate(0,19)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">18</tspan></text></g><g class="tick" transform="translate(0,10)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">20</tspan></text></g><g class="tick" transform="translate(0,1)" style="opacity: 1;"><line x2="-6"></line><text x="-9" y="0" style="text-anchor: end;"><tspan x="-9" dy="3">22</tspan></text></g><path class="domain" d="M-6,1H0V96H-6"></path></g><g class="c3-axis c3-axis-y2" transform="translate(249.5,0)" style="visibility: hidden; opacity: 1;"><text class="c3-axis-y2-label" transform="rotate(-90)" x="0" dx="-0.5em" dy="-0.5em" style="text-anchor: end;"></text><g class="tick" transform="translate(0,96)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0</tspan></text></g><g class="tick" transform="translate(0,87)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.1</tspan></text></g><g class="tick" transform="translate(0,78)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.2</tspan></text></g><g class="tick" transform="translate(0,68)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.3</tspan></text></g><g class="tick" transform="translate(0,58)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.4</tspan></text></g><g class="tick" transform="translate(0,49)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.5</tspan></text></g><g class="tick" transform="translate(0,40)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.6</tspan></text></g><g class="tick" transform="translate(0,30)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.7</tspan></text></g><g class="tick" transform="translate(0,20)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.8</tspan></text></g><g class="tick" transform="translate(0,11)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">0.9</tspan></text></g><g class="tick" transform="translate(0,1)" style="opacity: 1;"><line x2="6" y2="0"></line><text x="9" y="0" style="text-anchor: start;"><tspan x="9" dy="3">1</tspan></text></g><path class="domain" d="M6,1H0V96H6"></path></g></g><g transform="translate(1.5,100.5)" style="visibility: hidden;"><g clip-path="url(http://mylifestylewealth.com/#c3-1460853469258-clip-subchart)" class="c3-chart"><g class="c3-chart-bars"></g><g class="c3-chart-lines"></g></g><g clip-path="url(http://mylifestylewealth.com/#c3-1460853469258-clip)" class="c3-brush" style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><rect class="background" x="0" width="249.5" style="visibility: hidden; cursor: crosshair;"></rect><rect class="extent" x="0" width="0" style="cursor: move;"></rect><g class="resize e" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g><g class="resize w" transform="translate(0,0)" style="cursor: ew-resize; display: none;"><rect x="-3" width="6" height="6" style="visibility: hidden;"></rect></g></g><g class="c3-axis-x" transform="translate(0,0)" clip-path="url(http://mylifestylewealth.com/#c3-1460853469258-clip-xaxis)" style="opacity: 1;"><g class="tick" transform="translate(3, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">0</tspan></text></g><g class="tick" transform="translate(16, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">1</tspan></text></g><g class="tick" transform="translate(29, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">2</tspan></text></g><g class="tick" transform="translate(42, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">3</tspan></text></g><g class="tick" transform="translate(54, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">4</tspan></text></g><g class="tick" transform="translate(67, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">5</tspan></text></g><g class="tick" transform="translate(80, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">6</tspan></text></g><g class="tick" transform="translate(93, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">7</tspan></text></g><g class="tick" transform="translate(106, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">8</tspan></text></g><g class="tick" transform="translate(119, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">9</tspan></text></g><g class="tick" transform="translate(132, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">10</tspan></text></g><g class="tick" transform="translate(145, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">11</tspan></text></g><g class="tick" transform="translate(157, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">12</tspan></text></g><g class="tick" transform="translate(170, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">13</tspan></text></g><g class="tick" transform="translate(183, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">14</tspan></text></g><g class="tick" transform="translate(196, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">15</tspan></text></g><g class="tick" transform="translate(209, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">16</tspan></text></g><g class="tick" transform="translate(222, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">17</tspan></text></g><g class="tick" transform="translate(235, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: block;"><tspan x="0" dy=".71em" dx="0">18</tspan></text></g><g class="tick" transform="translate(248, 0)" style="opacity: 1;"><line y2="6" x1="0" x2="0"></line><text y="9" x="0" transform="" style="text-anchor: middle; display: none;"><tspan x="0" dy=".71em" dx="0">19</tspan></text></g><path class="domain" d="M0,6V0H249.5V6"></path></g></g><g transform="translate(0,100)" style="visibility: hidden;"></g></svg><div class="c3-tooltip-container" style="position: absolute; pointer-events: none; display: none;"></div></div><div ng-transclude="">
        <chart-column column-id="Pageviews" column-values="3,4,5,10,20,14,18,12,10,20,10,14,15,10,20,14,18,12,10,20" column-type="area" class="ng-scope ng-isolate-scope">
        <chart-axis-y show="false" class="ng-isolate-scope">
        <div ng-transclude="" show="false" class="ng-isolate-scope">
        <chart-legend show-legend="false" class="ng-scope ng-isolate-scope">
        <chart-size chart-height="100px" class="ng-isolate-scope">
        <chart-tooltip show-tooltip="true" class="ng-isolate-scope">

        <chart-colors color-pattern="#fff" class="ng-isolate-scope">
      </chart-colors></chart-tooltip></chart-size></chart-legend></div></chart-axis-y></chart-column></div></div>
    </div>

  </div>


</div>
</div>
    </div></main>
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