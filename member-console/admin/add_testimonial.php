<?php include 'header.php'; 
include 'sidebar.php';
if(isset($_REQUEST['reg'])) {	
$reg=$_REQUEST['reg'];	
}else {
	$reg=0;
	}

$name = "add";
$value = "Add Type";

if(isset($_REQUEST['add'])) {
	
	
    
   $data = array(
	$testimonial_table."_bonus_type" => $_REQUEST['type'],
	$testimonial_table."_per" => $_REQUEST['per'],

	);
	insert($testimonial_table,$data);
	
	echo "<script>window.location='add_testimonial.php?message=success'</script>";
}

if(isset($_REQUEST['action'])) {
	$sl = encrypt_decrypt('decrypt',$_REQUEST['sl']);
	
	if($_REQUEST['action']=='edit') {
		$name = "edit";
		$value = "Update package";
		
		
		
		$select_sl = selectfetch("*",$testimonial_table," WHERE ".$testimonial_table."_id='$sl'");
		
		if(isset($_REQUEST['edit'])) {
			
			
			
			$update = array(
			$testimonial_table."_bonus_type" => $_REQUEST['type'],
				$testimonial_table."_per" => $_REQUEST['per'],

			);
			update($testimonial_table,$update," WHERE ".$testimonial_table."_id='$sl'");
			echo "<script>window.location='add_testimonial.php?message=success'</script>";
		}
	}
	
	if($_REQUEST['action']=='active') {
		$update = array(
		$testimonial_table."_status" => 1
		);
		//print_r($update);
		//echo $prefix.$package_table,$update," WHERE ".$package_table."_id='$sl'";
		update($testimonial_table,$update," WHERE ".$testimonial_table."_id='$sl'");
		echo "<script>window.location='add_testimonial.php?message=success'</script>";
	}
	
		if($_REQUEST['action']=='inactive') {
		$update = array(
		$testimonial_table."_status" => 2
		);
		 print_r($update);
		update($testimonial_table,$update," WHERE ".$testimonial_table."_id='$sl'");
		echo "<script>window.location='add_testimonial.php?message=success'</script>";
	}
	
	if($_REQUEST['action']=='delete') {
		$delete = delete($testimonial_table," WHERE ".$testimonial_table."_id='$sl'");
		echo "<script>window.location='add_testimonial.php?message=success'</script>";
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

<?php if(isset($_REQUEST['action'])){?>
						<div class="page-header">
							<h1>
						Add and Update testimonial Setting
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
						<form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data" onsubmit="return validate_form(this);">
						<div class="widget-box">
										

											<div class="widget-body">
												<div class="widget-main">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Enter Name </label>

										<div class="col-sm-9">
											<input type="text" id="testimonial" placeholder="testimonial" class="col-xs-10 col-sm-8 form-control" 
							
						name="type" value="<?php if(isset($_REQUEST['action'])){ echo $select_sl[$testimonial_table.'_bonus_type']; } else { echo "";} ?>" required="" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">  Testimonial Reward %  </label>

										<div class="col-sm-9">
											<input type="text" id="testimonial" placeholder="testimonial" class="col-xs-10 col-sm-8 form-control" 
							
						name="per" value="<?php if(isset($_REQUEST['action'])){ echo $select_sl[$testimonial_table.'_per']; } else { echo "";} ?>" required="" />
										</div>
									</div>
							
						
				
						
                           
                                                 
                                                    
								
										
									
										
								
												<div class="form-group">
									<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit" name="<?php echo $name ?>">
												<?php echo $value ?>
											</button>

										</div>
									</div>
												</div>
											</div>
										</div>
										</form>
							
							
		                 </div>
						</div>
						<?php }?>
						<div class="row">
						
<div class="col-md-12">

<div class="card">
                     <div class="card-header bgm-cyan">
                     <h2>View  testimonial Content <small class="pull-right">All testimonial</small></h2>
                     </div>
                     <div class="card-body">
                     <div class="table-responsive"></div>
                   <table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th >No.</th>

                                        <th >testimonial</th>
                                        <th>Percentage</th>
                        <th></th>
													</tr>
												</thead>

												<tbody>
												
												<?php
												$i = 1;
												$select_sl = select("*",$testimonial_table," ");
												while($sl_row = mysql_fetch_array($select_sl)) {
													?>
													<tr>
														

														<td>
														<?php echo $i; ?>
														</td>

														
														<td><?php echo $sl_row[$testimonial_table.'_bonus_type']; ?></td>
														<td><?php echo $sl_row[$testimonial_table.'_per']; ?></td>

                                                       
                                                       
														<td class="">
															<?php echo chkstatus($sl_row[$testimonial_table.'_status']); ?>
														</td>

														<td>
															<div class="action-buttons">
															<?php
															if($sl_row[$testimonial_table."_status"]==1) {
															?>	<a class="blue" href="add_testimonial.php?action=inactive&sl=<?php echo encrypt_decrypt('encrypt',$sl_row[$testimonial_table.'_id']) ?>" title="Make Inactive">
																<button class="btn bgm-green waves-effect">
																	<i class="zmdi zmdi-lock zmdi-hc-fw"></i>
																	</button>
																</a>
																<?php } else { ?>
																	<a  onclick="return confirm('Are you sure!!!!')" class="blue" href="add_testimonial.php?action=active&sl=<?php echo encrypt_decrypt('encrypt',$sl_row[$testimonial_table.'_id']) ?>" title="Make active">
																	<button class="btn bgm-yellow waves-effect">
																	<i class="zmdi zmdi-lock-open zmdi-hc-fw"></i>
																	</button>
																</a>
                                               <?php }  ?>
																<a class="green" href="add_testimonial.php?action=edit&sl=<?php echo encrypt_decrypt('encrypt',$sl_row[$testimonial_table.'_id']) ?>" title="Edit">
																	<button class="btn bgm-blue waves-effect"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></button>
																</a>

																<!--<a onclick="return confirm('Are you sure!!!!')" class="red" href="add_testimonial.php?action=delete&sl=<?php echo encrypt_decrypt('encrypt',$sl_row[$testimonial_table.'_id']) ?>">
																	<button class="btn bgm-red waves-effect">
																	<i class="zmdi zmdi-delete zmdi-hc-fw"></i>
																	</button>
																</a>
																-->

															
															</div>

															
														</td>
													</tr>

<?php $i++;} ?>
					</tbody>
											</table>
                     </div>                
                </div>
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
		$('#testimonial').keyup(function () {
			//var phone =$(this).val;
		
		});

		</script>

<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var oTable1 = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.dataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			    } );
				//oTable1.fnAdjustColumnSizing();
			
			
				//TableTools settings
				TableTools.classes.container = "btn-group btn-overlap";
				TableTools.classes.print = {
					"body": "DTTT_Print",
					"info": "tableTools-alert gritter-item-wrapper gritter-info gritter-center white",
					"message": "tableTools-print-navbar"
				}
			
				//initiate TableTools extension
				var tableTools_obj = new $.fn.dataTable.TableTools( oTable1, {
					"sSwfPath": "dist/js/dataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf", //in Ace demo dist will be replaced by correct assets path
					
					"sRowSelector": "td:not(:last-child)",
					"sRowSelect": "multi",
					"fnRowSelected": function(row) {
						//check checkbox when row is selected
						try { $(row).find('input[type=checkbox]').get(0).checked = true }
						catch(e) {}
					},
					"fnRowDeselected": function(row) {
						//uncheck checkbox
						try { $(row).find('input[type=checkbox]').get(0).checked = false }
						catch(e) {}
					},
			
					"sSelectedClass": "success",
			        "aButtons": [
			
						
			
				
						
						{
							"sExtends": "print",
							"sToolTip": "Print view",
							"sButtonClass": "btn btn-white btn-primary  btn-bold",
							"sButtonText": "<i class='fa fa-print bigger-110 grey'></i>",
							
							"sMessage": "<div class='navbar navbar-default'><div class='navbar-header pull-left'><a class='navbar-brand' href='#'><small>Optional Navbar &amp; Text</small></a></div></div>",
							
							"sInfo": "<h3 class='no-margin-top'>Print view</h3>\
									  <p>Please use your browser's print function to\
									  print this table.\
									  <br />Press <b>escape</b> when finished.</p>",
						}
			        ]
			    } );
				//we put a container before our table and append TableTools element to it
			    $(tableTools_obj.fnContainer()).appendTo($('.tableTools-container'));
				
				//also add tooltips to table tools buttons
				//addding tooltips directly to "A" buttons results in buttons disappearing (weired! don't know why!)
				//so we add tooltips to the "DIV" child after it becomes inserted
				//flash objects inside table tools buttons are inserted with some delay (100ms) (for some reason)
				setTimeout(function() {
					$(tableTools_obj.fnContainer()).find('a.DTTT_button').each(function() {
						var div = $(this).find('> div');
						if(div.length > 0) div.tooltip({container: 'body'});
						else $(this).tooltip({container: 'body'});
					});
				}, 200);
				
				
				
				//ColVis extension
				var colvis = new $.fn.dataTable.ColVis( oTable1, {
					"buttonText": "<i class='fa fa-search'></i>",
					"aiExclude": [0, 6],
					"bShowAll": true,
					//"bRestore": true,
					"sAlign": "right",
					"fnLabel": function(i, title, th) {
						return $(th).text();//remove icons, etc
					}
					
				}); 
				
				//style it
				$(colvis.button()).addClass('btn-group').find('button').addClass('btn btn-white btn-info btn-bold')
				
				//and append it to our table tools btn-group, also add tooltip
				$(colvis.button())
				.prependTo('.tableTools-container .btn-group')
				.attr('title', 'Show/hide columns').tooltip({container: 'body'});
				
				//and make the list, buttons and checkboxed Ace-like
				$(colvis.dom.collection)
				.addClass('dropdown-menu dropdown-light dropdown-caret dropdown-caret-right')
				.find('li').wrapInner('<a href="javascript:void(0)" />') //'A' tag is required for better styling
				.find('input[type=checkbox]').addClass('ace').next().addClass('lbl padding-8');
			
			
				
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) tableTools_obj.fnSelect(row);
						else tableTools_obj.fnDeselect(row);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(!this.checked) tableTools_obj.fnSelect(row);
					else tableTools_obj.fnDeselect($(this).closest('tr').get(0));
				});
				
			
				
				
					$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			})
		</script>
		

