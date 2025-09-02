@extends('app')
@section('title','Add Slider')
@section('content')
 
<div class="container py-4">
    <h2>Add News Source</h2>

    <form action="{{ route('news.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">News Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button class="btn btn-success">Save</button>
        <a href="{{ route('news.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
