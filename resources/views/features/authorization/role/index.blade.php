 @extends('app')
@section('title',__('texts.role'))
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

    /* Inputs, selects, search box */
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
    .permission-list-badge {
        background-color: #3a3a5f;
        color: #fff;
        margin-right: 3px;
        margin-bottom: 2px;
    }

    /* Modal header text */
    .modal-content h4, .modal-content p {
        color: #e4e6eb;
    }

</style>

<div class="add-new-button-hidden mb-3">
    <button class="btn add-new-button" data-bs-toggle="modal" data-bs-target="#roleCreateModal">
        <i class="plus-ico"></i> {{ __('texts.add_role') }}
    </button>
</div>

<h2 class="ms-2 mb-3 card-title">{{ __('texts.role_list') }}</h2>

<div class="card mt-3 m-lg-2">
    <div class="card-body mt-2 table_card">
        <table id="datatable-buttons" class="table table-bordered dt-responsive w-100" data-table="dataTables">
            <thead>
            <tr>
                <th width="5%">{{ __('texts.sl') }}</th>
                <th width="10%">{{ __('texts.name') }}</th>
                <th width="60%">{{ __('texts.permissions') }}</th>
                <th width="25%">{{ __('texts.action') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($roles as $key=>$item)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td class="text-800">{{ strtoupper($item->name) }}</td>
                    <td>
                        @foreach ($item->permissions as $perm)
                            <span class="badge permission-list-badge">{{ str_replace('.', ' ', $perm->name) }}</span>
                        @endforeach
                    </td>
                    <td class="center">
                        <a class="btn btn-sm role-edit-btn" data-url="{{ route('roles.edit', $item->id) }}" data-bs-toggle="modal"
                           data-bs-target="#roleEditModal">
                            <i class="ni-edit"></i>
                        </a>
                        <a href="#" class="btn btn-sm" onclick="deletePost({{ $item->id }})">
                            <i class="ni-delete"></i>
                            <form id="delete-form-{{ $item->id }}" action="{{ route('roles.destroy', $item->id) }}"
                                  method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modals -->
<div class="modal fade" data-bs-backdrop="static" id="roleCreateModal" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content modal_main_padding">
            <h4 class="card-title">{{ __('texts.create_role') }}</h4>
            <p class="card-title-desc">{{ __('texts.fill_all_information_below') }}</p>
            <div class="modal-body p-0 mt-3 roleCreateModal">
                <div class="modal-spinner d-flex flex-column align-items-center">
                    <div class="spinner-border text-secondary" role="status">
                        <span class="sr-only"></span>
                    </div>
                    <h5 class="mt-1">Loading...</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" data-bs-backdrop="static" id="roleEditModal" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content modal_main_padding">
            <h4 class="card-title">{{ __('texts.edit_role') }}</h4>
            <p class="card-title-desc">{{ __('texts.fill_all_information_below') }}</p>
            <div class="modal-body p-0 mt-3 roleEditModal">
                <div class="modal-spinner d-flex flex-column align-items-center">
                    <div class="spinner-border text-secondary" role="status">
                        <span class="sr-only"></span>
                    </div>
                    <h5 class="mt-1">Loading...</h5>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script type="text/javascript">
    $(document).on('click', '.role-edit-btn', function () {
        let url = $(this).data('url');
        axios.get(url).then(function (response) {
            $('.roleEditModal').html(response.data);
            $('.modal-spinner').hide();
            $('.modal').on('hidden.bs.modal', function () {
                $('.roleEditModal').html(`<div class="modal-spinner d-flex flex-column align-items-center">
                    <div class="spinner-border text-secondary" role="status">
                        <span class="sr-only"></span>
                    </div>
                    <h5 class="mt-1">Loading...</h5>
                </div>`);
            });
        })
    })

    $('.add-new-button').click(function () {
        axios.get(`{{ route('roles.create') }}`).then(function (response) {
            $('.roleCreateModal').html(response.data);
            $('.modal-spinner').hide();
            $('.modal').on('hidden.bs.modal', function () {
                $('.roleCreateModal').html(`<div class="modal-spinner d-flex flex-column align-items-center">
                    <div class="spinner-border text-secondary" role="status">
                        <span class="sr-only"></span>
                    </div>
                    <h5 class="mt-1">Loading...</h5>
                </div>`);
            });
        })
    })
</script>
@endpush
