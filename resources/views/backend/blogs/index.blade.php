 @extends('app')
@section('title','All Blogs')
@section('content')

<style>
    .container-dark {
        background-color: #1e1e1e; /* Dark container */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.3);
        margin-top: 50px;
        color: #fff;
    }

    h2 {
        color: #ff4d4d; /* Red heading */
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
    }

    .btn-primary {
        background-color: #ff4d4d;
        border: none;
    }

    .btn-primary:hover {
        background-color: #ff0000;
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

    .table {
        background-color: #2c2c2c;
        color: #fff;
    }

    .table th, .table td {
        vertical-align: middle;
        border-color: #ff4d4d;
    }

    .table th {
        color: #ff4d4d;
        background-color: #330000; /* Same as consultancy table header */
    }

    .alert-success {
        background-color: #2c2c2c; /* Dark alert to match container */
        border-color: #28a745;
        color: #28a745;
    }

    .table img {
        border-radius: 5px;
    }
</style>

<div class="container container-dark">
    <h2>All Blogs</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3">+ Add New Blog</a>

    <div class="table-responsive">
        <table class="table table-dark table-striped align-middle">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($blogs as $key => $blog)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>
                            @if($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}" width="100">
                            @else
                                No image
                            @endif
                        </td>
                        <td>{{ $blog->created_at->format('d M Y') }}</td>
                        <td>
                            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No blogs found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
