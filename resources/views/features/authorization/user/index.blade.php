@extends('app')
@section('title', __('texts.users'))
@section('content')
    <div class="add-new-button-hidden">
        <button class="btn add-new-button" data-bs-toggle="modal" data-bs-target="#userCreateModal">
            <i class="ni-plus"></i> {{ __('texts.add_user') }}
        </button>
    </div>
    <h2 class="ms-2 mb-3 card-title">{{ __('texts.user_list') }}</h2>
    <div class="card mt-3 m-lg-2">
        <div class="card-body mt-2 table_card">
            <table class="display table table-bordered table-sm w-100" data-table="dataTables">
                <thead>
                <tr>
                    <th>{{ __('texts.sl') }}</th>
                    <th>{{ __('texts.name') }}</th>
                    <th>{{ __('texts.email') }}</th>
                    <th>{{ __('texts.phone') }}</th>
                    <th>{{ __('texts.status') }}</th>
                    <th>{{ __('texts.action') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $key => $user)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ ($user->phone) ?? 'N/A' }}</td>
                        <td>
                            <span
                                class="badge badge-pill badge-soft-{{ ($user->status === 'active') ? 'success' : 'danger' }} font-size-11">
                                {{ ($user->status === 'active') ? 'Active' : 'Inactive' }}</span>
                        </td>

                        <td class="center">
                            <a data-edit="{{ $user->id }}" class="btn btn-sm user-edit-btn" data-bs-toggle="modal"
                               data-bs-target="#user_edit_modal">
                                <i class="ni-edit"></i>
                            </a>
                            @if(!$user->hasRole('super-admin'))
                                <a href="#" class="btn btn-sm" onclick="deletePost({{ $user->id }})">
                                    <i class="ni-delete"></i>
                                    <form id="delete-form-{{ $user->id }}"
                                          action="{{ route('users.destroy', $user->id) }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" data-bs-backdrop="static" id="userCreateModal" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content modal_main_padding">
                <h4 class="card-title">{{ __('texts.user_info') }}</h4>
                <p class="card-title-desc">{{ __('texts.fill_all_information_below') }}</p>
                <div class="modal-body p-0 mt-3">
                    <form action="{{ route('users.store') }}" method="POST" role="form" id="form1"
                          enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="name">{{ __('texts.name')}} <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                           value="{{old('name')}}" name="name" id="name"
                                           placeholder="{{ __('texts.name')}}" autocomplete="off" readonly
                                           onfocus="this.removeAttribute('readonly');" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="email">{{ __('texts.email') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                           value="{{old('email')}}" name="email" id="email"
                                           placeholder="{{ __('texts.email')}}" autocomplete="off" readonly
                                           onfocus="this.removeAttribute('readonly');" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="password">{{ __('texts.password')}} <span
                                            class="text-danger">*</span></label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                           value="{{old('password')}}" name="password" id="password" minlength="6"
                                           placeholder="Enter password" autocomplete="off" readonly
                                           onfocus="this.removeAttribute('readonly');" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label"
                                           for="password_confirmation">{{ __('texts.confirm_password')}} <span
                                            class="text-danger">*</span></label>
                                    <input type="password"
                                           class="form-control @error('password_confirmation') is-invalid @enderror"
                                           value="{{old('password_confirmation')}}" name="password_confirmation"
                                           minlength="6" id="password_confirmation"
                                           placeholder="Re-enter password" autocomplete="off" readonly
                                           onfocus="this.removeAttribute('readonly');" required/>
                                    <span class="text-danger password-validation confirm-password"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="role">{{ __('texts.assign_roles')}}<span
                                            class="text-danger">*</span></label>
                                    <select
                                        class="form-control @error('role') is-invalid @enderror"
                                        name="role" id="role" required>
                                        <option value="">Select Roles</option>
                                        @foreach ($roles as $item)
                                            <option value="{{ $item->name }}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone">{{ __('texts.phone')}}</label>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                           value="{{old('phone')}}" placeholder="ex: 017XXXXXXXX" autocomplete="off"
                                           readonly onfocus="this.removeAttribute('readonly');"/>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone">{{ __('texts.profile') }}</label>
                                    <input type="file" class="form-control" name="profile" id="profile" accept="image/*"/>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">
                                {{ __('texts.close') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('texts.save')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" data-bs-backdrop="static" id="user_edit_modal" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content modal_main_padding">
                <h4 class="card-title">{{ __('texts.user_info')}}</h4>
                <p class="card-title-desc">{{ __('texts.fill_all_information_below')}}</p>
                <div class="modal-body p-0 mt-3 edit-body"></div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        $(document).on('click', '.user-edit-btn', function () {
            let id = $(this).attr('data-edit');
            $('.edit-body').append();
            axios.post('{{ route('users.edit') }}', {
                id: id,
            }).then(function (response) {
                $('.edit-body').html(response.data)
            })
        });
    </script>
@endpush
