<?php

$host = "localhost";
$username = "root";
$user_pass = "usbw";
$database = "test";

$mysqli = new mysqli($host, $username, $user_pass, $database);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";


?>
