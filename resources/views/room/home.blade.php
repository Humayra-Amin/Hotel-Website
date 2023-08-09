<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Paradise</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('rooms/css/home.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top bg-transparent">

        <a class="navbar-brand fw-bold" href="#">Hotel Paradise</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#rooms">Rooms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#login">Login</a>
            </li>
          </ul>
        </div>
   
      </nav>
  
  <!-- slider add -->
  {{-- <div class="row">
  <div class="col-md-12"> --}}
  <div id="roomCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#roomCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#roomCarousel" data-slide-to="1"></li>
      <li data-target="#roomCarousel" data-slide-to="2"></li>
      <li data-target="#roomCarousel" data-slide-to="3"></li>
      <li data-target="#roomCarousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/lobby.jpg" alt="lobby" class="slider-img">
        <div class="carousel-caption bio d-md-block">
          <h1 class="LL">Welcome to Our Hotel</h1>
        <p>Experience luxury and comfort</p>
      </div>
      </div>
      <div class="carousel-item">
        <img src="image/deluxe room.jpg" alt="Room" class="slider-img">
        <div class="carousel-caption bio  d-md-block">
          <h2 class="LL">Welcome to Our Hotel</h2>
        <p>Experience luxury and comfort</p>
      </div>
      </div>
      <div class="carousel-item">
        <img src="image/yard.jpg" alt="yard" class="slider-img">
        <div class="carousel-caption bio d-md-block">
          <h3 class="LL">Welcome to Our Hotel</h3>
        <p>Experience luxury and comfort</p>
      </div>
      </div>
      <div class="carousel-item">
        <img src="image/gym.jpg" alt="Gym" class="slider-img">
        <div class="carousel-caption bio d-md-block">
          <h4 class="LL">Welcome to Our Hotel</h4>
        <p>Experience luxury and comfort</p>
      </div>
      </div>
      <div class="carousel-item">
        <img src="image/pool.jpg" alt="swimmingpool" class="slider-img">
        <div class="carousel-caption bio d-md-block">
          <h5 class="LL">Welcome to Our Hotel</h5>
        <p>Experience luxury and comfort</p>
      </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#roomCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#roomCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- slider end -->
<div class="section-site">
  

  <div class="row">
    <div class="col-md-12 mb-5 text-center">
        <h1>Our Rooms</h1>
    </div>
</div>
<div class=row>
    <div class="">
    <div class="room-list-inner d-flex flex-wrap mt-3">
      <div class="col-lg-3 col-md-6">
        <div class="card room-card">
          <img src="image/single room.jpg" class="card-img-top" alt="Single Room">
          <div class="card-body">
            <h5 class="card-title">Single Room</h5>
            <p class="card-text">Cozy and comfortable single room.</p>
            <p class="card-text"><strong>Price:</strong> $100/night</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card room-card">
          <img src="image/deluxe room.jpg" class="card-img-top" alt="Deluxe Room">
          <div class="card-body">
            <h5 class="card-title">Deluxe Room</h5>
            <p class="card-text">Spacious and luxurious deluxe room.</p>
            <p class="card-text"><strong>Price:</strong> $200/night</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card room-card">
          <img src="image/family room.jpg" class="card-img-top" alt="Family Room">
          <div class="card-body">
            <h5 class="card-title">Family Room</h5>
            <p class="card-text">Perfect for a family getaway.</p>
            <p class="card-text"><strong>Price:</strong> $250/night</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card room-card">
          <img src="image/luxary room.jpg" class="card-img-top" alt="Luxury Room">
          <div class="card-body">
            <h5 class="card-title">Luxury Room</h5>
            <p class="card-text">Ultimate luxury and comfort.</p>
            <p class="card-text"><strong>Price:</strong> $350/night</p>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>
<footer>
  <p>&copy; Hotel Pradise. All rights reserved.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>