@extends('app')
@section('title','All Sliders')
@section('content')
<div class="container mt-5">
    <h2 class="mb-4" style="color:#8B0000; text-shadow: 1px 1px 2px #ff0000;">All Sliders</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-dark table-striped align-middle">
            <thead style="background-color:#2c0202; color:#ff4444;">
                <tr>
                    <th>ID</th>
                    <th>Title (EN/BN)</th>
                    <th>Subtitle (EN/BN)</th>
                    <th>Description (EN/BN)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sliders as $slider)
                <tr>
                    <td>{{ $slider->id }}</td>
                    <td>{{ json_decode($slider->title)->en }} / {{ json_decode($slider->title)->bn }}</td>
                    <td>{{ json_decode($slider->subtitle)->en }} / {{ json_decode($slider->subtitle)->bn }}</td>
                    <td>{{ json_decode($slider->description)->en }} / {{ json_decode($slider->description)->bn }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-warning btn-sm flex-fill">Edit</a>
                            <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST" class="flex-fill">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm w-100" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
