 @extends('app')
@section('title', 'Agency Sections')
@section('content')

<style>
    body {
        background-color: #121212;
        color: #fff;
    }

    .container-dark {
        background-color: #1e1e1e;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.3);
        margin-top: 50px;
        color: #fff;
    }

    h2 {
        color: #ff4d4d;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
    }

    .btn-success {
        background-color: #ff4d4d;
        border: none;
        color: #fff;
    }

    .btn-success:hover {
        background-color: #ff0000;
    }

    .btn-edit {
        background-color: #ffa500;
        border: none;
        color: #fff;
    }

    .btn-edit:hover {
        background-color: #ff8c00;
    }

    .btn-delete {
        background-color: #ff4d4d;
        border: none;
        color: #fff;
    }

    .btn-delete:hover {
        background-color: #ff0000;
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
        background-color: #330000;
    }

    .alert-success {
        background-color: #2c2c2c;
        border-color: #28a745;
        color: #28a745;
    }

    .table img {
        border-radius: 5px;
    }
</style>

<div class="container container-dark">
    <h2>Agency Sections</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('agency.create') }}" class="btn btn-success mb-3">+ Add New Section</a>

    <div class="table-responsive">
        <table class="table table-dark table-striped align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title (EN)</th>
                    <th>Title (BN)</th>
                    <th>Subtitle (EN)</th>
                    <th>Subtitle (BN)</th>
                    <th>Description (EN)</th>
                    <th>Description (BN)</th>
                    <th>Image</th>
                    <th>Video</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($sections as $key => $section)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $section->title_en }}</td>
                        <td>{{ $section->title_bn }}</td>
                        <td>{{ $section->subtitle_en }}</td>
                        <td>{{ $section->subtitle_bn }}</td>
                        <td>{!! Str::limit(strip_tags($section->description_en), 50) !!}</td>
                        <td>{!! Str::limit(strip_tags($section->description_bn), 50) !!}</td>
                        <td>
                            @if ($section->image)
                                <img src="{{ asset('storage/' . $section->image) }}" width="70" alt="Image">
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if ($section->video_link)
                                <a href="{{ $section->video_link }}" target="_blank" class="text-danger">View</a>
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            <div style="display: flex; gap: 5px;">
                                <a href="{{ route('agency.edit', $section->id) }}" class="btn btn-edit btn-sm">Edit</a>
                                <form action="{{ route('agency.destroy', $section->id) }}" method="POST" 
                                      onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center">No sections found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
