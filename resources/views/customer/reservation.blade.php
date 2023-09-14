{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Room Reservation</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add custom CSS -->
    <link rel="stylesheet" href="{{asset('customer/css/reservation.css')}}"></head>
<body> --}}

    @extends('customer.layouts.apps')

 @section('apps')


    <div class="text">
    <div class="group">
        <h1 class="text-title text-center my-4">Reservation</h1>
        <form id="reservationForm">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" required>
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
            <button type="submit" class="btn btn-primary button-file">Submit</button>
        </form>
    </div>
</div>

    {{-- <!-- Add Bootstrap JS and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Add custom JS -->
    <script src="script.js"></script>
</body>
</html> --}}

@endsection