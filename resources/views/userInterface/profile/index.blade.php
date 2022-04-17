@extends('layouts.appUser')

@section('content')

<div class="container">
    <div class="main-body m-4">
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <form action="{{route('main.image')}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <input type="file" name="image" class="upload-image"  onchange="form.submit()" style="display:none" > 
                      <input type="hidden"  name="user_id" value="{{Auth::user()->id}}">
                  </form>
                  <img src="{{ asset('images/'. Auth::user()->image) }}"
                      onclick="$('.upload-image').trigger('click')"
                      class="rounded-circle" width="150"  style="cursor: pointer">     
                    
                    <div class="mt-3">
                      <h4>{{Auth::user()->name}}</h4>
                     
                    </div>
                  </div>
                </div>
              </div>
           
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{Auth::user()->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{Auth::user()->email}}
                    </div>
                  </div>     
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-12 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Reserved Rooms</i></h6>
                      <table class="table table-sm">
                        <thead>
                            <tr>
                                <th style="width: 100px">Id</th>
                                <th>Floor</th>
                                <th>Capacity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rooms as $room )
                            <tr>
                                <td>{{$room->id}}</td>
                                <td>{{$room->floor_id}}</td>
                                <td>{{$room->capacity}}</td>
                                <td>
                                    <a href="{{route('main.profile.unreserve', $room->id)}}" class="btn btn-danger btn-sm badge"
                                     onclick="return confirm('Are You Sure ?')">unresrve</a>
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
          </div>

        </div>
    </div>

@endsection