<?php
//$con_don2 = new mysqli("localhost", "root", "", "paydaeco_userwealth");
$con_don2 = new mysqli("localhost", "root", "ELALIACH", "userwealth");
if ($con_don2->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>