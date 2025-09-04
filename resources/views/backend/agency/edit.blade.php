 @extends('app')
@section('title','Edit Agency Section')

@section('content')

<style>
    body {
        background-color: #121212;
        color: #fff;
    }

    .container {
        background-color: #1e1e1e;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.3);
        margin-top: 50px;
        max-width: 800px;
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

    .alert-danger {
        background-color: #2c2c2c;
        border-color: #ff4d4d;
        color: #ff4d4d;
    }

    h2 {
        color: #ff4d4d;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
    }

    img.preview {
        width: 100px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ff4d4d;
    }
</style>

<div class="container">
    <h2>Edit Agency Section</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('agency.update', $agency->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Title --}}
        <div class="mb-3">
            <label class="form-label">Title (English)</label>
            <input type="text" name="title_en" class="form-control" value="{{ $agency->title_en }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Title (Bangla)</label>
            <input type="text" name="title_bn" class="form-control" value="{{ $agency->title_bn }}">
        </div>

        {{-- Subtitle --}}
        <div class="mb-3">
            <label class="form-label">Subtitle (English)</label>
            <input type="text" name="subtitle_en" class="form-control" value="{{ $agency->subtitle_en }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Subtitle (Bangla)</label>
            <input type="text" name="subtitle_bn" class="form-control" value="{{ $agency->subtitle_bn }}">
        </div>

        {{-- Description --}}
        <div class="mb-3">
            <label class="form-label">Description (English)</label>
            <textarea name="description_en" rows="4" class="form-control">{{ $agency->description_en }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Description (Bangla)</label>
            <textarea name="description_bn" rows="4" class="form-control">{{ $agency->description_bn }}</textarea>
        </div>

        {{-- Current Image --}}
        <div class="mb-3">
            <label class="form-label">Current Image</label><br>
            @if($agency->image)
                <img src="{{ asset('storage/' . $agency->image) }}" class="preview" alt="Current Image">
            @else
                <p>No image uploaded.</p>
            @endif
        </div>

        {{-- Upload New Image --}}
        <div class="mb-3">
            <label class="form-label">Change Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        {{-- Video Link --}}
        <div class="mb-3">
            <label class="form-label">Video Link</label>
            <input type="url" name="video_link" class="form-control" value="{{ $agency->video_link }}">
        </div>

        <button type="submit" class="btn btn-primary w-100">Update Section</button>
    </form>
</div>

@endsection
