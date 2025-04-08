@extends('admin.layouts.app')

@section('title', 'Register User')

@section('content')
    <div class="card">
        <h5 class="card-header">Add New User</h5>
        <div class="card-body">
            <form action="{{ route('admin.users.store') }}" method="POST" id="userForm">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="full_name" class="form-label">Full Name*</label>
                        <input type="text" class="form-control @error('full_name') is-invalid @enderror" 
                               id="full_name" name="full_name" value="{{ old('full_name') }}" >
                        @error('full_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                               id="email" name="email" value="{{ old('email') }}" >
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="phone" class="form-label">Phone Number*</label>
                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}"   >
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
                        <label for="role" class="form-label">Role*</label>
                        <select class="form-control @error('role') is-invalid @enderror" 
                                id="role" name="role" >
                            <option value="">Select Role</option>
                            <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                            <option value="employee" {{ old('role') == 'employee' ? 'selected' : '' }}>Employee</option>
                            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                        </select>
                        @error('role')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>



    @push('scripts')
    <script>

$(document).ready(function () {
    const phoneInput = $("#phone")[0];
    const phoneError = $("#phoneError");
    const form = $("#userForm");
    
    const iti = window.intlTelInput(phoneInput, {
        initialCountry: "in",
        separateDialCode: true,  
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
    });
    $('#phone').css('padding-right', '248px');


    $(phoneInput).on('countrychange', function() {
        $('#countryCode').val('+' + iti.getSelectedCountryData().dialCode);
    });

    function validatePhoneNumber() {
        const phoneNumber = iti.getNumber(); 
        const countryCode = iti.getSelectedCountryData().iso2;
        
        try {
            const parsedNumber = libphonenumber.parsePhoneNumber(phoneNumber);
            
            if (!parsedNumber || !parsedNumber.isValid()) {
                showError('Please enter a valid phone number for ' + iti.getSelectedCountryData().name);
                return false;
            }
            
            clearError();
            return true;
        } catch (e) {
            showError('Invalid phone number format');
            return false;
        }
    }

    function showError(message) {
        phoneError.text(message).show();
        $(phoneInput).addClass('is-invalid');
    }

    function clearError() {
        phoneError.hide();
        $(phoneInput).removeClass('is-invalid');
    }

    form.on('submit', function(e) {
        if (!validatePhoneNumber()) {
            e.preventDefault();
            $(phoneInput).focus();
            return false;
        }
        
        const fullNumber = iti.getNumber();
        $(phoneInput).val(fullNumber);
        return true;
    });


    $('#countryCode').val('+' + iti.getSelectedCountryData().dialCode);

});
</script>
    @endpush
    
@endsection