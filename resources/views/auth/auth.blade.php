<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8"/>
    <title> @yield('title') | Smart-Dairy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <link rel="shortcut icon" href="{{ asset('assets/image/logo/icon.svg') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap-5.3.1-dist/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/icons/ni-icon/dist/ni-icon.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/login.min.css')}}"/>
    @yield('styles')
</head>
<body>

@yield('content')

<script src="{{asset('assets/lib/jquery/jquery@3.7.0_dist_jquery.min.js')}}"></script>
@stack('scripts')
</body>
</html>

