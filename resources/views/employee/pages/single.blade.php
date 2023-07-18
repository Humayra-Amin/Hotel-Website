@extends('employee.layouts.app')

@section('content')

<title>Employee Detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/fardin.css')}}">
    </head>
    <body>
    <div class="container">
        <div class="card">
        <img src="{{asset('image/Employee/Jason Roy.jpg')}}" class="card-img-top" alt="Employee Avatar">
        <div class="card-body">
            <h2 class="card-title">Jason Roy</h2>
            <div class="box">
            <p class="card-text">Front Desk Receptionist</p>
            <p class="card-text">Father's Name: Alex Hale</p>
            <p class="card-text">Mother's Name: Emma Watson</p>
            <p class="card-text">Date of Birth: 01/05/1995</p>
            <p class="card-text">Present Address: House no-30,New York City</p>
            <p class="card-text">Parmanent Address: House no-10,Vancouver </p>
            <p class="card-text">Nationality: United states</p>
            <p class="card-text">Email: JasonRoy@gmail.com</p>
            <p class="card-text">Phone: +1 123-456-7890</p>
            </div>
        </div>
    </div>
  

    @endsection