<?php 
include_once ("z_db1.php");
include_once ("z_db2.php");

$q="SELECT * FROM  don_list where user_id <> '".$user_details_data->users_id."' and amount > 0 and active = '1'";		
$result = mysqli_query($con_don,$q); 


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

							
							<li class="active">Approve User for Donation</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">


						<div class="page-header">
							<h1>
						User List
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
						
<form class="form-horizontal" role="form" method="post" action="add_help_banking_db.php" enctype="multipart/form-data" onsubmit="return validate_form(this);">
	<div class="widget-box">
		<div class="widget-body">
			<div class="widget-main">
			
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Select User </label>
					<div class="col-sm-8">
						<select name="user_id" required="required">
							<option value="">select user</option>
							<?php
							$q="SELECT * FROM  users WHERE users_status=1"; 
							$users_data = mysqli_query($con_don2,$q);
							while($users_row = mysqli_fetch_array($users_data))
							{
								$user_id = $users_row['users_id'];
								$q="SELECT * FROM  don_list WHERE user_id=$user_id";
								$exist_users_data = mysqli_query($con_don,$q);
								if($exist_users_data->num_rows<1)
								{           
									?> 
									<option value="<?php echo $user_id;?>"><?php echo $users_row['users_name']?></option>
									<?php
								}
							} 
							?>
						</select>
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Transaction ID </label>
					<div class="col-sm-8">
						<input type="text" placeholder="Transaction Id" class="col-xs-10 col-sm-8 form-control" name="transaction_id"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> First Name </label>
					<div class="col-sm-8">
						<input type="text" placeholder="First Name" required class="col-xs-10 col-sm-8 form-control" name="first_name"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Last Name </label>
					<div class="col-sm-8">
						<input type="text" placeholder="Last Name" class="col-xs-10 col-sm-8 form-control" name="last_name"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Bank Name </label>
					<div class="col-sm-8">
						<input type="text" placeholder="Bank Name" class="col-xs-10 col-sm-8 form-control" name="bank_name"/>
					</div>
				</div>
				<!-- <div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Amount </label>
					<div class="col-sm-8">
						<input type="text" placeholder="Amount" required class="col-xs-10 col-sm-8 form-control" name="amount"/>
					</div>
				</div> -->
				
				
				<div class="form-group">
					<div class="col-sm-12 center">
						<h1>Banking Details</h1>
					</div>
				</div>
				
				
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Name Of Bank </label>
					<div class="col-sm-8">
						<input type="text" placeholder="Bank Name" class="col-xs-10 col-sm-8 form-control" name="name_of_bank"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Account Holder </label>
					<div class="col-sm-8">
						<input type="text" placeholder="Account Holder" class="col-xs-10 col-sm-8 form-control" name="account_holder"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Account Number </label>
					<div class="col-sm-8">
						<input type="text" placeholder="Account Number" class="col-xs-10 col-sm-8 form-control" name="account_number"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Account Type </label>
					<div class="col-sm-8">
						<input type="text" placeholder="Account Type" class="col-xs-10 col-sm-8 form-control" name="account_type"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Branch Name </label>
					<div class="col-sm-8">
						<input type="text" placeholder="Branch Name" class="col-xs-10 col-sm-8 form-control" name="branch_name"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-1"> Branch Code </label>
					<div class="col-sm-8">
						<input type="text" placeholder="Branch Code" class="col-xs-10 col-sm-8 form-control" name="branch_code"/>
					</div>
				</div>
				
				<input type="hidden" name="help_banking" value="add" />
                                                 
                <div class="form-group">
					<div class="col-md-offset-4 col-md-8">
						<button class="btn btn-info" type="submit">
							Add Donation
						</button>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</form>
							
							
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

		
		

