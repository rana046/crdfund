<?php
include("header.php");
include("sidebar.php");



if(!isset($_SESSION['ADMINID']))
{
echo"<script>window.location='index.php'</script>";
}



$sid=1;



$sql = "SELECT * FROM  video where  video_id='$sid'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

if(isset($_POST['update']))
{





//echo "UPDATE wedding_home SET product_color='".$_REQUEST['color']."',product_image='$file_name',product_bottom='$content', product_menuid='$sid' WHERE product_id='$sid'";die;
    
$update = "UPDATE video SET video_link='".$_REQUEST['video_link']."' WHERE video_id='$sid'";

$updateresult = mysql_query($update);
echo "<script>window.location='add_video.php?subid=$sid'</script>";
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

							
							<li class="active">Video</li>
						</ul><!-- /.breadcrumb -->

					</div>


					<div class="page-content">


						<div class="page-header">
							<h1>
						 Video
							
							</h1>
						</div>
						
			
						

						<div class="row">
							<div class="col-xs-12">
							
							
		
		<br><br>				

<form class="form-horizontal"  name=""  method="post" action=""  role="form" enctype="multipart/form-data"
  onsubmit="return validate_form(this);">
  
  	
													

		<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Video Link </label>

										<div class="col-sm-9">
	<input type="text" id="video_link" class="col-xs-10 col-sm-5" / 
	name="video_link"  value="<?php echo $row['video_link']; ?>">
										</div>
									</div>
    
  
    
    
    
<div class="clearfix form-actions">
	<div class="text-center">
<button class="btn btn-info" type="submit" name="update">Update</button>
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