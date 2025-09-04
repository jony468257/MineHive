 @extends('app')
@section('title','Edit Testimonial')
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
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #ff0000;
        color: #fff;
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
</style>

<div class="container">
    <h2>Edit Testimonial</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $testimonial->title }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">YouTube Video URL</label>
            <input type="url" name="video_url" class="form-control" value="{{ $testimonial->video_url }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Client Name (optional)</label>
            <input type="text" name="client_name" class="form-control" value="{{ $testimonial->client_name }}">
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Update Testimonial</button>
            <a href="{{ route('testimonials.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
</div>

@endsection
