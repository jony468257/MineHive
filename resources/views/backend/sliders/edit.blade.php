@extends('app')
@section('title', 'Change Password')
@section('content')
 

 
<div class="container mt-5">
    <h2 class="text-danger mb-4">Edit Slider</h2>

    <form action="{{ route('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row g-3">

            <!-- Title -->
            <div class="col-md-6">
                <label class="form-label text-white">Title (English)</label>
                <input type="text" name="title_en" class="form-control bg-dark text-white" value="{{ json_decode($slider->title,true)['en'] ?? '' }}">
            </div>
            <div class="col-md-6">
                <label class="form-label text-white">Title (Bangla)</label>
                <input type="text" name="title_bn" class="form-control bg-dark text-white" value="{{ json_decode($slider->title,true)['bn'] ?? '' }}">
            </div>

            <!-- Subtitle -->
            <div class="col-md-6">
                <label class="form-label text-white">Subtitle (English)</label>
                <input type="text" name="subtitle_en" class="form-control bg-dark text-white" value="{{ json_decode($slider->subtitle,true)['en'] ?? '' }}">
            </div>
            <div class="col-md-6">
                <label class="form-label text-white">Subtitle (Bangla)</label>
                <input type="text" name="subtitle_bn" class="form-control bg-dark text-white" value="{{ json_decode($slider->subtitle,true)['bn'] ?? '' }}">
            </div>

            <!-- Description -->
            <div class="col-md-6">
                <label class="form-label text-white">Description (English)</label>
                <textarea name="description_en" rows="4" class="form-control bg-dark text-white">{{ json_decode($slider->description,true)['en'] ?? '' }}</textarea>
            </div>
            <div class="col-md-6">
                <label class="form-label text-white">Description (Bangla)</label>
                <textarea name="description_bn" rows="4" class="form-control bg-dark text-white">{{ json_decode($slider->description,true)['bn'] ?? '' }}</textarea>
            </div>

            <!-- Image -->
             
            <!-- Submit -->
            <div class="col-md-12 mt-3">
                <button type="submit" class="btn btn-danger">Update Slider</button>
            </div>

        </div>
    </form>
</div>
@endsection
