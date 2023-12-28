@extends('customer.layouts.apps')

@section('apps')



<div class="home-page">


     <div id="roomCarousel" class="carousel carousel-slide" data-interval="5000" data-ride="carousel">

        <img src="image/hotels2.jpeg" alt="hotels2" class="slider-img">


        <div class="carousel-caption d-none d-md-block">
          <h1 class="slider-title">The Hotel Paradise</h1>
          {{-- <h2>Experience luxury and comfort</h2> --}}
        </div>


       </div>
 </div>



      {{-- <div class="carousel-item">
        <img src="image/hotels2.jpeg" alt="hotels2" class="slider-img">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="slider-title">Experience The Lavishing Side</h1>
      
      </div>
      </div> --}}




      {{-- <div class="carousel-item">
        <img src="image/room.jpg" alt="Room" class="slider-img">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="slider-title">Welcome to Our Hotel</h1>
        <h2>Experience luxury and comfort</h2>
      </div>
      </div> --}}



      {{-- <div class="carousel-item">
        <img src="image/yard.jpg" alt="yard" class="slider-img">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="slider-title">Welcome to Our Hotel</h1>
        <h2>Experience luxury and comfort</h2>
      </div>
      </div>
      


      <div class="carousel-item">
        <img src="image/pool2.jpg" alt="swimmingpool" class="slider-img">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="slider-title">Welcome to Our Hotel</h1>
        <h2>Experience luxury and comfort</h2>
      </div>
      </div> --}}



    


    {{-- <a class="carousel-control-prev " href="#roomCarousel"  role="button" data-slide="prev">
      <span class="carousel-control-prev-icon slider-arrow" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#roomCarousel"  role="button" data-slide="next">
      <span class="carousel-control-next-icon slider-arrow" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a> --}}




  <!-- slider end -->




                                                 <!-- Our room -->


  <div class="section-site">

    <div class="row">
    <div class="col-md-12 mb-5 text-center">
        <h1 class="room-section-heading">Our Rooms</h1>
    </div>
    </div>



    <div class=row>


  @foreach ($rooms as $room)


    <div class="col-md-6 col-lg-4 mb-5">
    <div class="hotel-room">


      @if ($room->image)
              @foreach ($room->image as $img)


              <div>
                  <img src='{{Storage::disk("public")->url($room->image[0])}}' class="d-block w-100  home-image" >
              </div>


              @endforeach
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




                                               <!--ABOUT US-->

{{-- <div class="about-us">


  <div class="container">


    <div class="row">


      <div class="col-lg-6">
        <img src="image/about.jpg" alt="Hotel Paradise" class="img-fluid rounded">
      </div>



      <div class="col-lg-6">
        <h2 class="mb-6">About Us</h2>
        <p>Welcome to Hotel Paradise,where luxury meets tranquility.Our establishment offers a unique blend of modern amenities and classic elegance,ensuring an unforgettable experience for our guests.With a range of facilities including a spa,fitness center,and elegant event spaces, we cater to both leisure and business travelers.Our dedicated staff is committed to providing exceptional service, making your stay truly special.</p>
        <p>Complimentary breakfast,high-speed Wi-Fi,and attentive concierge services are just a few of the features that await you at Hotel Paradise.We invite you to indulge in a world of comfort and indulgence.</p>
      </div>



    </div>


  </div>


</div> --}}

<section class="about" id="about">

  <div class="row">

    <div class="col-lg-6 image">
      <img src="image/about.jpg" alt="Hotel Paradise" class="img-fluid rounded">
    </div>

     <div class="content">
      <h2 class="mb-6">About Us</h2>
      <p>Enjoy our elegant guest rooms, designed in warm beige tones and tailored to the needs of private and business travelers alike. All rooms have a large marble bathroom, a double bed, air conditioning, an additional work area with free internet access and a walk-in closet.</p>
      <p>Bed configuration, extra bed options, air conditioning are also important. Each hotel has a slightly different list that can also include details such as the window view or the presence of a balcony. It is crucial to clearly indicate such features as early as on the first list view of all rooms.</p>
     </div>

  </div>

