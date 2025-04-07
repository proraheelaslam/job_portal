<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E"> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="msapplication-config" content="{{ asset('admin/assets/browserconfig.xml') }}">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/imgs/template/favicon.svg') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="{{ asset('admin/assets/css/style.css?version=4.1') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link href="{{ asset('admin/assets/css/custom.css?version=4.1') }}" rel="stylesheet">

    <!-- Add these in your head section -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
@stack('styles')
    <title>Jobbox Dashboard - Job Portal HTML Template</title>
</head>
<body>
    @include('admin.partials.preloader')
    @include('admin.partials.header')

    
    <main class="main">
         @include('admin.partials.sidebar')
        <div class="box-content">
             @yield('content')
        </div>
    </main>

    @include('admin.partials.footer')

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
    <script src="{{ asset('admin/assets/js/plugins/charts/xy.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/charts/Animated.js') }}"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js" ></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="{{ asset('admin/assets/js/main.js?v=4.1') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/libphonenumber-js@1.10.6/bundle/libphonenumber-js.min.js"></script>
    @stack('scripts') 
</body>
</html>
