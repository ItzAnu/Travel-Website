<?php 

  include 'koneksi.php';
  session_start();

  if ($_SESSION['name'] == '') {
    header("location: login.php");
  }


 ?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="iketpesan.css">
    <link rel="stylesheet" type="text/css" href="css/font-aweasome.min.css">
    <link rel="stylesheet" href="file:///D:/HTML/anying/fontawesome-free-5.12.1-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-5.12.1-web/css/all.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-light bg-light nav-nying">
        <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse nav-1" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="memberpage.php">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Hotels Ticket <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Train Ticket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Plane Ticket</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Paket Terserah!
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-log">
              <a class="nav-link " href="login.php" tabindex="-1" >
                <?php
                  echo $_SESSION['name'];
                  echo " | ";
                  echo $_SESSION['rank']; 
                ?>
              </a>
            </li>
          </ul>
        </div>
      </nav>
  <!-- Akhir Navbar -->

<!-- corosal -->
  <div id="slider">
    <figure>
      <img src="img/beratan.jpg" style="width:20%; height:500px;">
    </figure>
    <figure>
      <img src="img/garuda.jpg" style="width:20%; height:500px;">
    </figure>
    <figure>
      <img src="img/kuta.jpg" style="width:20%; height:500px;">
    </figure>
    <figure>
      <img src="img/slwsi.jpg" style="width:20%; height:500px;">
    </figure>
    <figure>
      <img src="img/jakarta.jpg" style="width:20%; height:500px;">
    </figure>
  </div>
<!-- corosal -->

<!-- jumbotron -->
  <div class="jumbotron">
    <div class="isijumb">
      <h3><i class="fas fa-bed bed"></i>Online Cheap Hotel Reservations at Promo Prices <span><a href="">Last Search <i class="fas fa-chevron-right"></i></a></span></h3>
      <div class="booking">
        
      </div>
    </div>
  </div>


<!-- akhir jumbotron -->



    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="file:///D:/HTML/anying/fontawesome-free-5.12.1-web/js/all.js"> 
  </body>
</html>