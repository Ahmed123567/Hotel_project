@extends('layouts.appAdmin')

@section('title')
    Manage Rooms
@endsection


@section('content')
    <div class="content-wrapper" style="background: none; padding:20px 60px ;">

    
    <form action="{{route('manage.floors.store')}}" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <button  class="btn btn-info btn-sm" style="margin: 0 0 20px 0">Create Floor</button>
    </form>


        <table class="table table-bordered yajra-datatable ">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Creator</th>
                    <th>Ceated At</th>
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
        $(function() {

            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('manage.floors.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'creator',
                        name: 'creator'
                    },
                    {
                        data:'created',
                        name:'created'
                    },
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


