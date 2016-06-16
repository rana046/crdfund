<?php
session_start();
$host="localhost";
$user="push4u_ceon";
$pass="ceon123";
$db= "push4u_6btb";
$conn=mysql_connect($host,$user,$pass);
mysql_select_db($db, $conn);

$baseurl = "http://dvalve.org/6btb/";
$setting = "SELECT * FROM 6btb_setting";
$settingrow = mysql_query($setting);
$settingresult = mysql_fetch_array($settingrow);
//$dsn  = "mysql:host=$host;dbname=$db";

$admin = mysql_fetch_array(mysql_query("SELECT * FROM 6btb_admin"));
$prefix = '6btb_';
 
?>