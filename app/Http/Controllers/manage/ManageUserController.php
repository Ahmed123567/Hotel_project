<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Trait\cleanCodeTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use App\Trait\helperTrait;
// use Carbon\Carbon;

class ManageUserController extends Controller
{

    use helperTrait;
    use cleanCodeTrait;

    ////////////////////index///////////////////////////////////////

    public function index(Request $request)
    {


        if ($request->ajax()) {
            $data = User::latest()->get();

            // userDataTables is a function from cleanCodeTrait

            return $this->usersDataTables($data);
        }




        return view('manage.user.index');
    }


    ////////////////////show///////////////////////////////////////


    public function show($user_id)
    {

        $user = User::find($user_id);

        $user->created_at =  Carbon::createFromFormat('Y-m-d H:i:s', $user->created_at)->format('Y-m-d H:i:s');

        return view('manage.user.show', ['user' => $user]);
    }


    ////////////////////create///////////////////////////////////////

    public function create()
    {
        return view('manage.user.create');
    }


    public function edit($user_id)
    {

        $user = User::find($user_id);

        return view('manage.user.edit', ['user' => $user]);
    }


    ////////////////////store///////////////////////////////////////


    public function store(UserRequest $request)
    {

        $userData = $request->all();

        if ($request->file('image') == null) {
            $imageName = 'default.jpg';
        } else {
            $imageName = $this->imageUpload($request);
        }



        User::create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'password' => Hash::make($userData['password']),
            'image' => $imageName,
        ]);

        return redirect()->back();
    }


    ////////////////////update///////////////////////////////////////

    public function update(UserRequest $request)
    {

        $userData = $request->all();


        if ($request->file('image') == null) {
            $imageName = User::find($userData['user_id'])->image;
        } else {
            $imageName = $this->imageUpload($request);
        }


        User::find($userData['user_id'])->update([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'password' => Hash::make($userData['password']),
            'image' => $imageName,
        ]);

        return redirect()->back();
    }

    ////////////////////delete///////////////////////////////////////


    public function delete($user_id)
    {

        User::find($user_id)->delete();

        return redirect()->back();
    }
}
