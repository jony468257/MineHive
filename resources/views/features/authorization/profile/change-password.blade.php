@extends('app')
@section('title', 'Change Password')
@section('content')
    <div class="row">
        <div class="col-12">
            <h4 class="card-title">{{ __('texts.change_password') }}</h4>
            <p class="card-title-desc">{{ __('texts.fill_all_information_below') }}</p>

            <form action="{{ route('profile.password.update') }}" method="POST" role="form" id="form1"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <div class="form-group">
                            <label class="form-label" for="old_password">{{ __('texts.old_password') }} <span class="text-danger">*</span></label>
                            <input type="password" class="form-control @error('old_password') is-invalid @enderror"
                                   name="old_password" id="old_password" placeholder="******" required/>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="password">{{ __('texts.new_password') }} <span
                                    class="text-danger">*</span></label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                   name="password" id="password" placeholder="******" required/>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label" for="password_confirmation">{{ __('texts.confirm_new_password') }} <span
                                    class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password_confirmation"
                                   id="password_confirmation"
                                   placeholder="******" required/>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6 d-flex justify-content-start">
                        <button type="submit" class="btn btn-primary">{{ __('texts.update_password') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

