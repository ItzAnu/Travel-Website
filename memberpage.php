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
    <link rel="stylesheet" type="text/css" href="memberpage.css">
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
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tikethotel.php">Hotels Ticket</a>
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


  <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Let's Travel The World Together!</h1>
    <p class="lead">Find awesome hotel, tour, car and activities in the world</p>
    <div class="search">
      <h1>Hey, You!</h1>
      <h2>Where are you going to?</h2>
      <div class="input">
        <select>
          <option>choose your destination!</option>
          <option>Amerika</option>
          <option>Afrika</option>
          <option>Kutub Utara</option>
          <option>Korea Utara</option>
          <option>Indonesia</option>
        </select>
        <select>
          <option>choose the city</option>
          <option>New York</option>
          <option>Jakarta</option>
          <option>Denpasar</option>
          <option>Surabaya</option>
        </select>
        <select>
          <option>Select your gender</option>
          <option>Male</option>
          <option>Female</option>
        </select>
       <input type="date" name="tanggal">
       <button>Search</button>
      </div>
    </div>
  </div>
    </div>
<!-- Akhir Jumbotron -->



<!-- Info Panel -->
    <div class="panel">
      <div class="panel-fig">
        <figure>
          <img src="img/plane.png">
          <h4>Fast Plane</h4>
          <p>Lorem Ipsum Deler Sit Amet</p>
        </figure>
        <figure>
          <img src="img/car.png">
          <h4>Safe Car</h4>
          <p>Lorem Ipsum Deler Sit Amet</p>
        </figure>
        <figure>
          <img src="img/hotel.png">
          <h4>Comfort Hotel</h4>
          <p>Lorem Ipsum Deler Sit Amet</p>
        </figure>
        <figure>
          <img src="img/employee.png">
          <h4>24 Hours</h4>
          <p>Lorem Ipsum Deler Sit Amet</p>
        </figure>
      </div>
    </div>
<!-- Akhir Jumbotron -->



<!-- Top Destination -->
    <div class="top-body" align="center">
      <div class="top-fig">
        <h1 style="font-family: Century Gothic; font-weight: bold; ">Top Destination</h1>
        <hr color="blue">
      </div>
      <div class="top-img">
        <figure><a href="#">
          <img src="img/ny1.jpg">
          <p>New York</p>
          <hr width="70" color="white">
        </figure></a>
        <figure><a href="#">
          <img src="img/bali1.jpg">
          <p>Bali</p>
           <hr width="70" color="white">
        </figure></a>
      </div>
      <div class="top-img1">
        <figure><a href="#">
          <img src="img/klmtan.jpg">
          <p>Kalimantan</p>
           <hr width="70" color="white">
        </figure></a>
        <figure><a href="#">
          <img src="img/slwsi.jpg">
          <p>Sulawesi</p>
           <hr width="70" color="white">
        </figure></a>
        <figure><a href="#">
          <img src="img/smtra.jpg">
          <p>Sumatra</p>
           <hr width="70" color="white">
        </figure></a>
        <figure><a href="#">
          <img src="img/lombok2.jpg">
          <p>Lombok</p>
           <hr width="70" color="white">
        </figure></a>
      </div>
    </div>
<!-- Akhir Destination -->


