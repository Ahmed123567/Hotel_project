@extends('layouts.appAdmin')

@section('title')
    Dashboard
@endsection

@section('content')
    {{-- main body dashboard --}}
    <div class="content-wrapper" style="background: none; padding:10px;">
        <div class="row mt-3">
            <div class="col col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $numberOfUsers }}</h3>
                        <p>Users</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <a href="{{route('manage.users.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>

            </div>
            <div class="col col-md-4">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$numberOfRooms}}</h3>
                        <p>Rooms</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-bed"></i>
                    </div>
                    <a href="{{route('manage.rooms.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>

            </div>
            <div class="col col-md-4">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Floors</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-stairs"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>

            </div>
           
        </div>
    </div>

    {{-- ----------------------------------------------------------------------------------------------------- --}}
    {{-- latest udates tables --}}

    <div class="content-wrapper" style="background: none; padding:10px">
        <div class="row">
            <div class="col col-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Latest Users</h3>
                    </div>

                    <div class="card-body p-0">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th style="width: 153px" >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($latestUsers as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                   
                                    <td>
                                        <a href="{{route('manage.users.show' ,['user_id' => $user->id ])}}">
                                            <span class="badge bg-info">View</span>
                                        </a>
                                        <a href="{{route('manage.users.edit' ,['user_id' => $user->id ])}}">
                                            <span class="badge bg-success">Edit</span>
                                        </a>
                                        <a href="{{route('manage.users.delete' ,['user_id' => $user->id ])}}" onclick="return confirm('Are You Sure?')">
                                            <span class="badge bg-danger">Delete</span>
                                        </a>
                                    </td>
                                </tr> 
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

 {{-- ----------------------------------------------------------------------------------------------------- --}}
    {{-- the sconed table start --}}
            <div class="col col-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Latest Updated Rooms </h3>
                    </div>

                    <div class="card-body p-0">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Owner</th>
                                    <th style="width: 160px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($latestUpdatedRooms as $room)
                                <tr>
                                    <td>{{$room->id}}</td>
                                    @if (!is_null($room->user))
                                        <td>{{$room->user->name}}</td>
                                    @else
                                        <td>Avilable</td>
                                    @endif
                                    <td>
                                        <a href='{{route('manage.rooms.edit' ,['room_id' => $room->id])}}' class='badge bg-success'>Edit</a> 
                                        <a href='{{route('manage.rooms.avillable' ,['room_id' => $room->id])}}'
                                            onclick='return confirm( \"Are you sure?\" )'  class='badge bg-danger'>Make Avillable</a> 
                                    </td>
                                </tr>
                              @endforeach


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
