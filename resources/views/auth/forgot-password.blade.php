@php use Illuminate\Support\Facades\Session; @endphp
@extends('auth.auth')
@section('title', 'Reset Password')
@section('content')
    <div class="row main-contain">
        <div class="card card-bg">
            <div class="d-flex justify-content-center align-items-center">
                <img class="login-logo" src="{{ asset('assets/icons/mimba_full_logo.svg') }}" alt="logo">
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="text_border"></div>
                <h6 class="text_middle">Dairy Data Management Software</h6>
                <div class="text_border"></div>
            </div>
            <div class="card-body">
                <div class="text-center mt-2">
                    <h6 class="sign-title"> {{ __('Reset Password') }}</h6>
                </div>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}" class="form-horizontal">
                    @csrf
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="mb-3 mt-4">
                        <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="text-center w-100 mt-3">
                        <button class="login-btn w-100 mt-3" type="submit"> {{ __('Send Password Reset Link') }}</button>
                    </div>
                </form>
                <div class="mt-5 text-center">
                    <p>Remember It ? <a href="{{route('login')}}" class="fw-medium text-primary"> Sign In here</a></p>
                </div>
                <div class="text-center">
                    <p class="uss">Design & Developed by: United Software Solutions</p>
                </div>
            </div>
        </div>
    </div>
@endsection
