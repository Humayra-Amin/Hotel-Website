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


  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="top-navbar">
    <div class="container">
    <a class="navbar-brand fw-bold" href="#">Hotel Paradise</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse " id="navbarNav">
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


<!--footer-->
<footer class="bg-footer">
  <div class="container">
      <div class="row">
          <div class="col-lg-3">
           
                  <h6 class="footer-heading">Information</h6>
                  <ul class="list-unstyled footer-link">
                      <li><a href="">Pages</a></li>
                      <li><a href="">Our Team</a></li>
                      <li><a href="">Pricing</a></li>
                  </ul>
            
          </div>

          <div class="col-lg-3">
 
                  <h6 class="footer-heading">Resources</h6>
                  <ul class="list-unstyled footer-link">
                      <li><a href="">Video Tutorial</a></li>
                      <li><a href="">Term &amp; Service</a></li>
                  </ul>
         
          </div>

          <div class="col-lg-3">
         
                  <h6 class="footer-heading">Help</h6>
                  <ul class="list-unstyled footer-link">
                      <li><a href="">Sign Up </a></li>
                      <li><a href="">Login</a></li>
                      <li><a href="">Terms of Services</a></li>
                      <li><a href="">Privacy Policy</a></li>
                  </ul>
           
          </div>

          <div class="col-lg-3">
              
                  <h6 class="footer-heading">Contact Us</h6>
                  <p class="contact-info"><a href="">info@gmail.com</a></p>
                  <p class="contact-info"><a href="">+8801896755116</a></p>
                  {{-- <div class="mt-5">
                      <ul class="list-inline">
                          <li class="list-inline-item"><a href="#"><i class="fa-brands fa-square-facebook"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fab twitter footer-social-icon fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fab google footer-social-icon fa-google"></i></a></li>
                      </ul>
                  </div> --}}
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                    <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                  </svg>
          </div>

      </div>
  </div>

  <div class="text-center mt-2">
      <p class="footer-alt mb-0 f-14">2023 Copyright, All Rights Reserved</p>
  </div>
</footer>

<script src="{{asset('rooms/js/home.js')}}">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>