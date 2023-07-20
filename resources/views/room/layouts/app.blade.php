
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="https://fonts.google.com/share?selection.family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
   
    <link rel="stylesheet" type="text/css" link href="{{asset('rooms/vendor/fontawesome-free/css/all.min.css')}}">
    {{-- <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> --}}

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{asset('rooms/css/sb-admin-2.min.css')}}">
    <link rel="stylesheet" href="{{asset('rooms/css/karima.css')}}">
    <link rel="stylesheet" href="{{asset('rooms/css/jaima.css')}}">
    <link rel="stylesheet" href="{{asset('rooms/css/urbashi.css')}}">

    <link rel="stylesheet" href="{{asset('rooms/js/jaima.js')}}">
    
    <link rel="stylesheet" href="{{asset('rooms/js/karima.js')}}">
    


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">


</head>
<body id="page-top">

   
    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('room.inc.nav')

        @yield('app')
    
    </div>

    
    

    <script src="{{ asset('js/app.js') }}"></script>


   <!--slicker-->
    {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> --}}
    {{-- <script type="text/javascript" src="slick/slick.min.js"></script> --}}

    
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('rooms/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('rooms/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('rooms/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('rooms/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('rooms/vendor/chart.js/Chart.min.js')}}"></script>


  </body>
</html>