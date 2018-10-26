<?php
session_start();
function getPosts()  {
$Cemail = $_SESSION['login_user'];
$con=mysqli_connect("localhost","merwavok_admin","123QWEasdzxc","merwavok_Merwa");
if (mysqli_connect_errno()) {
    throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
}
//$mysqli = new mysqli("localhost", "root", "usbw", "test");
	$resulted = mysqli_query($con, "SELECT ID_Cleint FROM cleint WHERE C_Email = '$Cemail'");
    if(mysqli_num_rows($resulted) > 0) {
     $row = mysqli_fetch_assoc($resulted);
      $CleintId = $row['ID_Cleint'];
    }


    // Free result set
    mysqli_free_result($resulted);
	$con->close();
	include"db_connection.php";
//echo $_GET["bignumber"];
$productNr = $_GET["pnumber"];
$new_Qty_Liters = $_GET["bignumber"];
$sql = "INSERT INTO order_detail (ID_Order_Detail, OD_Date, OD_Qty_Ordered, Client_ID, Product_ID) VALUES('0', CURDATE(), '$new_Qty_Liters', '$CleintId', '$productNr')";
if ($mysqli->query($sql) === TRUE) {
		header('Location: success.php');
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
}
getPosts();
/*    mysqli_close($con);
if ($result = $mysqli->query("SELECT ID_Cleint WHERE C_Email = $Cemail FROM client")) {
    $CleintId = $result->num_rows;
	echo $CleintId;
    /* free result set */
   /* $result->close();
}else{ 
		echo "error";
		echo $Cemail;
}*/
//$result = mysqli_query($con,"SELECT ID_Cleint WHERE C_Email = $Cemail FROM client") or die(mysqli_error($con));
//$CleintId = mysqli_fetch_assoc($result);


//$CleintId = mysql_query("SELECT ID_Cleint WHERE C_Email = $Cemail FROM client");
//$result = mysql_fetch_array($price);


?>
