@extends('layouts.appAdmin')

@section('title')
    Manage Users
@endsection


@section('content')



<div class="content-wrapper" style="background: none; padding:20px 60px ;">

    <a  href="{{route('manage.users.create')}}"> <button class="btn btn-info btn-sm" style="margin: 0 0 20px 0">Create User</button></a>

    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        </table>
        

</div>
@endsection


@push('scripts')
<script>
$(function () {
          
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{route('manage.users.index')}}",
        columns: [
           {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'role', name: 'role'},
            {data: 'email', name: 'email'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });

    
  });
  
</script>
@endpush