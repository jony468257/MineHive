 @extends('app')
 @section('title', 'Gallery')
 @section('content')

     <style>
         .container-dark {
             background-color: #1e1e1e;
             /* Dark container */
             padding: 30px;
             border-radius: 10px;
             box-shadow: 0 0 15px rgba(255, 0, 0, 0.3);
             margin-top: 50px;
             color: #fff;
         }

         h2 {
             color: #ff4d4d;
             /* Red heading */
             font-weight: bold;
             text-align: center;
             margin-bottom: 30px;
         }

         .btn-success {
             background-color: #28a745;
             border: none;
             color: #fff;
         }

         .btn-success:hover {
             background-color: #218838;
             color: #fff;
         }

         .btn-warning {
             background-color: #ffc107;
             /* Yellow for Edit */
             border: none;
             color: #fff;
         }

         .btn-warning:hover {
             background-color: #e0a800;
             color: #fff;
         }

         .btn-danger {
             background-color: #ff4d4d;
             /* Red for Delete */
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
             border: 1px solid #ff4d4d;
             border-radius: 10px;
         }

         .card-title {
             color: #ff4d4d;
             font-weight: bold;
             margin-bottom: 0;
         }

         .alert-success {
             background-color: #2c2c2c;
             /* Dark alert to match container */
             border-color: #28a745;
             color: #28a745;
         }
     </style>

     <div class="container container-dark">
         <h2>Gallery</h2>

         @if (session('success'))
             <div class="alert alert-success">{{ session('success') }}</div>
         @endif

         <a href="{{ route('gallery.create') }}" class="btn btn-success mb-3">+ Add New Image</a>

         <div class="row g-4">
             @forelse($galleries as $gallery)
                 <div class="col-md-4">
                     <div class="card shadow-sm">
                         <img src="{{ asset('storage/' . $gallery->image) }}" class="card-img-top"
                             style="height: 250px; object-fit: cover;">
                         <div class="card-body d-flex justify-content-between align-items-center">
                             <h5 class="card-title">{{ $gallery->title ?? 'No Title' }}</h5>
                             <div class="card-body d-flex justify-content-between align-items-center">
                                 {{-- <h5 class="card-title mb-0">{{ $gallery->title ?? 'No Title' }}</h5> --}}
                                 <div class="d-flex gap-1">
                                     <a href="{{ route('gallery.edit', $gallery->id) }}"
                                         class="btn btn-warning btn-sm">Edit</a>
                                     <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST"
                                         class="d-inline">
                                         @csrf
                                         @method('DELETE')
                                         <button type="submit" class="btn btn-danger btn-sm"
                                             onclick="return confirm('Are you sure?')">Delete</button>
                                     </form>
                                 </div>
                             </div>

                         </div>
                     </div>
                 </div>
             @empty
                 <div class="col-12">
                     <p class="text-center">No images found.</p>
                 </div>
             @endforelse
         </div>
     </div>

 @endsection
