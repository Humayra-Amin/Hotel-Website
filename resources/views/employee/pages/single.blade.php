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
            <p class="card-text">Front Desk Receptionist</p>
            <p class="card-text">Front Office</p>
            <p class="card-text">Email: JasonRoy@gmail.com</p>
            <p class="card-text">Phone: +1 123-456-7890</p>
        </div>
        </div>
    </div>
  

    @endsection