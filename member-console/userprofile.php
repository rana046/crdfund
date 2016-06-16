<?php 
include 'header.php';

		if(isset($_REQUEST['changeprofile'])) {
			if(!empty($_FILES['changeprofile1']['name'])) {

// $_FILES["image"]["name"];
	//$temp = explode(".", $_FILES["image"]["name"]);
   $extension = strtolower(end(explode('.',$_FILES['changeprofile1']['name'])));  
    $img = 'img-'.time().'.'.$extension;
   move_uploaded_file($_FILES["changeprofile1"]["tmp_name"],"images/" . $img);
   if(!empty($user_record['users_image'])) {
   unlink("images/".$user_record['users_image']);
   }
   echo "update users set  	users_image= '$img'  where  users_name = '".$_SESSION['username']."'";
   $upadte=mysql_query("update users set  	users_image= '$img'  where  users_name = '".$_SESSION['username']."'");
  // sleep(1);
	print "
			<script language='javascript'>
					window.location = '".$_SERVER['PHP_SELF']."';
			</script>
		";
	}}
					if(isset($_REQUEST['uploadcover'])) {

// $_FILES["image"]["name"];
	//$temp = explode(".", $_FILES["image"]["name"]);
   $extension = strtolower(end(explode('.',$_FILES['image']['name'])));  
    $img = 'img-'.time().'.'.$extension;
   move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $img);
   if(!empty($user_record['users_profile'])) {
   unlink("images/".$user_record['users_profile']);
   }
   echo "update users set  	users_profile= '$img'  where  users_email = '".$_SESSION['username']."'";
   $upadte=mysql_query("update users set  	users_profile= '$img'  where  users_name = '".$_SESSION['username']."'");
    //  sleep(1);
	print "
				<script language='javascript'>
					window.location = '".$_SERVER['PHP_SELF']."';
				</script>
			";
	}
?>
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
        <li ng-bind="pageTitle" class="active ng-binding"> User Profile</li>
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




<meta charset="UTF-8" class="ng-scope">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" class="ng-scope">
	<meta http-equiv="x-ua-compatible" content="ie=edge" class="ng-scope">
	<title class="ng-scope">User Profile</title>

	<link href="data/img/favicon.144x144.html" rel="apple-touch-icon" type="image/png" sizes="144x144" class="ng-scope">
	<link href="data/img/favicon.114x114.html" rel="apple-touch-icon" type="image/png" sizes="114x114" class="ng-scope">
	<link href="data/img/favicon.72x72.html" rel="apple-touch-icon" type="image/png" sizes="72x72" class="ng-scope">
	<link href="data/img/favicon.57x57.html" rel="apple-touch-icon" type="image/png" class="ng-scope">
	<link href="data/img/favicon.html" rel="icon" type="image/png" class="ng-scope">
	<link href="data/img/favicon-2.html" rel="shortcut icon" class="ng-scope">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<script src="data/js/plugins.js" class="ng-scope"></script>
	<script src="data/js/lib/ion-range-slider/ion.rangeSlider.js" class="ng-scope"></script>
	<link rel="stylesheet" href="data/css/lib/ion-range-slider/ion.rangeSlider.css" class="ng-scope">
	<link rel="stylesheet" href="data/css/lib/ion-range-slider/ion.rangeSlider.skinHTML5.css" class="ng-scope">
	<script src="data/js/app.js" class="ng-scope"></script>

    <link rel="stylesheet" href="data/css/lib/font-awesome/font-awesome.min.css" class="ng-scope">
    <link rel="stylesheet" href="data/css/main.css" class="ng-scope">



	<div class="page-content ng-scope">
		<div class="profile-header-photo" style="">
			<div class="profile-header-photo-in">
				<div class="tbl-cell">
					<div class="info-block">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xl-9  col-lg-8 ">
									<div class="tbl info-tbl">
										<div class="tbl-row">
											<div class="tbl-cell">
<form class="frrr" role="form" method="post" action="" enctype="multipart/form-data"  >
		<label for="files"> <span class="">Change Profile</span></label>
		 <img src="images/<?php echo $user_record['users_image'];?>" alt="" style="height:100px;">
		<input type="hidden" value="1" name="changeprofile">
      <input style="visibility: hidden; position: absolute;" id="files" class="form-control"
                    type="file" name="changeprofile1" onchange="this.form.submit()"  >

</form>
											
												<p class="title"><?php echo $user_record['users_name'];?></p>

											</div>
								
								
									
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<div class="form-group">
    <div>
        

    </div>

</div>	

	<form class="form-horizontal change-cover" role="form" method="post" action="" enctype="multipart/form-data"  >
		<label for="files"> <span class="">Change Cover</span>
		</label > <input type="hidden" value="1" name="uploadcover">
      <input style="visibility: hidden; position: absolute;" id="files" class="form-control"
                    type="file" name="image" onchange="this.form.submit(form-horizontal)"  >

