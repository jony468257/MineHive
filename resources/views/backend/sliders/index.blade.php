 @extends('app')
@section('title','Slider Images')
@section('content')

<style>
    .container-dark {
        background-color: #1e1e1e; /* Dark container */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.3);
        color: #fff;
    }

    h2 {
        color: #ff4d4d;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
    }

    .btn-success {
        background-color: #28a745;
        border: none;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    .btn-warning {
        background-color: #ffa500;
        border: none;
        color: #fff;
    }

    .btn-warning:hover {
        background-color: #ff8c00;
        color: #fff;
    }

    .btn-danger {
        background-color: #ff4d4d;
        border: none;
        color: #fff;
    }

    .btn-danger:hover {
        background-color: #ff0000;
        color: #fff;
    }

    .card {
        background-color: #2c2c2c;
        color: #fff;
    }

    .card-body {
        display: flex;
        justify-content: flex-end;
        gap: 5px;
    }
</style>

<div class="container container-dark">
    <h2>Slider Images</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('sliders.create') }}" class="btn btn-success mb-3">+ Add New Slide</a>

    <div class="row g-4">
        @forelse($slides as $slide)
            <div class="col-md-4">
                <div class="card shadow-sm border border-danger">
                    <img src="{{ asset('storage/' . $slide->image) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <a href="{{ route('sliders.edit', $slide->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('sliders.destroy', $slide->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center text-white">No slides found.</p>
        @endforelse
    </div>
</div>

@endsection
