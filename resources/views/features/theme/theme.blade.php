@extends('app')
@section('title','Theme')
@section('content')

<style>
    /* Page background */
    body, .right-side {
        background-color: #12121f !important;
        color: #e4e6eb;
    }

    /* Cards */
    .card, .card-body, .card-header {
        background-color: #1a1a2b !important;
        border: 1px solid #2a2a3f;
        color: #e4e6eb;
    }

    /* Buttons */
    .btn.add-new-button {
        background-color: #2a2a5f;
        border-color: #3a3a7f;
        color: #fff;
    }

    .btn.add-new-button:hover {
        background-color: #3a3a7f;
        border-color: #4a4a9f;
        color: #fff;
    }

    /* Inner card body */
    .table_card {
        background-color: #1f1f30;
        border: 1px solid #2a2a3f;
    }
</style>

<h2 class="ms-2 mb-3 card-title">Theme Wizard</h2>
<div class="card mt-3 m-lg-2">
    <div class="card-header">
        <div class="add-new-button-show">
            <button class="btn add-new-button" data-bs-toggle="modal" data-bs-target="#userCreateModal">
                <i class="ni-plus"></i> Add New Theme
            </button>
        </div>
    </div>
    <div class="card-body mt-1 table_card">
        <div class="row">
            <div class="col-md-3">
                <div class="card mt-3 m-lg-2">
                    <div class="card-body mt-2 table_card">
                        <!-- Content here -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mt-3 m-lg-2">
                    <div class="card-body mt-2 table_card">
                        <!-- Content here -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mt-3 m-lg-2">
                    <div class="card-body mt-2 table_card">
                        <!-- Content here -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mt-3 m-lg-2">
                    <div class="card-body mt-2 table_card">
                        <!-- Content here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
