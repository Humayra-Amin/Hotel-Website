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

            <form action="/roombook/{{$room->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <button id="bookButton" class="btn btn-primary">Book Now</button>
            </form>
        </div>
   
</div>
{{-- 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html> --}}
@endsection