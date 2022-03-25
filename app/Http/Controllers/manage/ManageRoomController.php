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


    /////////////////////////////////index//////////////////////////////////////////////
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Room::latest()->get();


            // roomDataTable is function from cleanCodeTrait

            return $this->roomsDataTable($data);
        }

        $roomPrice2 = Room::where('capacity', 2)->first();
        $roomPrice3 = Room::where('capacity', 3)->first();
        $roomPrice5 = Room::where('capacity', 5)->first();



        return view(
            'manage.room.index',
            [
                'roomPrice2' => $roomPrice2,
                'roomPrice3' => $roomPrice3,
                'roomPrice5' => $roomPrice5,

            ]
        );
    }
    //////////////////////////////////avillable///////////////////////////////////////

    public function avillable($room_id)
    {

        Room::find($room_id)->update([
            'user_id' => null
        ]);

        return redirect()->back();
    }


    ////////////////////////////////edit////////////////////////////////////

    public function edit($room_id)
    {

        $room = Room::find($room_id);
        $users = User::all();



        return view('manage.room.edit', ['room' => $room, 'users' => $users]);
    }



    /////////////////////////////////update/////////////////////////////////

    public function update(Request $request)
    {

        $roomData = $request->all();

        Room::find($roomData['room_id'])->update([
            'user_id' => $roomData['owner'],
            'capacity' => $roomData['capacity'],

        ]);


        return redirect()->route('manage.rooms.index');
    }

    //////////////////////////priceChange///////////////////////////////////////

    public function priceChange(Request $request)
    {

        $prices = $request->all();

        Room::where('capacity', 2)->update(
            [
                'price' => $prices['cap2']
            ]
        );
        Room::where('capacity', 3)->update(
            [
                'price' => $prices['cap3']
            ]
        );
        Room::where('capacity', 5)->update(
            [
                'price' => $prices['cap5']
            ]
        );

        return redirect()->back();
    }
}
