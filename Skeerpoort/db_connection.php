<?php
//"merwavok_admin","123QWEasdzxc","merwavok_Merwa"
$host = "localhost";
$username = "merwavok_admin";
$user_pass = "123QWEasdzxc";
$database = "merwavok_Merwa";

$mysqli = new mysqli($host, $username, $user_pass, $database);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";


?>
