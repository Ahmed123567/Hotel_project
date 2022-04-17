<?php

namespace App\Http\Controllers\userInetrface;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{
    public function index($roomtype){


        $roomPrice2 = Room::where('capacity', 2)->first()->price;
        $roomPrice3 = Room::where('capacity', 3)->first()->price;
        $roomPrice5 = Room::where('capacity', 5)->first()->price;


        $room2count = Room::where('capacity', 2)->where('user_id' , null)->count();
        $room3count = Room::where('capacity', 3)->where('user_id' , null)->count();
        $room5count = Room::where('capacity', 5)->where('user_id' , null)->count();


        if ($roomtype == 2){
            $mainRoom = ['Tow Persons Room',$roomPrice2 ,2 , $room2count];

            $otherRooms = [
                ['Three Persons Room' , $roomPrice3 , 3 , $room3count],
                ['Five Persons Room', $roomPrice5 , 5 , $room5count]
            ];
        }elseif( $roomtype == 3){
            $mainRoom = ['Three Persons Room', $roomPrice3,3, $room3count];
            $otherRooms = [
                ['Two Persons Room' , $roomPrice2 , 2 , $room2count], 
                ['Five Persons Room' , $roomPrice5 , 5 , $room5count]
            ];
        }else{
            $mainRoom = ['Five Persons Room', $roomPrice5 , 5 , $room5count];
            $otherRooms = [
                ['Three Persons Room' , $roomPrice3 , 3 ,$room3count], 
                ['Two Persons Room', $roomPrice2, 2 , $room2count]
            ];
        }


        return view('userInterface.room.index' , 
        [
            'mainRoom' => $mainRoom,
            'otherRooms' => $otherRooms
        ]);

    }

    public function reserve(Request $req){

        $data = $req->all();
 
        $count =  Room::where('capacity', $data['roomtype'])->where('user_id' , null)->count();
        if ($count == 0){
            return redirect()->back();
        }

      

        Room::where('capacity', $data['roomtype'])
            ->where('user_id' , null)
            ->first()
            ->update([
                'user_id' => $data['owner']
            ]);

        return redirect()->back();
    }

}
