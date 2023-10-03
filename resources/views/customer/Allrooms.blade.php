{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deluxe Room | Hotel Luxuria</title>
  <link rel="stylesheet" href="trail2.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body> --}}


  
@extends('customer.layouts.apps')

@section('apps')

<!-- 1st room -->

  <div class="room-details">
<!-- Room Details Section -->

  <div class="row">
    <div class="col-md-6 room-slider">
      <!-- Slider Carousel -->
      <div id="roomSlider" class="carousel slide mt-5" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/luxary room.jpg" class="d-block" alt="Image 1">
          </div>
          <div class="carousel-item">
            <img src="images/deluxe room.jpg" class="d-block" alt="Image 2">
          </div>
          <div class="carousel-item">
            <img src="images/family room.jpg" class="d-block" alt="Image 3">
          </div>
          <!-- Add more images as needed -->
        </div>
        <a class="carousel-control-prev" href="#roomSlider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#roomSlider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
      <!-- Room Details -->
      <div class="col-md-6">
        <h2>Deluxe Room</h2>
        <p>Experience luxury and comfort in our Deluxe Room. This spacious room features modern amenities, a king-sized bed, and a breathtaking view of the city skyline.</p>
        <div class="room-facilities">
          <div class="row">
          <div class="col-lg-6 mt-3">
            <img src="images/square-fit.png" class="roomicon-image" alt=""><span class="mx-2"> 40 m² </span>
          </div>
        <div class="col-lg-6 mt-3">
          <img src="images/wifi.png" class="roomicon-image" alt=""><span class="mx-2"> Inclusive WiFi </span>
      </div>
      <div class="col-lg-6 mt-3">
        <img src="images/bed.png" class="roomicon-image" alt=""><span class="mx-2"> King </span>
        <!-- <i class= "fa fa-solid fa-bed-front"></i><span> King </span> -->
      </div>
      <div class="col-lg-6 mt-3">
        <img src="images/people.png" class="roomicon-image" alt=""><span class="mx-2"> Up to 3 guest </span>
      </div>
      <div class="col-lg-6 mt-3">
        <img src="images/breakfast.png" class="roomicon-image" alt=""><span class="mx-2"> Complimentary Breakfast </span>
      </div>
      <div class="col-lg-6 mt-3">
        <img src="images/swim.png" class="roomicon-image"  alt=""><span class="mx-2"> Complimentary Swimming</span>
      </div>
      <div class="col-lg-12 roomprice">
      <p class="roompricetag mt-2">$300</p>
      <p class="roomduration">per night</p>
      </div>
      <div class="col-lg-12 roombook ">
      <button class="roombook-btn">Book Now</button>
    </div>
          </div>
  </div>
  </div>
 </div>
</div>
         



<!-- 2nd room -->

<div class="room-details">
    <!-- Room Details Section -->
      <div class="row">
        <div class="col-md-6 room-slider">
          <!-- Slider Carousel -->
          <div id="roomSlider" class="carousel slide mt-5" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/luxary room.jpg" class="d-block" alt="Image 1">
              </div>
              <div class="carousel-item">
                <img src="images/deluxe room.jpg" class="d-block" alt="Image 2">
              </div>
              <div class="carousel-item">
                <img src="images/family room.jpg" class="d-block" alt="Image 3">
              </div>
              <!-- Add more images as needed -->
            </div>
            <a class="carousel-control-prev" href="#roomSlider" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#roomSlider" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
          <!-- Room Details -->
          <div class="col-md-6">
            <h2>Deluxe Room</h2>
            <p>Experience luxury and comfort in our Deluxe Room. This spacious room features modern amenities, a king-sized bed, and a breathtaking view of the city skyline.</p>
            <div class="room-facilities">
              <div class="row">
              <div class="col-lg-6 mt-3">
                <img src="images/square-fit.png" class="roomicon-image" alt=""><span class="mx-2"> 40 m² </span>
              </div>
            <div class="col-lg-6 mt-3">
              <img src="images/wifi.png" class="roomicon-image" alt=""><span class="mx-2"> Inclusive WiFi </span>
          </div>
          <div class="col-lg-6 mt-3">
            <img src="images/bed.png" class="roomicon-image" alt=""><span class="mx-2"> King </span>
            <!-- <i class= "fa fa-solid fa-bed-front"></i><span> King </span> -->
          </div>
          <div class="col-lg-6 mt-3">
            <img src="images/people.png" class="roomicon-image" alt=""><span class="mx-2"> Up to 3 guest </span>
          </div>
          <div class="col-lg-6 mt-3">
            <img src="images/breakfast.png" class="roomicon-image" alt=""><span class="mx-2"> Complimentary Breakfast </span>
          </div>
          <div class="col-lg-6 mt-3">
            <img src="images/swim.png" class="roomicon-image"  alt=""><span class="mx-2"> Complimentary Swimming</span>
          </div>
          <div class="col-lg-12 roomprice">
          <p class="roompricetag mt-2">$300</p>
          <p class="roomduration">per night</p>
          </div>
          <div class="col-lg-12 roombook ">
          <button class="roombook-btn">Book Now</button>
        </div>
     </div>
      </div>
      </div>
     </div>
    </div>


<!-- 3rd room -->

    <div class="room-details">
        <!-- Room Details Section -->
          <div class="row">
            <div class="col-md-6 room-slider">
              <!-- Slider Carousel -->
              <div id="roomSlider" class="carousel slide mt-5" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/luxary room.jpg" class="d-block" alt="Image 1">
                  </div>
                  <div class="carousel-item">
                    <img src="images/deluxe room.jpg" class="d-block" alt="Image 2">
                  </div>
                  <div class="carousel-item">
                    <img src="images/family room.jpg" class="d-block" alt="Image 3">
                  </div>
                  <!-- Add more images as needed -->
                </div>
                <a class="carousel-control-prev" href="#roomSlider" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#roomSlider" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
              <!-- Room Details -->
              <div class="col-md-6">
                <h2>Deluxe Room</h2>
                <p>Experience luxury and comfort in our Deluxe Room. This spacious room features modern amenities, a king-sized bed, and a breathtaking view of the city skyline.</p>
                <div class="room-facilities">
                  <div class="row">
                  <div class="col-lg-6 mt-3">
                    <img src="images/square-fit.png" class="roomicon-image" alt=""><span class="mx-2"> 40 m² </span>
                  </div>
                <div class="col-lg-6 mt-3">
                  <img src="images/wifi.png" class="roomicon-image" alt=""><span class="mx-2"> Inclusive WiFi </span>
              </div>
              <div class="col-lg-6 mt-3">
                <img src="images/bed.png" class="roomicon-image" alt=""><span class="mx-2"> King </span>
                <!-- <i class= "fa fa-solid fa-bed-front"></i><span> King </span> -->
              </div>
              <div class="col-lg-6 mt-3">
                <img src="images/people.png" class="roomicon-image" alt=""><span class="mx-2"> Up to 3 guest </span>
              </div>
              <div class="col-lg-6 mt-3">
                <img src="images/breakfast.png" class="roomicon-image" alt=""><span class="mx-2"> Complimentary Breakfast </span>
              </div>
              <div class="col-lg-6 mt-3">
                <img src="images/swim.png" class="roomicon-image"  alt=""><span class="mx-2"> Complimentary Swimming</span>
              </div>
              <div class="col-lg-12 roomprice">
              <p class="roompricetag mt-2">$300</p>
              <p class="roomduration">per night</p>
              </div>
              <div class="col-lg-12 roombook ">
              <button class="roombook-btn">Book Now</button>
            </div>
                  </div>
          </div>
          </div>
         </div>
        </div>

<!-- Link to Bootstrap JS and jQuery -->
{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html> --}}

@endsection
