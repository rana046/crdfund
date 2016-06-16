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

							
							<li class="active">Export Users</li>
						</ul><!-- /.breadcrumb -->

					</div>
					<div class="page-content">


						<div class="page-header">
							<h1>
								Export Users								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
                        
                          
<form class="form-horizontal" role="form" method="post" action="export_users_excel.php" enctype="multipart/form-data">
	<div class="widget-box">
		<div class="widget-body">
			<div class="widget-main">
				<input type="hidden" name="export_id" value="123" id="export_id" />              
                <div class="form-group">
					<div class="col-md-offset-4 col-md-8">
						<button class="btn btn-info" type="submit">
							Export Users
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

		
		

