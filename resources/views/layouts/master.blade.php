 <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'MineHive')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Open+Sans:400,700,700i" rel="stylesheet">

    <!-- Favicon & Apple Icon -->
    {{-- <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}"> --}}

    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ asset('assets/css-m/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-m/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-m/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-m/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-m/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-m/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-m/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-m/rev-settings.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-m/plugins.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css-m/style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css-m/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- WOW.js -->
 
 

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup/dist/magnific-popup.css">
 
</head>

<body>

    {{-- Header Include --}}
    @include('frontend.header')

    {{-- Main Content --}}
    <div>
        @yield('content')
    </div>

    {{-- Footer Include --}}
    @include('frontend.footer')

    <!-- JS Assets -->
    {{-- <script data-cfasync="false" src="{{ asset('assets/js-m/email-decode.min.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{ asset('assets/js-m/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js-m/plugins.js') }}"></script>
    <script src="{{ asset('assets/js-m/Popper.js') }}"></script>
    <script src="{{ asset('assets/js-m/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js-m/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js-m/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js-m/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js-m/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js-m/isotope.pkgd.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
    <script src="{{ asset('assets/js-m/scrollax.js') }}"></script>
    <script src="{{ asset('assets/js-m/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets/js-m/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/js-m/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('assets/js-m/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('assets/js-m/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/js-m/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js-m/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/js-m/delighters.js') }}"></script>
    <script src="{{ asset('assets/js-m/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
</body>

</html>
