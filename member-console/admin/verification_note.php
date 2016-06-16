<?php 
include 'header.php'; 
include 'sidebar.php';
$sql= mysql_query("select * from verification where verification_id='1'  ");
$count=mysql_num_rows($sql);
if($count==0) {
		mysql_query("insert into verification () values ()");
	}else {

		}
$name="update";
$value="update";
if(isset($_REQUEST['update'])) {
	$note=mysql_real_escape_string(htmlspecialchars($_REQUEST['bonus1']));
	$end=mysql_real_escape_string(htmlspecialchars($_REQUEST['end']));
	//echo "update verification set  	
	//verification_note='$note'	where verification_id='1' ";
	$update=mysql_query("update verification set  verification_1='".$_REQUEST['verification1']."'	,verification_2='".$_REQUEST['verification2']."',verification_3='".$_REQUEST['verification3']."',
	verification_note='$note' ,verification_end='$end'	where verification_id='1' ");
	
	print "
				<script language='javascript'>
					window.location = 'verification_note.php?message=sucess';
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

							
							<li class="active"> Verification Note </li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">


						<div class="page-header">
							<h1>
					Update  Verification Note Content <span class="pull-right">
					<a href="add_question.php" class="btn btn-primary"> Add Verification Question?</a></span>
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
						<form class="form-horizontal" role="form" method="get" action="" enctype="multipart/form-data" onsubmit="return validate_form(this);">
						<div class="widget-box">
						<div class="widget-body">
								<div class="widget-main">
									
										<?php 
										$sql=select("*",$verification_table," ");
										$re_setting = mysql_fetch_array($sql);

											?>
										<div class="form-group">
										<label class="col-xs-2 control-label">Process 1</label>
										<div class="col-xs-10">
										
                            <input type="text" class="form-control" value="<?php echo $re_setting['verification_1'];?>" name="verification1"		>								
										</div>
										
										</div>
				<div class="form-group">
										<label class="col-xs-2 control-label"> Process 2</label>
										<div class="col-xs-10">
										
                            <input type="text" class="form-control" value="<?php echo $re_setting['verification_2'];?>" name="verification2"		>								
										</div>
										
										</div>
				<div class="form-group">
										<label class="col-xs-2 control-label"> Process 3</label>
										<div class="col-xs-10">
										
                            <input type="text" class="form-control" value="<?php echo $re_setting['verification_3'];?>" name="verification3"		>								
										</div>
										
										</div>
										<div class="form-group">
<label class="col-xs-12">Note After verification process end  </label>

										<div class="col-xs-12">
								<textarea class="col-sm-10" rows="10"	name="end" value="" />
						<? echo html_entity_decode($re_setting['verification_end']);?>
						</textarea>
										</div>
										</div>	
										
									<div class="form-group">
<label class="col-xs-12">Verification Note </label>

										<div class="col-xs-12">
								<textarea class="col-sm-10"	name="bonus1" value="" />
						<? echo html_entity_decode($re_setting['verification_note']);?>
						</textarea>
										</div>
										</div>
				
								                 
                                                    
								
										
									
										
								
												<div class="form-group">
									<div class="col-md-12">
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
<script type="text/javascript" src="nice/nicEdit.js"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>