<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('employees/auth/customerlist.css')}}">
  <title>Hotel Paradise - Customer List</title>
</head>
<body>
  <div class="container">
    <h1 class="my-5">Customer List - Hotel Paradise</h1>

    @include('admin.inc.message')


    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Room No</th>
          <th>Check-in Date</th>
          <th>Check-out Date</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>


        @foreach($customers as $customer)

        <tr>
        <td>{{$customer->name}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->roomno}}</td>  
        <td>{{$customer->status}}</td>  
        <span> <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="bi bi-eye"></i></button></span>
      </tr>


        {{-- <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>john@gmail.com</td>
          <td>101</td>
          <td>2023-08-25</td>
          <td>2023-08-28</td>
          <td>Booked</td> --}}
          {{-- <td><i class="bi bi-eye-fill text-primary"></i></td> --}}
          {{-- <td class="text-right">
            <span> <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="bi bi-eye"></i></button></span>
            </td>
        </tr> --}}



        @endforeach




        {{-- <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>jane@gmail.com</td>
          <td>102</td>
          <td>2023-08-26</td>
          <td>2023-08-30</td>
          <td>Booked</td>
          <td class="text-right">
            <span> <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="bi bi-eye"></i></button></span>
            </td>        </tr>
        <tr>
            <td>3</td>
            <td>Abdur Rahman</td>
            <td>Abdurrahman@gmail.com</td>
            <td>104</td>
            <td>2023-08-29</td>
            <td>2023-09-07</td>
            <td>Booked</td>
            <td class="text-right">
              <span> <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="bi bi-eye"></i></button></span>
              </td>          
            </tr>
          <tr>
            <td>4</td>
            <td>Humaira Amin</td>
            <td>Humairaamin@gmail.com</td>
            <td>106</td>
            <td>2023-08-30</td>
            <td>2023-09-09</td>
            <td>Booked</td>
            <td class="text-right">
              <span> <button type="button" title="view" class="btn btn-outline-primary btn-eye"><i class="bi bi-eye"></i></button></span>
              </td>
          </tr> --}}
       
      </tbody>
    </table>
  </div>
</body>
</html>
