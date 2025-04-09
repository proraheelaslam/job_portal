<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <link rel="manifest" href="{{ asset('front_end/manifest.json') }}" crossorigin>
    <meta name="msapplication-config" content="{{ asset('front_end/browserconfig.xml') }}">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front_end/assets/imgs/template/favicon.svg') }}">
    <link href="{{ asset('front_end/assets/css/style.css?version=4.1') }}" rel="stylesheet">
    <title>Jobbox - Job Portal HTML Template </title>
  </head>
  <body>

    @include('front_end.partials.header')
    @yield('content')
    @include('front_end.partials.footer')

    <script src="{{ asset('front_end/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/plugins/wow.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/plugins/isotope.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('front_end/assets/js/main.js?v=4.1') }}"></script>

  </body>
</html>