</section>


<!-- Services Section -->
{{-- <div class="home-services px-3 py-5">
  <h2 class="text-center services-title">Services that Hotel Pradise provide </h2>



  
  <div class="row">


      <div class="col-sm-3 mb-4">


          <div class="services-card">
              <img src="image/swimming pool.jpeg" class="card-img-top services-image" alt="Service 1">
              <div class="services-card-body">
                  <h5 class="services-card-title">The Infinity Pool</h5>
                  <a href="/services" class="services-view">View More</a>
              </div>
          </div>



      </div>


      <div class="col-sm-3 mb-4">
          <div class="services-card">
              <img src="image/restaurant.jpg" class="card-img-top services-image" alt="Service 2">
              <div class="services-card-body">
                  <h5 class="services-card-title">Restaurant</h5>
                  <a href="/services" class="services-view">View More</a>
              </div>
          </div>
      </div>



      <div class="col-sm-3 mb-4">
          <div class="services-card">
              <img src="image/gym (2).jpg" class="card-img-top services-image" alt="Service 3">
              <div class="services-card-body">
                  <h5 class="services-card-title ">Gym</h5>
                  <a href="/services" class="services-view">View More</a>
              </div>
          </div>
      </div>




      <div class="col-sm-3 mb-4">
        <div class="services-card">
            <img src="image/Biliard zone.jpg" class="card-img-top services-image" alt="Service 3">
            <div class="services-card-body">
                <h5 class="services-card-title ">Billiard Zone</h5>
                <a href="/services" class="services-view">View More</a>
            </div>
        </div>
    </div>




  </div>


</div> --}}

                                                           <!-- booking form Section -->

