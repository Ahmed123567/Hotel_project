@extends('layouts.appAdmin')

@section('title')
    Manage Rooms
@endsection


@section('content')
    <div class="content-wrapper" style="background: none; padding:20px 60px ;">

        <div class="card mb-5">
            <div class="card-header">
                <h3 class="card-title">Change Prices</h3>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Two Persons</th>
                            <th>Three Persons</th>
                            <th>Five Persons</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <form action="{{route('manage.rooms.priceChange')}}" method="post" class="priceFrom">
                                @csrf
                                <td><input type="text" class="form-control" name="cap2" value="{{$roomPrice2->price}}" ></td>
                                <td><input type="text" class="form-control" name="cap3" value="{{$roomPrice3->price}}"></td>
                                <td><input type="text" class="form-control" name="cap5" value="{{$roomPrice5->price}}"></td>
                            </form>
                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="card-footer clearfix">
                

                    <button class="btn btn-primary" onclick=" 
                        $('.priceFrom').submit() ";
                    ">
                        Change
                    </button>
                
            </div>
        </div>

        <table class="table table-bordered yajra-datatable ">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Owner</th>
                    <th>Floor</th>
                    <th>Capacity</th>
                    <th>price</th>
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
        $(function() {

            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('manage.rooms.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'owner',
                        name: 'owner'
                    },
                    {
                        data: 'floor_id',
                        name: 'floor_id'
                    },
                    {
                        data: 'capacity',
                        name: 'capacity'
                    },
                    {
                        data: 'price',
                        name: 'price'
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


