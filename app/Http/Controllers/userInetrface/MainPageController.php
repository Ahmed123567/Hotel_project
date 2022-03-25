<?php

namespace App\Http\Controllers\userInetrface;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\User;

class MainPageController extends Controller
{

    /////////////////////////index///////////////////////////////
    public function index()
    {

        $numOfUsers = User::count();
        $numOfRooms = Room::count();


        return view(
            'userInterface.main-page',
            [
                'numOfUsers' => $numOfUsers,
                'numOfRooms' => $numOfRooms
            ]
        );
    }

    /////////////////////////////room////////////////////////////
    public function room()
    {

        return view('userInterface.room');
    }
}
