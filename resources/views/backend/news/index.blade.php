 @extends('app')

@section('title', 'All News Sources')

@section('content')

<style>
    .container-dark {
        background-color: #1e1e1e; /* Dark container like blogs.index */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.3);
        margin-top: 50px;
        color: #fff;
    }

    h2 {
        color: #ff4d4d; /* Red heading same as blogs.index */
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
    }

    .btn-primary {
        background-color: #ff4d4d;
        border: none;
        color: #fff;
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
        background-color: #2c2c2c; /* Table dark background */
        color: #fff;
    }

    .table th, .table td {
        vertical-align: middle;
        border-color: #ff4d4d;
    }

    .table th {
        color: #ff4d4d;
        background-color: #330000; /* Header dark red */
    }

    .alert-success {
        background-color: #2c2c2c; /* Dark alert */
        border-color: #28a745;
        color: #28a745;
    }

    .table img {
        border-radius: 5px;
    }
</style>

<div class="container container-dark">
    <h2>All News Sources</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('news.create') }}" class="btn btn-primary mb-3">+ Add News Source</a>

    <div class="table-responsive">
        <table class="table table-dark table-striped align-middle">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>News Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($newsSources as $key => $news)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $news->name }}</td>
                        <td>
                            <a href="{{ route('news.edit', $news->id) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                            <form action="{{ route('news.destroy', $news->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No news sources found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
