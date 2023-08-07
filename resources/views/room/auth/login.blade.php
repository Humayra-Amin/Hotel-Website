{{-- <!DOCTYPE html>
<title>Login</title>
<link rel="stylesheet" href="{{asset('rooms/css/login.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script> --}}

 @extends('room.auth.layout.create')
  
 @section('content') 
 
 @include('room.inc.message')

        <div class="form-container">
            <div class="log-container">
                <form class="login-form" action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <h1>Login</h1>
                    <div class="login-form">
                    <input type="email" class="label" name="email" id="email" placeholder="Email" required>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif

                    </div>
        
                    <div class="login-form">
                    <input type="password" class="label" name="password" id="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    </div>
        
                    <div class="form-options">
                        <label class="remember">
                            <input type="checkbox" name="remember"> Remember me
                        </label>
                        <a href="#">Forgot password?</a>
                    </div>
        
                    <button type="submit">Login</button>
        
                    <div class="signup-link">
                        Don't have an account? <a href="/room/registration">Sign Up</a>
                    </div>
                </form>
            </div>
          </div>
@endsection
        



