@extends('layouts.appAdmin')

@section('title')
    Manage Rooms
@endsection


@section('content')



<div class="content-wrapper" style="background: none; padding:20px 60px ;">


    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>id</th>
                <th>Owner</th>
                <th>Floor</th>
                <th>Capacity</th>
                <th style="width: 150px">Action</th>
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
        ajax: "{{route('manage.rooms.index')}}",
        columns: [
           {data: 'id', name: 'id'},
            {data: 'owner', name: 'owner'},
            {data: 'floor_id', name: 'floor_id'},
            {data: 'capacity', name: 'capacity' },
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