@extends('auth.auth')
@section('title','Change Password')
@section('styles')
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Mulish', sans-serif;
        }

        .main-contain {
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: right;
            align-items: center;
            backdrop-filter: blur(2px);
            background-image: url("{{asset('assets/image/login_bg.webp')}}");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .card-bg {
            /*background-color: rgba(244, 244, 244, 0.41);*/
            margin-right: 80px;
            padding: 40px 40px;
            width: 480px;
            height: 600px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .sign-title {
            color: #000;
            font-size: 28px;
            font-style: normal;
            font-weight: 700;
            line-height: 24px;
        }

        .subtitle {
            color: #A0A0A0;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .password {
            position: relative;
        }

        #pass_view {
            position: absolute;
            right: 15px;
            top: 43px;
        }

        .login-btn {
            display: flex;
            height: 48px;
            padding: 14px 16px;
            justify-content: center;
            align-items: center;
            gap: 10px;
            align-self: stretch;
            border-radius: 4px;
            border: none;
            background: #009A75;
            color: #F4F4F4;
        }

        .label-font-size {
            color: #000;
            font-size: 14px;
            font-weight: 600;
            line-height: 21px;
        }

        input::placeholder {
            font-size: 0.875rem;
        }

        input[type="email"], input[type="password"], input[type="text"] {
            background: transparent;
            padding: 10px 20px;
        }

        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            transition: background-color 5000s ease-in-out 0s;
            -webkit-text-fill-color: #1c274d !important;
        }

        .login-logo {
            height: 2.2rem;
            margin-top: 3rem;
        }
        .army_logo{
            height: 5.2rem;
        }
        input[type="email"], input[type="password"], input[type="text"] {
            background: #fff !important;
            padding: 10px 20px;
        }
        .text_border{
            border-bottom: 2px solid #4caf50;
            width: 22%;
        }
        .text_middle{
            width: 54%;
            position: relative;
        }
        .subtitle{
            position: absolute;
            top: -7.6px;
            color: #0a0c0d;
        }
        .uss{
            color:#000;
            font-size: 14px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
            margin-top: 18px;
        }

    </style>
@endsection
@section('content')

    <div class="row main-contain">
        <div class="card card-bg">
            <div class="d-flex justify-content-between">
                <img class="army_logo" src="{{ asset('assets/image/logo/army_logo_2.svg') }}" alt="" srcset="">
                <img class="login-logo" src="{{ asset('assets/icons/mimba_full_logo.svg') }}" alt="" srcset="">
                <img class="army_logo" src="{{ asset('assets/image/logo/army_logo.svg') }}" alt="" srcset="">
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="text_border"></div>
                <div class="text_middle">
                    <h6 class="subtitle" style="font-size: 13px; font-weight: bolder;">Dairy Data Management Software</h6>
                </div>
                <div class="text_border"></div>
            </div>
            <div class="card-body">
                <div class="text-center mt-3">
                    <h6 class="sign-title"> {{ __('Reset Password') }}</h6>
                </div>
                <form class="needs-validation" method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="mb-3 mt-4">
                        <label for="useremail" class="form-label">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="userpassword" class="form-label">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="text-center w-100 mt-3">
                        <button class="login-btn w-100 mt-3" type="submit"> {{ __('Reset Password') }}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
