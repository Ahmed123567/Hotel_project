<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Models\Floor;
use App\Models\Room;
use App\Trait\cleanCodeTrait;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ManageFloorController extends Controller
{

    use cleanCodeTrait;

    public function index(Request $request){

        if ($request->ajax()) {
            $data = Floor::latest()->get();

            return $this->floorsDataTables($data);

        }
        return view('manage.floor.index');

    }

  
    public function store(Request $request)
    {

        $floorData = $request->all();

        $floor = Floor::select('id')->latest()->first();

        Floor::create([
            'id' => $floor->id + 1,
            'user_id' => $floorData['user_id'],
        ]);

       
        $room_price1 = Room::select('price')->where('capacity', 2)->first();
        $room_price2 = Room::select('price')->where('capacity', 3)->first();
        $room_price3 = Room::select('price')->where('capacity', 5)->first();


        for ($i = 0; $i < 3 ; $i++ ) {  
            Room::create([
                'floor_id' =>$floor->id + 1,
                'capacity' => 2,
                'price' =>  $room_price1->price,
              ]);
        }
        
        for ($i = 0; $i < 3 ; $i++ ) {  
            Room::create([
                'floor_id' =>$floor->id+1,
                'capacity' => 3,
                'price' =>  $room_price2->price,
              ]);
        }  
        
        for ($i = 0; $i < 3 ; $i++ ) {  
            Room::create([
                'floor_id' =>$floor->id+1,
                'capacity' => 5,
                'price' =>  $room_price3->price,
              ]);
        }
      

        return redirect()->back();
    }

    public function delete($floor_id)
    {

        Floor::find($floor_id)->delete();

        Room::where('floor_id', $floor_id)->delete();

        return redirect()->back();
    }
  
}
