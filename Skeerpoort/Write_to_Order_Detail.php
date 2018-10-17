<?php
session_start();
$Cemail = $_SESSION['login_user'];
$host = "localhost";
$username = "root";
$user_pass = "usbw";
$database = "test";
$con=mysqli_connect("localhost","root","usbw","test");

$result = mysqli_query($con,"SELECT ID_Cleint WHERE C_Email = $Cemail FROM client") or die(mysqli_error($con));
$CleintId = mysqli_fetch_assoc($result);


//$CleintId = mysql_query("SELECT ID_Cleint WHERE C_Email = $Cemail FROM client");
//$result = mysql_fetch_array($price);
include"db_connection.php";
//echo $_GET["bignumber"];
$productNr = $_GET["pnumber"];
$new_Qty_Liters = $_GET["bignumber"];
$sql = "INSERT INTO order_detail (ID_Order_Detail, OD_Date, OD_Qty_Ordered, Client_ID, Product_ID) VALUES('0', CURDATE(), '$new_Qty_Liters', '$CleintId', '$productNr')";
if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli->close();

?>
