<?php


session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "Email or Password is invalid";
}
else
{
// Define $username and $password
$username = $_POST['email'];
$password = $_POST['password'];
$_SESSION['Cemail'] = $username;
// mysqli_connect() function opens a new connection to the MySQL server.
$host = "localhost";
$usernameSQl = "merwavok_admin";
$user_pass = "123QWEasdzxc";
$database = "merwavok_Merwa";
//"merwavok_admin","123QWEasdzxc","merwavok_Merwa"
//$mysqli = new mysqli($host, $username, $user_pass, $database);

$conn = mysqli_connect($host, $usernameSQl, $user_pass, $database);

$resulted = mysqli_query($conn, "SELECT C_Email, C_Password from cleint where C_Email='$username' AND C_Password='$password' LIMIT 1  ");
    if(mysqli_num_rows($resulted) > 0) {
    $_SESSION['login_user'] = $username; // Initializing Session
          header("location: home.php");// Redirecting To Profile Page
} else {
    $error = "Username or Password is invalid";
}
// SQL query to fetch information of registerd users and finds user match.
/*$query = "SELECT C_Email, C_Password from client where C_Email=? AND C_Password=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
//$stmt->bind_param("ss", $username, $password);
$stmt->execute();
//$stmt->bind_result($username, $password);
$stmt->store_result();

if($stmt->fetch()) //fetching the contents of the row
        {
          $_SESSION['login_user'] = $username; // Initializing Session
          header("location: home.php"); // Redirecting To Profile Page
        }
else {
       $error = "Username or Password is invalid";
     }*/
mysqli_close($conn); // Closing Connection
}
}
?>

