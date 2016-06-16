<?php
include("header.php");
include("sidebar.php");


if(!isset($_SESSION['ADMINID']))
{
echo'<script>window.location="index.php"</script';
}
$sql = "SELECT * FROM  6btb_admin";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

if(isset($_POST['submit']))
{
	


			
	if($_FILES['userfile']['name']=='') {
		
		$file_name = $row['admin_photo'];
	} else {
		$temp = explode('.', $_FILES['userfile']['name']);
   $extension = end($temp);
   $l =1;

   $file_name = $_FILES['userfile']['name'];
   $temp_name = $_FILES['userfile']['tmp_name'];
   $target_path = "addimages/".$file_name;
   while(file_exists($target_path)){
   $target_path = "addimages/".$temp[0].$l.'.'.$extension;
   $file_name = $temp[0].$l.'.'.$extension;
   $l++; 
   }

    move_uploaded_file($temp_name, $target_path);
    unlink('addimages/'.$row['admin_photo']);

	}
		

 $update = array(

$admin_table.'_fname'=> $_REQUEST['fname'],
$admin_table.'_lname' => $_REQUEST['lname'],
$admin_table.'_email' => $_REQUEST['email'],
$admin_table.'_phone' => $_REQUEST['phone'],
$admin_table.'_address' => $_REQUEST['address'],
$admin_table.'_photo' => $file_name,

);



update($prefix.$admin_table,$update);
	echo'<script>location.assign("'. $baseurl .'admin/account.php")</script>';

}




if(isset($_POST['update']))
{


$password = md5($_POST['password2']);

 $update1 = "UPDATE 6btb_admin SET admin_password = '$password' WHERE admin_id = '".$_SESSION['ADMINID']."' ";

$updateresult1 = mysql_query($update1);
	
		echo'<script>location.assign("'. $baseurl .'admin/account.php")</script>';

}

?>

<script type="text/javascript">

$(document).ready(function()
{



$('#CurrentPassword').change(function(){


var password = $('#CurrentPassword').val();


var dataString = 'cpass='+password;

$.ajax({
  type: "POST",
  url: "ajax.php",
  data: dataString,
  success: function(server_response){  

   if(server_response == 0)
	{ 

   $("#password_status").html('<font color="Green">Password Match</font>');
	$("#update").show();
	}  
	if(server_response == 1)//if it returns "1"
	{  

	 $("#password_status").html('<font color="red">Password Do Not Match </font>');

	 $("#update").hide();
	}  
} 
});
});

	
	
});



</script>

	<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="account.php">Home</a>
							</li>

					
							<li class="active">Admin Profile</li>
						</ul><!-- /.breadcrumb -->

				
					</div>

					<div class="page-content">


						<div class="page-header">
							<h1>
								Admin Profile
				
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">

									<div id="user-profile-3" class="user-profile row">
										<div class="col-sm-offset-1 col-sm-10">
									

											<div class="space"></div>


												<div class="tabbable">
													<ul class="nav nav-tabs padding-16">
														<li class="active">
															<a data-toggle="tab" href="#edit-basic">
																<i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
																Basic Info
															</a>
														</li>

													</ul>

													<div class="tab-content profile-edit-tab-content">
<form class="form-horizontal" name="account"  method="post" action=""  role="form"
 enctype="multipart/form-data"  onsubmit="return validate_form(this);">													
													
														<div id="edit-basic" class="tab-pane in active">
															<h4 class="header blue bolder smaller">General</h4>

															<div class="row">
																<div class="col-xs-12 col-sm-4">
	<input type="file" / name="userfile" valid="userfile" id="userfile">
		    <?php echo "<img src='" . $baseurl . "admin/addimages/".  $row['admin_photo']. "' width='100'>"; ?>
																</div>

																<div class="vspace-12-sm"></div>

																<div class="col-xs-12 col-sm-8">
									

																	<div class="space-4"></div>

																	<div class="form-group">
																		<label class="col-sm-4 control-label no-padding-right" for="form-field-first">Name</label>

																		<div class="col-sm-8">
									<input class="input-small" type="text" id="first_name" placeholder="First Name" name="fname"
									 value="<?php  echo $row['admin_fname'];  ?>" valid="name">
	<input class="input-small" type="text" id="last name" placeholder="Last Name" valid="name"
	value="<?php  echo $row['admin_lname'];  ?>" name="lname">
																		</div>
																	</div>
																</div>
															</div>

															<hr />
													

															<div class="space"></div>
															<h4 class="header blue bolder smaller">Contact</h4>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
<input type="email" id="email" value="<?php  echo $row['admin_email'];  ?>" name="email" valid="email">
																		<i class="ace-icon fa fa-envelope" ></i>
																	</span>
																</div>
															</div>

													
																																										
															
						
															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Phone</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
<input class="input-medium input-mask-phone" type="text" id="phone"  value="<?php  echo $row['admin_phone'];  ?>" 
name="phone" valid="phone">
																		<i class="ace-icon fa fa-phone fa-flip-horizontal"></i>
																	</span>
																</div>
															</div>
															
		<div class="space-4"></div>

		<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">Address</label>

																<div class="col-sm-9">
<textarea id="address" name="address"  class="form-control" style="width: 550px; height: 100px;" >
<?php echo $row['admin_address'];?>
</textarea>
																</div>
															</div>
															
																													
			<div class="clearfix form-actions">
													<div class="col-md-offset-3 col-md-9">
											
	<button class="btn btn-info" type="submit" name="submit">
															<i class="ace-icon fa fa-undo bigger-110"></i>
															Reset
														</button>
													</div>
												</div>
												
												</form>
	</div>
	</div>
									</div>
								</div>
								</div>
						</div>
						
						
										<div class="row">
							<div class="col-xs-12">

									<div id="user-profile-3" class="user-profile row">
										<div class="col-sm-offset-1 col-sm-10">
									

											<div class="space"></div>


												<div class="tabbable">
													<ul class="nav nav-tabs padding-16">
														<li class="active">
															<a data-toggle="tab" href="#edit-basic">
																<i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
															Change Password
															</a>
														</li>

													</ul>
<div id="edit-password" class="tab-pane">
														
<form class="form-horizontal" name="password"  method="post" action=""  role="form"
 enctype="multipart/form-data"  onsubmit="return validate_form(this);">	


															<div class="space-10"></div>
															
												<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">Current Password</label>

																<div class="col-sm-9">
		<input type="password" id="CurrentPassword" name="cpass" placeholder="Current Password"  valid="required"/>
		<span id="password_status"></span>
																</div>
															</div>														
																										<div class="space-4"></div>				

															<div class="form-group">
	<label class="col-sm-3 control-label no-padding-right">New Password</label>

																<div class="col-sm-9">
<input type="password" name="password1" class="form-control" id="New Password"   placeholder="New Password" valid="password"   > 
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirm Password</label>

																<div class="col-sm-9">
<input type="password" name="password2" class="form-control" id="Confurm Password"  placeholder="Confurm Password" valid="password" > 
																</div>
															</div>
						<div class="clearfix form-actions">
													<div class="col-md-offset-3 col-md-9">
											
	<button class="btn btn-info" type="update" name="update"  id="update">
															<i class="ace-icon fa fa-undo bigger-110"></i>
															Reset
														</button>
													</div>
												</div>
											
											</form>														
																								
												</div>			
												</div>			
												</div>			
												</div>			
															
				

							</div>
						</div>
					</div>
				</div>
			</div>



		<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 
<script type="text/javascript">
//<![CDATA[
bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
//]]>
</script>

			
<?php
include("footer.php");
?>