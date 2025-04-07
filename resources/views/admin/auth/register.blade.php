<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up - Job Portal</title>
    <link href="{{ asset('admin/assets/css/style.css?version=4.1') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <style>
        .country-code-dropdown {
            width: 100px;
        }
        .phone-input-container {
            display: flex;
            align-items: center;
        }
        #mobile_number {
            flex: 1;
            margin-left: 10px;
        }
        /* Add red border for invalid input */
        .invalid-number {
            border-color: #ff0000 !important;
        }
    </style>
</head>
<body>
    <div class="box-content" style="padding: 0px;">
        <div class="row"> 
            <div class="col-lg-12"> 
                <div class="section-box">
                    <div class="container"> 
                        <div class="panel-white mb-0">
                            <div class="box-padding">               
                                <div class="login-register"> 
                                    <div class="row login-register-cover">
                                        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                                            <div class="form-login-cover">
                                                <div class="text-center">
                                                    <p class="font-sm text-brand-2">Create your account</p>
                                                    <h2 class="mt-10 mb-5 text-brand-1">Sign Up</h2> 
                                                </div>
                                                
                                                <!-- Sign Up Form -->
                                                <form id="signupForm" class="login-register text-start mt-20">
                                                    @csrf
                                                    
                                                    <div class="form-group">
                                                        <label class="form-label" for="full_name">Full Name *</label>
                                                        <input class="form-control" id="full_name" type="text" required name="full_name" placeholder="Enter your full name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Email (optional)</label>
                                                        <input class="form-control" id="email" type="email" name="email" placeholder="Enter your email">
                                                        <small class="text-muted">Recommended for account recovery</small>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-label" for="mobile_number">Mobile Number *</label>
                                                        <div class="phone-input-container">
                                                            <select id="country_code" class="form-control country-code-dropdown">
                                                                <option value="+91" selected>+91 (IN)</option>
                                                                <option value="+1">+1 (US)</option>
                                                                <option value="+44">+44 (UK)</option>
                                                            </select>
                                                            <input class="form-control" id="mobile_number" type="tel" required name="mobile_number" 
                                                                   placeholder="Enter your mobile number" pattern="[0-9]*" inputmode="numeric">
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <button id="signupButton" class="btn btn-brand-1 hover-up w-100" type="submit">Create Account</button>
                                                    </div>

                                                    <div class="text-muted text-center">Already have an account? <a href="{{ route('admin.login') }}">Sign in</a></div>
                                                </form>
                                            </div>
                                            <div class="img-2"><img src="{{ asset('admin/assets/imgs/page/login-register/img-3.svg') }}" alt="JobBox"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            // Restrict mobile number field to numbers only
            $('#mobile_number').on('input', function(e) {
                // Remove any non-numeric characters
                this.value = this.value.replace(/[^0-9]/g, '');
                
                // Toggle invalid class based on input
                if(/[^0-9]/.test(this.value)) {
                    $(this).addClass('invalid-number');
                } else {
                    $(this).removeClass('invalid-number');
                }
            });

            // Prevent paste of non-numeric characters
            $('#mobile_number').on('paste', function(e) {
                // Get pasted data
                const pasteData = e.originalEvent.clipboardData.getData('text');
                
                // Check if pasted data contains non-numeric characters
                if(/[^0-9]/.test(pasteData)) {
                    e.preventDefault();
                    toastr.error('Only numbers are allowed in mobile number field');
                }
            });

            $('#signupForm').on('submit', function(e) {
                    e.preventDefault();

                    const fullName = $('#full_name').val();
                    const email = $('#email').val();
                    const countryCode = $('#country_code').val();
                    const mobileNumber = $('#mobile_number').val();

                    // Combine country code and mobile number
                    const fullPhoneNumber = countryCode + mobileNumber;

                    // Additional client-side validation
                    if(!/^\d+$/.test(mobileNumber)) {
                        toastr.error('Mobile number should contain only numbers');
                        $('#mobile_number').addClass('invalid-number');
                        return;
                    }

                    $('#signupButton').prop('disabled', true).html('Creating account...');

                    $.ajax({
                        url: "{{ route('admin.register') }}",
                        type: "POST",
                        data: {
                            full_name: fullName,
                            email: email,
                            phone: fullPhoneNumber, // Send combined phone number
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            if (response.success) {
                                toastr.success(response.message);
                                setTimeout(() => {
                                    window.location.href = response.redirect;
                                }, 1500);
                            } else {
                                toastr.error(response.message);
                            }
                            $('#signupButton').prop('disabled', false).html('Create Account');
                        },
                        error: function(xhr) {
                            let errors = xhr.responseJSON.errors;
                            if (errors) {
                                $.each(errors, function(key, value) {
                                    toastr.error(value[0]);
                                });
                            } else if (xhr.responseJSON.message) {
                                toastr.error(xhr.responseJSON.message);
                            } else {
                                toastr.error('An error occurred. Please try again.');
                            }
                            $('#signupButton').prop('disabled', false).html('Create Account');
                        }
                    });
                });

        });
    </script>
</body>
</html>