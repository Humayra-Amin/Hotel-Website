

    @extends('customer.layouts.apps')
    @section('apps')
    
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
      @foreach($booklist as $Customer)
      <div class="col-sm-3">
        <div class="card booking-card">
          <div class="price-tag">{{$booking->price}}</div>
          <div class="group-card-body">
            <h5 class="card-title mt-4">Name: {{$booking->name}}</h5>
            <ul class="details">
              <li> Room Type: {{$booking->roomtype}}</li>
              <li> Capacity: {{$booking->capacity}}</li>
              <li> Check-In: {{$booking->checkin}}</li>
              <li> Check-Out: {{$booking->checkout}}</li>
              <button class="button"> View </button>
            </ul>
          </div>
        </div>
      </div>
      @endforeach
      
  </div>


@endsection