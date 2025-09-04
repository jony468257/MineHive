 @extends('app')
@section('title','Add Agency Section')
@section('content')

<style>
    body {
        background-color: #121212; /* Dark background */
        color: #fff;
    }

    .container {
        background-color: #1e1e1e; /* Slightly lighter dark container */
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

    .btn-success {
        background-color: #ff4d4d;
        border: none;
        color: #fff;
    }

    .btn-success:hover {
        background-color: #ff0000;
    }

    .btn-secondary {
        background-color: #2c2c2c;
        border: 1px solid #ff4d4d;
        color: #ff4d4d;
    }

    .btn-secondary:hover {
        background-color: #ff4d4d;
        color: #fff;
    }

    .alert-danger {
        background-color: #2c2c2c;
        border-color: #ff4d4d;
        color: #ff4d4d;
    }

    @media (max-width: 768px) {
        .container {
            margin: 20px;
            padding: 20px;
        }
    }
</style>

<div class="container">
    <h2>Add New Section</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Please fix the following issues:<br><br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('agency.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title (English)</label>
            <input type="text" name="title_en" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Title (Bangla)</label>
            <input type="text" name="title_bn" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Subtitle (English)</label>
            <input type="text" name="subtitle_en" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Subtitle (Bangla)</label>
            <input type="text" name="subtitle_bn" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Description (English)</label>
            <textarea name="description_en" class="form-control" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Description (Bangla)</label>
            <textarea name="description_bn" class="form-control" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Video Link</label>
            <input type="url" name="video_link" class="form-control">
        </div>
        <button type="submit" class="btn btn-success w-100">Add Section</button>
        <a href="{{ route('agency.index') }}" class="btn btn-secondary w-100 mt-2">Back</a>
    </form>
</div>

@endsection
