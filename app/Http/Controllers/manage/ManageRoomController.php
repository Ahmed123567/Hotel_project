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

            foreach($data as $item){
               
            }
            
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('owner', function($item){
                    
                    if($item->user_id){
                        $owner = $item->user->name;
                    }else{
                        $owner = "Empty Room";
                    }
                    
                    return $owner;
                })
                ->rawColumns(['owner'])
                ->addColumn('action', function($row){
                    $actionBtn = "
                    <a href='http://127.0.0.1:8000/manage/rooms/edit/$row->id'
                     class='edit btn btn-success btn-sm'>Edit</a> 
                     "
                     
                     ;
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('manage.room.index');
    }

    

}
