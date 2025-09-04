 @extends('app')
@section('title','Testimonials')
@section('content')

<div class="container py-5">
    <h2 class="text-center text-danger mb-4" style="font-weight: bold;">Client Testimonials</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('testimonials.create') }}" class="btn btn-success mb-3">+ Add New</a>

    <div class="row g-4">
        @forelse($testimonials as $testimonial)
            <div class="col-md-6">
                <div class="card bg-dark text-white border border-danger shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-danger">{{ $testimonial->title }}</h5>
                        @if($testimonial->client_name)
                            <p class="text-white-50 mb-3">- {{ $testimonial->client_name }}</p>
                        @endif

                        <div class="ratio ratio-16x9 mb-3">
                            <iframe 
                                src="{{ $testimonial->video_url }}" 
                                title="{{ $testimonial->title }}" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                        </div>

                        <!-- Buttons in one line -->
                        <div class="d-flex">
                            <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                            <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-center text-white">No testimonials found.</p>
            </div>
        @endforelse
    </div>
</div>

@endsection
