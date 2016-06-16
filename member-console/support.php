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
    <title>Support - PAYDAECO</title>
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
         <img src="images/login_logo.png"></div>
        <div class="user-logged-in">
          <div class="content">
            <div class="user-name">Paydae</div>
            
            
          </div>
        </div>
<?php include_once ("sidebar.php"); ?>

</aside>
     </aside>
      <div class="main-container">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header pull-left">
              <button type="button" class="navbar-toggle pull-left m-15" data-activates=".sidebar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <ul class="breadcrumb">
                <li><a href="#/">paydaeco</a></li>
                <li class="active">Support Desk </li>
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
     <div class="main-content ng-scope" autoscroll="true" ng-view="" bs-affix-target=""><section class="forms-basic ng-scope" ng-controller="FormsController">
  <div class="page-header">
    <h1>
      <i class="md md-input"></i>
    Support Desk 
    </h1>
  </div>

  <div class="row  m-b-40">
    <div class="col-md-3 col-md-push-9">
   
    </div>
    <div class="col-md-8 col-md-pull-3">
      <div class="well white">
        <form class="form-floating ng-pristine ng-valid">
          <fieldset>
            <legend>Support Contact</legend>
            <span class="help-block">Please fill out the following form below.</span>
            <div class="form-group">
              <label for="inputEmail" class="control-label">Name</label>
              <input type="text" class="form-control">
            </div>
<div class="form-group">
              <label for="inputEmail" class="control-label">Surname</label>
              <input type="text" class="form-control">
            </div>
<div class="form-group">
              <label for="inputEmail" class="control-label">Cellphone</label>
              <input type="text" class="form-control">
            </div>
<div class="form-group">
              <label for="inputEmail" class="control-label">Email</label>
              <input type="text" class="form-control">
            </div>

    <div class="form-group">
              <div class="ui-select-container select2 select2-container ng-valid" ng-class="{'select2-container-active select2-dropdown-open open': $select.open, 'select2-container-disabled': $select.disabled, 'select2-container-active': $select.focus, 'select2-allowclear': $select.allowClear &amp;&amp; !$select.isEmpty()}" ng-model="person.selected" theme="select2" title="Choose a person" search-enabled="false"><a class="select2-choice ui-select-match select2-default" ng-class="{'select2-default': $select.isEmpty()}" ng-click="$select.toggle($event)" aria-label="Choose a person select" placeholder="Country...">
			  <span ng-show="$select.isEmpty()" class="select2-chosen ng-binding">Country...</span> 
			  <span ng-hide="$select.isEmpty()" class="select2-chosen ng-hide" ng-transclude="">
			  <span class="ng-binding ng-scope"></span></span> <!-- ngIf: $select.allowClear && !$select.isEmpty() --> 
			  <span class="select2-arrow ui-select-toggle"><b></b></span></a>
			  <div class="select2-drop select2-with-searchbox select2-drop-active select2-display-none" ng-class="{'select2-display-none': !$select.open}"><div class="select2-search ng-hide" ng-show="$select.searchEnabled">
			  <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="combobox" aria-expanded="true" aria-owns="ui-select-choices-0" aria-label="Choose a person" aria-activedescendant="ui-select-choices-row-0-0" class="ui-select-search select2-input ng-pristine ng-untouched ng-valid" ng-model="$select.search">
			  </div><ul class="ui-select-choices ui-select-choices-content select2-results ng-scope" repeat="item in people | filter: $select.search"><li class="ui-select-choices-group" ng-class="{'select2-result-with-children': $select.choiceGrouped($group) }"><div ng-show="$select.choiceGrouped($group)" class="ui-select-choices-group-label select2-result-label ng-binding ng-hide" ng-bind="$group.name"></div><ul role="listbox" id="ui-select-choices-0" ng-class="{'select2-result-sub': $select.choiceGrouped($group), 'select2-result-single': !$select.choiceGrouped($group) }" class="select2-result-single"><!-- ngRepeat: item in $select.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $select.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $select.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $select.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $select.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $select.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $select.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $select.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $select.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $select.items --><!-- ngIf: $select.open --><!-- end ngRepeat: item in $select.items --></ul></li></ul></div><ui-select-single></ui-select-single><input ng-disabled="$select.disabled" class="ui-select-focusser ui-select-offscreen ng-scope" type="text" id="focusser-0" aria-label="Choose a person focus" aria-haspopup="true" role="button"></div>
            </div>
          <div class="form-group">
              <label for="inputEmail" class="control-label">Subject</label>
              <input type="text" class="form-control">
            </div>


            <div class="form-group">
              <label for="textArea" class="control-label">Message</label>
              <textarea class="form-control vertical" rows="3" id="textArea"></textarea>
       

          

        

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Send now</button>
              <button type="reset" class="btn btn-default">Cancel</button>
            </div>

          </div></fieldset>
        </form>
      </div>
    </div>
  </div>

  

</section>
</div> </div>
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