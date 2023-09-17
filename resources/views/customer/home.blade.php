@extends('customer.layouts.apps')

@section('apps')

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
        <img src="image/front-view.jpg" alt="front-view" class="slider-img">
        <div class="carousel-caption bio d-md-block">
          <h1 class="title">Welcome to Our Hotel</h1>
        <p>Experience luxury and comfort</p>
      </div>
      </div>
      <div class="carousel-item">
        <img src="image/lobby.jpg" alt="lobby" class="slider-img">
        <div class="carousel-caption bio d-md-block">
          <h4 class="title">Welcome to Our Hotel</h4>
        <p>Experience luxury and comfort</p>
      </div>
      </div>
      <div class="carousel-item">
        <img src="image/room.jpg" alt="Room" class="slider-img">
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
      @if ($room->image[0])
              {{-- @foreach ($room->image as $img) --}}
              <div>
                  <img src='{{Storage::disk("public")->url($room->image[0])}}' class="d-block w-100  home-image" >
              </div>
              {{-- @endforeach --}}
              @endif

           <div class="hotel-room-body">
            <a href="/singleroom/  {{$room->id}}">
            <h5 class="card-title">{{$room->roomtitle}}</h5>
            <p class="card-text">{{$room->price}}</p>
            </a>
          </div>
    </div>
    </div>
  @endforeach  
  </div>
</div>
<!--aboutus-->

<div class="about-us">
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
</div>


  
  @endsection


