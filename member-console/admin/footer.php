<script>
       jQuery(document).ready(function() {
          	 function slideout(){
  setTimeout(function(){
  $("#response").slideUp("slow", function () {
      });
    
}, 2000);}

            if (!jQuery().sortable) {
                return;
            }

            $("#draggable_portlets").sortable({
                connectWith: ".widget",
				 cursor: 'move',
                items: ".widget",
                opacity: 0.8,
                coneHelperSize: true,
                placeholder: 'sortable-box-placeholder round-all',
                forcePlaceholderSize: true,
                tolerance: "pointer", update: function(){
				 tid = $('#tablename').val();

			var order = $(this).sortable("serialize")+ '&update=class' + '&tid='+tid; 
			
			//alert(order);

			$.post("update.php", order, function(theResponse){

//alert(theResponse);
				$("#response").html(theResponse);
				$("#response").slideDown('slow');
				slideout();
			}); 															 
		}							
            });

            $(".column").disableSelection();
       });
   </script>
<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder"></span>
							
						</span>


					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->


		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo $baseurl ?>dist/js/jquery.min.js'>"+"<"+"/script>");
		</script>


		<script type="text/javascript">
			if('ontouchstart' in document.documentElement)
			 document.write("<script src='<?php echo $baseurl ?>dist/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo $baseurl ?>dist/js/bootstrap.min.js"></script>

		<script src="<?php echo $baseurl ?>dist/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo $baseurl ?>dist/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo $baseurl ?>dist/js/jquery.gritter.min.js"></script>
				<script src="<?php echo $baseurl ?>dist/js/bootbox.min.js"></script>
		<script src="<?php echo $baseurl ?>dist/js/jquery.easypiechart.min.js"></script>
		<script src="<?php echo $baseurl ?>dist/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo $baseurl ?>dist/js/jquery.flot.min.js"></script>
		<script src="<?php echo $baseurl ?>dist/js/jquery.flot.pie.min.js"></script>
		<script src="<?php echo $baseurl ?>dist/js/jquery.flot.resize.min.js"></script>

						<script src="<?php echo $baseurl ?>dist/js/bootstrap-datepicker.min.js"></script>
								<script src="<?php echo $baseurl ?>dist/js/jquery.hotkeys.min.js"></script>
										<script src="<?php echo $baseurl ?>dist/js/bootstrap-wysiwyg.min.js"></script>
		<script src="<?php echo $baseurl ?>dist/js/select2.min.js"></script>
			<script src="<?php echo $baseurl ?>dist/js/fuelux.spinner.min.js"></script>
		<script src="<?php echo $baseurl ?>dist/js/bootstrap-editable.min.js"></script>
		<script src="<?php echo $baseurl ?>dist/js/ace-editable.min.js"></script>
		<script src="<?php echo $baseurl ?>dist/js/jquery.maskedinput.min.js"></script>
		
		
		
			<script src="<?php echo $baseurl ?>dist/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo $baseurl ?>dist/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="<?php echo $baseurl ?>dist/js/dataTables.tableTools.min.js"></script>
		<script src="<?php echo $baseurl ?>dist/js/dataTables.colVis.min.js"></script>
		<!-- ace scripts -->
		<script src="<?php echo $baseurl ?>dist/js/ace-elements.min.js"></script>
		<script src="<?php echo $baseurl ?>dist/js/ace.min.js"></script>
		        <script  src="<?php echo $baseurl ?>dist/js/defaultscript.js"></script>
		           <script type="text/javascript" src="<?php echo $baseurl ?>dist/js/jquery.rowsorter.js"></script> 
		        
     
		      		<script type="text/javascript">
		
			
				$(document).ready(function() {
							$('input[type=text]').addClass('form-control');	
			$('#example_filter').addClass('pull-right');	

			$('.table').addClass('table-bordered dataTables_wrapper');	
			$('textarea').addClass('form-control');
			$('.zmdi-edit').addClass('fa fa-pencil fa-fw');
			$('.zmdi-delete').addClass('fa fa-trash-o');
			$('.zmdi-lock-open').addClass('fa fa-unlock');
			$('.zmdi-lock').addClass('fa fa-lock');
			$('.zmdi-minus').addClass('fa fa-unlock');
			$('.zmdi-plus').addClass('fa fa-lock');
			$('.zmdi-home').addClass('fa fa-home');
			$('.zmdi-caret-down').addClass('fa fa-sort-desc');
			$('.arrow').addClass('fa fa-plus');
			$('.bgm-green').addClass('btn-success');
			$('.bgm-yellow').addClass('btn-warning');
			$('.bgm-blue').addClass('btn-primary');
			$('.bgm-red').addClass('btn-danger');
			
			
    $('#example').DataTable( {
    
        createdRow: function ( row ) {
            $('td', row).attr('tabindex', 0);
        }
        	



    } );
    
} );

		 		</script>  
	
	</body>


</html>