<div class="reservation-clr" >

      <h1 class="reserve-h1">Book Now</h1>

      <form action="{{ url('admin/booking') }}" method="POST" enctype="multipart/form-data" class="reservation-form">
        @csrf

         <div class="reservation-container">

            <div class="reservation-box">
               <p>Name <span>*</span></p>
               <input type="text" class="input" placeholder="Your Name">
            </div>

            <div class="reservation-box">
               <p>Email <span>*</span></p>
               <input type="text" class="input" placeholder="Your Email">
            </div>

            <div class="reservation-box">
               <p>Check in <span>*</span></p>
               <input type="date" class="input">
            </div>

            <div class="reservation-box">
               <p>Check out <span>*</span></p>
               <input type="date" class="input">
            </div>

            <div class="reservation-box">
               <p>Adults <span>*</span></p>
               <select name="adults" class="input">
                  <option value="1">1 adults</option>
                  <option value="2">2 adults</option>
                  <option value="3">3 adults</option>
                  <option value="4">4 adults</option>
                  <option value="5">5 adults</option>
                  <option value="6">6 adults</option>
               </select>
            </div>

            <div class="reservation-box">
               <p>Children <span>*</span></p>
               <select name="child" class="input">
                  <option value="1">1 child</option>
                  <option value="2">2 child</option>
                  <option value="3">3 child</option>
                  <option value="4">4 child</option>
                  <option value="5">5 child</option>
                  <option value="6">6 child</option>
               </select>
            </div>

            <div class="reservation-box">
               <p>Rooms <span>*</span></p>
               <select name="rooms" class="input">
                  <option value="1">1 rooms</option>
                  <option value="2">2 rooms</option>
                  <option value="3">3 rooms</option>
                  <option value="4">4 rooms</option>
                  <option value="5">5 rooms</option>
                  <option value="6">6 rooms</option>
               </select>
            </div>

            <div class="reservation-box">
               <p>Room Category <span>*</span></p>
               {{-- <label for="roomcategory" class="reserve-box">Room Category </label> --}}
               {{-- <select class="form-control" name="room_id" id="roomcategory" placeholder="Room Category" required> --}}
                <select name="room_id" class="input">
                 <option >Select Room Category</option>
                 @foreach ($rooms as $room)
                 <option value="{{ $room->id }}" data-price="{{$room->price}}">{{$room->roomtitle}} - {{$room->roomno}}</option>
                 @endforeach
                   
               </select>
            </div>
   
         </div>

         <button type="submit" class="btn btn-primary button-files">Submit</button>

      </form>

    </div>





    {{-- @include('admin.inc.message')
       
       
    <h1 class="reserve-h1">Book Now</h1>
         
       <form action="{{ url('admin/booking') }}" method="POST" enctype="multipart/form-data">
         @csrf
       
          <div class="container mt-3">
            
           <div class="reserve-row reserve-jumbotron custom-box8">

            <div class="row">
       
             <div class="col-sm-6  form-group">
               <label for="cname" class="reserve-box">Name</label>
               <input type="text" class="form-control" name="cname" id="cname" placeholder="Name" required>
             </div>
       
   
   
             <div class="col-sm-6 form-group">
               <label for="email" class="reserve-box">Email</label>
               <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
             </div>
   
   
   
             <div class="col-sm-6 form-group">
               <label for="tel" class="reserve-box">Contact No.</label>
               <input type="tel" name="tel" class="form-control" id="tel" placeholder="Contact Number" required>
             </div>
   
   
   
             <div class="col-sm-6 form-group">
               <label for="email" class="reserve-box">National Id</label>
               <input type="nid" class="form-control" name="nid" id="nid" placeholder="NID" required>
             </div>
   
   
   
           <div class="col-sm-6 form-group">
             <label for="roomcategory" class="reserve-box">Room Category </label>
             <select class="form-control" name="room_id" id="roomcategory" placeholder="Room Category" required>
               <option >Select Room Category</option>
               @foreach ($rooms as $room)
               <option value="{{ $room->id }}" data-price="{{$room->price}}">{{$room->roomtitle}} - {{$room->roomno}}</option>
               @endforeach
                 
             </select>
           </div>
         
   
   
   
             <div class="col-sm-6 form-group">
               <label for="guestnumber" class="reserve-box">Number of Guests</label>
               <input type="text" class="form-control" name="guestnumber" id="guestnumber" placeholder="Number of Guests">
             </div>
   
   
   
             <div class="col-sm-6 form-group">
              <label for="checkInDate" class="reserve-box">Check-in Date</label>
                  <input type="date" class="form-control" name="checkInDate" id="checkInDate"  required>
            </div>
      
      
      
            <div class="col-sm-6 form-group">
              <label for="checkOutDate" class="reserve-box">Check-out Date</label>
              <input type="date" class="form-control" name="checkOutDate" id="checkOutDate"  required>
            </div>
   
   
   
             <div class="col-sm-12 form-group">
               <label for="specialrequest" class="reserve-box">Special Request, Ex. extra bed, comforter.....</label>
               <textarea name="specialrequest" class="form-control" id="specialrequest" rows="3"></textarea>
             </div>
   
       
       
             <button type="submit" class="btn btn-primary button-file">Submit</button>
   
   
            </div>

          </div>
  
      </div>
           </form> --}}
   





                                                           <!-- Map Section -->


<div class="home-map">


  <h2 class="text-center homemap-title">Location</h2>


  {{-- <p class="hopemap-details px-5">The Hotel Pradise, Chittagong is conveniently located within touching distance to prominent tourist attractions in and around Chittagong. Our hotel in Chittagong is also the perfect destination for a blissful getaway from Dhaka. Enjoy our warm hospitality and service that make you feel at home. Explore the all meals inclusive 4D Travel offer to plan your next stay.<p> --}}


    <div class="row mapsize">
      
  <!-- Add your map code here (e.g., using Google Maps) -->
  <div class=" col map-container">
      <!-- Add your map embed code here -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.781722834278!2d91.81870947103317!3d22.361869295692408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd972a7c0913d%3A0xa89bedab30fca683!2sAscii%20System!5e0!3m2!1sen!2sbd!4v1695225952836!5m2!1sen!2sbd" width="1530" height="400" class="home-map"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>


</div>


</div>


</div>
  


@endsection