<!-- trending -->
  <div class="trending-contain" align="center">
      <h1 style="font-family: Century Gothic; font-weight: bold; ">Trending</h1>
      <hr color="blue">
        <div class="menu-trending">
          <ul>
            <li><a href="#" class="current1">Tours</a></li>
            <li><a href="#">Hotels</a></li>
            <li><a href="#">Activity</a></li>
            <li><a href="#">Car</a></li>
            <li><a href="#">Flights</a></li>
          </ul>
        </div>
            <div class="trending-fig">
              <figure>
                <img src="img/tamanuj.png">
                <p class="feat">Featured</p>
                <p class="disc">%25</p>
                <p class="price">From <span>IDR 900.000</span></p>
                <p class="location"><a href=""><i class="fas fa-map-marker-alt"></i>Karangasem, Bali</a></p>
                <p class="lorem">Lorem ipsum dolor sit amet, </p> 
                <p class="lorem2">consectetur adipisicing.</p>
                <p class="rate"><img src="img/5rate.png">1999 Reviews</p>
                <p class="time"><i class="far fa-clock"></i>3 Hours 45 Minutes</p>
              </figure>
              <figure>
                <img src="img/tirta.jpg">
                <p class="disc2">%25</p>
                <p class="tour1">Multi-day Tours</p>
                <p class="price">From <span>IDR 1.000.000</span></p>
                <p class="location"><a href=""><i class="fas fa-map-marker-alt"></i>Karangasem, Bali</a></p>
                <p class="lorem">Lorem ipsum dolor sit amet, </p> 
                <p class="lorem2">consectetur adipisicing.</p>
                <p class="rate"><img src="img/5rate.png">1999 Reviews</p>
                <p class="time"><i class="far fa-clock"></i>3 Hours 45 Minutes</p>
              </figure>
              <figure>
                <img src="img/monkey.jpg">
                <p class="tour1">Attraction Tickets</p>
                <p class="price">From <span>IDR 850.000</span></p>
                <p class="location"><a href=""><i class="fas fa-map-marker-alt"></i>Karangasem, Bali</a></p>
                <p class="lorem">Lorem ipsum dolor sit amet, </p> 
                <p class="lorem2">consectetur adipisicing.</p>
                <p class="rate"><img src="img/5rate.png">1999 Reviews</p>
                <p class="time"><i class="far fa-clock"></i>3 Hours 45 Minutes</p>
              </figure>
              <figure>
                <img src="img/garuda.jpg">
                <p class="tour1">Cultural Tours</p>
                <p class="price">From <span>IDR 700.000</span></p>
                <p class="location"><a href=""><i class="fas fa-map-marker-alt"></i>Karangasem, Bali</a></p>
                <p class="lorem">Lorem ipsum dolor sit amet, </p> 
                <p class="lorem2">consectetur adipisicing.</p>
                <p class="rate"><img src="img/5rate.png">1999 Reviews</p>
                <p class="time"><i class="far fa-clock"></i>3 Hours 45 Minutes</p>
              </figure>
            </div>
        </div>
            <div class="trending-fig" align="center">
              <figure>
                <img src="img/tanahlot.jpg">
                <p class="feat">Featured</p>
                <p class="disc">%25</p>
                <p class="price">From <span>IDR 600.000</span></p>
                <p class="location"><a href=""><i class="fas fa-map-marker-alt"></i>Karangasem, Bali</a></p>
                <p class="lorem">Lorem ipsum dolor sit amet, </p> 
                <p class="lorem2">consectetur adipisicing.</p>
                <p class="rate"><img src="img/5rate.png">1999 Reviews</p>
                <p class="time"><i class="far fa-clock"></i>3 Hours 45 Minutes</p>
              </figure>
              <figure>
                <img src="img/bajra.jpg">
                <p class="disc2">%25</p>
                <p class="tour1">Multi-day Tours</p>
                <p class="price">From <span>IDR 500.000</span></p>
                <p class="location"><a href=""><i class="fas fa-map-marker-alt"></i>Karangasem, Bali</a></p>
                <p class="lorem">Lorem ipsum dolor sit amet, </p> 
                <p class="lorem2">consectetur adipisicing.</p>
                <p class="rate"><img src="img/5rate.png">1999 Reviews</p>
                <p class="time"><i class="far fa-clock"></i>3 Hours 45 Minutes</p>
              </figure>
              <figure>
                <img src="img/greencanyon.jpg">
                <p class="tour1">Attraction Tickets</p>
                <p class="price">From <span>IDR 450.000</span></p>
                <p class="location"><a href=""><i class="fas fa-map-marker-alt"></i>Karangasem, Bali</a></p>
                <p class="lorem">Lorem ipsum dolor sit amet, </p> 
                <p class="lorem2">consectetur adipisicing.</p>
                <p class="rate"><img src="img/5rate.png">1999 Reviews</p>
                <p class="time"><i class="far fa-clock"></i>3 Hours 45 Minutes</p>
              </figure>
              <figure>
                <img src="img/beratan.jpg">
                <p class="tour1">Attraction Tickets</p>
                <p class="price">From <span>IDR 250.000</span></p>
                <p class="location"><a href=""><i class="fas fa-map-marker-alt"></i>Karangasem, Bali</a></p>
                <p class="lorem">Lorem ipsum dolor sit amet, </p> 
                <p class="lorem2">consectetur adipisicing.</p>
                <p class="rate"><img src="img/5rate.png">1999 Reviews</p>
                <p class="time"><i class="far fa-clock"></i>3 Hours 45 Minutes</p>
              </figure>
            </div>
  </div>

