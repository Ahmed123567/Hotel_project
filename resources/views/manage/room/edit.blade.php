@extends('layouts.appAdmin')

@section('title')
    Edit Room
@endsection


@section('content')
    <div class="content-wrapper" style="background: none; padding:20px 60px ;">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Room</h3>
            </div>


            <form action="{{ route('manage.rooms.update') }}" method="post">

                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Owner</label>


                        <select class="custom-select rounded-0" id="exampleSelectRounded0" name="owner">
                            @if (!is_null($room->user))
                                <option selected value="{{ $room->user->id }}">{{ $room->user->name }}</option>
                                @foreach ($users as $user)
                                    @if ($user->id != $room->user->id)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endif
                                @endforeach
                            @else
                                <option selected value="">...</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('owner')
                            <div class="error" style="color: red">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="Email">Room Capacity</label>
                        <select class="custom-select rounded-0" id="exampleSelectRounded0" name="capacity">
                            @if ($room->capacity == 'Two Persons')
                                <option value="2" selected>Two persons</option>
                            @else
                                <option value="2">Two persons</option>
                            @endif

                            @if ($room->capacity == 'Three Persons')
                                <option value="3" selected>Three persons</option>
                            @else
                                <option value="3">Three persons</option>
                            @endif

                            @if ($room->capacity === 'Five Persons')
                                <option value="5" selected>Five persons</option>
                            @else
                                <option value="5">Five persons</option>
                            @endif
                            
                        </select>
                        @error('capacity')
                            <div class="error" style="color: red">{{ $message }}</div>
                        @enderror

                    </div>
                </div>



                <input type="hidden" name="room_id" value="{{ $room->id }}">

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
