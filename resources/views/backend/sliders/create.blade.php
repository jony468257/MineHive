 @extends('app')
@section('title','Add Slider')
@section('content')
<div class="container mt-5">
    <h2 class="text-danger mb-4">Add New Slider</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('sliders.store') }}" method="POST">
        @csrf
        <div class="row g-3">
            <!-- Title -->
            <div class="col-md-6">
                <label class="form-label text-white">Title (English)</label>
                <input type="text" name="title_en" class="form-control bg-dark text-white" placeholder="Enter Title in English">
            </div>
            <div class="col-md-6">
                <label class="form-label text-white">Title (Bangla)</label>
                <input type="text" name="title_bn" class="form-control bg-dark text-white" placeholder="বাংলায় শিরোনাম লিখুন">
            </div>

            <!-- Subtitle -->
            <div class="col-md-6">
                <label class="form-label text-white">Subtitle (English)</label>
                <input type="text" name="subtitle_en" class="form-control bg-dark text-white" placeholder="Enter Subtitle in English">
            </div>
            <div class="col-md-6">
                <label class="form-label text-white">Subtitle (Bangla)</label>
                <input type="text" name="subtitle_bn" class="form-control bg-dark text-white" placeholder="বাংলায় সাবটাইটেল লিখুন">
            </div>

            <!-- Description -->
            <div class="col-md-6">
                <label class="form-label text-white">Description (English)</label>
                <textarea name="description_en" rows="4" class="form-control bg-dark text-white" placeholder="Enter Description in English"></textarea>
            </div>
            <div class="col-md-6">
                <label class="form-label text-white">Description (Bangla)</label>
                <textarea name="description_bn" rows="4" class="form-control bg-dark text-white" placeholder="বাংলায় বিবরণ লিখুন"></textarea>
            </div>

            <div class="col-md-12 mt-3">
                <button type="submit" class="btn btn-danger">Upload Slider</button>
            </div>
        </div>
    </form>
</div>
@endsection
