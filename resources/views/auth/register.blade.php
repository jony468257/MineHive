@extends('auth.auth')
@section('title','Login')
@section('content')
    <div class="row main-contain">
        <div class="card card-bg">
            <div class="d-flex justify-content-center align-items-center">
                <img class="login-logo" src="{{ asset('assets/icons/mimba_full_logo.svg') }}" alt="" srcset="">
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="text_border"></div>
                <h6 class="text_middle">Dairy Data Management Software</h6>
                <div class="text_border"></div>
            </div>
            <div class="card-body p-0">
                <div class="text-center mt-2">
                    <h1 class="sign-title">Registration</h1>
                </div>
                <form method="POST" action="{{ route('register') }}" role="form" id="form_login"
                      class="form-horizontal">
                    @csrf
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label label-font-size">Name</label>
                        <input type="text" id="name" placeholder="Jhon Doe"
                               class="form-control @error('name') is-invalid @enderror" name="name"
                               value="{{ old('name') }}" required autocomplete="off">
                        @error('name')
                        <div class="text-danger">
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label label-font-size">Email
                            address</label>
                        <input type="email" id="email" placeholder="example@mail.com"
                               class="form-control @error('email') is-invalid @enderror" name="email"
                               value="{{ old('email') }}" required autocomplete="off">
                        @error('email')
                        <div class="text-danger">
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 password">
                        <label for="password" class="form-label label-font-size">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                               name="password" autocomplete="off" id="password"
                               placeholder="Enter Password" required>
                        <button type="button" class="border-0 eye-show" id="pass_view">
                            <i class="password-show-icon ni-visibility"></i>
                        </button>
                        @error('password')
                        <div class="text-danger">
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 password">
                        <label for="password-confirm" class="form-label label-font-size">Password</label>
                        <input type="password" class="form-control @error('password-confirm') is-invalid @enderror"
                               name="password_confirmation" autocomplete="off" id="password-confirm"
                               placeholder="Enter Password" required>
                        <button type="button" class="border-0 eye-show" id="pass_view">
                            <i class="password-show-icon ni-visibility"></i>
                        </button>
                    </div>
                    <button class="login-btn w-100 mt-4">Register</button>
                    <div class="mt-3 text-center">
                        <p>Have an account? <a href="{{ route('login') }}" class="fw-medium text-primary"> Sign In here</a></p>
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
        $('#pass_view').click(function (e) {
            e.preventDefault();
            let target = $('#password');
            $(target).attr('type', $(target).attr('type') === 'password' ? 'text' : 'password');
            $('.password-show-icon').toggleClass('ni-visibility ni-visibility-off');
        });
    </script>
@endpush
