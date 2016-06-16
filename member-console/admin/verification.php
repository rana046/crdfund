<?php
include("header.php");
include("sidebar.php");
// if admin session not set
if(!isset($_SESSION['ADMINID']))
{
echo"<script>window.location='index.php'</script>";
}
//Verify document 
if(isset($_REQUEST['status'])) {	
$data=$_REQUEST['data'];
$value=$_REQUEST['value'];
$update = array(
		$data => $value,
		);
		// print_r($update);
		 update($user_v_table,$update,"where users_name='".$_REQUEST['id']."'");
		echo "<script>window.location='verification.php?message=success&id=".$_REQUEST['id']."'</script>";
}						

// fetch data from verification note :
$sql=select("*",$verification_table," ");
$re_setting = mysql_fetch_array($sql);
?>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
					

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="account.php">Home</a>
							</li>

							
							<li class="active"> User Verification of <? echo $_REQUEST['id'] ;?></li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">

	<?
	if(isset($_REQUEST['message'])) {
		if($_REQUEST['message']=="sucess") {
			echo "<div class='alert alert-info'>User is Verify !</div>";
			
			}
	if($_REQUEST['message']=="cancel") {
			echo "<div class='alert alert-danger'>Users Document Has been Rejected </div>";
			
			}
		
		}
	?>						


							
								<div class="hr hr-18 dotted hr-double"></div>

								<div class="row">
									<div class="col-xs-12">

										<div class="well">
<? echo $_REQUEST['id'] ;?> Verification Document <span class="pull-right"><a class="btn btn-primary" href="verification_user.php">Back</a></span>
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
			 <div class="widget-body" id="draggable_portlets">							
				
	 
<?php
		$i = 1;
$total="";
$select = select("*",$user_v_table,"where users_name='".$_REQUEST['id']."'");
$sl_row = mysql_fetch_array($select);
	

?>											

  <div class="panel panel-default">

    <!-- Modal content-->
    <div class="panel-content">
      <div class="panel-heading">
        <h4 class="">User Name : <?php echo $sl_row['users_name']; ?></h4>
                <span class="col-xs-12">     <hr ></span>
      </div>
      <div class="panel-body">
      <div class="row">
      <div class="col-xs-10">
    <h4><?php echo $re_setting['verification_1'];?> Document :</h4>      
       <a href="<?php echo $baseurl."uploads/".$sl_row["verification_document"];?>"><img src='<?php echo $baseurl."uploads/".$sl_row["verification_document"];?>' alt="" style="height:200px;"></a>
       
       </div>
       <div class="col-xs-2">
       <? if($sl_row["f_verify"]==0) {
       	?>
       <a href="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $_REQUEST['id'];?>&status=change&data=f_verify&value=1"><button class="btn-primary btn">Verify</button></a>
       <a href="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $_REQUEST['id'];?>&status=change&data=f_verify&value=2"><button class="btn-danger btn">Cancel</button></a>
<?php }else {
	if($sl_row["f_verify"]==1)
	{
  echo "<button class='btn btn-info'>Verified</button>";	
	}
		if($sl_row["f_verify"]==2)
	{
  echo "<button class='btn btn-warning'>Rejected</button>";	
	}
	}
	
	?>
       </div>
       
  <span class="col-xs-12">     <hr ></span>
       <div class="col-xs-10">
 <h4><?php echo $re_setting['verification_2'];?> Document</h4>   
 kEYCODE : <?php echo $sl_row['key_code'];?> <hr>  
       <a href="<?php echo $baseurl;?>uploads/<?php echo $sl_row['users_image'];?>"><img src="<?php echo $baseurl;?>uploads/<?php echo $sl_row['users_image'];?>" alt="" style="height:200px;"></a>
       
      
       </div>
       <div class="col-xs-2">
       <? if($sl_row["s_verify"]==0) {
       	?>
       <a href="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $_REQUEST['id'];?>&status=change&data=s_verify&value=1"><button class="btn-primary btn">Verify</button></a>
       <a href="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $_REQUEST['id'];?>&status=change&data=s_verify&value=2"><button class="btn-danger btn">Cancel</button></a>
<?php }else {
	if($sl_row["s_verify"]==1)
	{
  echo "<button class='btn btn-info'>Verified</button>";	
	}
		if($sl_row["s_verify"]==2)
	{
  echo "<button class='btn btn-warning'>Rejected</button>";	
	}
	}
	
	?>
       </div>

       <div class="col-xs-10">
        <h4><?php echo $re_setting['verification_3'];?> Document</h4> 
        Name Of Institute :<?php echo $sl_row['institute1'];?>
        <br>
        Bill Type : <?php echo $sl_row['address_name1'];?>
        
        <br>
        Bill Date:  <?php echo $sl_row['issue_date1'];?>  
        <br>     
             
       <a href="<?php echo $baseurl;?>uploads/<?php echo $sl_row['address_image'];?>"><img src="<?php echo $baseurl;?>uploads/<?php echo $sl_row['address_image'];?>" alt="" style="height:200px;"></a>
  <span class="col-xs-12">     <hr ></span>
              <h2><?php echo $re_setting['verification_3'];?> Document</h2> 
        Name Of Institute :<?php echo $sl_row['institute2'];?>
        <br>
        Bill Type : <?php echo $sl_row['address_name2'];?>
        
        <br>
        Bill Date:  <?php echo $sl_row['issue_date2'];?>       </br>
             
       <a href="<?php echo $baseurl;?>uploads/<?php echo $sl_row['address_image2'];?>"><img src="<?php echo $baseurl;?>uploads/<?php echo $sl_row['address_image2'];?>" alt="" style="height:200px;"></a>
 

      </div>
        <div class="col-xs-2">
       <? if($sl_row["t_verify"]==0) {
       	?>
       <a href="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $_REQUEST['id'];?>&status=change&data=t_verify&value=1"><button class="btn-primary btn">Verify</button></a>
       <a href="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $_REQUEST['id'];?>&status=change&data=t_verify&value=2"><button class="btn-danger btn">Cancel</button></a>
<?php }else {
	if($sl_row["t_verify"]==1)
	{
  echo "<button class='btn btn-info'>Verified</button>";	
	}
		if($sl_row["t_verify"]==2)
	{
  echo "<button class='btn btn-warning'>Rejected</button>";	
	}
	}
	
	?>
       </div>
      </div>
      
      
      </div>

      </div>
      <div class="panel-footer">

      </div>
    </div>

  </div>


											
										</div>
									</div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->


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
