<!doctype html>
<html class="no-js" lang="SK">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ZK DUNAJPLAVBA</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css//style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/layerslider.css') }}">
    <script src="{{ asset('assets/js/vendor/modernizr.js') }}"></script>
</head>
<body>
<!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="wrapper">
    @include('sections/header')

    @yield('content')

    @include('sections/footer')
</div>



<script src="{{ asset('assets/js/vendor/vendor.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
