<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ManageRoomController extends Controller
{
    public function index(Request $request){

        if ($request->ajax()) {
            $data = Room::latest()->get();            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('owner', function($row){
                    
                    if($row->user_id){
                        $owner = $row->user->name;
                    }else{
                        $owner = "Avillable";
                    }
                    
                    return $owner;
                })
                ->rawColumns(['owner'])
                ->addColumn('action', function($row){
                    $actionBtn = "
                    <a href='http://127.0.0.1:8000/manage/rooms/edit/$row->id'
                     class='edit btn btn-success btn-sm'>Edit</a> 
                     ";
                     
                     if($row->user_id){
                        $actionBtn = $actionBtn . "
                        <a href='http://127.0.0.1:8000/manage/rooms/make-avillable/$row->id'
                        onclick='return confirm( \"Are you sure?\" )'  class='edit btn btn-danger btn-sm'>Make Avillable</a> 
                        ";
                     }  


                     ;
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('manage.room.index');
    }

    public function avillable($room_id){

        Room::find($room_id)->update([
            'user_id' => null
        ]);

        return redirect()->back();
    }


    public function edit($room_id){
       
        $room = Room::find($room_id);
        $users = User::all();

        return view('manage.room.edit' , ['room' => $room, 'users' => $users ]);
    }

    public function update(Request $request){

        $roomData = $request->all(); 

        Room::find($roomData['room_id'])->update([
            'user_id' => $roomData['owner'],
            'capacity' => $roomData['capacity']
        ]);

        return redirect()->route('manage.rooms.index');
    }

}
