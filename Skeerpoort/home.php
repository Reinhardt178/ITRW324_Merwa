<!DOCTYPE html>
<?php


include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>

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
              <a href="home.php">Home  </a>
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
	<a href="ULP95.html" class="btn btn-primary">Order</a>

	<div 
        <div 
          
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
<a href="Diesel_50ppm.html" onclick= "myProduct()" class="btn btn-primary">Order</a>
			
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
<a href="Diesel_500ppm.html" class="btn btn-primary">Order</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">&nbsp;</div>
      </div>
    </div>
    <hr>
<hr>
<div class="container">
  <div class="row text-right mt-4">
	<div class="col-md-4 pb-1 pb-md-0"> </div>
	<div class="col-md-4">&nbsp;</div>
	 
	  <i><?php echo $login_session; ?></i></b>
	  <a href="logout.php" class="btn btn-danger">LOG OUT</a>
	</div>
</div>
<hr>
    <div class="container text-white bg-dark p-4">
      <div class="row">
        <div class="col-6 col-md-8 col-lg-7"><img src="images/Untitled-2.jpg" width="300" height="156" alt=""/><strong></strong>
          <div class="row text-center">
<div class="col-sm-6 col-md-4 col-lg-4 col-12">
          <ul class="list-unstyled">
                <li class="btn-link" href= "http://www.sv1.co.za">  <a>http://www.sv1.co.za</a> </li>
          </ul>
            </div>
</div>
        </div>
        <div class="col-md-4 col-lg-5 col-6">
          <address>
            <strong>Skeerpoort Verspreiders</strong><br>
            <br>
            Potchefstroom, RSA, <br>
            <abbr title="Phone">Phone:</abbr> (083) 261 9735
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

