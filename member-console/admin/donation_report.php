<?php
include("header.php");
include("sidebar.php");



if(!isset($_SESSION['ADMINID']))
{
echo"<script>window.location='index.php'</script>";
}

$name = 'Update';
$value = 'update';


 
 if(isset($_REQUEST['action'])){

$uid = $_GET['uid'];

	
	if($_REQUEST['action']=='active') {
		$update = array(
		$users_table."_status" => 1
		);
		update($users_table,$update," WHERE ".$users_table."_id='$uid'");
		echo "<script>window.location='view_register.php'</script>";
	}
	
		if($_REQUEST['action']=='inactive') {
		$update = array(
		$users_table."_status" => 2
		);
		update($users_table,$update," WHERE ".$users_table."_id='$uid'");
		echo "<script>window.location='view_register.php'</script>";
	}
	
		if($_REQUEST['action']=='delete') {
		$delete = delete($prefix4.$users_table," WHERE ".$users_table."_id='$uid'");
		echo "<script>window.location='view_register.php?message=success'</script>";
	}
	
	

	

	
if($_REQUEST['action']=='edit') {

$name = 'Update';
$value = 'update';

$row = selectfetch("*",$users_table." WHERE ".$users_table."_id='$uid'");


if(isset($_REQUEST['Update'])) {
$update = array(
$users_table."_fullname" => $_REQUEST['fullname'],
$users_table."_reff_name" => $_REQUEST['refname'],
$users_table."_email" => $_REQUEST['email'],
$users_table."_pass" => $_REQUEST['pwd'],
$users_table."_address" => $_REQUEST['address'],
$users_table."_country" => $_REQUEST['country'],
$users_table."_phone" => $_REQUEST['phone'],
$users_table."_package" => $_REQUEST['package'],
$users_table."_address" => $_REQUEST['address'],


);
//echo $users_table,$update," WHERE ".$users_table."_id='$uid'";
update($users_table,$update," WHERE ".$users_table."_id='$uid'");

echo"<script>window.location='view_register.php'</script>";

}		
		
		

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

							
							<li class="active"> Donation Report</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">

							


							
								<div class="hr hr-18 dotted hr-double"></div>

								<div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue"> DONATION</h3>

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
Donation Report
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
			 <div class="widget-body" id="draggable_portlets">							
											<table id="example" class="table table-striped table-bordered" >
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
												<th>S.No.</th><th>Date</th>

														<th>User name</th>
														
														<th>Donar Name</th><th>Donation Amount</th>
														<th>Total</th>
														<th>Remark</th>
													
													</tr>
												</thead>
	   <div id="response" style="display:none"></div>											

												<tbody>
	 
<?php
		$i = 1;
$total="";
$select = select("*",$report_table,"WHERE donation IS NOT NULL");
while($sl_row = mysql_fetch_array($select))
{		
if(!empty($sl_row['donation'])) {		
?>											
<tr class="odd gradeX widget" id="arrayorder_<?php echo $sl_row[$users_table.'_id'] ?>">
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>
														
<?php														
// ref select
$ref_select = "select * from users where users_id = '".$sl_row['doner_user_id']."'";
$ref_result = mysql_query($ref_select);
$ref_record = mysql_fetch_array($ref_result);
?>
													
<td><?php echo $i; ?></td>
<td><?php echo $sl_row['report_date']; ?></td>													
<td><?php echo $sl_row['users_id']; ?></td>
<td><?php echo $ref_record['users_name'];?></td>
<td><?php echo $sl_row['donation'];?></td>
<td><? echo $total=$total +$sl_row['donation'];  ?></td>
								
												
												
	<td><?php echo $sl_row['report_region']; ?></td>

														
													
														
													</tr>
<?php $i++; } } ?>


					
												</tbody>
											</table>
	  <input type="hidden" id="tablename" value="<?php echo $users_table ;?>">																																	
											
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
					  null, null,null,null,null,null,null,null,null,
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
		<script type="text/javascript">
		    $('#example').DataTable( {
    
        createdRow: function ( row ) {
            $('td', row).attr('tabindex', 0);
        }
        	



    } );
		</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<?php
include("footer.php");
?>
