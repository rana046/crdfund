<?
include("z_db.php");
if(isset($_REQUEST['package'])) {
	$field="packages_".$_REQUEST['field'];
	$sql=mysql_fetch_array(mysql_query("select $field from packages where packages_id='".$_REQUEST['package']."'"));
    $val=$sql[$field]	;
   echo $val;
	}
	?>