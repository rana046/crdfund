<?php
//$con_don = new mysqli("localhost", "root", "", "paydaeco_don_list");
$con = new mysqli("localhost", "root", "ELALIACH", "userwealth");
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>