@extends('admin.layouts.app')

@section('title', 'My Profile')

@section('content')
    <div class="card">
        <h5 class="card-header">Edit Profile</h5>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row mb-3 align-items-center">
                    <div class="col-md-2">
                        <label for="profile_picture" class="form-label">Profile Picture</label>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            @if($user->profile_picture)
                                <img src="{{ asset('admin/uploads/profiles/' . $user->profile_picture) }}" 
                                     alt="Profile Picture" 
                                     class="rounded-circle me-3" 
                                     width="80" 
                                     height="80">
                            @else
                                <div class="rounded-circle bg-secondary me-3" 
                                     style="width: 80px; height: 80px;"></div>
                            @endif
                            <input type="file" class="form-control" id="profile_picture" name="profile_picture">
                        </div>
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <div class="col-md-2">
                        <label for="full_name" class="form-label">User Name</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control @error('full_name') is-invalid @enderror" 
                               id="full_name" name="full_name" 
                               value="{{ old('full_name', $user->full_name) }}">
                        @error('full_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            

                <div class="row mb-3 align-items-center">
                    <div class="col-md-2">
                        <label for="password" class="form-label">Password</label>
                    </div>
                    <div class="col-md-6">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" 
                               id="password" name="password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="text-muted">Leave blank to keep current password</small>
                    </div>
                </div>

                <div class="row mb-3 align-items-center">
                    <div class="col-md-2">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                    </div>
                    <div class="col-md-6">
                        <input type="password" class="form-control" 
                               id="password_confirmation" name="password_confirmation">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 offset-md-2">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection