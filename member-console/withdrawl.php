<?php 
include 'header.php';
$checklast=mysql_query("select * from  withdrawal where users_name='".$_SESSION['username']."' and  	withdrawal_status='0'  ");
$count=mysql_num_rows($checklast);

if(isset($_REQUEST['withdrawl']))
{
	 $day_row=mysql_fetch_array(mysql_query("select * from with_setting where with_setting_id='1' ")); 
    $days= $day_row['with_setting_percentage'];
    $minlimit =$day_row['with_setting_min'];
    
echo 	$amt = $user_record['users_bonus']+$user_record['users_ref_bonus'];
	if($amt<$minlimit) {
			print "
				<script language='javascript'>
					window.location = 'withdrawl.php?fail';
				</script>
			"; 
		}else {
			
			
			
	if($count==0) {
		
   
    
     $today=date("d-m-Y");
     $startTimeStamp = strtotime($user_record['users_date']);
     $endTimeStamp = strtotime($today);

      $timeDiff = abs($endTimeStamp - $startTimeStamp);

      $years = floor($timeDiff / (365*60*60*24));
      $months = floor(($timeDiff - $years * 365*60*60*24) / (30*60*60*24));
      $diff = floor(($timeDiff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
      
    if($diff>=$days)
    {

        $insertwi=mysql_query("INSERT INTO `withdrawal`(`withdrawal_amount`, `withdrawal_date`,`users_name`,reg_bonus,ref_bonus) VALUES 
        ('$amt','$today','".$_SESSION['username']."','".$user_record['users_bonus']."','".$user_record['users_ref_bonus']."')");
   
$email=$user_record['users_email'];   
     
$sqlquery="SELECT  * FROM 6btb_setting "; //fetching website from databse
$rec2=mysql_query($sqlquery);
$row2 = mysql_fetch_array($rec2);
$wlink=$row2['setting_web']; //assigning website address
$sqlquery111="SELECT etext FROM emailtext where code='WITHDRAWL'"; //fetching website from databse
$rec2111=mysql_query($sqlquery111);
$row2111 = mysql_fetch_row($rec2111);

$emailtext=$row2111['etext']; //assigning email text for email     

$message=$emailtext;
$to=$email;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <no-reply@'.$wlink.'>' . "\r\n";
$subject=" ";
$message.="</b><br><br>";
mail($to,$subject,$message,$headers);
      
        
        
         	print "
				<script language='javascript'>
					window.location = 'withdrawl.php?sucess';
				</script>
			";       
    }else{
        
     	print "
				<script language='javascript'>
					window.location = 'withdrawl.php?fail';
				</script>
			";   
}
   }else {
   	
    	print "
				<script language='javascript'>
					window.location = 'withdrawl.php?already';
				</script>
			"; 	
   	}
   	}
}
?>
 <div ng-include="" src="'assets/tpl/partials/topnav.html'" class="ng-scope"><nav class="navbar navbar-default navbar-fixed-top ng-scope" ng-class="{scroll: (scroll>10)}">
  <div class="container-fluid">
    <div class="navbar-header pull-left">
      <button type="button" class="navbar-toggle pull-left m-15" data-activates=".sidebar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <ul class="breadcrumb">
        <li><a href="#/"><?php echo $settingresult['setting_title'];?></a></li>
        <li ng-bind="pageTitle" class="active ng-binding"> WITHDRWAL</li>
      </ul>
    </div>

 <div class="dropdown pull-right">
    <button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown"> 
    <i class="fa fa-ellipsis-v"></i>
</button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a href="userprofile.php" role="menuitem" tabindex="-1" href="#">Profile</a></li>

      <li role="presentation" class="divider"></li>
      <li role="presentation"><a href="logout.php" role="menuitem" tabindex="-1" href="#">Logout</a></li>    
    </ul>
  </div>


</nav>
</div>
      <div class="main-content ng-scope" autoscroll="true" ng-view="" bs-affix-target="">
<div class="page-content ng-scope">

<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 ">
				<section class="tabs-section">
	<?php 
	if(isset($_REQUEST['already'])) {
echo '<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong> </strong> already sent Request.
</div>';
		}elseif(isset($_REQUEST['fail'])) {
			$day_row=mysql_fetch_array(mysql_query("select * from with_setting where with_setting_id='1' ")); 
    $days= $day_row['with_setting_percentage'];
		echo '<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong> </strong> First withdrawl process will be take place after '.$days.'.or Insufficient Balance
</div>';
			
		}elseif(isset($_REQUEST['sucess'])) {
		echo '<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
<strong> </strong> Your Request Has been Place.
</div>';
			
		}else {
			
			
			}
	
	?>			
				
<div class="h">
  <h2>WITHDRWAL </h2>
  <div class="panel panel-primary">
    <div class="panel-heading">WITHDRAWL PANEL</div>
    <form method="post" action="">
    <div class="panel-body">
   
     <div class="form-group">
   <label ><h2>Total Bonus :<?php echo $total=$user_record['users_bonus']+$user_record['users_ref_bonus']; ?></h2>
         
         </label>
         
          
  </div>
  <div class="form-group">
  <?php 
$select=mysql_fetch_array(mysql_query("select * from packages where packages_id='".$user_record['users_package']."'"));
 $select['packages_after_days'];
 $new=date('Y-m-d', strtotime($user_record['users_date']. ' + '.$select['packages_after_days'].' days')) ;
//echo $new=date("Y-m-d");
if(date("Y-m-d")==$new) {
	?>
	 <button class="btn btn-black" type="submit" name="withdrawl">Withdrawl</button>  
	<?
	}else {
	?>
	<input type="hidden"  class="rem" value="<?php echo $new;?>">
	 <button class="btn btn-black remaining " type="button" name="">Withdrawl</button>  
	<?
		
		}
  ?>

  </div>
     

   
    </div>
    <div class="panel-footer">
    
    </div>
    </form>
  </div>

</div>
</section>


</div>
</div>
</div>
</div>


   
   </div>
   
   
    <?
      
      include  "footer.php";
      ?>

   <script type="text/javascript">
   $(".remaining").click(function () {
   	var val= $(".rem").val();
   	alert("This facility is avalible from "+val);
   });
   </script>
  