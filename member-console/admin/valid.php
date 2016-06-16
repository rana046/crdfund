<?php
include '../z_db.php';

if(isset($_REQUEST['id'])) {
	if($_REQUEST['id']=="") {
		echo $msg="";
	
		}else {
	$sql=mysql_query("select * from users where users_name='".$_REQUEST['id']."'");
	$count=mysql_num_rows($sql);
	if($count>0) {
		$msg="<span style='color:green;'>valid user name</span>";
		}else {
			
			$msg="<span style='color:red'>invalid user name</span> ";
			
			}
	
	echo $msg;
	}
	}
	
	if(isset($_REQUEST['id1'])) {
		if($_REQUEST['id1']=="") {
		echo $msg="";
	
		}else {
	$sql=mysql_query("select * from users where users_name='".$_REQUEST['id1']."'");
	$count=mysql_num_rows($sql);
	if($count>0) {
		$msg="<span style='color:red;'>   user name already exists</span>";
		}else {
			
			$msg="<span style='color:green'>valid user name</span> ";
			
			}
	
	echo $msg;
	}
	}
	
	
if(isset($_REQUEST['check'])) {
	$sql=mysql_query("select * from users where users_name='".$_REQUEST['id']."'");
	$count=mysql_num_rows($sql);
	if($count>0) {
		$msg="true";
		}else {
			
			$msg="false ";
			
			}
	
	echo $msg;
	}
	
	if(isset($_REQUEST['check1'])) {
	$sql=mysql_query("select * from users where users_name='".$_REQUEST['id1']."'");
	$count=mysql_num_rows($sql);
	if($count>0) {
		$msg="false";
		}else {
			
			$msg="true";
			
			}
	
	echo $msg;
	}
	
?>