<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="mylifestylewealth Angular Admin Theme">
    <meta name="author" content="Theme Guys - The Netherlands">
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
    <title>Myfollowers - mylifestylewealth</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>  <![endif]-->
    <link href="assets/css/vendors.min.css" rel="stylesheet" />
    <link href="assets/css/styles.min.css" rel="stylesheet" />
    <script charset="utf-8" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  </head>
  <body scroll-spy="" id="top" class=" theme-template-dark theme-pink alert-open alert-with-mat-grow-top-right">
    <main>
      <aside class="sidebar fixed" style="width: 260px; left: 0px; ">
        <div class="brand-logo">
         <img src="images/login_logo.png"> </div>
        <div class="user-logged-in">
          <div class="content">
            <div class="user-name">mylifestylewealth <span class="text-muted f9">admin</span></div>
            
            
          </div>
        </div>
   <ul>
    <li menu-link="" href="index.php" icon="md md-blur-on" class="ng-isolate-scope">
  <a ng-transclude="" ng-class="{active: isSelected()}"  href="index.php" ><i class="md md-blur-on"></i>&nbsp;<span class="ng-scope">Dashboard</span><div class="ripple-wrapper"></div></a>
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
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header pull-left">
              <button type="button" class="navbar-toggle pull-left m-15" data-activates=".sidebar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <ul class="breadcrumb">
                <li><a href="#/">mylifestylewealth</a></li>
                <li class="active">My Followers</li>
              </ul>
            </div>
            <ul class="nav navbar-nav navbar-right navbar-right-no-collapse">
              <li class="dropdown pull-right">
                <button class="dropdown-toggle pointer btn btn-round-sm btn-link withoutripple" data-template-url="assets/tpl/partials/dropdown-navbar.php"> <i class="md md-more-vert f20"></i> </button>
              </li>
              <li class="dropdown pull-right">
                <button class="dropdown-toggle pointer btn btn-round-sm btn-link withoutripple" data-template-url="assets/tpl/partials/theme-picker.php"> <i class="md md-settings f20"></i> </button>
              </li>
              <li navbar-search="" class="pull-right">
                <div>
                  <div class="mat-slide-right pull-right">
                    <form class="search-form form-inline pull-left ">
                      <div class="form-group">
                        <label class="sr-only" for="search-input">Search</label>
                        <input type="text" class="form-control" id="search-input" placeholder="Search" autofocus=""> </div>
                    </form>
                  </div>
                  <div class="pull-right">
                    <button class="btn btn-sm btn-link pull-left withoutripple"> <i class="md md-search f20"></i> </button>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <div class="main-content" autoscroll="true" bs-affix-target="" init-ripples="" style="">
          <section class="colors">
            <div class="page-header">
              <h1>      <i class="md md-photo"></i>      Material design color palettes    </h1>
              <p class="lead"> Color in material design is inspired by bold hues juxtaposed with muted environments, deep shadows, and bright highlights. </p>
            </div>
            <div class="row dynamic-color">
              <div class="col-md-4">
                <div class="red lighten-5">red
                  <div class="pull-right">lighten-5</div>
                </div>
                <div class="red lighten-4">red
                  <div class="pull-right">lighten-4</div>
                </div>
                <div class="red lighten-3">red
                  <div class="pull-right">lighten-3</div>
                </div>
                <div class="red lighten-2">red
                  <div class="pull-right">lighten-2</div>
                </div>
                <div class="red lighten-1">red
                  <div class="pull-right">lighten-1</div>
                </div>
                <div class="red">red
                  <div class="pull-right">base</div>
                </div>
                <div class="red darken-1">red
                  <div class="pull-right">darken-1</div>
                </div>
                <div class="red darken-2">red
                  <div class="pull-right">darken-2</div>
                </div>
                <div class="red darken-3">red
                  <div class="pull-right">darken-3</div>
                </div>
                <div class="red darken-4">red
                  <div class="pull-right">darken-4</div>
                </div>
                <br>
                <div class="red accent-1">red
                  <div class="pull-right">accent-1</div>
                </div>
                <div class="red accent-2">red
                  <div class="pull-right">accent-2</div>
                </div>
                <div class="red accent-3">red
                  <div class="pull-right">accent-3</div>
                </div>
                <div class="red accent-4">red
                  <div class="pull-right">accent-4</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="pink lighten-5">pink
                  <div class="pull-right">lighten-5</div>
                </div>
                <div class="pink lighten-4">pink
                  <div class="pull-right">lighten-4</div>
                </div>
                <div class="pink lighten-3">pink
                  <div class="pull-right">lighten-3</div>
                </div>
                <div class="pink lighten-2">pink
                  <div class="pull-right">lighten-2</div>
                </div>
                <div class="pink lighten-1">pink
                  <div class="pull-right">lighten-1</div>
                </div>
                <div class="pink">pink
                  <div class="pull-right">base</div>
                </div>
                <div class="pink darken-1">pink
                  <div class="pull-right">darken-1</div>
                </div>
                <div class="pink darken-2">pink
                  <div class="pull-right">darken-2</div>
                </div>
                <div class="pink darken-3">pink
                  <div class="pull-right">darken-3</div>
                </div>
                <div class="pink darken-4">pink
                  <div class="pull-right">darken-4</div>
                </div>
                <br>
                <div class="pink accent-1">pink
                  <div class="pull-right">accent-1</div>
                </div>
                <div class="pink accent-2">pink
                  <div class="pull-right">accent-2</div>
                </div>
                <div class="pink accent-3">pink
                  <div class="pull-right">accent-3</div>
                </div>
                <div class="pink accent-4">pink
                  <div class="pull-right">accent-4</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="purple lighten-5">purple
                  <div class="pull-right">lighten-5</div>
                </div>
                <div class="purple lighten-4">purple
                  <div class="pull-right">lighten-4</div>
                </div>
                <div class="purple lighten-3">purple
                  <div class="pull-right">lighten-3</div>
                </div>
                <div class="purple lighten-2">purple
                  <div class="pull-right">lighten-2</div>
                </div>
                <div class="purple lighten-1">purple
                  <div class="pull-right">lighten-1</div>
                </div>
                <div class="purple">purple
                  <div class="pull-right">base</div>
                </div>
                <div class="purple darken-1">purple
                  <div class="pull-right">darken-1</div>
                </div>
                <div class="purple darken-2">purple
                  <div class="pull-right">darken-2</div>
                </div>
                <div class="purple darken-3">purple
                  <div class="pull-right">darken-3</div>
                </div>
                <div class="purple darken-4">purple
                  <div class="pull-right">darken-4</div>
                </div>
                <br>
                <div class="purple accent-1">purple
                  <div class="pull-right">accent-1</div>
                </div>
                <div class="purple accent-2">purple
                  <div class="pull-right">accent-2</div>
                </div>
                <div class="purple accent-3">purple
                  <div class="pull-right">accent-3</div>
                </div>
                <div class="purple accent-4">purple
                  <div class="pull-right">accent-4</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="deep-purple lighten-5">deep-purple
                  <div class="pull-right">lighten-5</div>
                </div>
                <div class="deep-purple lighten-4">deep-purple
                  <div class="pull-right">lighten-4</div>
                </div>
                <div class="deep-purple lighten-3">deep-purple
                  <div class="pull-right">lighten-3</div>
                </div>
                <div class="deep-purple lighten-2">deep-purple
                  <div class="pull-right">lighten-2</div>
                </div>
                <div class="deep-purple lighten-1">deep-purple
                  <div class="pull-right">lighten-1</div>
                </div>
                <div class="deep-purple">deep-purple
                  <div class="pull-right">base</div>
                </div>
                <div class="deep-purple darken-1">deep-purple
                  <div class="pull-right">darken-1</div>
                </div>
                <div class="deep-purple darken-2">deep-purple
                  <div class="pull-right">darken-2</div>
                </div>
                <div class="deep-purple darken-3">deep-purple
                  <div class="pull-right">darken-3</div>
                </div>
                <div class="deep-purple darken-4">deep-purple
                  <div class="pull-right">darken-4</div>
                </div>
                <br>
                <div class="deep-purple accent-1">deep-purple
                  <div class="pull-right">accent-1</div>
                </div>
                <div class="deep-purple accent-2">deep-purple
                  <div class="pull-right">accent-2</div>
                </div>
                <div class="deep-purple accent-3">deep-purple
                  <div class="pull-right">accent-3</div>
                </div>
                <div class="deep-purple accent-4">deep-purple
                  <div class="pull-right">accent-4</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="indigo lighten-5">indigo
                  <div class="pull-right">lighten-5</div>
                </div>
                <div class="indigo lighten-4">indigo
                  <div class="pull-right">lighten-4</div>
                </div>
                <div class="indigo lighten-3">indigo
                  <div class="pull-right">lighten-3</div>
                </div>
                <div class="indigo lighten-2">indigo
                  <div class="pull-right">lighten-2</div>
                </div>
                <div class="indigo lighten-1">indigo
                  <div class="pull-right">lighten-1</div>
                </div>
                <div class="indigo">indigo
                  <div class="pull-right">base</div>
                </div>
                <div class="indigo darken-1">indigo
                  <div class="pull-right">darken-1</div>
                </div>
                <div class="indigo darken-2">indigo
                  <div class="pull-right">darken-2</div>
                </div>
                <div class="indigo darken-3">indigo
                  <div class="pull-right">darken-3</div>
                </div>
                <div class="indigo darken-4">indigo
                  <div class="pull-right">darken-4</div>
                </div>
                <br>
                <div class="indigo accent-1">indigo
                  <div class="pull-right">accent-1</div>
                </div>
                <div class="indigo accent-2">indigo
                  <div class="pull-right">accent-2</div>
                </div>
                <div class="indigo accent-3">indigo
                  <div class="pull-right">accent-3</div>
                </div>
                <div class="indigo accent-4">indigo
                  <div class="pull-right">accent-4</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="blue lighten-5">blue
                  <div class="pull-right">lighten-5</div>
                </div>
                <div class="blue lighten-4">blue
                  <div class="pull-right">lighten-4</div>
                </div>
                <div class="blue lighten-3">blue
                  <div class="pull-right">lighten-3</div>
                </div>
                <div class="blue lighten-2">blue
                  <div class="pull-right">lighten-2</div>
                </div>
                <div class="blue lighten-1">blue
                  <div class="pull-right">lighten-1</div>
                </div>
                <div class="blue">blue
                  <div class="pull-right">base</div>
                </div>
                <div class="blue darken-1">blue
                  <div class="pull-right">darken-1</div>
                </div>
                <div class="blue darken-2">blue
                  <div class="pull-right">darken-2</div>
                </div>
                <div class="blue darken-3">blue
                  <div class="pull-right">darken-3</div>
                </div>
                <div class="blue darken-4">blue
                  <div class="pull-right">darken-4</div>
                </div>
                <br>
                <div class="blue accent-1">blue
                  <div class="pull-right">accent-1</div>
                </div>
                <div class="blue accent-2">blue
                  <div class="pull-right">accent-2</div>
                </div>
                <div class="blue accent-3">blue
                  <div class="pull-right">accent-3</div>
                </div>
                <div class="blue accent-4">blue
                  <div class="pull-right">accent-4</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-blue lighten-5">light-blue
                  <div class="pull-right">lighten-5</div>
                </div>
                <div class="light-blue lighten-4">light-blue
                  <div class="pull-right">lighten-4</div>
                </div>
                <div class="light-blue lighten-3">light-blue
                  <div class="pull-right">lighten-3</div>
                </div>
                <div class="light-blue lighten-2">light-blue
                  <div class="pull-right">lighten-2</div>
                </div>
                <div class="light-blue lighten-1">light-blue
                  <div class="pull-right">lighten-1</div>
                </div>
                <div class="light-blue">light-blue
                  <div class="pull-right">base</div>
                </div>
                <div class="light-blue darken-1">light-blue
                  <div class="pull-right">darken-1</div>
                </div>
                <div class="light-blue darken-2">light-blue
                  <div class="pull-right">darken-2</div>
                </div>
                <div class="light-blue darken-3">light-blue
                  <div class="pull-right">darken-3</div>
                </div>
                <div class="light-blue darken-4">light-blue
                  <div class="pull-right">darken-4</div>
                </div>
                <br>
                <div class="light-blue accent-1">light-blue
                  <div class="pull-right">accent-1</div>
                </div>
                <div class="light-blue accent-2">light-blue
                  <div class="pull-right">accent-2</div>
                </div>
                <div class="light-blue accent-3">light-blue
                  <div class="pull-right">accent-3</div>
                </div>
                <div class="light-blue accent-4">light-blue
                  <div class="pull-right">accent-4</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="cyan lighten-5">cyan
                  <div class="pull-right">lighten-5</div>
                </div>
                <div class="cyan lighten-4">cyan
                  <div class="pull-right">lighten-4</div>
                </div>
                <div class="cyan lighten-3">cyan
                  <div class="pull-right">lighten-3</div>
                </div>
                <div class="cyan lighten-2">cyan
                  <div class="pull-right">lighten-2</div>
                </div>
                <div class="cyan lighten-1">cyan
                  <div class="pull-right">lighten-1</div>
                </div>
                <div class="cyan">cyan
                  <div class="pull-right">base</div>
                </div>
                <div class="cyan darken-1">cyan
                  <div class="pull-right">darken-1</div>
                </div>
                <div class="cyan darken-2">cyan
                  <div class="pull-right">darken-2</div>
                </div>
                <div class="cyan darken-3">cyan
                  <div class="pull-right">darken-3</div>
                </div>
                <div class="cyan darken-4">cyan
                  <div class="pull-right">darken-4</div>
                </div>
                <br>
                <div class="cyan accent-1">cyan
                  <div class="pull-right">accent-1</div>
                </div>
                <div class="cyan accent-2">cyan
                  <div class="pull-right">accent-2</div>
                </div>
                <div class="cyan accent-3">cyan
                  <div class="pull-right">accent-3</div>
                </div>
                <div class="cyan accent-4">cyan
                  <div class="pull-right">accent-4</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="teal lighten-5">teal
                  <div class="pull-right">lighten-5</div>
                </div>
                <div class="teal lighten-4">teal
                  <div class="pull-right">lighten-4</div>
                </div>
                <div class="teal lighten-3">teal
                  <div class="pull-right">lighten-3</div>
                </div>
                <div class="teal lighten-2">teal
                  <div class="pull-right">lighten-2</div>
                </div>
                <div class="teal lighten-1">teal
                  <div class="pull-right">lighten-1</div>
                </div>
                <div class="teal">teal
                  <div class="pull-right">base</div>
                </div>
                <div class="teal darken-1">teal
                  <div class="pull-right">darken-1</div>
                </div>
                <div class="teal darken-2">teal
                  <div class="pull-right">darken-2</div>
                </div>
                <div class="teal darken-3">teal
                  <div class="pull-right">darken-3</div>
                </div>
                <div class="teal darken-4">teal
                  <div class="pull-right">darken-4</div>
                </div>
                <br>
                <div class="teal accent-1">teal
                  <div class="pull-right">accent-1</div>
                </div>
                <div class="teal accent-2">teal
                  <div class="pull-right">accent-2</div>
                </div>
                <div class="teal accent-3">teal
                  <div class="pull-right">accent-3</div>
                </div>
                <div class="teal accent-4">teal
                  <div class="pull-right">accent-4</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="green lighten-5">green
                  <div class="pull-right">lighten-5</div>
                </div>
                <div class="green lighten-4">green
                  <div class="pull-right">lighten-4</div>
                </div>
                <div class="green lighten-3">green
                  <div class="pull-right">lighten-3</div>
                </div>
                <div class="green lighten-2">green
                  <div class="pull-right">lighten-2</div>
                </div>
                <div class="green lighten-1">green
                  <div class="pull-right">lighten-1</div>
                </div>
                <div class="green">green
                  <div class="pull-right">base</div>
                </div>
                <div class="green darken-1">green
                  <div class="pull-right">darken-1</div>
                </div>
                <div class="green darken-2">green
                  <div class="pull-right">darken-2</div>
                </div>
                <div class="green darken-3">green
                  <div class="pull-right">darken-3</div>
                </div>
                <div class="green darken-4">green
                  <div class="pull-right">darken-4</div>
                </div>
                <br>
                <div class="green accent-1">green
                  <div class="pull-right">accent-1</div>
                </div>
                <div class="green accent-2">green
                  <div class="pull-right">accent-2</div>
                </div>
                <div class="green accent-3">green
                  <div class="pull-right">accent-3</div>
                </div>
                <div class="green accent-4">green
                  <div class="pull-right">accent-4</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-green lighten-5">light-green
                  <div class="pull-right">lighten-5</div>
                </div>
                <div class="light-green lighten-4">light-green
                  <div class="pull-right">lighten-4</div>
                </div>
                <div class="light-green lighten-3">light-green
                  <div class="pull-right">lighten-3</div>
                </div>
                <div class="light-green lighten-2">light-green
                  <div class="pull-right">lighten-2</div>
                </div>
                <div class="light-green lighten-1">light-green
                  <div class="pull-right">lighten-1</div>
                </div>
                <div class="light-green">light-green
                  <div class="pull-right">base</div>
                </div>
                <div class="light-green darken-1">light-green
                  <div class="pull-right">darken-1</div>
                </div>
                <div class="light-green darken-2">light-green
                  <div class="pull-right">darken-2</div>
                </div>
                <div class="light-green darken-3">light-green
                  <div class="pull-right">darken-3</div>
                </div>
                <div class="light-green darken-4">light-green
                  <div class="pull-right">darken-4</div>
                </div>
                <br>
                <div class="light-green accent-1">light-green
                  <div class="pull-right">accent-1</div>
                </div>
                <div class="light-green accent-2">light-green
                  <div class="pull-right">accent-2</div>
                </div>
                <div class="light-green accent-3">light-green
                  <div class="pull-right">accent-3</div>
                </div>
                <div class="light-green accent-4">light-green
                  <div class="pull-right">accent-4</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="lime lighten-5">lime
                  <div class="pull-right">lighten-5</div>
                </div>
                <div class="lime lighten-4">lime
                  <div class="pull-right">lighten-4</div>
                </div>
                <div class="lime lighten-3">lime
                  <div class="pull-right">lighten-3</div>
                </div>
                <div class="lime lighten-2">lime
                  <div class="pull-right">lighten-2</div>
                </div>
                <div class="lime lighten-1">lime
                  <div class="pull-right">lighten-1</div>
                </div>
                <div class="lime">lime
                  <div class="pull-right">base</div>
                </div>
                <div class="lime darken-1">lime
                  <div class="pull-right">darken-1</div>
                </div>
                <div class="lime darken-2">lime
                  <div class="pull-right">darken-2</div>
                </div>
                <div class="lime darken-3">lime
                  <div class="pull-right">darken-3</div>
                </div>
                <div class="lime darken-4">lime
                  <div class="pull-right">darken-4</div>
                </div>
                <br>
                <div class="lime accent-1">lime
                  <div class="pull-right">accent-1</div>
                </div>
                <div class="lime accent-2">lime
                  <div class="pull-right">accent-2</div>
                </div>
                <div class="lime accent-3">lime
                  <div class="pull-right">accent-3</div>
                </div>
                <div class="lime accent-4">lime
                  <div class="pull-right">accent-4</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="yellow lighten-5">yellow
                  <div class="pull-right">lighten-5</div>
                </div>
                <div class="yellow lighten-4">yellow
                  <div class="pull-right">lighten-4</div>
                </div>
                <div class="yellow lighten-3">yellow
                  <div class="pull-right">lighten-3</div>
                </div>
                <div class="yellow lighten-2">yellow
                  <div class="pull-right">lighten-2</div>
                </div>
                <div class="yellow lighten-1">yellow
                  <div class="pull-right">lighten-1</div>
                </div>
                <div class="yellow">yellow
                  <div class="pull-right">base</div>
                </div>
                <div class="yellow darken-1">yellow
                  <div class="pull-right">darken-1</div>
                </div>
                <div class="yellow darken-2">yellow
                  <div class="pull-right">darken-2</div>
                </div>
                <div class="yellow darken-3">yellow
                  <div class="pull-right">darken-3</div>
                </div>
                <div class="yellow darken-4">yellow
                  <div class="pull-right">darken-4</div>
                </div>
                <br>
                <div class="yellow accent-1">yellow
                  <div class="pull-right">accent-1</div>
                </div>
                <div class="yellow accent-2">yellow
                  <div class="pull-right">accent-2</div>
                </div>
                <div class="yellow accent-3">yellow
                  <div class="pull-right">accent-3</div>
                </div>
                <div class="yellow accent-4">yellow
                  <div class="pull-right">accent-4</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="amber lighten-5">amber
                  <div class="pull-right">lighten-5</div>
                </div>
                <div class="amber lighten-4">amber
                  <div class="pull-right">lighten-4</div>
                </div>
                <div class="amber lighten-3">amber
                  <div class="pull-right">lighten-3</div>
                </div>
                <div class="amber lighten-2">amber
                  <div class="pull-right">lighten-2</div>
                </div>
                <div class="amber lighten-1">amber
                  <div class="pull-right">lighten-1</div>
                </div>
                <div class="amber">amber
                  <div class="pull-right">base</div>
                </div>
                <div class="amber darken-1">amber
                  <div class="pull-right">darken-1</div>
                </div>
                <div class="amber darken-2">amber
                  <div class="pull-right">darken-2</div>
                </div>
                <div class="amber darken-3">amber
                  <div class="pull-right">darken-3</div>
                </div>
                <div class="amber darken-4">amber
                  <div class="pull-right">darken-4</div>
                </div>
                <br>
                <div class="amber accent-1">amber
                  <div class="pull-right">accent-1</div>
                </div>
                <div class="amber accent-2">amber
                  <div class="pull-right">accent-2</div>
                </div>
                <div class="amber accent-3">amber
                  <div class="pull-right">accent-3</div>
                </div>
                <div class="amber accent-4">amber
                  <div class="pull-right">accent-4</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="orange lighten-5">orange
                  <div class="pull-right">lighten-5</div>
                </div>
                <div class="orange lighten-4">orange
                  <div class="pull-right">lighten-4</div>
                </div>
                <div class="orange lighten-3">orange
                  <div class="pull-right">lighten-3</div>
                </div>
                <div class="orange lighten-2">orange
                  <div class="pull-right">lighten-2</div>
                </div>
                <div class="orange lighten-1">orange
                  <div class="pull-right">lighten-1</div>
                </div>
                <div class="orange">orange
                  <div class="pull-right">base</div>
                </div>
                <div class="orange darken-1">orange
                  <div class="pull-right">darken-1</div>
                </div>
                <div class="orange darken-2">orange
                  <div class="pull-right">darken-2</div>
                </div>
                <div class="orange darken-3">orange
                  <div class="pull-right">darken-3</div>
                </div>
                <div class="orange darken-4">orange
                  <div class="pull-right">darken-4</div>
                </div>
                <br>
                <div class="orange accent-1">orange
                  <div class="pull-right">accent-1</div>
                </div>
                <div class="orange accent-2">orange
                  <div class="pull-right">accent-2</div>
                </div>
                <div class="orange accent-3">orange
                  <div class="pull-right">accent-3</div>
                </div>
                <div class="orange accent-4">orange
                  <div class="pull-right">accent-4</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="deep-orange lighten-5">deep-orange
                  <div class="pull-right">lighten-5</div>
                </div>
                <div class="deep-orange lighten-4">deep-orange
                  <div class="pull-right">lighten-4</div>
                </div>
                <div class="deep-orange lighten-3">deep-orange
                  <div class="pull-right">lighten-3</div>
                </div>
                <div class="deep-orange lighten-2">deep-orange
                  <div class="pull-right">lighten-2</div>
                </div>
                <div class="deep-orange lighten-1">deep-orange
                  <div class="pull-right">lighten-1</div>
                </div>
                <div class="deep-orange">deep-orange
                  <div class="pull-right">base</div>
                </div>
                <div class="deep-orange darken-1">deep-orange
                  <div class="pull-right">darken-1</div>
                </div>
                <div class="deep-orange darken-2">deep-orange
                  <div class="pull-right">darken-2</div>
                </div>
                <div class="deep-orange darken-3">deep-orange
                  <div class="pull-right">darken-3</div>
                </div>
                <div class="deep-orange darken-4">deep-orange
                  <div class="pull-right">darken-4</div>
                </div>
                <br>
                <div class="deep-orange accent-1">deep-orange
                  <div class="pull-right">accent-1</div>
                </div>
                <div class="deep-orange accent-2">deep-orange
                  <div class="pull-right">accent-2</div>
                </div>
                <div class="deep-orange accent-3">deep-orange
                  <div class="pull-right">accent-3</div>
                </div>
                <div class="deep-orange accent-4">deep-orange
                  <div class="pull-right">accent-4</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="brown lighten-5">brown
                  <div class="pull-right">lighten-5</div>
                </div>
                <div class="brown lighten-4">brown
                  <div class="pull-right">lighten-4</div>
                </div>
                <div class="brown lighten-3">brown
                  <div class="pull-right">lighten-3</div>
                </div>
                <div class="brown lighten-2">brown
                  <div class="pull-right">lighten-2</div>
                </div>
                <div class="brown lighten-1">brown
                  <div class="pull-right">lighten-1</div>
                </div>
                <div class="brown">brown
                  <div class="pull-right">base</div>
                </div>
                <div class="brown darken-1">brown
                  <div class="pull-right">darken-1</div>
                </div>
                <div class="brown darken-2">brown
                  <div class="pull-right">darken-2</div>
                </div>
                <div class="brown darken-3">brown
                  <div class="pull-right">darken-3</div>
                </div>
                <div class="brown darken-4">brown
                  <div class="pull-right">darken-4</div>
                </div>
                <br> </div>
              <div class="col-md-4">
                <div class="grey lighten-5">grey
                  <div class="pull-right">lighten-5</div>
                </div>
                <div class="grey lighten-4">grey
                  <div class="pull-right">lighten-4</div>
                </div>
                <div class="grey lighten-3">grey
                  <div class="pull-right">lighten-3</div>
                </div>
                <div class="grey lighten-2">grey
                  <div class="pull-right">lighten-2</div>
                </div>
                <div class="grey lighten-1">grey
                  <div class="pull-right">lighten-1</div>
                </div>
                <div class="grey">grey
                  <div class="pull-right">base</div>
                </div>
                <div class="grey darken-1">grey
                  <div class="pull-right">darken-1</div>
                </div>
                <div class="grey darken-2">grey
                  <div class="pull-right">darken-2</div>
                </div>
                <div class="grey darken-3">grey
                  <div class="pull-right">darken-3</div>
                </div>
                <div class="grey darken-4">grey
                  <div class="pull-right">darken-4</div>
                </div>
                <br> </div>
            </div>
          </section>
        </div>
      </div>
    </main>
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