<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Discover how Prashant Daebak leverages advanced AI technology to simplify job interviews, exam preparation, and everyday problem-solving. Learn about our commitment to personalized support, innovation, and your success.">
    <meta name="keywords" content="Prashant Daebak, AI solutions, job interviews, exam preparation, daily life challenges, AI technology, personalized support, innovation">
    <meta name="author" content="Prashant Daebak">
    
    <!-- Open Graph Meta Tags (for social media sharing) -->
    <meta property="og:title" content="About Prashant Daebak: AI Solutions for Jobs, Exams & Daily Life Challenges">
    <meta property="og:description" content="Discover how Prashant Daebak leverages advanced AI technology to simplify job interviews, exam preparation, and everyday problem-solving. Learn about our commitment to personalized support, innovation, and your success.">
    <meta property="og:image" content="{{ asset('front_end/assets/imgs/template/og-image.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="About Prashant Daebak: AI Solutions for Jobs, Exams & Daily Life Challenges">
    <meta name="twitter:description" content="Discover how Prashant Daebak leverages advanced AI technology to simplify job interviews, exam preparation, and everyday problem-solving. Learn about our commitment to personalized support, innovation, and your success.">
    <meta name="twitter:image" content="{{ asset('front_end/assets/imgs/template/og-image.jpg') }}">

    <!-- Favicon and Manifest -->
    <link rel="manifest" href="{{ asset('front_end/manifest.json') }}" crossorigin>
    <meta name="msapplication-config" content="{{ asset('front_end/browserconfig.xml') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front_end/assets/imgs/template/favicon.svg') }}">

    <!-- Stylesheets -->
    <link href="{{ asset('front_end/assets/css/style.css?version=4.1') }}" rel="stylesheet">

    <!-- Title Tag -->
    <title>About Prashant Daebak: AI Solutions for Jobs, Exams & Daily Life Challenges</title>
  </head>
  <body>

    @include('front_end.partials.header')
    @yield('content')
    @include('front_end.partials.footer')

    <!-- Scripts -->
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
