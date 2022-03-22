<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Room;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index()
    {

        $numberOfUsers = User::count();
        $numberOfRooms = Room::count();
        $latestUsers = User::latest()->limit(5)->get();

        $latestUpdatedRooms = Room::orderBy('updated_at', 'desc')->limit(5)->get();


        return view('manage.index', [

            'numberOfUsers' => $numberOfUsers,
            'latestUsers' => $latestUsers,
            'numberOfRooms' => $numberOfRooms,
            'latestUpdatedRooms' => $latestUpdatedRooms
        ]);
    }
}
