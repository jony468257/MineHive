@extends('auth.auth')
@section('title', 'Login')
@section('content')
    <div class="row main-contain">
        <div class="card card-bg">
            <style>
                .login-logo {
                    width: 150px;
                    /* or any size like 100px, 200px */
                    height: auto;
                    /* auto keeps the image ratio correct */
                }
            </style>

            <div class="d-flex justify-content-center align-items-center">
                <img class="login-logo" src="{{ asset('assets/image/logo/logo.png') }}" alt="MineHive Logo">
            </div>
            
            <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="text_border"></div>
                <h6 class="text_middle">Customer Relationship Management</h6>
                <div class="text_border"></div>
            </div>
            <div class="card-body p-0">
                <div class="text-center mt-2">
                    <h1 class="sign-title">Sign in</h1>
                </div>
                <form method="POST" action="{{ route('login') }}" role="form" id="form_login" class="form-horizontal">
                    @csrf
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="mb-3 mt-3">
                        <label for="exampleFormControlInput1" class="form-label label-font-size">Email
                            address</label>
                        <input type="email" id="exampleFormControlInput1" placeholder="Enter Your Email address"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <div class="text-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 password">
                        <label for="password" class="form-label label-font-size">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            autocomplete="current-password" id="password" placeholder="Enter Password" required>
                        <button type="button" class="border-0 eye-show" id="pass_view">
                            <i class="password-show-icon ni-visibility"></i>
                        </button>
                        @error('password')
                            <div class="text-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="form-check">
                        <input class="form-check-input border border-dark" value="1" type="checkbox" id="remember"
                            name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <button class="login-btn w-100 mt-3">Login</button>
                    <div class="text-center w-100 mt-3 d-flex justify-content-between">
                        <a href="{{ route('register') }}" class="fw-medium text-primary">Registration</a>
                        <a href="{{ route('password.request') }}" class="text-light"><u>Forgot Password?</u></a>
                    </div>
                    <div class="text-center">
                        <p class="uss">Design & Developed by: United Software Solutions</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $('#pass_view').click(function(e) {
            e.preventDefault();
            let target = $('#password');
            $(target).attr('type', $(target).attr('type') === 'password' ? 'text' : 'password');
            $('.password-show-icon').toggleClass('ni-visibility ni-visibility-off');
        });
    </script>
@endpush
