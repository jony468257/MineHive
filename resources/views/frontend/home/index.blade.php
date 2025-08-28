 @extends('frontend.layouts.master')

@section('title', 'Home Page')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Welcome to My Website</h1>

    <p class="mb-4">
        This is the home page. You can add your frontend content here.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-4 rounded shadow">Card 1</div>
        <div class="bg-white p-4 rounded shadow">Card 2</div>
        <div class="bg-white p-4 rounded shadow">Card 3</div>
    </div>
@endsection
