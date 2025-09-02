 @extends('app')
 @section('title', 'Edit News Source')
 @section('content')

     <div class="container py-4">
         <h2>Edit News Source</h2>

         < <form action="{{ route('news.update', $news->id) }}" method="POST">
             @csrf
             @method('PUT') <!-- Method spoofing, খুব জরুরি -->

             <div class="mb-3">
                 <label for="name" class="form-label">News Name</label>
                 <input type="text" name="name" class="form-control" value="{{ $news->name }}" required>
             </div>

             <button type="submit" class="btn btn-primary">Update</button>
             <a href="{{ route('news.index') }}" class="btn btn-secondary">Cancel</a>
             </form>

     </div>

 @endsection
