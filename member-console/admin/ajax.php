<?php
include("../include/config.php");
if(isset($_REQUEST['cpass']))
{
$cpass = md5($_REQUEST['cpass']);

 $sql1 = "SELECT * FROM scl_admin WHERE admin_id = '".$_SESSION['ADMINID']."'";
$s_res1 = mysql_query($sql1);
$result1 = mysql_fetch_array($s_res1);

if($result1['admin_password']== $cpass ){
echo 0;
}

else {
echo 1;

}
}

?>