{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Booking List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('employees/auth/bookinglist.css')}}">

</head>
<body> --}}

    @extends('customer.layouts.app')
    @section('app')
    
  <div class="contain">
    <div class="row">
      <div class="col-sm-3">
        <div class="search-container">
          <input type="text" class="form-control" placeholder="Search for Booking-List">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-search search-icon" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>  
        </div>
      </div>
    </div>

    <h1 class="mt-4 mb-4 ml section-heading">ALL Booking List</h1>
    <div class="row">
      <div class="col-sm-4">
        <div class="card booking-card">
          <div class="price-tag">$250</div>
          <div class="group-card-body">
            <h5 class="card-title mt-4">Name: Abdur Rahman</h5>
            <ul class="details">
              <li> Room Type: Deluxe</li>
              <li> Capacity: 4 guests</li>
              <li> Check-In: 2023-09-01</li>
              <li> Check-Out: 2023-09-07</li>
              <button class="button"> View</button>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card booking-card">
          <div class="price-tag">$250</div>
          <div class="group-card-body">
            <h5 class="card-title mt-4">Name: Abdur Rahman</h5>
            <ul class="details">
              <li> Room Type: Deluxe</li>
              <li> Capacity: 4 guests</li>
              <li> Check-In: 2023-09-01</li>
              <li> Check-Out: 2023-09-07</li>
              <button class="button"> View</button>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card booking-card">
          <div class="price-tag">$250</div>
          <div class="group-card-body">
            <h5 class="card-title mt-4">Name: Abdur Rahman</h5>
            <ul class="details">
              <li> Room Type: Deluxe</li>
              <li> Capacity: 4 guests</li>
              <li> Check-In: 2023-09-01</li>
              <li> Check-Out: 2023-09-07</li>
              <button class="button"> View</button>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card booking-card">
          <div class="price-tag">$250</div>
          <div class="group-card-body">
            <h5 class="card-title mt-4">Name: Abdur Rahman</h5>
            <ul class="details">
              <li> Room Type: Deluxe</li>
              <li> Capacity: 4 guests</li>
              <li> Check-In: 2023-09-01</li>
              <li> Check-Out: 2023-09-07</li>
              <button class="button"> View</button>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card booking-card">
          <div class="price-tag">$250</div>
          <div class="group-card-body">
            <h5 class="card-title mt-4">Name: Abdur Rahman</h5>
            <ul class="details">
              <li> Room Type: Deluxe</li>
              <li> Capacity: 4 guests</li>
              <li> Check-In: 2023-09-01</li>
              <li> Check-Out: 2023-09-07</li>
              <button class="button"> View</button>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="card booking-card">
          <div class="price-tag">$250</div>
          <div class="group-card-body">
            <h5 class="card-title mt-4">Name: Abdur Rahman</h5>
            <ul class="details">
              <li> Room Type: Deluxe</li>
              <li> Capacity: 4 guests</li>
              <li> Check-In: 2023-09-01</li>
              <li> Check-Out: 2023-09-07</li>
              <button class="button"> View</button>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html> --}}

@endsection