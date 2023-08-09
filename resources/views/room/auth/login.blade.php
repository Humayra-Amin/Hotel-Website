
 @extends('room.layouts.app')
  
 @section('app') 
 
 @include('room.inc.message')
 <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

       


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
        </div>
    </div>

@endsection
        



