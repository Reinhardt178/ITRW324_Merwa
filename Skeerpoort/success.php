<?php


include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Success</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Success</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a href="home.php">  Home  </a>
            </li>
            <li class="nav-item">
			<li> -   </li>
              <a href="Contact_us.html">  Contact Us  </a>
            </li>
            <li class="nav-item">
			<li> -   </li>
              <a href="About Us.html">  About Us  </a>
            </li>
          </ul>
</div>
      </div>
    </nav>
<hr>
 <div class="container mt-3">
      <div class="row"> </div>
      <hr>
    </div>
<h2 class="text-center">ORDER WAS PLACED SUCCESSFULLY</h2>
<div class="container">
  <div class="row text-right mt-4">
	<div class="col-md-4 pb-1 pb-md-0"> </div>
	<div class="col-md-4">&nbsp;</div>
	 
	  <i><?php echo $login_session; ?></i></b>
	  <a href="logout.php" class="btn btn-danger">LOG OUT</a>
	</div>
</div>
<hr>
<footer class="text-center">
  <div class="container">
        <div class="row">
          <div class="col-12">
            <p>Copyright © Skeerpoort Verspreiders. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>