</form>
			
			
		</div><!--.profile-header-photo-->

	<section class="vbox"><div class="container-fluid">
			<div class="row">
				<div class=" col-lg-4 col-xl-3 ">
				<section class="tabs-section">
				



					

						<section class="box-typical">
							<header class="box-typical-header-sm bordered">Info</header>
							<div class="box-typical-inner">
								<p class="line-with-icon">
									<i class="font-icon font-icon-pin-2"></i>
									Full name : <?php echo $user_record['users_fullname'];?>
								</p>
								<p class="line-with-icon">
									<i class="font-icon font-icon-users-two"></i>
									Contact : <?php echo $user_record['users_phone'];?>
								</p>
								<p class="line-with-icon">
									<i class="font-icon font-icon-case-3"></i>
									Address : <?php echo $user_record['users_address'];?>
								</p>
								<p class="line-with-icon">
									<i class="font-icon font-icon-learn"></i>
									Country : <?php echo $user_record['users_country'];?>
								</p>
								<p class="line-with-icon">
									<i class="font-icon font-icon-learn"></i>
									Country Code: <?php echo $user_record['country_code'];?>
								</p>
								<p class="line-with-icon">
									<i class="font-icon font-icon-github"></i>
									<a href="#">User name : <?php echo $user_record['users_name'];?></a>
								</p>
								<p class="line-with-icon">
									<i class="font-icon font-icon-earth"></i>
									<a href="#">Email : <?php echo $user_record['users_email'];?></a>
								</p>
								<p class="line-with-icon">
									<i class="font-icon font-icon-calend"></i>
									<?php 
											$current_date = new \DateTime(); 
											$user_date = new \DateTime($user_record['users_date']);
											$interval = $user_date->diff($current_date);
									?>
									Registered <?php echo $interval->days ?> days ago
								</p>
							</div>
						</section>

						
					
					
					</section>
				</div>
<div class="col-xl-9 col-lg-8">
					<section class="tabs-section">
						<div class="tabs-section-nav tabs-section-nav-left">
							<ul class="nav" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" href="#tabs-2-tab-1" role="tab" data-toggle="tab">
										<span class="nav-link-in">About me</span>
									</a>
								</li>
							
						
								<li class="nav-item">
									<a class="nav-link" href="#tabs-2-tab-4" role="tab" data-toggle="tab">
										<span class="nav-link-in">Settings</span>
									</a>
								</li>
							</ul>
						</div><!--.tabs-section-nav-->

						<div class="tab-content no-styled profile-tabs">
							<div role="tabpanel" class="tab-pane active" id="tabs-2-tab-1">
								<form class="box-typical ng-pristine ng-valid"  id="chat">
									<input type="text" class="write-something"  id="mess" name="message" placeholder="What`s on your mind">
									<div class="box-typical-footer">
										<div class="tbl">
											<div class="tbl-row">
												<div class="tbl-cell">
													<button type="button" class="btn-icon">
														<i class="font-icon font-icon-earth"></i>
													</button>
													
												</div>
												<div class="tbl-cell tbl-cell-action">
													<button type="button" id="ss" name="chat_submit" class="btn btn-rounded">Send</button>
												</div>
											</div>
										</div>
									</div>
								</form><!--.box-typical-->

						

<div class="chat_box">

</div>
							</div><!--.tab-pane-->
							
							
							<div role="tabpanel" class="tab-pane" id="tabs-2-tab-4">
								<section class="box-typical profile-settings">
									<section class="box-typical-section">
										<div class="form-group row">
											<div class="col-xl-2">
												<label class="form-label">Name</label>
											</div>
											<div class="col-xl-4 filled">
												<input class="form-control" type="text" value="BRANDWORK CREATIVES">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xl-2">
												<label class="form-label">Position</label>
											</div>
											<div class="col-xl-4 filled">
												<input class="form-control" type="text" value="Company founder">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-xl-2">
												<label class="form-label">About</label>
											</div>
											<div class="col-xl-6 filled">
												<textarea rows="2" class="form-control">Maecenas sed diam eget risus varius blandit sit amet non magna.
Vestibulum id ligula porta felis euismod semper.</textarea>
											</div>
										</div>
										
									</section>
									<section class="box-typical-section profile-settings-btns">
										<button type="submit" class="btn btn-rounded">Save Changes</button>
										<button type="button" class="btn btn-rounded btn-grey">Cancel</button>
									</section>
								</section>
							</div><!--.tab-pane-->
						</div><!--.tab-content-->
					</section><!--.tabs-section-->
				</div>
				
			</div><!--.row-->
		</div><!--.container-fluid-->
</section>	
	</div><!--.page-content-->

	<!--Progress bar-->
	<!--<div class="circle-progress-bar pieProgress" role="progressbar" data-goal="100" data-barcolor="#ac6bec" data-barsize="10" aria-valuemin="0" aria-valuemax="100">-->
	    <!--<span class="pie_progress__number">0%</span>-->
	<!--</div>-->

	<script src="data/js/lib/salvattore/salvattore.min.js" class="ng-scope"></script>


</div>
   
   
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function () {
$(window).scroll(function() {
	var string= "sdfg";
	     $.ajax({
            type: 'post',
            url: 'log.php',
            data: 'log='+string,
            success: function (res) {
            	var appdata= res;
            	$(".chat_box").html(res);
            //alert(res);
             // alert('form was submitted');

            }
          });
});
});




    

</script>
 <script>
      $(function () {

        $('#ss').on('click', function (e) {
           var string= $("#mess").val();

          $.ajax({
            type: 'post',
            url: 'ajax.php',
            data: 'string='+string,
            success: function (res) {
            	var appdata= res;
            	$("#appenddata").prepend(res);
            //alert(res);
             // alert('form was submitted');
 $('input[type="text"],textarea').val('');
            }
          });

        });

      });
    </script> 
   
   
    <?
      
      include  "footer.php";
      ?>

 
   
 