<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Paradise - Single Room</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="single room.css">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div id="roomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner mt-5">
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
            <h1 class="mb-3">{{$room->roomtitle}}</h1>
            <p class="lead">{{$room->description}}</p>
            <p class="lead">{{$room->roomtype}}</p>
            <p class="lead">{{$room->roomsize}}</p>
            <p class="lead">{{$room->roomview}}</p>
            {{-- <ul class="group mb-6">
                <li class="group-item">Single Bed</li>
                <li class="group-item">En-suite Bathroom</li>
                <li class="group-item">Stunning city view</li>
                <li class="group-item">Complimentary Wi-Fi</li>
                <li class="group-item">Complimentary Breakfast</li>
            </ul> --}}
            <p class="lead font-weight-bold"> {{$room->price}}</p>
            <form action="/roombook/{{$room->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <button id="bookButton" class="btn btn-primary">Book Now</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>