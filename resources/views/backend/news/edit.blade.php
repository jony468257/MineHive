 @extends('app')
@section('title','Edit News Source')
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

    .form-label {
        color: #ff4d4d; /* Red labels */
        font-weight: 500;
    }

    input.form-control {
        background-color: #2c2c2c;
        color: #fff;
        border: 1px solid #ff4d4d;
    }

    input.form-control:focus {
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
    }

    .btn-secondary {
        background-color: #2c2c2c;
        border: 1px solid #ff4d4d;
        color: #ff4d4d;
    }

    .btn-secondary:hover {
        background-color: #3a3a3a;
        color: #ff4d4d;
    }

    h2 {
        color: #ff4d4d;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
    }
</style>

<div class="container py-4">
    <h2>Edit News Source</h2>

    <form action="{{ route('news.update', $news->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Method spoofing -->

        <div class="mb-3">
            <label for="name" class="form-label">News Name</label>
            <input type="text" name="name" class="form-control" value="{{ $news->name }}" required>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('news.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

@endsection
