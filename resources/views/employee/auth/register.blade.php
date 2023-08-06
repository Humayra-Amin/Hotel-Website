<!DOCTYPE html>
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
      <body>
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
                             <input type="password" class="form-control" id="password" placeholder="Password">
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
                
            </html>
            