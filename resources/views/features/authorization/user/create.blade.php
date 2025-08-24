@extends('backend.app')
@section('title','Create User')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Create User</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('super-admin.dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('super-admin.users.index')}}">All Users</a></li>
                        <li class="breadcrumb-item active">Create User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">User Information</h4>
                    <p class="card-title-desc">Fill all information below</p>
                    <form action="{{ route('super-admin.users.store') }}" method="POST" role="form" id="form1"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">{{ __('messages.name')}} <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" name="name" placeholder="Enter name" />
                                </div>
                                @error('name') <span class="text-danger"><i class="entypo-info-circled"></i>  {{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Email <span class="text-danger">*</span></label>

                                    <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" placeholder="Enter email" />
                                </div>
                                @error('email') <span class="text-danger"><i class="entypo-info-circled"></i>  {{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Password <span class="text-danger">*</span></label>

                                    <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" name="password"  placeholder="Enter password" />
                                </div>
                                @error('password') <span class="text-danger"><i class="entypo-info-circled"></i>  {{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Confirm Password <span class="text-danger">*</span></label>

                                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" value="{{old('password_confirmation')}}" name="password_confirmation"  placeholder="Re-enter password" />
                                    @error('password_confirmation') <span class="text-danger"><i class="entypo-info-circled"></i>  {{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Address</label>

                                    <input type="text" class="form-control" name="address" value="{{old('address')}}" placeholder="Enter address" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Phone</label>

                                    <input type="text" class="form-control" name="phone" value="{{old('phone')}}" placeholder="ex: 017XXXXXXXX" />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Gender <span class="text-danger">*</span></label>

                                    <select class="form-control" name="gender" >
                                        <option value="">--Select Gender--</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Assign Roles <span class="text-danger">*</span></label>

                                    <select class="form-control select2-multiple @error('assign_roles') is-invalid @enderror"  name="assign_roles">
                                        <option value="">Select Roles</option>
                                        @foreach ($roles as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('assign_roles') <span class="text-danger"><i class="entypo-info-circled"></i>  {{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Farm {{ __('messages.name')}} <span class="text-danger">*</span></label>

                                    <select class="form-control select2-multiple @error('farms') is-invalid @enderror" name="farms[]" id="farm" multiple="multiple" onChange="getHerd();">
                                        @foreach ($farms as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('farms') <span class="text-danger"><i class="entypo-info-circled"></i>  {{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Herd Name</label>

                                    <select class="form-control select2-multiple @error('herd') is-invalid @enderror"  name="herds[]"  id="herd" multiple="multiple" onChange="getLot();">
                                        {{-- <option value="">--Select Herd--</option>
                                        @foreach ($herds as $herd)
                                            <option value="{{$herd->id}}">{{$herd->name}}</option>
                                        @endforeach --}}
                                    </select>
                                    @error('herds') <span class="text-danger"><i class="entypo-info-circled"></i>  {{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Lot Name</label>

                                    <select class="form-control select2-multiple @error('lots') is-invalid @enderror" name="lots[]"  id="lot" multiple="multiple">
                                        {{-- <option value="">--Select Lot--</option>
                                        @foreach ($lots as $lot)
                                            <option value="{{$lot->id}}">{{$lot->name}}</option>
                                        @endforeach --}}
                                    </select>
                                    @error('lots') <span class="text-danger"><i class="entypo-info-circled"></i>  {{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Profile Photo</label>
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        {{-- <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                                            <img src="http://placehold.it/200x150" alt="...">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div> --}}
                                        <div>
                                            <span class="btn btn-white btn-file">
                                                {{-- <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span> --}}
                                                <input type="file" class="form-control" name="profile_photo" accept="image/*">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Status</label><br>
                                    <input type="radio" class="form-check-input" name="status" value="active" checked/> Active
                                    <input type="radio" class="form-check-input" name="status" value="inactive" /> Inactive

                                </div>
                            </div>
                        </div>
                        @can('user.create')
                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save User</button>
                        </div>
                        @endcan
                    </form>

                </div>
            </div>


        </div>
    </div>
    <!-- end row -->


@endsection

@push('scripts')
    <script src="{{asset('backend/assets/js/fileinput.js')}}"></script>
    <!-- init js -->
    <script src="{{asset('backend/assets/libs/select2/select2.min.js')}}"></script>
    <script type="text/javascript">
        // Js Code Here..
        $(document).ready(function($)
        {
            $('.select2-multiple').select2();

            // $('#farm').change(function(){
            //     var farm_id = $(this).val();
            //     if(farm_id){
            //         $.ajax({
            //             type:"GET",
            //             url:"{{url('system/users/get-herd-list')}}?farm_id="+farm_id,
            //             success:function(res){
            //                 if(res){
            //                     $("#herd").empty();
            //                     $("#herd").append('<option>Select Herd</option>');
            //                     $.each(res,function(key){
            //                         $("#herd").append('<option value="'+res[key].id+'">'+res[key].name+'</option>');
            //                     });

            //                 }else{
            //                 $("#herd").empty();
            //                 }
            //             }
            //         });
            //     }else{
            //         $("#herd").empty();
            //         $("#lot").empty();
            //     }
            // });
            // $('#herd').on('change',function(){
            //     var lot_id = $(this).val();
            //     if(lot_id){
            //         $.ajax({
            //             type:"GET",
            //             url:"{{url('system/users/get-lot-list')}}?lot_id="+lot_id,
            //             success:function(res){
            //                 if(res){
            //                     $("#lot").empty();
            //                     $("#lot").append('<option>Select Lot</option>');
            //                     $.each(res,function(key,value){
            //                         $("#lot").append('<option value="'+res[key].id+'">'+res[key].name+'</option>');
            //                     });

            //                 }else{
            //                     $("#lot").empty();
            //                 }
            //             }
            //         });
            //     }else{
            //         $("#lot").empty();
            //     }

            // });

        });

        function getHerd() {
            var str='';
            var val=$('#farm').val();

            for (i=0;i< val.length;i++) {
                if(val[i]){
                    str += val[i] + ',';
                }
            }
            var str=str.slice(0,str.length -1);
            console.log(str);

            $.ajax({
                type:"GET",
                url:"{{url('system/users/get-herd-list')}}",
                data:'farm_id='+str,
                success:function(res){
                    if(res){
                        $("#herd").empty();
                        $("#herd").html(res);

                    }else{
                        $("#herd").empty();
                    }
                }
            });
        }

        function getLot() {
            var str='';
            var val=$('#herd').val();

            for (i=0;i< val.length;i++) {
                if(val[i]){
                    str += val[i] + ',';
                }
            }
            var str=str.slice(0,str.length -1);
            console.log(str);

            $.ajax({
                type:"GET",
                url:"{{url('system/users/get-lot-list')}}",
                data:'herd_id='+str,
                success:function(res){
                    if(res){
                        $("#lot").empty();
                        $("#lot").html(res);

                    }else{
                        $("#lot").empty();
                    }
                }
            });
        }

    </script>

@endpush
