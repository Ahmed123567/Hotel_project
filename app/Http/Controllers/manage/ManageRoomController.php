<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Trait\cleanCodeTrait;

class ManageRoomController extends Controller
{
    use cleanCodeTrait;

    public function index(Request $request)
    {
      
        if ($request->ajax()) {
            $data = Room::latest()->get();  

            // roomDataTable is function from cleanCodeTrait

            return $this->roomsDataTable($data);
        }


        return view('manage.room.index');
    }

    public function avillable($room_id)
    {

        Room::find($room_id)->update([
            'user_id' => null
        ]);

        return redirect()->back();
    }


    public function edit($room_id)
    {

        $room = Room::find($room_id);
        $users = User::all();

    

        return view('manage.room.edit', ['room' => $room, 'users' => $users]);
    }

    public function update(Request $request)
    {

        $roomData = $request->all();

        Room::find($roomData['room_id'])->update([
            'user_id' => $roomData['owner'],
            'capacity' => $roomData['capacity'],
            
        ]);

        Room::where( 'capacity',$roomData['capacity'])->update([
            'price' => $roomData['price']
        ]);

        return redirect()->route('manage.rooms.index');
    }
}
