 @extends('app')
@section('title','Add Testimonial')
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

    .btn-success {
        background-color: #28a745;
        border: none;
        color: #fff;
    }

    .btn-success:hover {
        background-color: #218838;
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
    <h2>Add New Testimonial</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('testimonials.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">YouTube Video URL</label>
            <input type="url" name="video_url" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Client Name (optional)</label>
            <input type="text" name="client_name" class="form-control">
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Add Testimonial</button>
            <a href="{{ route('testimonials.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>
</div>

@endsection
