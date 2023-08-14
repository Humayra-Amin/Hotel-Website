<<<<<<< HEAD
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

  </head> --}}
      <body>
<<<<<<< HEAD
               <div class="container main">
                  <div class="row justify-content-center ">
                  <div class="col-md-4">
                  <div class="card bg-success-subtle text-emphasis-success">
                     <h2 class="card-title text-center">Register </h2>
                  <div class="card-body d-flex justify-content-center">
                        <form class="col-md-10">
                           <div class="form-group ">
                              <input type="text" class="form-control" id="name" placeholder="Name">
                           </div>
                           <div class="form-group">
                              <input type="email" class="form-control" id="email" placeholder="Email">
                           </div>
                                             
                               
                         <div class="form-group">
                             <input type="text" class="form-control" id="password" placeholder="Password">
                        </div>
                         <div class="form-group">
                             <input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password">
                        </div>
                         <div class="text-center">
                     
                                    <button class="btn btn-success button5">Create New Account</button>                              
                          
                           </div>
                           <div class="d-flex align-items-center justify-content-center small">
                              <p>Already have an Account? <a href="login">Login</a></p>
                           </div>
   
   
                          </form>
                      </div>
                  </body>
=======
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
>>>>>>> 3093245a05e32bc2acb5d4e035f81cfecb674db2
                
            </html> --}}
            
=======
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('employees/auth/login.css')}}">
</head>
  <body>
     <section class="Form my-5 mx-6 py-5">        
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-5">
                    <img src="{{asset('image/2.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5 text-center py-5">
                    <h1 class="font-weight-bold py-3">Register</h1>
                    <form>
                        <div class="form-row">
                            <div class="offset-1 col-lg-10">
                                <input type="name" placeholder="Username" name="name" class="inp px-3 my-3">
                            </div>
                        </div>
                        <div class="form-row">
                          <div class="offset-1 col-lg-10">
                              <input type="email" placeholder="Email" name="email" class="inp px-3">
                          </div>
                        <div class="form-row">
                            <div class="offset-1 col-lg-10">
                                <input type="password" placeholder="Password" name="password" class="inp my-3 p-3">
                            </div>
                        </div>
                          <div class="form-row">
                            <div class="offset-1 col-lg-10">
                                <input type="password" placeholder="Confirm-password" name="password_confirmation" class="inp px-3">
                            </div>
                        <div class="form-row py-3">
                          <div class="offset-1 col-lg-10">
                              <button type="button" class="btn1 mt-2 mb-4">Create New Account</button>                           
                          </div>
                          <div class="form-row">
                            <p>Already have an Account? <a href="/employee/login">Login</a></p>
                           </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
>>>>>>> 243198bf78d90620b0af2e3de7f41f8b2efe2a79
