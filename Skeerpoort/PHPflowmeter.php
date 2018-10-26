<?php
$data = $_GET['data'];
echo $data;
//Validate Your Data => if it is invalid => die();
// TODO
/*$servername = "localhost";
$username = "merwavok_admin";
$password = "123QWEasdzxc";
$dbname = "merwavok_Merwa";
// Create connection to mysql server
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
    die("Connection failed: " . $conn->connect_error);
$sql = "INSERT INTO nodemcu(myData, timeStamp) VALUES  ($data, now())";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();*/
?>



