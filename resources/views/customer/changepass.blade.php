<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Change Password</title>
<link rel="stylesheet" href="{{asset('customer/password.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
  <div class="sidebar">
    <a class="active" href="#home">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
 
 
    {{-- <div class="content-box"> --}}

    <div class="change-body">
      <form>
        <h2 class="text-center">CHANGE PASSWORD</h2>
        <div class=" change-password-form">
          <div class=" form-group">
              <input type="password" class="labelp" id="old-password" placeholder="OLD PASSWORD" name="old-password" required>
          </div>
          <div class="form-group">
                <input type="password" class="labelp" id="new-password" placeholder="NEW PASSWORD" name="new-password" required>
          </div>
          <div class="form-group">
                <input type="password" class="labelp" id="confirm-password" placeholder="CONFIRM PASSWORD" name="confirm-password" required>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <input type="submit" value="Change Password">
        </div>
      
      
  </div>
</form>
</div>

</body>
</html>
