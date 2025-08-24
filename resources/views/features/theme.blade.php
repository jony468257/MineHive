@extends('app')
@section('title','forms')
@section('content')
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <ul class="nav nav-underline mb-3" id="pills-tab" role="tablist">
            <li class="nav-item me-2" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-target="#general-information" next="not"
                        type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">General Info
                </button>
            </li>
            <li class="nav-item me-2" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-target="#parents-details" next="not"
                        type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Details
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                        data-target="#breeding" next="not"
                        type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                    Full Information
                </button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="general-information" role="tabpanel"
                 aria-labelledby="pills-home-tab"
                 tabindex="0">
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="lot" class="form-label">{{ __('messages.lot_name') }} <span
                                class="text-danger">*</span></label>
                        <select class="form-select requiredField" disabled="disabled"
                                name="lot_id" id="lot" required>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="breed_id" class="form-label">{{ __('messages.bread_name') }}<span
                                class="text-danger">*</span></label>
                        <select class="form-select requiredField" name="breed_id" onChange="changeBreed();"
                                id="breed_id" required>
                            <option disabled value="" selected>Breed Name Select</option>
                            <option value="">Option 1</option>
                            <option value="">Option 2</option>
                            <option value="">Option 3</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="form-label" for="birth_date">{{ __('messages.birth_date') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control custom-date-format requiredField"
                               name="birth_date" id="birth_date" value="{{ old('birth_date')}}"
                               placeholder="Pick cattle birth date" required/>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-5">
                                <label class="form-label">{{ __('messages.birth_year') }} <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="number"
                                           class="form-control requiredField"
                                           id="birth_date_year"
                                           value="{{old('birth_date')}}" min="0">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="birth_date_month" class="form-label">{{ __('messages.month') }} <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input onkeyup="changeBirthDate()" type="number"
                                           class="form-control requiredField"
                                           id="birth_date_month"
                                           max="12"
                                           value="{{old('birth_date')}}" min="0">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="birth_date_day" class="form-label">{{ __('messages.day') }} <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input onkeyup="changeBirthDate()" type="number"
                                           class="form-control requiredField"
                                           id="birth_date_day"
                                           value="{{old('birth_date')}}" min="0" max="31">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="current_weight" class="form-label">{{ __('messages.current_weight') }}</label>
                        <input type="number" class="form-control" name="current_weight"
                               value="{{old('current_weight')}}" id="current_weight">
                    </div>
                    <div class="col-md-6">
                        <label for="teeth" class="form-label">{{ __('messages.teeth') }}</label>
                        <input type="number" class="form-control" value="{{old('teeth')}}" name="teeth"
                               id="teeth">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6 d-none" id="p_date">
                        <div class="form-group">
                            <label for="purchase_date" class="form-label">{{ __('messages.purchase_date') }}</label>
                            <input type="text" class="form-control" name="purchase_date"
                                   id="purchase_date" placeholder="{{ __('messages.purchase_date') }}"/>
                        </div>
                    </div>
                    <div class="col-md-6 d-none" id="purchase_rate">
                        <div class="form-group">
                            <label for="purchase_rate" class="form-label">{{ __('messages.purchase_rate') }}</label>
                            <input type="number" min="0" class="form-control" name="purchase_rate"
                                   id="purchase_rate"
                                   placeholder="{{ __('messages.purchase_rate') }}"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="parents-details" role="tabpanel"
                 aria-labelledby="pills-profile-tab" tabindex="0">

            </div>
            <div class="tab-pane fade" id="breeding" role="tabpanel"
                 aria-labelledby="pills-contact-tab" tabindex="0">
            </div>
        </div>
    </form>
@endsection
