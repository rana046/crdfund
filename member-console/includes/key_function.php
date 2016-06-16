<?php

function strcompare($str1,$str2)
{
	
$str = strcmp($str1,$str2);
return $str;	
	}


function encrypt_decrypt($key,$val)
{
	
switch($key){
	
case "encrypt":
$return = encode($val);
return $return;
break;

case "decrypt":
$return = decode($val);
return $return;
break;
	}	
	
}

function encode($val)
{
$data = convert_uuencode($val);
$res =strrev($data);	
$encode = rot(base64_encode($res));
return $encode;	
}
	
	
function decode($val)
{
$data = base64_decode(rot($val));
$res = strrev($data);
$decode = convert_uudecode($res);	
return $decode;	
}
	
	
function rot($eval)
{	
$rot = str_rot13($eval);
return $rot;	
}	


function generatepass($val)
{
$data = date("is"). strtoupper(substr($val,0,2)). rand(1000,9999);
return $data;
}	


function generatekey($key,$val)
{
	
switch($key)	
	{
case "secret" :
$convert = time().rand(1000,9999999);
$data = strtoupper(md5($convert));
return $data;
break;

case "access" :

$convert = $val. rand(100000,999999) ."leadsquared"; 

$data = encode($convert);

return $data;
break;

}


}



function check_password($table,$password,$id)
{

global $prefix;
$count = countq("*",$prefix.$table," WHERE ".$table."_id='$id' AND ".$table."_password='".$password."'");

return $count;
}


?>



