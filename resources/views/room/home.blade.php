<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Paradise</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('rooms/css/home.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Signika' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="top-navbar">
    <div class="container">
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
          <a class="nav-link" href="#relaxation">Relaxation</a>
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
  </div>
  </nav>
  
  <!-- slider add -->
  {{-- <div class="row"> --}}
  {{-- <div class="col-md-12">  --}}
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
          <h1 class="title">Welcome to Our Hotel</h1>
        <p>Experience luxury and comfort</p>
      </div>
      </div>
      <div class="carousel-item">
        <img src="image/deluxe room.jpg" alt="Room" class="slider-img">
        <div class="carousel-caption bio  d-md-block">
          <h2 class="title">Welcome to Our Hotel</h2>
        <p>Experience luxury and comfort</p>
      </div>
      </div>
      <div class="carousel-item">
        <img src="image/yard.jpg" alt="yard" class="slider-img">
        <div class="carousel-caption bio d-md-block">
          <h3 class="title">Welcome to Our Hotel</h3>
        <p>Experience luxury and comfort</p>
      </div>
      </div>
      <div class="carousel-item">
        <img src="image/gym.jpg" alt="Gym" class="slider-img">
        <div class="carousel-caption bio d-md-block">
          <h4 class="title">Welcome to Our Hotel</h4>
        <p>Experience luxury and comfort</p>
      </div>
      </div>
      <div class="carousel-item">
        <img src="image/pool.jpg" alt="swimmingpool" class="slider-img">
        <div class="carousel-caption bio d-md-block">
          <h5 class="title">Welcome to Our Hotel</h5>
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
        <h1 class="section-heading">Our Rooms</h1>
    </div>
</div>

<div class=row>
  @foreach ($rooms as $room)
    <div class="col-md-6 col-lg-4 mb-5">
    <div class="hotel-room">
      @if ($room->image)
              @foreach ($room->image as $img)
              <div>
                  <img src='{{Storage::disk("public")->url($img)}}' class="d-block w-100" >
              </div>
              @endforeach
              @endif
        
          <div class="hotel-room-body">
            <h5 class="card-title">{{$room->roomtitle}}</h5>
            <p class="card-text">{{$room->price}}</p>
          </div>
        </div>
    
    </div>
@endforeach
    
    </div>

  </div>

</div>
<!--aboutus-->

<section class="about-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img src="image/hotelbackground.jpg" alt="Hotel Paradise" class="img-fluid rounded">
      </div>
      <div class="col-lg-6">
        <h2 class="mb-6">About Us</h2>
        <p>Welcome to Hotel Paradise,where luxury meets tranquility.Our establishment offers a unique blend of modern amenities and classic elegance,ensuring an unforgettable experience for our guests.With a range of facilities including a spa,fitness center,and elegant event spaces, we cater to both leisure and business travelers.Our dedicated staff is committed to providing exceptional service, making your stay truly special.</p>
        <p>Complimentary breakfast,high-speed Wi-Fi,and attentive concierge services are just a few of the features that await you at Hotel Paradise.We invite you to indulge in a world of comfort and indulgence.</p>
      </div>
    </div>
  </div>
</section>
<!--features-->
{{-- 
<div class="row">
  <div class="col-sm-6 col-md-4 col-log-3">
    <div class="text-center p-4 item">
      <span class= ""> --}}

<!--footer-->
<footer class="footer">
	<div class="container">
	            <div class="row-custom">
				<div class="footer-col">
                  <h4>Information</h4>
                  <ul>
                      <li><a href="#">Pages</a></li>
                      <li><a href="#">Our Team</a></li>
                      <li><a href="#">Pricing</a></li>
                  </ul>
          </div>
		  
		  				<div class="footer-col">
                  <h4>Resources</h4>
                  <ul>
                      <li><a href="#">Video Tutorial</a></li>
                      <li><a href="#">Term &amp; Service</a></li>
                  </ul>
          </div>
		  
		  				<div class="footer-col">
                  <h4>Help</h4>
                  <ul>
                      <li><a href="#">Sign Up </a></li>
                      <li><a href="#">FAQ</a></li>
                      <li><a href="#">Terms of Services</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                  </ul>
          </div>
		  
		  				<div class="footer-col">
                  <h4>Follow Us</h4>
                  <div class="social-links">
                      <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                      <a href="#"><i class="fa-brands fa-instagram"></i></a>
                      <a href="#"><i class="fa-brands fa-twitter"></i></a>
                      <a href="#"><i class="fa-brands fa-google"></i></a>
                  </div>
          </div>
		  
		  </div>
    </div>
    <div class="text-center mt-5">
      <p class="footer-alt mb-0 f-14">2023 Copyright, All Rights Reserved</p>
  </div>
	</footer>

<script src="{{asset('rooms/js/home.js')}}">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>