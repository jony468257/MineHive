@extends('app')
@section('title','Add Slider')
@section('content')
 

<div class="container py-4">
    <h2 class="mb-4" style="color:#ff4d4d;">All Consultancy Requests</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-dark table-striped align-middle">
            <thead style="background-color:#330000; color:#ff4d4d;">
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Company</th>
                    <th>Designation</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($consultancies as $key => $c)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $c->full_name }}</td>
                        <td>{{ $c->company_name }}</td>
                        <td>{{ $c->designation }}</td>
                        <td>{{ $c->mobile }}</td>
                        <td>{{ $c->email }}</td>
                        <td>{{ $c->message }}</td>
                        <td>
                            <form action="{{ route('consultancy.destroy', $c->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
