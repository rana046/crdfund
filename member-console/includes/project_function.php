<?php

function rotationalReferal() {
	// Function for giving day wise referal bonus .

	 $today=date("d-m-Y");
	$sql=mysql_query("select * from users"); //select all user 	
while($row=mysql_fetch_array($sql)) {
		$re_setting=mysql_fetch_array(mysql_query("select * from packages where packages_id='".$row['users_package']."' "));
	 $day=$re_setting['packages_days'];
	 $bonus_per=$re_setting['packages_rotation_per'];
	//echo $row['users_ref_bonus'];
	if(!empty($row['users_bonus'])) {	//if user has referal bonus
	// "not empty <br>past ";
	 $bonus=$row['users_bonus'];
	 $per_bonus=($bonus*$bonus_per)/100;
	 $new_bonus=$per_bonus+$bonus;

      $past=$row['users_ref_date'];
      // echo "<br> d ";
      $diff=abs(strtotime($today)-strtotime($past));
    $years = floor($diff / (365*60*60*24));
   $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
   $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
   // echo "<br>days ";
  
    if($days>=$day) {  // if difference between two dates is equal or greater than referal bonus day .
 
    $new_date = date("d-m-Y",strtotime(date("Y-m-d", strtotime($past)) . " +".$day."days")); // add days to past date
   
    
    $update =mysql_query("update users set users_ref_date= '$new_date', users_bonus='$new_bonus' where users_id='".$row['users_id']."'");
		$region="Rotation Bonus";
	$insert =mysql_query("insert into report (users_id, report_reg_bonus, report_region) values 
	('".$row['users_id']."','$per_bonus','$region') ");
    	
    	} // if diff end 
}// if  end  
} //while end 
}//function end 



function chkstatus($status)
{	global $TEXT;
	if($status=='1')
	{
		$st='<span class="label label-success" style="font-size:16px;">Active</span>';
	

}
else {
		$st='<span class="label label-danger" style="font-size:16px;">Deactive</span>';
	}
return $st;
}
function grade($status)
{	global $TEXT;
	if($status=='1')
	{
		$gr='<span>Senior</span>';
	

}
else {
		$gr='<span>Junior</span>';
	}
return $gr;
}


function fetchdetail($table, $value){
	global $prefix;
	$sql = selectfetch("*",$prefix.$table," WHERE ".$table."_id='$value'");
	return $sql;
}

function gameresult($value){
	switch($value) {
		case 1:
		$st = "Pending";
		break;
		
		case 2:
		$st = "Win";
		break;
		
		case 3:
		$st = "Lose";
		break;
		
		case 4:
		$st = "Tie";
		break;
		}
		return $st;
}

function countitem($table,$item,$value) {
	global $prefix;
	$sql = countq("*",$prefix.$table," WHERE ".$table.$item."='$value'");
	return $sql;
}

function selectinfo($table,$item,$value) {
	global $prefix;
	$sql = selectfetch("*",$prefix.$table," WHERE ".$table.$item."='$value'");
	return $sql;
}



function result($r_status)
{	global $TEXT;
	if($r_status=='1')
	{
		$result='<span>Pending</span>';
	

}
	if($r_status=='2'){
		$result='<span>Win</span>';
	}
	
	if($r_status=='3'){
			$result='<span>Lose</span>';
	}
	
	if($r_status=='4'){
					$result='<span>Tie</span>';
		
		}
		
return $result;
}

?>