 @extends('app')
@section('title', __('texts.users'))
@section('content')

<style>
    /* Page main background */
    body, .right-side {
        background-color: #12121f !important;
        color: #e4e6eb; /* Soft text color */
    }

    /* Card and modal background */
    .card, .modal-content {
        background-color: #1a1a2b !important;
        border: 1px solid #2a2a3f;
        color: #e4e6eb;
    }

    /* Table styling */
    table.table-bordered th,
    table.table-bordered td {
        border: 1px solid #2a2a3f;
        color: #e4e6eb;
    }

    table.table-bordered th {
        background-color: #1f1f30;
    }

    /* Search input, select, form-control */
    .dataTables_filter input,
    .form-control,
    .form-select {
        background-color: #1f1f30 !important;
        border: 1px solid #2a2a3f !important;
        color: #e4e6eb !important;
    }

    .dataTables_filter input::placeholder {
        color: #a0a0b5;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #555 !important;
        background-color: #1f1f30 !important;
        color: #fff;
        box-shadow: none;
    }

    /* Buttons */
    .btn-primary {
        background-color: #2a2a5f;
        border-color: #3a3a7f;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #3a3a7f;
        border-color: #4a4a9f;
        color: #fff;
    }

    .btn-secondary {
        background-color: #2a2a3f;
        border-color: #3a3a5f;
        color: #fff;
    }

    .btn-secondary:hover {
        background-color: #3a3a5f;
        border-color: #4a4a7f;
        color: #fff;
    }

    /* Badge */
    .badge-soft-success {
        background-color: #0a8f0a;
        color: #fff;
    }

    .badge-soft-danger {
        background-color: #b32e2e;
        color: #fff;
    }

    /* Modal header text */
    .modal-content h4, .modal-content p {
        color: #e4e6eb;
    }

</style>

<div class="add-new-button-hidden mb-3">
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

<!-- User Create Modal -->
<div class="modal fade" data-bs-backdrop="static" id="userCreateModal" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content modal_main_padding">
            <h4 class="card-title">{{ __('texts.user_info') }}</h4>
            <p class="card-title-desc">{{ __('texts.fill_all_information_below') }}</p>
            <div class="modal-body p-0 mt-3">
                <form action="{{ route('users.store') }}" method="POST" role="form" id="form1"
                      enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <!-- form fields unchanged -->
                </form>
            </div>
        </div>
    </div>
</div>

<!-- User Edit Modal -->
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
