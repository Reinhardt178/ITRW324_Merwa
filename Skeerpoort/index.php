<!DOCTYPE html>


<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Skeerpoort Verspreiders</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a href="index.php">Home  </a>
            </li>
            <li class="nav-item">
				<li> -   </li>
              <a href="Contact_us.html">Contact Us  </a>
            </li>
            <li class="nav-item">
              <li> -   </li>
              <a href="About Us.html">About Us  </a>
            </li> 
          </ul>
</div>
      </div>
    </nav>
    <div class="container mt-3">
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleControls" data-slide-to="1"></li>
              <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/nightshots_023.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block"> </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/unnamed.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block"> </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/1393432904359.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block"> </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <hr>
    </div>
<hr>
    <h2 class="text-center">PRODUCTS</h2>
    <hr>
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/ulp95.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">ULP 95</h5>
 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#popUpWindow95">Order</button>
	<div class="modal fade" id="popUpWindow95">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Log In</h3>
                </div>

                <!-- body (form) -->
                <div class="modal-body">
                    
                        <div class="form-group">
                            <input class="form-control" type="email" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                        </div>
					 <button class="form-group" type="submit" onclick="function ULP95_login" name="login">Sign in</button>
					<script function ULP95_login(){
						$product = "95";
						$rdirect = "ULP95.html";
						
					}></script>
                </div>

 
					

            </div>
        </div>
    </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/ulp93 copy.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">ULP 93</h5>
<a href="UPL93.html" class="btn btn-primary">Order</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/50ppm.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Diesel 50ppm</h5>
<a href="#" class="btn btn-primary">Order</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center mt-4">
<div class="col-md-4 pb-1 pb-md-0"> </div>
        <div class="col-md-4 pb-1 pb-md-0">
          <div class="card">
            <img class="card-img-top" src="images/500ppm.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Diesel 500ppm</h5>
<a href="#" class="btn btn-primary">Order</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
<hr>
<hr>
    <div class="container text-white bg-dark p-4">
      <div class="row">
        <div class="col-6 col-md-8 col-lg-7"><img src="images/Untitled-2.jpg" width="300" height="156" alt=""/><strong></strong>
          <div class="row text-center">
<div class="col-sm-6 col-md-4 col-lg-4 col-12">
          <ul class="list-unstyled">
                <li class="btn-link"> <a>http://www.sv1.co.za</a> </li>
          </ul>
            </div>
</div>
        </div>
        <div class="col-md-4 col-lg-5 col-6">
          <address>
            <strong>Skeerpoort Verspreiders</strong><br>
            <br>
            Potchefstroom, RSA, <br>
            <abbr title="Phone">P:</abbr> (083) 261 9735
          </address>
</div>
      </div>
    </div>
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

<?php

include "db_connection.php";
IF(ISSET($_POST['login'])){
$email = $_POST['email'];
	echo($email);
$password = $_POST['password'];
$cek = mysql_num_rows(mysql_query("SELECT * FROM client WHERE C_Email='$email' AND C_Password='$password'"));
IF($cek > 0)
{
 echo "<script language=\"javascript\">alert(\"welcome \");document.location.href='$rdirect';</script>";
}else{
echo "<script language=\"javascript\">alert(\"Invalid username or password\");document.location.href='index.php';</script>";
}
}
?>
