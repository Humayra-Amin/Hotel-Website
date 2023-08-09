{{-- <!DOCTYPE html>
<head>
   
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('employees/auth/register.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <style>   
      body{
            background-image: url('{{ asset('auth-image/LR.jpg')}}');                 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;                 

         }
   </style>

  </head>
      <body> --}}
         @extends('employee.auth.layout.create')
  
         @section('content')
         
  <div class="form-container">
   <div class="log-container">
       <form class="login-form" action="{{ route('register.post') }}" method="POST">
        @csrf
           <h1>Register</h1>
           <div class="login-form">
           <input type="text" class="label" name="name" id="name" placeholder="Name" required>
           @if ($errors->has('name'))
           <span class="text-danger">{{ $errors->first('name') }}</span>
           @endif
           </div>
           <div class="login-form">
           <input type="email" class="label" name="email" id="email" placeholder="Email" required>
           @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
           @endif
           </div>

           <div class="login-form">
            <input type="password" class="label"name="password" id="password" placeholder="Password">
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
             @endif
          </div>
          <div class="login-form">
            <input type="password" class="label"  name="password_confirmation" id="confirm-password" placeholder="Confirm Password">
          </div>
    
           <div class="login-form">
           <button type="submit">Create New Account</button>
           </div>

           <div class="login-link">
            <p>Already have an Account? <a href="/employee/login">Login</a></p>
           </div>
       </form>
   </div>
 </div>
 @endsection 
                  {{-- </body>
                
            </html> --}}
            