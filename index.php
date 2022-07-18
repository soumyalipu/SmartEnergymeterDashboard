<?php
    include("connection.php");
	  include("function.php");

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php headContent("Home");?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#"><b>Energy Meter</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-light" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="login.php">SignIn</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="signup.php">SignUp</a>
      </li>
 
    </ul>
  </div>
</nav>
  <!-- /.navbar -->
  
  
    <div class="jumbotron jumbotron-fluid text-center">
      <div class="container">
        <h1 class="display-4">ENERGY METER</h1>
        <div class="pull-right welcome_ministry">
            <h3 class="text-orange">"Energy sector plays a big role in the progress</h3>
            <h3 class="text-orange">of the country and contributes to both ease of</h3>
            <h3 class="text-orange">living and ease of doing business".</h3>
            <p>&nbsp;</p>
            <h4 class="text-green"><a href="https://pmindia.gov.in/" style="font-weight: bold; font-size: 1.154em;" target="_blank">Shri Narendra Modi</a></h4>
            <h5 class="text-green"><span>(Hon'ble Prime Minister of India)</span></h5>
        </div>
      </div>
    </div>
  
  <div class="row">
    <div class="col-1"></div>
    <div class="card-deck col-10">
        <div class="card">
          <div class="card-header">Header</div>
          <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card">
          <div class="card-header">Header</div>
          <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card">
          <div class="card-header">Header</div>
          <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
    </div>
    <div class="col-1"></div>
</div>
  

   <div class="footer-copyright fixed-bottom bg-secondary text-center p-1">© 2020 Copyright:
    <a href="#"> EM</a>
  </div>




   <?php scriptTags() ?>
</body>
</html>