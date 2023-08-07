{{-- <!DOCTYPE html>
<title>Login</title>
<link rel="stylesheet" href="{{asset('employees/auth/login.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
         <style>   
            body{
                  background-image: url('{{ asset('auth-image/LR.jpg')}}');                 
                  background-position: center;
                  background-repeat: no-repeat;
                  background-size: cover;                 

               }
               
         </style>

<body> --}}
  {{-- <div id="loading" style="background-image: url('{{ asset('auth-image/LR.jpg')}}') background-position: center background-repeat: no-repeat background-size: cover;"> --}}
    @extends('employee.auth.layout.create')
  
    @section('content') 
   
          <div class="container part">
    
           
            <div class="row justify-content-center">
            
              <div class="col-sm-4">
                <div class="card bg-success-subtle text-emphasis-success">
                  <h3 class="card-title text-center">Login </h3>
                  <div class="card-body d-flex justify-content-center">
                    <form class="col-md-10" action="{{ route('login.post') }}" method="POST">
                      @csrf
                      <div class="form-group d-flex ">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                      </div>

                      <div class="form-group d-flex">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                      </div>

                      <div class=" d-flex align-items-center justify-content-center ">

                        <button class="btn btn-primary button2">Login</button>

                      </div>

                      <a class=" d-flex align-items-center justify-content-center slow" href=#>Forget Password?</a>
                      <div class="d-flex align-items-center justify-content-center small ">
                        <p>Don't have an Account? <a href="register">Register</a></p>
                      </div>
                    </form>
                  
                  </div>
                  @endsection
                {{-- <body>
        </html> --}}