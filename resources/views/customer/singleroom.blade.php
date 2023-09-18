@extends('customer.layouts.apps')

@section('apps')



<div class="container single-context">
 
        <div class="col-md-6 mt-5">
            <div id="roomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner mt-4">
                    @if ($room->image)
                    @foreach ($room->image as $img)
                    <div>
                        <img src='{{Storage::disk("public")->url($img)}}' class="d-block w-100" >
                    </div>
                    @endforeach
                    @endif
                  
                    <!-- Add more carousel items for additional images -->
                </div>
              
             
            </div>
        </div>
     
        <div class="col-md-6">
            <h1 class="room-text">{{$room->roomtitle}}</h1>
            <p class="lead">{{$room->description}}</p>
            <p class="lead">{{$room->roomtype}}</p>
            <p class="lead">{{$room->roomsize}}</p>
            <p class="lead">{{$room->roomview}}</p>
      
            <p class="lead"> {{$room->price}}</p>

            @include('admin.inc.message')

            {{-- <form action="/roombook/{{$room->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') --}}
                    {{-- <button id="bookButton" class="btn btn-primary" href="customer/bookmodal">Book Now</button> --}}
                    <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#reservationModal">Book Now</button>

            {{-- </form> --}}
        </div>
   
</div>
{{-- 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html> --}}



<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text"  placeholder="Enter your name" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email"  placeholder="Enter your email"class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label for="checkInDate">Check-in Date:</label>
                    <input type="date" class="form-control" id="checkInDate" required>
                </div>
                <div class="form-group">
                    <label for="checkOutDate">Check-out Date:</label>
                    <input type="date" class="form-control" id="checkOutDate" required>
                </div>
                <div class="form-group">
                    <label for="roomType">Room Type:</label>
                    <select class="form-control" id="roomType" required>
                        <option value="single">Single</option>
                        <option value="double">Double</option>
                        <option value="suite">Suite</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Reserve</button>
            </div>
        </div>
    </div>
</div>



@endsection



  {{-- <div class="room-details">
    <!-- Room Details Section -->
    <section class="my-5">
      <div class="row">
        <div class="col-md-6 room-slider">
          <!-- Slider Carousel -->
          <div id="roomSlider" class="carousel slide" data-ride="carousel">
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
        <div class="col-md-6">
          <!-- Room Details -->
            <h2>Deluxe Room</h2>
            <p>Experience luxury and comfort in our Deluxe Room. This spacious room features modern amenities, a king-sized bed, and a breathtaking view of the city skyline.</p>
            <p>Room Size: 40 m²</p>
            <p>Max Occupancy: 2 adults</p>
            <p>Bed Type: King</p>
            <p>Free Wi-Fi, Air Conditioning, Mini Bar</p>
            <p>Room-price:$300 per night</p>
            <button class="btn btn-primary book-now-btn">Book Now</button>
          </div>
        </div>
    </section>
    </div> --}}


