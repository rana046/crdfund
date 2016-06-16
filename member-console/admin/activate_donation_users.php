<?php 
include_once ("z_db1.php");
include_once ("z_db2.php");
include 'header.php'; 
include 'sidebar.php';

if(isset($_POST['activate_users'])) {
	$sql = "update don_list set active = '1' where active = '0' and assigned_donor is not NULL";
	$activate_user_data = mysqli_query($con_don,$sql);
}

$sql = "select * from don_list where active = '0' and assigned_donor is not NULL";
$doner_data = mysqli_query($con_don,$sql);
$counter = 0;
while($doner_row = mysqli_fetch_array($doner_data)) {
	$counter++;
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

							
							<li class="active">Activate Donation Users</li>
						</ul><!-- /.breadcrumb -->

					</div>
					<div class="page-content">


						<div class="page-header">
							<h1>
								Activate Donation Users								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
                        
<h3>Currently there are <?php echo $counter; ?> inactive users who are assigned as donation receiver.</h3>                          
<form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
	<div class="widget-box">
		<div class="widget-body">
			<div class="widget-main">
				<input type="hidden" name="activate_users" value="123" id="activate_users" />              
                <div class="form-group">
					<div class="col-md-offset-4 col-md-8">
						<button class="btn btn-info" type="submit">
							Activate All
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

		
		

