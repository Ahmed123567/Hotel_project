@extends('layouts.appAdmin')

@section('title')
    Edit User
@endsection


@section('content')
    <div class="content-wrapper" style="background: none; padding:20px 60px ;">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit User</h3>
            </div>


            <form action="{{route('manage.users.update')}}" method="post" enctype="multipart/form-data"> 

                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">User Name</label> 
                        <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{$user->name}}">
                        @error('name')
                            <div class="error" style="color: red">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="Email">Email address</label>
                        <input type="email" name="email" class="form-control" id="Email" placeholder="Enter email" value="{{$user->email}}">
                        
                        @error('email')
                            <div class="error" style="color: red">{{ $message }}</div>
                        @enderror
                   
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password"  name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    
                        @error('password')
                          <div class="error" style="color: red">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="customFile">                                <label class="custom-file-label" for="exampleInputFile">Choose  image</label>
                            </div>
                        </div>
                           

                    </div>
                   
                </div>

                <input type="hidden" name="user_id" value="{{$user->id}}">

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection


@push('scripts')
    <script>

    </script>
@endpush
