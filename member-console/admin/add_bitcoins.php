<?php include 'header.php'; 
include 'sidebar.php'; 
if(!isset($_SESSION['ADMINID'])) {
	echo "<script>window.location='index.php'</script>";
}

$name = "add";
$value = "Add Coins";

if(isset($_REQUEST['add'])) {
	
	 
   $data = array(

	$bitcoins_table."_coins" => $_REQUEST['coins'],
	);
	$lid=insert($bitcoins_table,$data);
	
		    
	
	echo "<script>window.location='add_bitcoins.php?message=success'</script>";
}

if(isset($_REQUEST['action'])) {
	$sl = encrypt_decrypt('decrypt',$_REQUEST['sl']);
	
	if($_REQUEST['action']=='edit') {
		$name = "edit";
		$value = "Update Coins";
		
		
		
		$select_sl = selectfetch("*",$bitcoins_table," WHERE ".$bitcoins_table."_id='$sl'");
		
		if(isset($_REQUEST['edit'])) {
			
		
			
			$update = array(


			$bitcoins_table."_coins" => $_REQUEST['coins'],

			);
			update($bitcoins_table,$update," WHERE ".$bitcoins_table."_id='$sl'");
			echo "<script>window.location='add_bitcoins.php?message=success'</script>";
		}
	}
	
	if($_REQUEST['action']=='active') {
		$update = array(
		$bitcoins_table."_status" => 1
		);
		update($bitcoins_table,$update," WHERE ".$bitcoins_table."_id='$sl'");
		echo "<script>window.location='add_bitcoins.php?message=success'</script>";
	}
	
		if($_REQUEST['action']=='inactive') {
		$update = array(
		$bitcoins_table."_status" => 2
		);
		update($bitcoins_table,$update," WHERE ".$bitcoins_table."_id='$sl'");
		echo "<script>window.location='add_bitcoins.php?message=success'</script>";
	}
	
	if($_REQUEST['action']=='delete') {
		$delete = delete($prefix.$bitcoins_table," WHERE ".$bitcoins_table."_id='$sl'");
		echo "<script>window.location='add_bitcoins.php?message=success'</script>";
	}
	}
?>


			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="dashboard.php">Home</a>
							</li>
							<li class="active">Manage Slider</li>
						</ul><!-- /.breadcrumb -->

				 <!-- /.nav-search -->
				 
					</div>

					<div class="page-content">
						

						<div class="page-header">
							<h1>
								Add New Slider
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-10">
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
							<form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data" onsubmit="return validate_form(this);">
						<div class="widget-box">
											<div class="widget-header">
												<h4 class="smaller">Add New Slider</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">

									
												<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Bit Coins </label>

										<div class="col-sm-9">
<input type="text" name="coins" value="<?php ?>">
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
						
													<div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue"> View All Slider </h3>

										<div class="clearfix">
											
										</div>
										<div class="table-header">
											All Slider
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
																 <div class="widget-body" id="draggable_portlets">
											<table id="dynamic-table" class="table table-striped table-bordered" >
												<thead>
													<tr>
														
														<th> # </th>


                                          <th class="hidden-480"> Image </th>

														<th class="hidden-480"> status </th>

														<th>Action</th>
													</tr>
													   <div id="response" style="display:none"></div>
												</thead>

												<tbody>
												
												<?php
												$i = 1;
												$select_sl = select("*",$bitcoins_table);
												while($sl_row = mysql_fetch_array($select_sl)) {

 

												?>
     <tr class="odd gradeX widget" id="arrayorder_<?php echo $sl_row[$bitcoins_table.'_id'] ?>">
														

														<td>
														<?php echo $i; ?>
														</td>


<td class="hidden-480"><?php echo $sl_row[$bitcoins_table.'_coins']; ?></td>

														<td class="hidden-480">
															<?php echo chkstatus($sl_row[$bitcoins_table.'_status']); ?>
														</td>

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
															<?php
															if($sl_row[$bitcoins_table."_status"]==1) {
															?>	<a class="blue" href="add_bitcoins.php?action=inactive&sl=<?php echo encrypt_decrypt('encrypt',$sl_row[$bitcoins_table.'_id']) ?>" title="Make Inactive">
																	<i class="ace-icon fa fa-lock bigger-130"></i>
																</a>
																<?php } else { ?>
																	<a class="blue" href="add_bitcoins.php?action=active&sl=<?php echo encrypt_decrypt('encrypt',$sl_row[$bitcoins_table.'_id']) ?>" title="Make active">
																	<i class="ace-icon fa fa-unlock bigger-130"></i>
																</a>
                                               <?php }  ?>
																<a class="green" href="add_bitcoins.php?action=edit&sl=<?php echo encrypt_decrypt('encrypt',$sl_row[$bitcoins_table.'_id']) ?>" title="Edit">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="add_bitcoins.php?action=delete&sl=<?php echo encrypt_decrypt('encrypt',$sl_row[$bitcoins_table.'_id']) ?>">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

<?php $i++;} ?>
					</tbody>
											</table>
												       <input type="hidden" id="tablename" value="<?php echo $bitcoins_table ;?>">										
										</div>
										</div>
									</div>
								</div>
						
						
						
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			
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
							"sExtends": "copy",
							"sToolTip": "Copy to clipboard",
							"sButtonClass": "btn btn-white btn-primary btn-bold",
							"sButtonText": "<i class='fa fa-copy bigger-110 pink'></i>",
							"fnComplete": function() {
								this.fnInfo( '<h3 class="no-margin-top smaller">Table copied</h3>\
									<p>Copied '+(oTable1.fnSettings().fnRecordsTotal())+' row(s) to the clipboard.</p>',
									1500
								);
							}
						},
						
						{
							"sExtends": "csv",
							"sToolTip": "Export to CSV",
							"sButtonClass": "btn btn-white btn-primary  btn-bold",
							"sButtonText": "<i class='fa fa-file-excel-o bigger-110 green'></i>"
						},
						
						{
							"sExtends": "pdf",
							"sToolTip": "Export to PDF",
							"sButtonClass": "btn btn-white btn-primary  btn-bold",
							"sButtonText": "<i class='fa fa-file-pdf-o bigger-110 red'></i>"
						},
						
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

<?php include 'footer.php'; ?>	
		