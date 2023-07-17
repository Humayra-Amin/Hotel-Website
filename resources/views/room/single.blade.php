@extends('room.layouts.app')


@section('app')


    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div id="roomSlider" class="carousel slide room-slider" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('image/room-image1.jpg')}}" alt="Room Image 1">
              </div>
              <div class="carousel-item">
                <img src="{{asset('image/room-image2.jpg')}}" alt="Room Image 2">
              </div>
              <div class="carousel-item">
                <img src="{{asset('image/room-image2.jpg')}}" alt="Room Image 3">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#roomSlider" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#roomSlider" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="room-details">
            <h2 class="room-title"> Deluxe Single Room</h2>
            <p class="room-type">Room Type: Deluxe</p>
            <p class="room-size">Room Size: 256 square feet</p>
            <p class="room-facilities">Room Facilities:
              <ul class="list-group">
                <li><i class="fa-solid fa-wifi"></i> Free Wi-Fi</li><br>
                <li><i class="fa-solid fa-car"></i> Parking Available</li><br>
                <li><i class="fa-solid fa-phone"></i> Direct Dial Phone</li><br>
                <li><i class="fa-solid fa-credit-card"></i> Credit Card Accepted</li><br>
                <li><i class="fa-solid fa-tv"></i>TV</li><br>
                <li><i class="fa-solid fa-mug-tea"></i>Tea/Coffe maker</li><br>
                <li><i class="fa-solid fa-air-conditioner"></i>Air Conditioning</li><br>
        
              </ul>
            
              </p>
              <p class="room-numbers">Number of Rooms: 71</p>
            </div>
          </div>
        </div>
        </div>
        </div>

          <div class="row">
              <div class="col-md-6">
                  <p class="room-description">These rooms are most popular and requested by all guests. Queen sized bed is provided for your comfort. Equipped with Teakwood flooring, full amenities, TV, Mini Fridge, well stocked mini bar, tea/ coffee making facilities, electronic safety locker provided for your valuables.</p>
                  
              </div>
              
        </div>

 
      @endsection