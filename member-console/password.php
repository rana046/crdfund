<?php
include '../include/connection.php';


if(isset($_REQUEST['rid'])) {
	
$rid = $_REQUEST['rid'];
	 $tid = $_REQUEST['tid'];

$select = selectfetch("*",$prefix.$tid," WHERE ".$tid."_position='".$_REQUEST['rid']."'");
echo $postion1 = $select[$tid.'_position'];


if($_REQUEST['old_index']<$_REQUEST['new_index']) {

	
$other = mysql_query("select * from ".$prefix.$tid." where ".$tid."_position = (select min(".$tid."_position) 
from ".$prefix.$tid." where ".$tid."_position > '$rid')");
$otherrow = mysql_fetch_array($other);
	
	} else if($_REQUEST['old_index']>$_REQUEST['new_index'] ) {
		
$other = mysql_query("select * from ".$prefix.$tid." where ".$tid."_position = (select max(".$tid."_position) 
from ".$prefix.$tid." where ".$tid."_position < '$rid')");
  $otherrow = mysql_fetch_array($other);
}

echo $postion2 = $otherrow[$tid.'_position'];



$update_main = array(
$tid.'_position' => $postion2
);
update($prefix.$tid,$update_main," WHERE ".$tid."_id='".$select[$tid.'_id']."'");


$update_next = array(
$tid.'_position' => $postion1
);
update($prefix.$tid,$update_next," WHERE ".$tid."_id='".$otherrow[$tid.'_id']."'");



}

?>