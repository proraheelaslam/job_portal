<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
 
    <meta name="msapplication-config" content="{{ asset('admin/browserconfig.xml') }}">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/imgs/template/favicon.svg') }}">
    <link href="{{ asset('admin/assets/css/style.css?version=4.1') }}" rel="stylesheet">

    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <!-- Country code dropdown CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" rel="stylesheet"/>

    <title>Login - Job Portal HTML Template </title>
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
    </style>
  </head>
  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center"><img src="{{ asset('admin/assets/imgs/template/loading.gif') }}" alt="jobBox"></div>
        </div>
      </div>
    </div>

    <div class="box-content" style="padding: 0px;">
      <div class="row"> 
        <div class="col-lg-12"> 
          <div class="section-box">
            <div class="container"> 
              <div class="panel-white mb-0" >
                <div class="box-padding">               
                  <div class="login-register"> 
                    <div class="row login-register-cover">
                      <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                        <div class="form-login-cover">
                          <div class="text-center">
                            <p class="font-sm text-brand-2">Welcome back! </p>
                            <h2 class="mt-10 mb-5 text-brand-1">Login</h2> 
                          </div>
                          
                          <!-- Mobile Number Input -->
                          <form id="mobileForm" class="login-register text-start mt-20">
                            @csrf
                            
                            <div class="form-group">
                              <label class="form-label" for="mobile_number">Mobile Number *</label>
                              <div class="phone-input-container">
                                <select id="country_code" class="form-control country-code-dropdown">
                                  <option value="+91" selected>+91 (IN)</option>
                                  <option value="+1">+1 (US)</option>
                                  <option value="+44">+44 (UK)</option>
                                </select>
                                <input class="form-control" id="mobile_number" type="tel" required name="mobile_number" placeholder="Enter your mobile number">
                              </div>
                            </div>

                            <div class="form-group">
                              <button id="sendOtpButton" class="btn btn-brand-1 hover-up w-100" type="submit">Send OTP</button>
                            </div>

                            <div class="text-muted text-center">Don't have an Account? <a href="{{ route('admin.register.show') }}">Sign up</a></div>
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
  
    <script src="{{ asset('admin/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/jquery.circliful.js') }}"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js" ></script>
    <!-- Country code dropdown JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="{{ asset('admin/assets/js/main.js?v=4.1') }}"></script>

    <script>
      $(document).ready(function () {
        // Send OTP
        $('#mobileForm').on('submit', function(e) {
          e.preventDefault();
          const countryCode = $('#country_code').val();
          const mobileNumber = $('#mobile_number').val();
          
          if (!mobileNumber) {
            toastr.error('Please enter a valid mobile number');
            return;
          }
          
          $('#sendOtpButton').prop('disabled', true).html('Sending OTP...');
          
          // Make AJAX call to send OTP
          $.ajax({
            url: "{{ route('admin.send.otp') }}",
            type: "POST",
            data: {
              country_code: countryCode,
              mobile_number: mobileNumber,
              _token: "{{ csrf_token() }}"
            },
            success: function(response) {
              if (response.success && response.redirect) {
                window.location.href = response.redirect;
              } else {
                toastr.error(response.message || 'Failed to send OTP');
              }
              $('#sendOtpButton').prop('disabled', false).html('Send OTP');
            },
            error: function(xhr) {
              let errors = xhr.responseJSON?.errors;
              if (errors) {
                $.each(errors, function(key, value) {
                  toastr.error(value[0]);
                });
              } else if (xhr.responseJSON?.message) {
                toastr.error(xhr.responseJSON.message);
              } else {
                toastr.error('An error occurred. Please try again.');
              }
              $('#sendOtpButton').prop('disabled', false).html('Send OTP');
            }
          });
        });
      });
    </script>
  </body>
</html>