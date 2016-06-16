<?php
$host="localhost";
$user="root";
$pass="ELALIACH";
$db= "userwealth";
$conn=mysql_connect($host,$user,$pass);
mysql_select_db($db, $conn);

$baseurl = "http://localhost/paydae/member-console/";
$setting = "SELECT * FROM 6btb_setting";
$settingrow = mysql_query($setting);
$settingresult = mysql_fetch_array($settingrow);

//$dsn  = "mysql:host=$host;dbname=$db";
$prefix = '6btb_';
$admin = mysql_fetch_array(mysql_query("SELECT * FROM 6btb_admin"));
session_start();

function profile($name) {
	
			$imgg=mysql_fetch_array(mysql_query("select * from users where users_name='$name'"));
			return $imgg['users_image'];
	}



?>