<!-- akhir trending -->


<!-- informasi -->
  <div class="inform">
    <div class="inform-1" align="center">
      <h1>Travel Tips</h1>
      <h2>Travel savviness is a process born of missed buses, foolish behavior, cultural unawareness, and countless tiny errors. Then, one day, you begin to seamlessly move through airports and integrate yourself into new cultures like a fish to water.</h2>
      <button>Book Now</button>
    </div>
  </div>
<!-- Akhir informasi -->


<!-- choose -->
  <div class="choose" align="center">
    <h1 style="font-family: Century Gothic; font-weight: bold; ">Why Choose</h1>
    <hr color="blue">
    <div class="choose-1">
      <figure>
        <img src="img/price2.png">
        <h3>Competitive Pricing</h3>
        <h4>Lorem ipsum dolor sit.</h4>
        <h4>Lorem ipsum dolor sit amet,</h4>
      </figure>
      <figure>
        <img src="img/awars.png">
        <h3>Award Winning-Service</h3>
        <h4>Lorem ipsum dolor sit.</h4>
        <h4>Lorem ipsum dolor sit amet,</h4>
      </figure>
      <figure>
        <img src="img/world.png">
        <h3>World Coverage</h3>
        <h4>Lorem ipsum dolor sit.</h4>
        <h4>Lorem ipsum dolor sit amet,</h4>
      </figure>
    </div>
  </div>
<!-- akhir choose -->



  <div class="hr-1">
    <hr color="blue">
  </div>


<!-- top deal -->
  <div class="top-deal" align="center">  
    <h1 style="font-family: Century Gothic; font-weight: bold; ">Attractions</h1>
    <hr color="blue">  
    <div class="deal-fig">  
        <figure>
         <a href="#"><img src="img/empire.jpg">
          <p>Empire State</p></a>
        </figure>
        <figure>
          <a href="#"><img src="img/eiffel.jpg">
          <p>Eiffel Tower</p></a>
        </figure>
        <figure>
          <a href="#"><img src="img/vacitan1.jpg">
          <p>Vacitan Statue</p></a>
        </figure>
        <figure>
          <a href="#"><img src="img/famillia.jpg">
          <p>Famillia City</p></a>
        </figure>
    </div>
    <div class="deal-fig">
        <figure>
          <a href="#"><img src="img/khalifa.jpg">
          <p>Burj Khalifa</p></a>
        </figure>
        <figure>
          <a href="#"><img src="img/vangog.jpg">
          <p>Gogh Museum</p></a>
        </figure>
        <figure>
         <a href="#"><img src="img/san.jpg">
          <p>Panda Zoo</p></a>
        </figure>
        <figure>
          <a href="#"><img src="img/statue.jpg">
          <p>Liberty Statue</p></a>
        </figure>
    </div>

  </div>




<!-- akhir deal -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="file:///D:/HTML/anying/fontawesome-free-5.12.1-web/js/all.js">
  </body>
</html>