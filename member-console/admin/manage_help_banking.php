<?php include 'header.php'; 
include 'sidebar.php';
include_once ("z_db1.php");

if(isset($_REQUEST['action'])) {
	$id = encrypt_decrypt('decrypt',$_REQUEST['id']);
	if($_REQUEST['action']=='delete') {
		$result=mysqli_query($con_don,"DELETE FROM don_list WHERE auto_id='$id'");
		echo "<script>window.location='manage_help_banking.php?message=success'</script>";
	} else if($_REQUEST['action']=='approve') {
		$result=mysqli_query($con_don,"Update don_list set active = '1' WHERE auto_id='$id'");
		echo "<script>window.location='manage_help_banking.php?message=success'</script>";
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

							
							<li class="active">Manage Help & Information</li>
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
						Manage Help & Banking Information
								
							</h1>
						</div><!-- /.page-header -->

						
						<div class="row">
						
<div class="col-md-12">

<div class="card">
                     
                     <div class="card-body">
                     <div class="table-responsive"></div>
                   <table id="example" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th >Transaction Id</th>

                                        <th >Name</th>
										
										<th >User Id</th>
                                        <th >Amount</th>
                                        <th >Name Of Bank</th>
                                        <th > Account Holder</th>
                                        <th>Account Number</th>
										<th>Status</th>
							                  <th >Action</th>
													</tr>
												</thead>

												<tbody>
												
												<?php 
												$q="SELECT * FROM  don_list ORDER BY id DESC"; 


$r123 = mysqli_query($con_don,$q);

while($ro = mysqli_fetch_array($r123))
{
	
	$auto_id="$ro[auto_id]";        
        $tid="$ro[id]";
	$name="$ro[name]";
	$user_id="$ro[user_id]";
	$lastname="$ro[lastname]";
	$bank="$ro[bank]";
	$amount="$ro[amount]";
	$bank_name="$ro[bank_name]";
	$acount_holder="$ro[acount_holder]";
	$account_number="$ro[account_number]";
	$account_type="$ro[account_type]";
	$branch="$ro[branch]";
	$branch_code="$ro[branch_code]";
	$status = "";
	if($ro['active']) {
		$status = "Active";
	} else {
		$status = "Inactive";
	}
	
	$q="SELECT * FROM  users where users_id = $user_id";		
	$user_data = mysql_query($q); 
	while($user_row = mysql_fetch_array($user_data))
	{
		$users_donation = number_format($user_row['users_donation'],2);
	}	
	

  print "<tr>
				  
				  <td>
				  $tid
				  </td>
				  <td>
				  $name $lastname
				  </td>
				  <td>
				  $user_id
				  </td>
				  <td>
				  $users_donation
				  </td>
				  <td>
				  $bank_name
				  </td>
				  
				  <td>
				  $acount_holder
				  </td>
				  
				  <td>
                                    $account_number
				  </td>
				  <td>".$status."</td>
				  
				  
				  <td>
				  
				  ";
				  ?>
				<div class="action-buttons">
					<a class="green" href="view_help_banking.php?action=view&id=<?php echo encrypt_decrypt('encrypt',$auto_id) ?>" title="View">
						<button  class="btn bgm-blue waves-effect"><i class="zmdi zmdi-eye zmdi-hc-lg fa fa-eye fa-fw"></i></button>
				    </a>
					<a class="green" href="edit_help_banking.php?action=edit&id=<?php echo encrypt_decrypt('encrypt',$auto_id) ?>" title="Edit">
						<button class="btn bgm-blue waves-effect"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></button>
				    </a>
					<a class="green" href="manage_help_banking?action=approve&id=<?php echo encrypt_decrypt('encrypt',$auto_id) ?>" title="Approve">
						<button class="btn bgm-blue waves-effect"><i class="ace-icon fa fa-lock  bigger-120 text-danger"></i></button>
				    </a>
					<a onclick="return confirm('Are you sure!!!!')" class="red" href="manage_help_banking?action=delete&id=<?php echo encrypt_decrypt('encrypt',$auto_id) ?>" title="delete">
						<button class="btn bgm-red waves-effect"><i class="zmdi zmdi-delete zmdi-hc-fw"></i></button>
					</a>				  
			    </div>
				  </td>
				  
				  </tr>
  
  
  <?php } ?>
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
<script type="text/javascript">
		    $('#example').DataTable( {
    
        createdRow: function ( row ) {
            $('td', row).attr('tabindex', 0);
        }
        	



    } );
		</script>
<?php
include("footer.php");
?>

		<script type="text/javascript">
		$('#packages').keyup(function () {
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
					  null, null,null,
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
		

