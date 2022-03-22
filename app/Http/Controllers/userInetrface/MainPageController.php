<?php

namespace App\Http\Controllers\userInetrface;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index(){
        return view('userInterface.main-page');
    }
}
