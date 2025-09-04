@extends('app')
@section('title','Edit Gallery Image')
@section('content')

<style>
    body {
        background-color: #121212; /* Dark background */
        color: #fff;
    }

    .container {
        background-color: #1e1e1e; /* Dark container */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.3);
        max-width: 700px;
        margin-top: 50px;
    }

    h2 {
        color: #ff4d4d;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
    }

    .form-label {
        color: #ff4d4d;
        font-weight: 500;
    }

    input.form-control,
    textarea.form-control {
        background-color: #2c2c2c;
        color: #fff;
        border: 1px solid #ff4d4d;
    }

    input.form-control:focus,
    textarea.form-control:focus {
        border-color: #ff0000;
        box-shadow: 0 0 5px #ff0000;
        background-color: #2c2c2c;
        color: #fff;
    }

    .btn-primary {
        background-color: #ff4d4d;
        border: none;
    }

    .btn-primary:hover {
        background-color: #ff0000;
    }

    .btn-secondary {
        background-color: #6c757d;
        border: none;
        color: #fff;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
        color: #fff;
    }

    .alert-danger {
        background-color: #2c2c2c;
        border-color: #ff4d4d;
        color: #ff4d4d;
    }

    img.img-preview {
        border-radius: 5px;
        border: 1px solid #ff4d4d;
        margin-top: 10px;
    }
</style>

<div class="container">
    <h2>Edit Image</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title (optional)</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $gallery->title }}">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Change Image</label>
            <input type="file" name="image" id="image" class="form-control">
            @if($gallery->image)
                <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid img-preview" style="height: 200px; object-fit: cover;">
            @endif
        </div>

        <button type="submit" class="btn btn-primary w-100 mb-2">Update Image</button>
        <a href="{{ route('gallery.index') }}" class="btn btn-secondary w-100">Back</a>
    </form>
</div>

@endsection
