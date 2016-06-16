<?php
include("header.php");
include("sidebar.php");

if(!isset($_SESSION['ADMINID']))
{
echo"<script>window.location='index.php'</script>";
}
 
 $sql = "SELECT * FROM  6btb_setting";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

if(isset($_POST['submit'])){	 

$title = $_POST['title'];

$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$about = $_POST['about'];
$fax = $_POST['fax'];
$michel = $_POST['michel'];
$email2 = $_POST['email2'];
$web = $_POST['web'];
$key = $_POST['key'];
$app_key = $_POST['app_key'];

	if($_FILES['userfile']['name']=='') {
		
		$file_name = $row['setting_logo'];
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
    @unlink('addimages/'.$row['setting_logo']);

	}
	


   $update = "UPDATE 6btb_setting SET  setting_title = '$title', setting_logo = '$file_name' , setting_phone = '$phone'
,setting_email = '$email' ,setting_app_key='$app_key', setting_address = '$address',setting_about='$about',setting_fax='$fax',
setting_web='$web',setting_email2='$email2',
setting_michel='$michel',setting_key='$key'";

$updateresult = mysql_query($update);

echo'<script>location.assign("'. $baseurl .'admin/setting.php")</script>';
}



?>


			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
					

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="account.php">Home</a>
							</li>

							
							<li class="active">Setting</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">


						<div class="page-header">
							<h1>
							Setting
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Web Site Setting
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
<form class="form-horizontal"  name=""  method="post" action=""  role="form" enctype="multipart/form-data"
  onsubmit="return validate_form(this);">
  
  		<div class="form-group">
  		
  						<label class="col-sm-3 control-label no-padding-right" > Logo</label>
										<div class="col-sm-9">
	<input type="file" id="id-input-file-2" / name="userfile" id="userfile" class="col-xs-10 col-sm-5" / valid="userfile">
	    <?php echo "<img src='" . $baseurl . "admin/addimages/".  $row['setting_logo']. "' width='100'>"; ?>
															</div>
														</div>
														
														
									<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Title </label>

										<div class="col-sm-9">
	<input type="text" id="title" class="col-xs-10 col-sm-5" / 
	name="title"  value="<?php echo $row['setting_title']; ?>" valid="name" >
										</div>
									</div>
					
									<div class="form-group">
<label for="form-field-mask-2" class="col-sm-3 control-label no-padding-right">
																Phone
																<small class="text-warning">(999) 999-9999</small>
															</label>
										<div class="col-sm-4">
															<div class="input-group" >
																<span class="input-group-addon">
																	<i class="ace-icon fa fa-phone"></i>
																</span>
<input class="form-control input-mask-phone"  name="phone" type="text" id="phone" 
 class="col-xs-10 col-sm-5" /  value="<?php echo $row['setting_phone']; ?>" valid="phone">
															</div>
														</div>
														</div>
									
								

									
								
									<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

										<div class="col-sm-9">
	<input type="text" id="email"  class="col-xs-10 col-sm-5" /
	 name="email"  value="<?php echo $row['setting_email']; ?>" valid="name">
										</div>
									</div>
									
									
														
									<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email2 </label>

										<div class="col-sm-9">
	<input type="text" id="email"  class="col-xs-10 col-sm-5" /
	 name="email2"  value="<?php echo $row['setting_email2']; ?>" valid="name">
										</div>
									</div>
									
									
									<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Web </label>

										<div class="col-sm-9">
	<input type="text" id="email" class="col-xs-10 col-sm-5" /
	 name="web"  value="<?php echo $row['setting_web']; ?>" valid="name">
										</div>
									</div>
									
																<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> FB App key </label>

										<div class="col-sm-9">
	<input type="text" id="app_key" class="col-xs-10 col-sm-5" / 
	name="app_key"  value="<?php echo $row['setting_app_key']; ?>" valid="name" >
										</div>
									</div>		
								
									<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mr.Michael </label>

										<div class="col-sm-9">
	<input type="text" id="michel" class="col-xs-10 col-sm-5" /
	 name="michel"  value="<?php echo $row['setting_michel']; ?>" valid="name">
										</div>
									</div>						
														
									
									
									
									<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Fax </label>

										<div class="col-sm-9">
	<input type="text" id="fax"  class="col-xs-10 col-sm-5" /
	 name="fax"  value="<?php echo $row['setting_fax']; ?>" valid="name">
										</div>
									</div>
									
									
					
									
										<div class="form-group">

<label for="about" class="col-sm-3 control-label no-padding-right">About:</label> 
										<div class="col-sm-9">
<textarea name="about" class="form-control" id="about" style="width: 550px; height: 100px;"  valid="required">
<?php echo $row['setting_about'];?></textarea>
   </div>

</div>								
			
			
			
			
												
										<div class="form-group">

<label for="about" class="col-sm-3 control-label no-padding-right">Key:</label> 
										<div class="col-sm-9">
<textarea name="key" class="form-control" id="key" style="width: 550px; height: 100px;"  valid="required">
<?php echo $row['setting_key'];?></textarea>
   </div>

</div>						
									
									<div class="form-group">

<label for="address" class="col-sm-3 control-label no-padding-right">Address:</label> 
										<div class="col-sm-9">
<textarea name="address" class="form-control" id="address" style="width: 550px; height: 100px;"  valid="required">
<?php echo $row['setting_address'];?></textarea>
   </div>

</div>
							
	

									<div class="clearfix form-actions">
										<div class="text-center">
										

										
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
		<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 
<script type="text/javascript">
//<![CDATA[
bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
//]]>
</script>	
			
<?php
include("footer.php");
?>