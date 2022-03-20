<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageConroller extends Controller
{
    public function index(){
        return view('manage.index');
    }
}
