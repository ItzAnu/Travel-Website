<?php 

  include 'koneksi.php';
  session_start();

  if ($_SESSION['name'] == '') {
    header("location: login.php");
  }


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>edit tiket</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="edittiket.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-aweasome.css">
	<link rel="stylesheet" href="file:///D:/HTML/anying/fontawesome-free-5.12.1-web/css/all.css">
	<link rel="stylesheet" href="fontawesome-free-5.12.1-web/css/all.css">
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
              <a class="nav-link" href="adminpage.php">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Edit tickets <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Edit Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Edit Page</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Edit Tujuan</a>
            </li>
            <li class="nav-log">
              <a class="nav-link " href="logotproses.php" tabindex="-1" >
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

  <!-- Edit Ticket -->
</body>
</html>