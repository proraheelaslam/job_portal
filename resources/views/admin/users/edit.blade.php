@extends('admin.layouts.app')

@section('title', 'Edit User')

@section('content')
    <div class="card">
        <h5 class="card-header">Edit User</h5>
        <div class="card-body">
            <!-- Regular form submission with POST method and method spoofing -->
            <form id="editUserForm" action="{{ route('admin.users.update', $user->id) }}" method="POST">
                @csrf  <!-- CSRF token for security -->
                @method('PUT') <!-- Method Spoofing for PUT request -->

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="full_name" class="form-label">Full Name</label>
                        <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name" name="full_name" value="{{ old('full_name', $user->full_name) }}">
                        @error('full_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="country_code" class="form-label">Country Code</label>
                        <select class="form-control @error('country_code') is-invalid @enderror" id="country_code" name="country_code">
                            <option value="+1" {{ old('country_code', substr($user->phone, 0, 2)) == '+1' ? 'selected' : '' }}>+1 (USA)</option>
                            <option value="+44" {{ old('country_code', substr($user->phone, 0, 3)) == '+44' ? 'selected' : '' }}>+44 (UK)</option>
                            <option value="+91" {{ old('country_code', substr($user->phone, 0, 3)) == '+91' ? 'selected' : '' }}>+91 (India)</option>
                            <!-- Add more country codes as needed -->
                        </select>
                        @error('country_code')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-8 mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', substr($user->phone, 3)) }}">
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-control @error('role') is-invalid @enderror" id="role" name="role">
                            <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>User</option>
                            <option value="employee" {{ old('role', $user->role) == 'employee' ? 'selected' : '' }}>Employee</option>
                            <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                        </select>
                        @error('role')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
