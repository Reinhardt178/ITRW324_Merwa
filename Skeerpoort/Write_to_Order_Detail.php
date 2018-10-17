<?php
include"db_connection.php";
//echo $_GET["bignumber"];
$new_Qty_Liters = $_GET["bignumber"];
$sql = "INSERT INTO order_detail (ID_Order_Detail, OD_Date, OD_Qty_Ordered, Client_ID, Product_ID) VALUES('0', CURDATE(), '$new_Qty_Liters', '1', '1' )";
if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli->close();

?>
