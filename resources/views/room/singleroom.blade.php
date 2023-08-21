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
                    <div class="carousel-item active">
                        <img src="images/single room.jpg" class="d-block w-100" alt="Room Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="images/single room(2).jpg" class="d-block w-100" alt="Room Image 2">
                    </div>
                    <!-- Add more carousel items for additional images -->
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
        </div>
        <div class="col-md-6">
            <h1 class="mb-3">Single Room</h1>
            <p class="lead">Experience luxury and comfort in our spacious single room...</p>
            <ul class="group mb-6">
                <li class="group-item">Single Bed</li>
                <li class="group-item">En-suite Bathroom</li>
                <li class="group-item">Stunning city view</li>
                <li class="group-item">Complimentary Wi-Fi</li>
                <li class="group-item">Complimentary Breakfast</li>
            </ul>
            <p class="lead font-weight-bold">$199 per night</p>
            <button id="bookButton" class="btn btn-primary">Book Now</button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>