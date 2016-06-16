<?php
//$con_don = new mysqli("localhost", "root", "", "paydaeco_don_list");
$con_don = new mysqli("localhost", "root", "ELALIACH", "userwealth");
if ($con_don->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>