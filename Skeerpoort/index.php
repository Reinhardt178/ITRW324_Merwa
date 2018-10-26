<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: home.php"); // Redirecting To Profile Page
}
?> 

<!DOCTYPE html>
<html>
<head>
  <title>Skeerpoort Verspreiders</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<body background="sv_login.jpg">
 <div id="login">
  <h2>Skeerpoort Verspreiders</h2>
  <form action="" method="post">
   <label>Email :</label>
   <input id="name" name="email" placeholder="email" type="text">
   <label>Password :</label>
   <input id="password" name="password" placeholder="**********" type="password"><br><br>
   <input name="submit" type="submit" value=" Login ">
   <span><?php echo $error; ?></span>
  </form>
 </div>
</body>
</html>