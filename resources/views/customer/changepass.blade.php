@extends('customer.layouts.app')
@section('app')
@include('admin.inc.message')

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
@endsection

