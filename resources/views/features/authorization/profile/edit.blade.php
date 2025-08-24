@extends('app')
@section('title', 'Edit Profile')
@section('content')
    <div class="row">
        <div class="col-12">
            <h4 class="card-title">{{ __('texts.update_profile') }}</h4>
            <p class="card-title-desc">{{ __('texts.fill_all_information_below') }}</p>
            <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST" role="form" id="form1"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="name">{{ __('texts.name') }} <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                   placeholder="Enter your name" id="name"
                                   value="{{ \Illuminate\Support\Facades\Auth::user()->name}}"/>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="email">{{ __('texts.email') }}</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"
                                   value="{{ \Illuminate\Support\Facades\Auth::user()->email }}"/>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="phone">{{ __('texts.phone') }}</label>
                            <input type="text" class="form-control" name="phone" id="phone"
                                   placeholder="ex: 017XXXXXXXX"
                                   value="{{ \Illuminate\Support\Facades\Auth::user()->phone }}"/>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">{{ __('texts.profile_photo') }}</label>
                            <input type="file" class="form-control mb-3" data-preview=".image-preview"
                                   name="profile" accept="image/*">
                            <img
                                src="{{ Auth::user()->profile && file_exists('storage/' . Auth::user()->profile) ? asset('storage/' . Auth::user()->profile) : asset('assets/image/fake-user.jpg') }}"
                                class="rounded-circle image-preview"
                                alt="{{ \Illuminate\Support\Facades\Auth::user()->name }}" width="200"
                                height="200"/>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">{{ __('texts.update_profile_info') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function imagePreView(file) {
            let reader = new FileReader();
            reader.readAsDataURL(file.files[0]);
            reader.onload = function (event) {
                let source = event.target.result;
                $('.imagePreView').attr('src', source);
            }
        }
    </script>
@endpush

