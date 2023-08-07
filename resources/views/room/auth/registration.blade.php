{{-- <!DOCTYPE html>
<head>
   
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('rooms/css/register.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </head> --}}

  @extends('room.auth.layout.create')
  
  @section('content')
  <div class="form-container">
   <div class="log-container">
       <form class="login-form">
           <h1>Register</h1>
           <div class="login-form">
           <input type="text" class="label" id="name" placeholder="Name" required>
           </div>
           <div class="login-form">
           <input type="email" class="label" id="email" placeholder="Email" required>
           </div>
           <div class="login-form">
            <input type="password" class="label" id="password" placeholder="Password">
          </div>
          <div class="login-form">
            <input type="password" class="label" id="confirm-password" placeholder="Confirm Password">
          </div>
    
           <div class="login-form">
           <button type="submit">Create New Account</button>
           </div>

           <div class="login-link">
            <p>Already have an Account? <a href="/room/login">Login</a></p>
           </div>
       </form>
   </div>
 </div>
 @endsection   
                      
            