
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
   
    <link rel="stylesheet" type="text/css" link href="{{asset('rooms/vendor/fontawesome-free/css/all.min.css')}}">

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>


    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{asset('rooms/css/sb-admin-2.min.css')}}">
    <link rel="stylesheet" href="{{asset('rooms/css/karima.css')}}">
    <link rel="stylesheet" href="{{asset('rooms/css/jaima.css')}}">
    <link rel="stylesheet" href="{{asset('rooms/css/urbashi.css')}}">
    <link rel="stylesheet" href="{{asset('rooms/css/login.css')}}">
    <link rel="stylesheet" href="{{asset('rooms/css/register.css')}}">
   

    <!--drag and drop -->
    <link rel="stylesheet" href="style.css">
    



</head>
<body id="page-top">

   
    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('room.inc.nav')

        @yield('app')
    
    </div>

    
    
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('rooms/vendor/jquery/jquery.min.js')}}"></script>
    
    <!-- slick js -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <script src="{{asset('rooms/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('rooms/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('rooms/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('rooms/vendor/chart.js/Chart.min.js')}}"></script>

    <!--login register-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  


    <script src="{{asset('rooms/js/jaima.js')}}"></script>
    <script src="{{asset('rooms/js/karima.js')}}"></script>
    <script src="{{asset('rooms/js/urbashi.js')}}"></script>
    
    <!-- Page level custom scripts -->
    {{-- <script src="{{asset('rooms/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('rooms/js/demo/chart-pie-demo.js')}}"></script> --}}

  </body>
</html>