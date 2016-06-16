<?php
include_once ("z_db1.php");

$payid = $_GET["payid"];

$sql = "DELETE from attachment WHERE id=$payid";
if ($con_don->query($sql) === TRUE) { 
}
   
header('Location:payment_request.php');

?>