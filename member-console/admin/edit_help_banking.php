<?php 
include_once ("z_db1.php");
include_once ("z_db2.php");
include 'header.php'; 
include 'sidebar.php';



?>

<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
					

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="account.php">Home</a>
							</li>

							
							<li class="active">Edit Help & Information</li>
						</ul><!-- /.breadcrumb -->

					</div>
					<div class="page-content">


						<div class="page-header">
							<h1>
						Update Donation
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
						<?php
			
                        if(isset($_REQUEST['id'])) {
                          $data_id = encrypt_decrypt('decrypt',$_REQUEST['id']);
                          $q="SELECT * FROM  don_list inner join users on don_list.user_id = users.users_id WHERE don_list.auto_id=$data_id"; 
                          $single_data = mysqli_query($con_don,$q);
                          
                          while($single_row = mysqli_fetch_array($single_data))
                          {
							  $get_user_id = $single_row['user_id'];
							  echo $get_package_id = $single_row['users_package'];
							  $assigned_donor = $single_row['assigned_donor'];
							  $donor_list = array();
							  if($assigned_donor != NULL) {
							  	$donor_list = explode(",",$assigned_donor);
							  }
							  $other_user_query = "select * from users where users_id <> '".$get_user_id."' and users_package = '".$get_package_id."' order by users_fullname asc";
							  $other_user_data = mysqli_query($con_don2,$other_user_query);
                          
                          ?>
<form class="form-horizontal" role="form" method="post" action="add_help_banking_db.php" enctype="multipart/form-data" onsubmit="return validate_form(this);">
	<div class="widget-box">
		<div class="widget-body">
			<div class="widget-main">
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1">Select Donor List</label>
					<div class="col-sm-8">
						<select name="donor_list[]" id="donor_list" multiple="multiple" style="height:300px;">
							<?php
								while($single_user = mysqli_fetch_array($other_user_data))
                          		{ ?>
									<option value="<?php echo $single_user['users_id'] ?>" <?php if(in_array($single_user['users_id'],$donor_list)) echo 'selected="selected"'; ?>><?php echo $single_user['users_fullname']; ?></option>
							<?php }
							?>
						</select>
					</div>
				</div>
				<input type="hidden" class="col-xs-10 col-sm-8 form-control" value="<?php echo $single_row['user_id'];?>" name="user_id"/>
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Transaction ID </label>
					<div class="col-sm-8">
						<input type="text" placeholder="Transaction Id" class="col-xs-10 col-sm-8 form-control" value="<?php echo $single_row['id'];?>" name="transaction_id"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> First Name </label>
					<div class="col-sm-8">
						<input type="text" class="col-xs-10 col-sm-8 form-control" required value="<?php echo $single_row['name'];?>" name="first_name"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Last Name </label>
					<div class="col-sm-8">
						<input type="text"  class="col-xs-10 col-sm-8 form-control" value="<?php echo $single_row['lastname'];?>" name="last_name"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Bank Name </label>
					<div class="col-sm-8">
						<input type="text" class="col-xs-10 col-sm-8 form-control" value="<?php echo $single_row['bank'];?>" name="bank_name"/>
					</div>
				</div>
				<!--<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Amount </label>
					<div class="col-sm-8">
						<input type="text" required class="col-xs-10 col-sm-8 form-control" value="<?php echo $single_row['amount'];?>" name="amount"/>
					</div>
				</div>-->
				
				
				<div class="form-group">
					<div class="col-sm-12 center">
						<h1>Banking Details</h1>
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Name Of Bank </label>
					<div class="col-sm-8">
						<input type="text" class="col-xs-10 col-sm-8 form-control" value="<?php echo $single_row['bank_name'];?>" name="name_of_bank"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Account Holder </label>
					<div class="col-sm-8">
						<input type="text" class="col-xs-10 col-sm-8 form-control" value="<?php echo $single_row['acount_holder'];?>" name="account_holder"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Account Number </label>
					<div class="col-sm-8">
						<input type="text" class="col-xs-10 col-sm-8 form-control" value="<?php echo $single_row['account_number'];?>" name="account_number"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Account Type </label>
					<div class="col-sm-8">
						<input type="text" class="col-xs-10 col-sm-8 form-control" value="<?php echo $single_row['account_type'];?>" name="account_type"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Branch Name </label>
					<div class="col-sm-8">
						<input type="text" class="col-xs-10 col-sm-8 form-control" value="<?php echo $single_row['branch'];?>" name="branch_name"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Branch Code </label>
					<div class="col-sm-8">
						<input type="text" class="col-xs-10 col-sm-8 form-control" value="<?php echo $single_row['branch_code'];?>" name="branch_code"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Active </label>
					<div class="col-sm-8">
						<select name="active" class="col-xs-10 col-sm-8 form-control">
							<option value="1" <?php if($single_row['active']) echo 'selected="selected"'; ?>>Active</option>
							<option value="0" <?php if(!$single_row['active']) echo 'selected="selected"'; ?>>Inactive</option>
						</select>
					</div>
				</div>
				
				<input type="hidden" name="help_banking" value="edit"/>
				<input type="hidden" name="auto_id" value="<?php echo $single_row['auto_id'];?>" method="post">
                                                 
                <div class="form-group">
					<div class="col-md-offset-4 col-md-8">
						<button class="btn btn-info" type="submit">
							Update Donation
						</button>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</form>
<?php }}?>
							
							
		                 </div>
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

		
		

