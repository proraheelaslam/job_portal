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

    <title>Verify OTP - Job Portal HTML Template </title>
    <style>
      .otp-input {
        width: 40px;
        height: 40px;
        text-align: center;
        font-size: 18px;
        margin: 0 5px;
        border: 1px solid #ddd;
        border-radius: 4px;
      }
      .otp-container {
        display: flex;
        justify-content: center;
        margin: 20px 0;
      }
      .country-code-dropdown {
        width: 100px;
      }
      .phone-input-container {
        display: flex;
        align-items: center;
      }
      .resend-otp-link {
        color: #6c757d;
        pointer-events: none;
        text-decoration: none;
      }
      .resend-otp-link.active {
        color: #0d6efd;
        pointer-events: auto;
        text-decoration: underline;
        cursor: pointer;
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
                            <h2 class="mt-10 mb-5 text-brand-1">Verify OTP</h2>
                            <p id="otpSentMessage">Enter the 6-digit OTP sent to {{ $maskedMobile }}</p>
                          </div>
                          
                          <form id="otpForm" class="login-register text-start mt-20">
                            @csrf
                            <input type="hidden" name="country_code" value="{{ $countryCode }}">
                            <input type="hidden" name="mobile_number" value="{{ $mobileNumber }}">
                            
                            <div class="form-group otp-container">
                              <input type="text" class="otp-input" maxlength="1" data-index="1" autofocus>
                              <input type="text" class="otp-input" maxlength="1" data-index="2">
                              <input type="text" class="otp-input" maxlength="1" data-index="3">
                              <input type="text" class="otp-input" maxlength="1" data-index="4">
                              <input type="text" class="otp-input" maxlength="1" data-index="5">
                              <input type="text" class="otp-input" maxlength="1" data-index="6">
                              <input type="hidden" id="full_otp" name="otp">
                            </div>

                            <div class="form-group text-center">
                              <a href="#" id="resendOtp" class="resend-otp-link">Resend OTP (<span id="countdown">30</span>s)</a>
                              <span class="mx-2">|</span>
                              <a href="{{ route('admin.login') }}" id="editNumber">Edit Number</a>
                            </div>

                            <div class="form-group">
                              <button id="verifyOtpButton" class="btn btn-brand-1 hover-up w-100" type="submit">Verify OTP</button>
                            </div>
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
        // Initialize OTP input fields
        $('.otp-input').on('input', function() {
          const index = parseInt($(this).data('index'));
          const value = $(this).val();
          
          if (value.length === 1) {
            if (index < 6) {
              $(`.otp-input[data-index="${index + 1}"]`).focus();
            }
          }
          
          updateFullOtp();
        });
        
        // Handle paste event for OTP
        $('.otp-input').on('paste', function(e) {
          const clipboardData = e.originalEvent.clipboardData || window.clipboardData;
          const pastedData = clipboardData.getData('text');
          
          if (/^\d{6}$/.test(pastedData)) {
            for (let i = 0; i < 6; i++) {
              $(`.otp-input[data-index="${i + 1}"]`).val(pastedData[i]);
            }
            updateFullOtp();
            e.preventDefault();
          }
        });
        
        function updateFullOtp() {
          let fullOtp = '';
          $('.otp-input').each(function() {
            fullOtp += $(this).val();
          });
          $('#full_otp').val(fullOtp);
        }
        
        // Handle backspace in OTP fields
        $('.otp-input').on('keydown', function(e) {
          if (e.key === 'Backspace' && $(this).val() === '') {
            const index = parseInt($(this).data('index'));
            if (index > 1) {
              $(`.otp-input[data-index="${index - 1}"]`).focus();
            }
          }
        });
        
        // Resend OTP functionality
        $('#resendOtp').click(function(e) {
          e.preventDefault();
          if ($(this).hasClass('resend-otp-link') && !$(this).hasClass('active')) {
            return;
          }
          
          $('#resendOtp').removeClass('active').addClass('resend-otp-link').html('Sending OTP...');
          
          $.ajax({
            url: "{{ route('admin.resend.otp') }}",
            type: "POST",
            data: {
              country_code: "{{ $countryCode }}",
              mobile_number: "{{ $mobileNumber }}",
              _token: "{{ csrf_token() }}"
            },
            success: function(response) {
              if (response.success) {
                toastr.success(response.message);
                startResendTimer();
              } else {
                toastr.error(response.message);
                $('#resendOtp').addClass('active').removeClass('resend-otp-link').html('Resend OTP');
              }
            },
            error: function(xhr) {
              toastr.error('An error occurred. Please try again.');
              $('#resendOtp').addClass('active').removeClass('resend-otp-link').html('Resend OTP');
            }
          });
        });
        
        // Start resend OTP timer on page load
        startResendTimer();
        
        function startResendTimer() {
          let seconds = 30;
          $('#countdown').text(seconds);
          $('#resendOtp').removeClass('active').addClass('resend-otp-link');
          
          const timer = setInterval(() => {
            seconds--;
            $('#countdown').text(seconds);
            
            if (seconds <= 0) {
              clearInterval(timer);
              $('#resendOtp').addClass('active').removeClass('resend-otp-link').html('Resend OTP');
            }
          }, 1000);
        }

        // Verify OTP
        $('#otpForm').on('submit', function(e) {
          e.preventDefault();
          const otp = $('#full_otp').val();
          
          if (otp.length !== 6) {
            toastr.error('Please enter a valid 6-digit OTP');
            return;
          }
          
          $('#verifyOtpButton').prop('disabled', true).html('Verifying...');
          
          $.ajax({
            url: "{{ route('admin.verify.otp') }}",
            type: "POST",
            data: $(this).serialize(),
            success: function(response) {
              if (response.success) {
                toastr.success(response.message);
                setTimeout(() => {
                  window.location.href = response.redirect;
                }, 1500);
              } else {
                toastr.error(response.message);
                $('.otp-input').val('').first().focus();
                $('#full_otp').val('');
                $('#verifyOtpButton').prop('disabled', false).html('Verify OTP');
              }
            },
            error: function(xhr) {
                let errors = xhr.responseJSON.errors; 
                // Handle specific error cases
                if (errors) {
                    $.each(errors, function(key, value) {
                        toastr.error(value[0]);
                    });
                } else if (xhr.responseJSON.message) {
                    // If there is a custom message in the response
                    toastr.error(xhr.responseJSON.message);
                } else {
                    // General error fallback
                    toastr.error('An error occurred. Please try again.');
                }
              $('#verifyOtpButton').prop('disabled', false).html('Verify OTP');
            }
          });
        });
      });
    </script>
  </body>
</html>