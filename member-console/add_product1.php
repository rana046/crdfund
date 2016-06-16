<?php
include("header.php");
include("sidebar.php");



if(!isset($_SESSION['ADMINID']))
{
echo"<script>window.location='index.php'</script>";
}



$sid=1;



$sql = "SELECT * FROM  product where  product_id='$sid'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);

if(isset($_POST['update']))
{



//$content = addslashes($_POST['bottom']);

	if($_FILES['userfile']['name']=='') {
		
		$file_name = $row['product_image'];
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

	}

//echo "UPDATE wedding_home SET product_color='".$_REQUEST['color']."',product_image='$file_name',product_bottom='$content', product_menuid='$sid' WHERE product_id='$sid'";die;
    
$update = "UPDATE product SET product_name='".$_REQUEST['name']."',product_image='$file_name' WHERE product_id='$sid'";

$updateresult = mysql_query($update);
echo "<script>window.location='add_product1.php?subid=$sid'</script>";
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

							
							<li class="active">Home Page Content</li>
						</ul><!-- /.breadcrumb -->

					</div>


					<div class="page-content">


						<div class="page-header">
							<h1>
						Home Page Content
							
							</h1>
						</div>
						
			
						

						<div class="row">
							<div class="col-xs-12">
							
							
		
		<br><br>				

<form class="form-horizontal"  name=""  method="post" action=""  role="form" enctype="multipart/form-data"
  onsubmit="return validate_form(this);">
  
  		<div class="form-group">
  		
  						<label class="col-sm-3 control-label no-padding-right" > Image</label>
										<div class="col-sm-9">
	<input type="file" id="userfile" / name="userfile" id="userfile" class="col-xs-10 col-sm-5" / valid="userfile">
	    <?php echo "<img src='" . $baseurl . "admin/addimages/".  $row['product_image']. "' width='100'>"; ?>
															</div>
														</div>

														

		<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Product Name </label>

										<div class="col-sm-9">
	<input type="text" id="name" class="col-xs-10 col-sm-5" / 
	name="name"  value="<?php echo $row['product_name']; ?>" valid="name" >
										</div>
									</div>
    
   <!-- <div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Product Price </label>

										<div class="col-sm-9">
	<input type="text" id="name" class="col-xs-10 col-sm-5" / 
	name="price"  value="<?php  //echo $row['product_price'];?>" required>
										</div>
									</div>
    
     <div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Product Point </label>

										<div class="col-sm-9">
	<input type="text" id="name" class="col-xs-10 col-sm-5" / 
	name="point"  value="<?php //echo $row['product_point'];?>" required>
										</div>
									</div> -->
    
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