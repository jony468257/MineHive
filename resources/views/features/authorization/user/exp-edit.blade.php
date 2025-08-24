<form action="{{ route('super-admin.users.update',$user->id) }}" method="POST" role="form" id="form1"  enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Name</label>

                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter name" value="{{($user->name) ? $user->name : old('name')}}"/>
            </div>
            @error('name') <span class="text-danger"><i class="entypo-info-circled"></i>  {{ $message }}</span> @enderror
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Email</label>

                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter email" value="{{($user->email) ? $user->email : old('email')}}"/>
            </div>
            @error('email') <span class="text-danger"><i class="entypo-info-circled"></i>  {{ $message }}</span> @enderror
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Address</label>

                <input type="text" class="form-control" name="address" placeholder="Enter address" value="{{($user->address) ? $user->address : old('address')}}"/>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Phone</label>

                <input type="text" class="form-control" name="phone" placeholder="ex: 017XXXXXXXX" value="{{($user->phone) ? $user->phone : old('phone')}}"/>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Gender <span class="text-danger">*</span></label>

                <select class="form-control" name="gender" >
                    <option value="">--Select Gender--</option>
                    <option value="male" {{($user->gender == 'male') ? 'selected' : ''}}>Male</option>
                    <option value="female" {{($user->gender == 'female') ? 'selected' : ''}}>Female</option>
                    <option value="other" {{($user->gender == 'other') ? 'selected' : ''}}>Other</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Assign Roles <span class="text-danger">*</span></label>

                <select class="form-control select2-multiple @error('assign_roles') is-invalid @enderror"  name="assign_roles" >
                    <option value="">Select Roles</option>
                    @foreach ($roles as $item)
                        <option value="{{$item->id}}" {{$user->hasRole($item->name) ? 'selected' : '' }}>{{$item->name}}</option>
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

                <select class="form-control select2-multiple @error('farms') is-invalid @enderror" name="farms[]" id="farm" multiple="multiple"  onChange="getHerd();">
                    @foreach ($farms as $farm)
                        <option value="{{$farm->id}}" @foreach($user->farms as $fa) @if($farm->id == $fa->id) selected="selected"@endif @endforeach>{{$farm->name}}</option>
                    @endforeach
                </select>
                @error('farms') <span class="text-danger"><i class="entypo-info-circled"></i>  {{ $message }}</span> @enderror

            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="form-label">Herd Name</label>

                <select class="form-control select2-multiple @error('herd') is-invalid @enderror"  name="herds[]"  id="herd" multiple="multiple"   onChange="getLot();">
                    @foreach ($herds as $herd)
                        <option value="{{$herd->id}}" @foreach($user->herds as $he) @if($herd->id == $he->id) selected="selected"@endif @endforeach>{{$herd->name}}</option>
                    @endforeach
                </select>
                @error('herds') <span class="text-danger"><i class="entypo-info-circled"></i>  {{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="form-label">Lot Name</label>

                <select class="form-control select2-multiple @error('lots') is-invalid @enderror" name="lots[]"  id="lot" multiple="multiple">
                    @foreach ($lots as $lot)
                        <option value="{{$lot->id}}" @foreach($user->lots as $lo) @if($lot->id == $lo->id) selected="selected"@endif @endforeach>{{$lot->name}}</option>
                    @endforeach
                </select>
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
                    @if(isset($user->profile_photo))
                        <img src="{{asset('storage/'.$user->profile_photo)}}" alt="{{$user->name}}" width="200" height="150" />
                    @else
                        <img src="http://placehold.it/200x150" alt="...">
                    @endif
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
                <input type="radio" class="form-check-input" name="status" value="active" {{($user->status == 'active') ? 'checked' : ''}}/> Active
                <input type="radio" class="form-check-input" name="status" value="inactive" {{($user->status == 'inactive') ? 'checked' : ''}}/> Inactive

            </div>
        </div>
    </div>
    @can('user.edit')
        <div class="d-flex flex-wrap gap-2">
            <button type="submit" class="btn btn-primary waves-effect waves-light">Save User</button>
        </div>
    @endcan
</form>
