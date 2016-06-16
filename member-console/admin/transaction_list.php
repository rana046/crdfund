<?php include 'header.php'; 
include 'sidebar.php';
include_once ("z_db1.php");
$message = "";
if(isset($_GET['del'])) {
	$delete_id = $_GET['del'];
	$sql = "delete from payments where md5(id) = '".$delete_id."'";
	$result = mysqli_query($con_don,$sql);
	if($result) {
		$message = "Successfully canceled the reservation";
	}
}

if(isset($_GET['pay'])) {
	$pay_id = $_GET['pay'];
	$sql = "update payments set payment_status = '1' where md5(id) = '".$pay_id."'";
	$result = mysqli_query($con_don,$sql);
	if($result) {
		$message = "Successfully approved the transaction";
	}
	$sql = "select payments.payment_amount,don_list.user_id from payments inner join don_list on payments.itemid = don_list.auto_id where md5(payments.id) ='".$pay_id."'";
	$result = mysqli_query($con_don,$sql);
	$result_row = mysqli_fetch_object($result);
	echo $result_row->payment_amount;
	$sql1 = "UPDATE users set users_donation=users_donation-".$result_row->payment_amount." WHERE users_id= '".$result_row->user_id."'";
	$result = mysqli_query($con_don,$sql1);
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

							
							<li class="active">Donation Transactions</li>
						</ul><!-- /.breadcrumb -->

					</div>
					
											 
					<div class="page-content">


						<div class="page-header">
							<h1>
						All Transaction
								
							</h1>
                            <?php if($message != "") { ?>
                            <h4><?php echo $message; ?></h4>
                            <?php } ?>
						</div><!-- /.page-header -->

						
						<div class="row">
						
<div class="col-md-12">

<div class="card">

<?php
    $q="SELECT * FROM  payments"; 
$payment_data = mysql_query($q); 

?>

                     
                     <div class="card-body">
                     <div class="table-responsive"></div>
                   <table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>ID</th>
														 <th>DONER NAME</th>
														 <th>DONATION ID</th>
														 <th>RECIPIENT</th>
														 <th>AMOUNT</th>
														 <th>STATUS</th>
														 <th>CREATED</th>
                                                         <th>Action</th>
													</tr>
												</thead>

												<tbody>
												
												<?php
												while($payment_row = mysql_fetch_array($payment_data))
												{    
													//echo "<pre>"; print_r($payment_row); echo "</pre>"

												
													
													$don_id = $payment_row['itemid'];
													$sql = "SELECT * FROM don_list WHERE auto_id='$don_id'";
													$doner_data = mysqli_query($con_don,$sql);
													$doner_row = mysqli_fetch_array($doner_data);
												
														$doner_name = $doner_row['name'];
														$doner_name_last = $doner_row['lastname'];
														$doner_id = $doner_row['id'];
													
													$user_id = $payment_row['userid'];
													$sql = "SELECT * FROM users WHERE users_id=$user_id";
													$user_data = mysql_query($sql);
													while($user_row = mysql_fetch_array($user_data))
													{ 
														$user_name = $user_row['users_name'];
													}
													?>
													
												  <tr>
													  <td><?php echo $payment_row['id'];?></td>
													  <td><?php echo $user_name;?></td>
													  <td><?php echo $doner_id;?></td>
													  <td><?php echo $doner_name." ".$doner_name_last;?></td>
													  <td><?php echo number_format($payment_row['payment_amount'],2);?></td>
													  <td><?php if($payment_row['payment_status']==1) echo "Paid "; else echo "Pending ";?>
													  <?php if($payment_row['payment_status']==1 && $payment_row['adjust']==0) 
													  {?>
														 <button style="float:right;" class="btn btn-danger" onclick="javascript:location.href='adjust_donation_bonus_db.php?id=<?php echo $payment_row['id'];?>'"> Adjust Bonus</button>
													  <?php
													  }?></td>
													  <td><?php echo $payment_row['createdtime'];?></td>
                                                      <td>
													  	<a href="transaction_list.php?del=<?php echo md5($payment_row['id']) ?>" onclick="return confirmDelete()">Delete</a>
														<?php if(!$payment_row['payment_status']) { ?>
														<a href="transaction_list.php?pay=<?php echo md5($payment_row['id']) ?>" onclick="return confirmActive()">Approve</a>
														<?php } ?>
													  </td>
												   </tr>													  
													
												<?php
												}
													?>
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
		$('#packages').keyup(function () {
			//var phone =$(this).val;
		
		});

		</script>
        <script>
			function confirmDelete() {
				var retVal = confirm("Do you want to cancel this confirmation?");
				   if( retVal == true ){
					  return true;
				   }
				   else{
					  return false;
				   }	
			}
			
			function confirmActive() {
				var retVal = confirm("Do you want to approve this transaction?");
				   if( retVal == true ){
					  return true;
				   }
				   else{
					  return false;
				   }	
			}
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
		

