<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Bery-Real Estate Listing Template</title>
    <meta name="AdsBot-Google" content="noindex follow" />
    <meta name="description" content="Bery-Real Estate Listing Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}" />

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!--  <link rel="stylesheet" href="./assets/css/vendor/icofont.min.css" />
  <link rel="stylesheet" href="./assets/css/vendor/line-awesome.min.css"/>
  <link rel="stylesheet" href="./assets/css/vendor/simple-line-icons.css"/> -->
    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->

    <!-- Plugins CSS (All Plugins Files) -->

    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/plugins/magnific-popup.css')}}" />

    <link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.css')}}" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />

</head>


<body class="font-ubuntu text-body text-tiny">
<div class="overflow-x-hidden">
    @include('templates.partials._header')
    @yield('content')
    @include('templates.partials._footer')
</div>


<!-- JS Vendor, Plugins & Activation Script Files -->

<!-- Vendors JS -->
<script src="{{asset('assets/js/vendor/modernizr-3.11.7.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/popper.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/parallax.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.nice-select.min.js')}}"></script>

<!-- Activation JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
