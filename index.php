<?php

session_start();

$logout_message = "";

if (isset($_POST['logout'])) {
  session_unset();
  session_destroy();
  header('location: components/login.php');
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

  <title>Calvary Store</title>

  <link rel="stylesheet" type="text/css" href="assets/global.css">

</head>

<body>
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container d-flext justify-content-between">
      <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" width="125" height="45"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"> Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kontak</a>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="components/login.php">Masuk</a>
              <form action="index.php" method="POST" style="display: inline;">
                <button class="nav-link btn btn-link text-decoration-none text-white" type="submit" name="logout">logout</button>
              </form>
            </li>
          </ul>
        </ul>
      </div>
    </div>
    </div>
  </nav>

  <!-- Carousel -->

  <div class="container mt-3">
    <div class="container">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000">
            <img src="assets/img/slide1.png" class="slide d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="assets/img/slide2.png" class="slide d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/slide3.png" class="slide d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <!-- Produk -->

  <div class="container-fluid py-5">
    <div class="container">
      <h2 class="text-center"><strong>JOKI PUBG MOBILE</strong></h2>
      <div class="row">
        <div class="col-lg-3 hovered-card">
          <div class="card">
            <a href="#">
              <img src="assets/img/jokiconqu.png" class="list card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>JOKI CONQUEROR</strong></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 hovered-card">
          <div class="card">
            <a href="#">
              <img src="assets/img/jokirank.png" class="list card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>JOKI RANK</strong></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 hovered-card">
          <div class="card">
            <a href="#">
              <img src="assets/img/jokikd.png" class="list card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>JOKI KD</strong></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 hovered-card">
          <div class="card">
            <a href="#">
              <img src="assets/img/jokirp.png" class="list card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>JOKI ROYALE PASS</strong></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid py-5">
    <div class="container">
      <h2 class="text-center"><strong>TOP UP GAME</strong></h2>
      <div class="row">
        <div class="col-lg-3 hovered-card">
          <div class="card">
            <a href="components/listpubgindo.php">
              <img src="assets/img/logopubg.png" class="list card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>UC PUBGM</strong></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 hovered-card">
          <div class="card">
            <a href="#">
              <img src="assets/img/valorant.png" class="list card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>VALORANT</strong></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 hovered-card">
          <div class="card">
            <a href="#">
              <img src="assets/img/ff.png" class="list card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>FREE FIRE</strong></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 hovered-card">
          <div class="card">
            <a href="#">
              <img src="assets/img/ml1.png" class="list card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>MOBILE LEGENDS</strong></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid py-5">
    <div class="container">
      <h2 class="text-center"><strong>ENTERTAIMENT</strong></h2>
      <div class="row">
        <div class="col-lg-3 hovered-card">
          <div class="card">
            <a href="#">
              <img src="assets/img/netflix.png" class="list card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>NETFLIX</strong></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 hovered-card">
          <div class="card">
            <a href="#">
              <img src="assets/img/iflix.png" class="list card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>IFLIX</strong></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 hovered-card">
          <div class="card">
            <a href="#">
              <img src="assets/img/wetv.png" class="list card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>WE TV</strong></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 hovered-card">
          <div class="card">
            <a href="#">
              <img src="assets/img/ytprem.png" class="list card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>YOUTUBE PREMIUM</strong></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 hovered-card">
          <div class="card">
            <a href="#">
              <img src="assets/img/disney.png" class="list card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>DISNEY+ HOTSTAR</strong></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 hovered-card">
          <div class="card">
            <a href="#">
              <img src="assets/img/Vidio.png" class="list card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>VIDIO</strong></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 hovered-card">
          <div class="card">
            <a href="#">
              <img src="assets/img/spotify.png" class="list card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>SPOTIFY PREMIUM</strong></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-3 hovered-card">
          <div class="card">
            <a href="#">
              <img src="assets/img/canva.png" class="list card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center"><strong>CANVA PRO</strong></h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ProdukFooter -->

  <footer class="footer">

    <div class="container">

      <div class="row">

        <div class="footer-col">
          <h4>Calvary Store</h4>
          <ul>
            <li>
              <a href="#">About us</a>
            </li>
            <li>
              <a href="#">Our Services</a>
            </li>
            <li>
              <a href="#">Privacy Policy</a>
            </li>
          </ul>

        </div>

        <div class="footer-col">
          <h4>Game</h4>
          <ul>
            <li>
              <a href="#">PUBGM Reg Indo</a>
            </li>
            <li>
              <a href="#">PUBGM All Reg</a>
            </li>
            <li>
              <a href="#">Free Fire</a>
            </li>
            <li>
              <a href="#">Mobile Legends</a>
            </li>
            <li>
              <a href="#">Valorant Point</a>
            </li>
          </ul>


        </div>

        <div class="footer-col">
          <h4>Entertaiment</h4>
          <ul>
            <li>
              <a href="#">Netflix</a>
            </li>
            <li>
              <a href="#">We TV</a>
            </li>
            <li>
              <a href="#">Youtube</a>
            </li>
            <li>
              <a href="#">Iflix</a>
            </li>
          </ul>

        </div>

        <div class="footer-col">
          <h4>Follow Us</h4>
          <div class="sosmed">

            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>

        </div>

      </div>

    </div>

  </footer>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

  <!-- Fontawesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</body>

</html>