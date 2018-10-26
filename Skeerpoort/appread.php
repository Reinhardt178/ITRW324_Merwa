<?php
$servername = "localhost";
$username = "merwavok_admin";
$password = "123QWEasdzxc";
$dbname = "merwavok_Merwa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT myData FROM nodemcu WHERE nodemcu_ID=(SELECT MAX(nodemcu_ID) FROM nodemcu)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["myData"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
