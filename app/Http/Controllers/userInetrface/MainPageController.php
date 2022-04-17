<?php

namespace App\Http\Controllers\userInetrface;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\User;
use App\Trait\helperTrait;
use Illuminate\Support\Facades\Auth;

class MainPageController extends Controller
{
    use helperTrait;

    /////////////////////////index///////////////////////////////
    public function index()
    {

        $numOfUsers = User::count();
        $numOfRooms = Room::count();


        $roomPrice2 = Room::where('capacity', 2)->first()->price;
        $roomPrice3 = Room::where('capacity', 3)->first()->price;
        $roomPrice5 = Room::where('capacity', 5)->first()->price;


        return view(
            'userInterface.main-page',
            [
                'numOfUsers' => $numOfUsers,
                'numOfRooms' => $numOfRooms,
                'roomPrice2'=> $roomPrice2,
                'roomPrice3' => $roomPrice3,
                'roomPrice5' => $roomPrice5
            ]
        );
    }

    /////////////////////////////room////////////////////////////
    public function room()
    {

        return view('userInterface.room');
    }


    //////////////////////// image upload //////////////////////////

    public function image(Request $req){

        $data = $req->all();
        $imageName = $this->imageUpload($req);
  
        // $req->validate([
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // ]);

    

        User::find($data['user_id'])->update([
            'image' => $imageName,
        ]);

        return redirect()->back();
    }
    

}
