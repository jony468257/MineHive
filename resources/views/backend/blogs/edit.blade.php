 @extends('app')

@section('title','Edit Blog')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Edit Blog</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Blog Title</label>
            <input type="text" class="form-control" name="title" value="{{ $blog->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="5">{{ $blog->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Current Image:</label><br>
            @if($blog->image)
                <img src="{{ asset('storage/' . $blog->image) }}" width="150" class="mb-2">
            @else
                No image uploaded.
            @endif
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Change Image</label>
            <input type="file" class="form-control" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Update Blog</button>
    </form>
</div>
@endsection
