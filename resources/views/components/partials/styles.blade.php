<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('assets/image/logo/icon.svg') }}">
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<link rel="stylesheet" href="{{ asset('assets/lib/datepicker/datepicker.min.css') }}">
{{--bootstrap CSS--}}
<link rel="stylesheet" href="{{asset('assets/lib/bootstrap-5.3.1-dist/css/bootstrap.min.css')}}"/>
<link href="{{asset('assets/lib/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet"
      type="text/css">
{{-- select2 cdn--}}
<link rel="stylesheet" href="{{asset('assets/lib/select2/select2.min.css')}}"/>
{{--    data tables CSS--}}
<link rel="stylesheet" href="{{asset('assets/lib/toaster/toastr.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/lib/datatables/datatables.min.css')}}">
{{--    custom CSS--}}
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}"/>

<link rel="stylesheet" href="{{ asset('assets/icons/ni-icon/dist/ni-icon.min.css') }}">
<link rel="stylesheet" href="{{asset('assets/scss/main.min.css')}}"/>
<link rel="stylesheet" href="{{asset('css/app.css')}}"/>
{{--    on page CSS--}}
@stack('styles')
{!! $css !!}
