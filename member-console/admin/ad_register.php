 <?php
include("header.php");
include("sidebar.php");



if(!isset($_SESSION['ADMINID']))
{
echo"<script>window.location='index.php'</script>";
}


$name = 'submit';
$value = 'Add';

if(isset($_REQUEST['submit'])){

$uname= countq($users_table."_name",$users_table,"where users_name='".$_REQUEST['uname']."'");

if($uname>0) {
	$rname= countq($users_table."_name",$users_table,"where users_name='".$_REQUEST['refname']."'");
	if($rname>0) {
$data = array(
$users_table."_name" => $_REQUEST['uname'],
$users_table."_fullname" => $_REQUEST['fullname'],
$users_table."_reff_name" => $_REQUEST['refname'],
$users_table."_email" => $_REQUEST['email'],
$users_table."_pass" => $_REQUEST['pwd'],
$users_table."_address" => $_REQUEST['address'],
$users_table."_country" => $_REQUEST['country'],
$users_table."_phone" => $_REQUEST['phone'],
$users_table."_address" => $_REQUEST['address'],
$users_table."_package" => $_REQUEST['package'],
$users_table."_status" => '1',
);


insert($users_table,$data);



//echo"<script>window.location='ad_register.php?message=sucess'</script>";
}else {
		echo"<script>window.location='ad_register.php?message=error&invalid referal name '</script>";
	
	}
}else {
	echo"<script>window.location='ad_register.php?message=error&invalid username'</script>";
	}
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

							
							<li class="active">Add Users</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">


						<div class="page-header">
							<h1>
							Add Users
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
	<form class="form-horizontal"  name=""  method="post" action="" id="register-form"  role="form" enctype="multipart/form-data"
  >
  
  
			<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> User name </label>

								<div class="col-sm-9">
<input type="text" name="uname" id="username" 
value="<?php if(isset($_REQUEST['action']) && $_REQUEST['action'] != 'delete'){ echo $row['users_name']; } else { echo "";} ?>" valid="name">
										<label id="labeltext1"></label></div>
									</div>  
									
										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Full name </label>

								<div class="col-sm-9">
<input type="text" name="fullname" id="title " 
value="<?php if(isset($_REQUEST['action']) && $_REQUEST['action'] != 'delete'){ echo $row['users_fullname']; } else { echo "";} ?>" valid="name">
										</div>
									</div>  
									
										<div class="form-group">




										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Referal name </label>
<?php
				$last_select = "select * from users ORDER BY users_id DESC LIMIT 1";
				$last_result = mysql_query($last_select);
				$last_record = mysql_fetch_array($last_result);
?>
								<div class="col-sm-9">
<input type="text" name="refname" id="referal" 
value="<?php echo $last_record['users_name'] ?>" valid="name">
<label id="labeltext"></label>
										</div>
									</div>  
  
  <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

								<div class="col-sm-9">
<input type="email" name="email" id="title " class="form-control"
value="<?php if(isset($_REQUEST['action']) && $_REQUEST['action'] != 'delete'){ echo $row['users_email']; } else { echo "";} ?>" valid="name">
										</div>
									</div>
									 <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Phone </label>

								<div class="col-sm-9">
<input type="text" name="phone" id="title " 
value="<?php if(isset($_REQUEST['action']) && $_REQUEST['action'] != 'delete'){ echo $row['users_phone']; } else { echo "";} ?>" valid="name">
										</div>
									</div>
									
									  <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password </label>

								<div class="col-sm-9">
<input type="password" name="pwd" id="title "  class="form-control"
value="<?php if(isset($_REQUEST['action']) && $_REQUEST['action'] != 'delete'){ echo $row['users_pass']; } else { echo "";} ?>" valid="name">
										</div>
									</div>
 <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Country </label>

								<div class="col-sm-9">
                            <select data-required="true" class="form-control m-t" name="country" required >
                                <option value="">Please choose</option>
                               	<? 
	$id1=mysql_query("SELECT * FROM graphic_location where location_type='0' ");
while($country=mysql_fetch_array($id1)) {

                                              
                                          
	?>

	<option value="<?php echo $country['name']; ?>"> <?php echo $country['name']; ?></option>
	<? }?>
</select>						</div>
									</div>
									 <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Package </label>

								<div class="col-sm-9">

<select name="package" required  class="form-control">
<?
$select_sl = select("*",$package_table,"where packages_status=1 ");
while($package=mysql_fetch_array($select_sl)) {
	echo "<option value='".$package['packages_id']."'>".$package['packages_packages']."</option>";
}
?>
</select>
	</div>
									</div>
 
									
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Address  </label>

										<div class="col-sm-9">
<textarea name="address" id="content" class="col-xs-8">
<?php if(isset($_REQUEST['edit'])){ echo $row['users_address']; } else { echo '';}  ?>
</textarea>
										</div>
									</div>														
									
									
								
									
									
		<div class="col-md-offset-4 col-md-8">							
	<button class="btn btn-info check_field" type="submit" name="<?php echo $name; ?>">
<?php echo $value; ?>   </button>								
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

$("#referal").blur(function () {
	 var t = $(this).val(); 

	  $.ajax({
      type: "POST",
      url: "valid.php?id="+t,
          success:function(res){
              $('#labeltext').html(res);
}
    });

})	;

$("#username").blur(function () {
	 var t = $(this).val(); 
	  $.ajax({
      type: "POST",
      url: "valid.php?id1="+t,
          success:function(res){
              $('#labeltext1').html(res);
}
    });



	
})	;

$(".check_field").submit(function () {
	alert("DF");

	 var t = $("#referal").val(); 
	  $.ajax({
      type: "POST",
      url: "valid.php?check="+t,
          success:function(res){
          	if (res=="true") {
          		
          		
          	}else {
              $('#labeltext').html("<span style='color:red'>invalid referal user name</span>");
          	return false;
          		}
          	}
           
});




	


	 var t = $("#username").val(); 
	  $.ajax({
      type: "POST",
      url: "valid.php?check1="+t,
          success:function(res){
            if (res=="true") {
          	
          	}else {
              $('#labeltext1').html("<span style='color:red'>already registered username</span>");
          	return false;
          		}
}

})	;


	
})	;	

});



</script>
