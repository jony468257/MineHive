 @extends('app')
@section('title','All Consultancy Requests')
@section('content')

<style>
    .container-dark {
        background-color: #1e1e1e; /* Dark container */
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

    .btn-danger {
        background-color: #ff4d4d;
        border: none;
        color: #fff;
    }

    .btn-danger:hover {
        background-color: #ff0000;
        color: #fff;
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
</style>

<div class="container container-dark">
    <h2>All Consultancy Requests</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-dark table-striped align-middle">
            <thead>
                <tr>
                    <th>Id</th>
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
                            <form action="{{ route('consultancy.destroy', $c->id) }}" method="POST" style="display:inline-block;">
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
