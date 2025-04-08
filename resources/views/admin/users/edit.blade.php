@extends('admin.layouts.app')

@section('title', 'Edit User')

@section('content')
    <div class="card">
        <h5 class="card-header">Edit User</h5>
        <div class="card-body">
            <form id="editUserForm" action="{{ route('admin.users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="full_name" class="form-label">Full Name</label>
                        <input type="text" class="form-control @error('full_name') is-invalid @enderror" 
                               id="full_name" name="full_name" value="{{ old('full_name', $user->full_name) }}">
                        @error('full_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                               id="email" name="email" value="{{ old('email', $user->email) }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                               id="phone" name="phone" value="{{ old('phone', $user->phone) }}">
                        <input type="hidden" name="country_code" id="countryCode">
                        <small id="phoneHelp" class="form-text text-muted">
                           
                        </small>
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-control @error('role') is-invalid @enderror"  id="role" name="role">
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


  


    @push('scripts')

<script>
    $(document).ready(function () {
        const phoneInput = $("#phone")[0];
        const phoneError = $("#phoneError");
        const form = $("#editUserForm");
        
        // Initialize with existing phone number
        const existingPhone = "{{ $user->phone }}";
        const initialCountry = existingPhone ? getCountryFromPhone(existingPhone) : "in";
        
        const iti = window.intlTelInput(phoneInput, {
            initialCountry: initialCountry,
            separateDialCode: true,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            nationalMode: false
        });
        
        $('#phone').css('padding-right', '254px');

        // Set the existing phone number
        if (existingPhone) {
            iti.setNumber(existingPhone);
            $('#countryCode').val('+' + iti.getSelectedCountryData().dialCode);
        }

        // Update hidden country code field when country changes
        $(phoneInput).on('countrychange', function() {
            $('#countryCode').val('+' + iti.getSelectedCountryData().dialCode);
        });

        // Form submission handler
        form.on('submit', function(e) {
            const phoneNumber = iti.getNumber();
            
            if (!phoneNumber) {
                e.preventDefault();
                showError('Please enter a valid phone number');
                $(phoneInput).focus();
                return false;
            }
            
            // Set the formatted phone number with country code
            $(phoneInput).val(phoneNumber);
            return true;
        });

        function getCountryFromPhone(phone) {
            try {
                const parsed = libphonenumber.parsePhoneNumber(phone);
                return parsed ? parsed.country : "in";
            } catch (e) {
                return "in";
            }
        }

        function showError(message) {
            phoneError.text(message).show();
            $(phoneInput).addClass('is-invalid');
        }
    });
</script>
@endpush
@endsection