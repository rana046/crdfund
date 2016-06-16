<?php 
include 'header.php'; 
include 'sidebar.php';
$sql= mysql_query("select * from with_setting where with_setting_id='1'  ");
$count=mysql_num_rows($sql);
if($count==0) {
		mysql_query("insert into with_setting () values ()");
	}else {

		}
$name="update";
$value="update";
if(isset($_REQUEST['update'])) {
	
	$update=mysql_query("update with_setting set  	
	with_setting_percentage='".$_REQUEST['bonus1']."', with_setting_min='".$_REQUEST['min']."' 	where with_setting_id='1' ");
	
	print "
				<script language='javascript'>
					window.location = 'with_setting.php?message=sucess';
				</script>
			";
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

							
							<li class="active">  WithDrawl Bonus  setting</li>
						</ul><!-- /.breadcrumb -->

					</div>
							 <?php
foreach($err_msg as $err)
{
echo '<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong> </strong> '.$err.'
</div>';
}	

foreach($succ_msg as $success)
{
echo '<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong> </strong> '.$success.'
</div>';
}	 	
?>
					<div class="page-content">


						<div class="page-header">
							<h1>
					Update   WithDrawl setting
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
						<form class="form-horizontal" role="form" method="get" action="" enctype="multipart/form-data" onsubmit="return validate_form(this);">
						<div class="widget-box">
						<div class="widget-body">
								<div class="widget-main">
									
										<?php 
										$sql=select("*",$with_setting," ");
										$re_setting = mysql_fetch_array($sql);

											?>
											
										
									<div class="form-group">
<label class="col-xs-3">First Withdrwal request days </label>

										<div class="col-xs-9">
											<input type="text" id="packages" placeholder="%" class=" form-control" 
							
						name="bonus1" value="<? echo $re_setting['with_setting_percentage'];?>" required="" />
										</div>
										</div>
	<div class="form-group">
<label class="col-xs-3"> Set Minimum limit of bonus to withdrawl    </label>

										<div class="col-xs-9">
											<input type="text" id="packages1" placeholder="" class=" form-control" 
							
						name="min" value="<? echo $re_setting['with_setting_min'];?>" required="" />
										</div>
										</div>
										
										
								                 
                                                    
								
										
									
										
								
												<div class="form-group">
									<div class="col-md-offset-6 col-md-6">
											<button class="btn btn-info" type="submit" name="update">
												update
											</button>

										</div>
									</div>
												</div>
											</div>
										</div>
										</form>
							
							
		                 </div>
						</div>
						
							


							
							

								
								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->						
							
							
							
							
							
							
							</div>
							</div></div>

		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<?php
include("footer.php");
?>
 <script type="text/javascript">

$(document).ready(function () {
  //called when key is pressed in textbox
  $("#quantity").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
   
     }});});   
</script>
