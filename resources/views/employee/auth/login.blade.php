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
                    <h1 class="font-weight-bold py-3">Login</h1>
                    {{-- <h4 class="dd">Sign in to your account</h4> --}}
                    <form>
                        <div class="form-row">
                            <div class="offset-1 col-lg-10">
                                <input type="email" placeholder="Email" name="email" class="inp px-3">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="offset-1 col-lg-10">
                                <input type="password" placeholder="Password" name="password" class="inp my-3 p-3">
                            </div>
                        </div>
                        <div class="form-row py-3">
                            <div class="offset-1 col-lg-10">
                                <button type="button" class="btn1 mt-2 mb-4">Login</button>                           
                            </div>
                        </div>
                        <a href="#" class="px-5 pt-5">Forgot Password?</a>
                        <p class="mt-2 mb-4">Don't have an Account? <a href="#">Register here</a></p>
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