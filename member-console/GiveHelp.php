<?php
$page_title = "GIve Help";
 require('header.php');
 
include_once ("z_db.php");
include_once ("z_db1.php");
// Inialize session
//session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
        print "
				<script language='javascript'>
					window.location = 'login.php';
				</script>
			";
}

$user_query = "SELECT * FROM users WHERE users_name='".$_SESSION['username']."'";      
$user_data = mysql_query($user_query);
$user_details_data = (object)mysql_fetch_array($user_data);

        //$q="SELECT * FROM  don_list";
		$q="SELECT * FROM  don_list where user_id = '".$user_details_data->users_id."' and active = '1'";		
        $single_data = mysqli_query($con_don,$q); 
		$single_row = mysqli_fetch_array($single_data);
		$assigned_donor = $single_row['assigned_donor'];
		
		$q="SELECT * FROM  don_list inner join users on don_list.user_id = users.users_id where don_list.user_id in (".$assigned_donor.") and users.users_donation > 0";		
        $single_data = mysqli_query($con_don,$q);
        ?>
<div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
    <div class="row">
     <div class="col-md-12">
        <h3 class="table-title p-20 ng-binding"><?php echo $single_data->num_rows; if($single_data->num_rows > 1) echo " Donations"; else echo " Donation";?></h3>
      </div>
    </div>

    <div class="table-responsive white">
      <table ng-table="tableParams" class="table table-full-small ng-scope ng-table">
         <thead ng-include="templates.header" class="ng-scope">
             <tr class="ng-scope">
                 <th>ID</th>
                 <th>POSSIBLE BANK</th>
                 <th>RECIPIENT</th>
                 <th>AMOUNT</th>
                 <th>ACTION</th>
             </tr>  
         </thead>
        <tbody>
            
        <?php
		if($assigned_donor != NULL) {
		
        while($single_row = mysqli_fetch_array($single_data))
        { 
			$user_id = $single_row['user_id'];
			$q="SELECT * FROM  users where users_id = $user_id";		
			$user_data = mysql_query($q); 
			while($user_row = mysql_fetch_array($user_data))
			{
				$users_donation = number_format($user_row['users_donation'],2);
			}			

        ?>
        <tr ng-repeat="item in $data" class="ng-scope">
          <td data-title="'ID'" filter="{ 'firstname': 'text' }" sortable="'firstname'" data-title-text="ID" class="ng-binding">
              <?php echo $single_row['id'];?>
          </td>
          <td data-title="' Possible Bank '" sortable="'lastname'" data-title-text=" Possible Bank " class="ng-binding">
              <?php echo $single_row['bank'];?>
          </td>
          <td data-title="' Recipient '" sortable="'lastname'" data-title-text=" Recipient " class="ng-binding">
              <?php echo $single_row['lastname'];?>
          </td>
           <td data-title="'AMount '" sortable="'lastname'" data-title-text="AMount " class="ng-binding">
               <?php echo $users_donation;?>
           </td>
           <td data-title="'Actions'" sortable="'lastname'" data-title-text="Actions">
               <button onClick="javascript:location.href='ReservedPayments.php?id=<?php echo $single_row['auto_id'];?>'" class="btn btn-danger">Donate</button>
           </td>
        </tr><!-- end ngRepeat: item in $data -->
        <?php }
		}
		?>
        
        
      </tbody>
      </table>
        
      <div ng-table-pagination="params" template-url="templates.pagination" class="ng-scope ng-isolate-scope">
          <div ng-include="templateUrl" class="ng-scope">
              <div class="p-20 ng-scope">
              </div>
          </div>            
      </div>
    </div>
  </div>


<?php require('footer.php');?>   
