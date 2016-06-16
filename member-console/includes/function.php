<?php
function settings($field)
{
	return getvalue("$field","settings");
}

function files($f,$para)
{
	return $_FILES[$f][$para];
}

function post($f)
{
	return $_POST[$f];
}
function get($f)
{
	return $_GET[$f];
}

function request($f)
{
	return $_REQUEST[$f];
}
function session($f)
{
	return $_SESSION[$f];
}

function msg($msg,$type='success')
{
	if(isset($msg))
	{
	 		echo '<p class="info" id="'.$type.'"><span class="info_inner">'.$msg.'</span></p>';		
	}
}
function selected($val1,$val2)
{
	if($val1 == $val2)
	{
		return 'selected';
	}	
}

function checked($val1,$val2)
{
	if($val1 == $val2)
	{
		return 'checked';
	}	
}

function checksession($uname,$loc)
{
	if(!isset($_SESSION[$uname]))
	{
	header("location:$loc");
	exit;
	}
}


function checklogin($email,$password,$table)
{
global $prefix;
 $dbuname = getvalue($table."_email",$prefix.$table," WHERE ".$table."_email = '$email' AND ".$table."_password='$password'");
$dbpass  = getvalue($table."_password",$prefix.$table," WHERE " .$table."_email = '$email' AND ".$table."_password='$password'");
if( ($email == $dbuname) and ($password == $dbpass))
{
		return true;
	}
	else
	{
		return false;
	}
}


//get value from table //
function getvalue($field, $table, $condition)
{
include_once 'config.php';
	$q = mysql_query("select $field from $table $condition") or die(mysql_error());
	$row = mysql_fetch_assoc($q);
	return $row[$field];
}

function insert($table,$data)
{
	$fields="";
	$values = "";
	foreach($data as $key => $val)
	{
		$fields.=$key.',';
		$values.="'".$val."',";
	}
	$fields = substr($fields,0,strlen($fields)-1);
	$values = substr($values,0,strlen($values)-1);
	
	$q = mysql_query("insert into $table ($fields) values($values)") or die("Insert Error.".mysql_error());
	return mysql_insert_id();
}

function update($table,$data,$condition="")
{
	$fields="";
	$values = "";
	foreach($data as $key => $val)
	{
		$fields.=$key."='".$val."',";
	}
	$fields = substr($fields,0,strlen($fields)-1);
	
	$q = mysql_query("update $table set $fields $condition")or die("Update Error.".mysql_error());
	if($q)
	{
	return $q;
	}
}

function delete($table,$condition)
{
	$q = mysql_query("delete from $table $condition")or die("Delete Error.".mysql_error());
	if($q)
	{
	return $q;
	}
}
function selectfetch($fields="*",$table,$condition="")
{
	
	$q = mysql_query("select $fields from $table $condition") or die("Select Error.".mysql_error());
	$r = mysql_fetch_array($q);
	return $r;
}

function select($fields,$table,$condition="")
{
$q = mysql_query("select $fields from $table $condition") or die("Select Query Error.".mysql_error());
	
	return $q;
}


function countq($fields,$table,$condition="")
{
$count=mysql_fetch_row(mysql_query("select count( $fields ) from $table $condition "));
return $count[0];
}
//upload files//

function loc($page)
{
	header("location:$page");
	exit;
}


function cmslink($link,$fld)
{


$page_link=mysql_query("select * from cmslinks where link='$link' AND status=1");

$page_link_val = mysql_fetch_array($page_link);
return $page_link_val[$fld];
}
function projects($link,$fld)
{


$page_link=mysql_query("select * from project where status=1");

$page_link_val = mysql_fetch_array($page_link);
return $page_link_val[$fld];
}

function content($link)
{


$page_link=mysql_query("select * from cmslinks where link='$link' AND status=1");
if(mysql_num_rows($page_link)<=0)
{
	$page_link=mysql_query("select * from services where link='$link' AND status=1");
}
$page_link_val = mysql_fetch_array($page_link);
return $page_link_val[$fld];
}

function services($link,$fld)
{


$page_link=mysql_query("select * from services where link='$link' AND status=1");

$page_link_val = mysql_fetch_array($page_link);
return $page_link_val[$fld];
}

function sanitizeString($var)
{
$var=strip_tags($var);
$var=htmlentities($var);
$var=stripslashes($var);
return mysql_real_escape_string($var);
}

function queryMysql($query)
{
$result=mysql_query($query) or die(mysql_error());
return $result;
}


function destroySession()
{
$_SESSION=array();
if(session_id()!="" || isset($_COOKIE[session_name()]))
setcookie(session_name(), '', time()-25920000,'/');

session_destroy();
}


function total($price,$quantity)
{
$total = $price*$quantity;
return $total;
}

function sum($acc, $n) {
    $acc = 0;
    foreach (func_get_args() as $n) {
        $acc += $n;
    }
    return $acc;
}

function less_amount($amount,$cost)
{
$less_amount = $amount-$cost;
return $less_amount;
}	

function lastlogin($id)
{
global $prefix,$user_table;
$udata = array(
$user_table.'_lastlogin' => date('Y-m-d H:i:s')
);
$up = update($prefix.$user_table,$udata," WHERE ".$user_table."_uid = '$id'");
return $up;
}

?>