@extends('app')
@section('title','Theme')
@section('content')
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
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mt-3 m-lg-2">
                        <div class="card-body mt-2 table_card">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mt-3 m-lg-2">
                        <div class="card-body mt-2 table_card">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mt-3 m-lg-2">
                        <div class="card-body mt-2 table_card">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
