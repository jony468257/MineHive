<form action="{{ route('users.update', $user->id) }}" method="POST" role="form" id="form1"
      enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="username">{{ __('texts.name') }}<span
                        class="text-danger">*</span></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="username"
                       placeholder="Enter name" value="{{ ($user->name) ?? old('name') }}" required/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="email">{{ __('texts.email') }}<span
                        class="text-danger">*</span></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                       id="email" placeholder="Enter email" value="{{($user->email) ?? old('email')}}" required/>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="user_roles">{{ __('texts.assign_roles') }} <span
                        class="text-danger">*</span></label>
                <select class="form-control select2-multiple @error('role') is-invalid @enderror"
                        name="role" id="user_roles">
                    <option value="">Select Roles</option>
                    @foreach ($roles as $item)
                        <option
                            value="{{ $item->name }}" @selected($user->hasRole($item->name))>{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label" for="phone">{{ __('texts.phone')}}</label>
                <input type="text" class="form-control" name="phone" placeholder="ex: 017XXXXXXXX" id="phone"
                       value="{{ ( $user->phone ) ?? old('phone') }}"/>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">{{ __('texts.profile_photo')}}</label>
                <input type="file" class="form-control" name="profile" accept="image/*">
            </div>
        </div>
    </div>
    <div class="mt-3 d-flex justify-content-end">
        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">{{ __('texts.close')}}</button>
        <button type="submit" class="btn btn-primary">{{ __('texts.update')}}</button>
    </div>
</form>

