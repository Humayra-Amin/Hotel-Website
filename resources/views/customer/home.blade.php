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


       <section id="about" style="background:whitesmoke;" class="padding-xlarge text-center position-relative overflow-hidden">
            <div class="pattern-overlay pattern-right position-absolute">
                 <img src="image/leaf-pattern1.png" alt="pattern">
                            </div>
                 <div class="container">
                   <div class="row">
          <div class="detail mb-4">
         <h2 style="color:#3e74ad;" class="display-5 text-capitalize">Welcome to Hotel Paradise</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae rerum quia molestias placeat ad, vel eum aliquid voluptas assumenda obcaecati a sed, cumque deleniti nulla, delectus repellat quasi iure sapiente?</p>
           </div>
          </div>
                                            
             <a href="about.html" class="btn btn-arrow btn-pill btn-medium btn-outline-dark bg-light text-black position-relative">
            <span class="abt">About Us</span>
    </a>
             </div>
    </section>


                                     <!-- booking form Section -->

{{-- <div class="reservation-clr" >

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
               <p>Room Category <span>*</span></p> --}}
               {{-- <label for="roomcategory" class="reserve-box">Room Category </label> --}}
               {{-- <select class="form-control" name="room_id" id="roomcategory" placeholder="Room Category" required> --}}
                {{-- <select name="room_id" class="input">
                 <option >Select Room Category</option>
                 @foreach ($rooms as $room)
                 <option value="{{ $room->id }}" data-price="{{$room->price}}">{{$room->roomtitle}} - {{$room->roomno}}</option>
                 @endforeach
                   
               </select>
            
              </div>
   
         </div>

         <button type="submit" class="btn btn-primary button-files">Submit</button>

      </form>

    </div> --}}





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

