@extends('backend.app')
@section('title') Users @endsection

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">User - {{($user->name) ? $user->name : 'N/A'}}</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('super-admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('super-admin.users.index')}}">All Users</a></li>
                        <li class="breadcrumb-item active">User Details</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">User Details</h3>
                    <a href="{{route('super-admin.users.index')}}" class="btn btn-info waves-effect waves-light float-end mb-2"><i class="fas fa-backward"></i> Go Back</a>

                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td style="font-weight: bold">ID</td>
                                <td>{{$user->id}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Name</td>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Email</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Address</td>
                                <td>{{($user->address) ? $user->address : 'N/A'}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Phone</td>
                                <td>{{($user->phone) ? $user->phone : 'N/A'}}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Assign Roles</td>
                                <td>
                                    @if(!empty($user->roles))
                                        @foreach ($user->roles as $role)
                                            <span class="badge badge-pill badge-soft-info font-size-11" style="text-transform: capitalize">
                                                {{ $role->name }}
                                            </span>
                                        @endforeach
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Farms</td>
                                <td>
                                    @if(!empty($user->farms))
                                        @foreach ($user->farms as $farm)
                                            <span class="badge badge-pill badge-soft-primary font-size-11" style="text-transform: capitalize">
                                                {{ $farm->name }}
                                            </span>
                                        @endforeach
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Herds</td>
                                <td>
                                    @if(!empty($user->herds))
                                        @foreach ($user->herds as $herd)
                                            <span class="badge badge-pill badge-soft-primary font-size-11" style="text-transform: capitalize">
                                                {{ $herd->name }}
                                            </span>
                                        @endforeach
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Lots</td>
                                <td>
                                    @if(!empty($user->lots))
                                        @foreach ($user->lots as $lot)
                                            <span class="badge badge-pill badge-soft-primary font-size-11" style="text-transform: capitalize">
                                                {{ $lot->name }}
                                            </span>
                                        @endforeach
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Status</td>
                                <td>
                                    <span class="badge badge-pill badge-soft-{{($user->status == 'active') ? 'success' : 'danger'}} mr-1">{{($user->status == 'active') ? 'Active' : 'Inactive'}}</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Photo</td>
                                <td>
                                    @if(isset($user->profile_photo))
                                        <img src="{{asset('storage/'.$user->profile_photo)}}" alt="{{$user->name}}" width="180" height="130" />
                                    @else
                                        <img src="{{ asset('backend/assets/images/thumb-1@2x.png')}}" alt="" width="180" height="130"/>
                                    @endif
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection

@push('scripts')

    <script type="text/javascript">
        // Js Code Here..
        $(document).ready(function($)
        {

        });
    </script>

@endpush
