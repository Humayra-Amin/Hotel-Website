
  @extends('room.layouts.app')
  
  @section('app') 
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

       

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
            <p>Already have an Account? <a href="/room/login">Login</a></p>
           </div>
       </form>
   </div>
 </div>
</div>
</div>
 @endsection   
                      
            