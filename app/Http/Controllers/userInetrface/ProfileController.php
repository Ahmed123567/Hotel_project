<?php

namespace App\Http\Controllers\userInetrface;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){

        $rooms = Room::where('user_id', Auth::user()->id)->get();

        return view('userInterface.profile.index', 
        [
            'rooms' => $rooms
        ]
    );
    }

    public function unresrve($id){
        
        Room::find($id)->update([
            'user_id' => null
        ]);

        return redirect()->back();

    }

}
