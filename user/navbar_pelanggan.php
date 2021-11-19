<?php
  session_start();
  if ($_SESSION['status_login'] != true) {
    header('location:login_petugas.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <!-- <nav class="navbar navbar-dark bg-dark shadow-sm navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Plainwater</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
      aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="home_pelanggan.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profil.php">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transaksi.php">Transaksi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="proses_logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->
  <div class="b-example-divider"></div>

<header>
  <div class="px-3 py-2 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
          <img class="bi me-2" width="200" role="img" src="logos/okesop.png">
        </a>

        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
          <li>
            <a href="home_pelanggan.php" class="nav-link text-white">
            <img class="bi d-block mx-auto mb-1" src="logos/home (1).png" width="24" height="24">
              Home
            </a>
          </li>
          <li>
            <a href="cart.php" class="nav-link text-white">
            <img class="bi d-block mx-auto mb-1" src="logos/shopping-cart.png" width="24" height="24">
              Cart
            </a>
          </li>
          <li>
            <a href="transaksi.php" class="nav-link text-white">
            <img class="bi d-block mx-auto mb-1" src="logos/money.png" width="24" height="24">
              Check Out
            </a>
          </li>
          <li>
            <a href="profil.php" class="nav-link text-white">
            <img class="bi d-block mx-auto mb-1" src="logos/user.png" width="24" height="24">
              Profile
            </a>
          </li>
          <li>
            <a href="logout.php" class="nav-link text-white">
              <img class="bi d-block mx-auto mb-1" src="logos/logout.png" width="24" height="24">
              Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
</body>
</html>