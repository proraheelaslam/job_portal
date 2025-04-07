@extends('admin.auth.app')

@section('content')


      <h4 class="text-center mb-4">Reset Password</h4>
      
      <form  class="mb-6" action="{{ route('admin.resetPassword.post') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">


        <div class="mb-6">
          <label for="password" class="form-label">New Password</label>
          <div class="input-group input-group-merge">
            <input type="password" id="password" class="form-control" name="password" placeholder="Enter new password" required>
            <span class="input-group-text cursor-pointer"><i class="icon-base bx bx-hide"></i></span>
          </div>
        </div>

        <div class="mb-6">
          <label for="password_confirmation" class="form-label">Confirm Password</label>
          <div class="input-group input-group-merge">
            <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="Confirm new password" required>
            <span class="input-group-text cursor-pointer"><i class="icon-base bx bx-hide"></i></span>
          </div>
        </div>

        <button class="btn btn-primary d-grid w-100" type="submit">Reset Password</button>
      </form>
    </div>
  
@endsection









   