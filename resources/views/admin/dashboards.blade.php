<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="{{asset('employees/css/dashboards.css')}}">


    <title>Hotel Management Dashboard</title>
</head>
<body>
<div class="dash-container">
            <div class="col-md-9">

                <div class="dash-row">


                    <div class="col-md-4">
                        <div class="dash-card">
                            <div class="dash-card-body">
                                <h5 class="dash-card-title"><i class="fas fa-bed"></i> Available Rooms</h5>
                                <p class="dash-card-text">Total reservations: 50</p>
                                <p class="dash-card-text">Pending reservations: 10</p>
                                <p class="dash-card-text">Occupied rooms: 40</p>
                                <p class="dash-card-text">Available rooms: 10</p>
                                <p class="dash-card-text">Revenue today: $1000</p>
                                <a href="" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                    
                    
                 
                    
                    
            
                    <div class="col-md-4">
                        <div class="dash-card">
                            <div class="dash-card-body">
                                <h5 class="dash-card-title"><i class="fas fa-sign-out-alt"></i> Checkout</h5>
                                <p class="dash-card-text">Available rooms: 30</p>
                                <p class="dash-card-text">Occupied rooms: 20</p>
                                <p class="dash-card-text">Rooms under cleaning: 5</p>
                                <p class="dash-card-text">Maintenance in progress: 2</p>
                                <p class="dash-card-text">Upcoming checkouts: 10</p>
                                <a href="" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                    




                    <div class="col-md-4">
                        <div class="dash-card">
                            <div class="dash-card-body">
                                <h5 class="dash-card-title"><i class="fas fa-credit-card"></i> Payments</h5>
                                <p class="dash-card-text">Check-ins today: 5</p>
                                <p class="dash-card-text">Check-outs today: 3</p>
                                <p class="dash-card-text">Total revenue: $2000</p>
                                <p class="dash-card-text">Outstanding payments: $500</p>
                                <p class="dash-card-text">Average daily rate: $150</p>
                                <a href="" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                




                <div class="row">
                    <div class="col-md-12">
                        <canvas id="bookingStatusChart"></canvas>
                    </div>
                </div>
 
        

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




            </div>
        </div>
        <div class="room-cards">
            <!-- Room Card 1 -->
            <div class="room-card">
                <img src="{{asset('image/9.jpg')}}" class="img-fluid imagefile" alt="">
                <h2>Room 101</h2>
                <p>Occupied</p>
                <p>Price: $150/night</p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
            
            <!-- Room Card 2 -->
            <div class="room-card">
                <img src="{{asset('image/9.jpg')}}" class="img-fluid imagefile" alt="">                
                <h2>Room 102</h2>
                <p>Available</p>
                <p>Price: $120/night</p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
            
            <!-- Room Card 3 -->
            <div class="room-card">
                <img src="{{asset('image/9.jpg')}}" class="img-fluid imagefile" alt="">
                <h2>Room 103</h2>
                <p>Occupied</p>
                <p>Price: $150/night</p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
        </div>



</body>
</html>

