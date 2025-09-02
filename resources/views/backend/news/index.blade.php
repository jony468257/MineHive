 @extends('app')

@section('title', 'All News Sources')

@section('content')

<style>
    /* Dark container */
    .container-dark {
        background-color: #1e1e1e; /* Dark container background */
        color: #fff;
        padding: 40px 20px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.3);
        margin-top: 50px;
    }

    /* Heading style */
    .container-dark h2 {
        color: #ff4d4d; 
        text-align: center;
        font-weight: bold;
        margin-bottom: 30px;
        text-shadow: 1px 1px 2px #8B0000;
    }

    /* Custom alert for success */
    .custom-alert-success {
        background-color: #2c2c2c;
        color: #28a745;
        border: 1px solid #28a745;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    /* Table dark theme */
    .table-dark-custom {
        background-color: #1c1c1c;
        color: #fff;
    }

    .table-dark-custom thead {
        background-color: #330000;
        color: #ff4d4d;
    }

    .table-dark-custom th, 
    .table-dark-custom td {
        border-color: #ff4d4d;
        vertical-align: middle;
    }

    /* Buttons styling */
    .btn-primary {
        background-color: #ff4d4d;
        border: none;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #cc0000;
    }

    .btn-warning {
        background-color: #ffc107;
        border: none;
        color: #000;
    }

    .btn-warning:hover {
        background-color: #e6ac00;
    }

    .btn-danger {
        background-color: #ff4d4d;
        border: none;
        color: #fff;
    }

    .btn-danger:hover {
        background-color: #e60000;
    }
</style>

<div class="container container-dark">
    <h2>News Sources</h2>

    <a href="{{ route('news.create') }}" class="btn btn-primary mb-3">Add News Source</a>

    @if(session('success'))
        <div class="custom-alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-dark-custom table-bordered table-striped align-middle">
            <thead>
                <tr>
                    <th>#</th>
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
                        <td colspan="3" class="text-center text-danger">No news sources found!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
