<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
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

    public function index(Request $request){


        if ($request->ajax()) {
            $data = User::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = "
                    <a href='http://127.0.0.1:8000/manage/users/$row->id' class='btn btn-primary btn-sm'>View</a>
                    <a href='http://127.0.0.1:8000/manage/users/edit/$row->id'
                     class='edit btn btn-success btn-sm'>Edit</a> 

                     <a onclick='return confirm( \"Are you sure?\" )' href='http://127.0.0.1:8000/manage/users/delete/$row->id' 
                     class='delete btn btn-danger btn-sm'>Delete</a>
                     
                     "
                     
                     ;
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        
        return view('manage.user.index');
    }

   
   
    public function show($user_id){
        
        $user = User::find($user_id);

        $user->created_at =  Carbon::createFromFormat('Y-m-d H:i:s', $user->created_at)->format('Y-m-d H:i:s');

        return view('manage.user.show', ['user' => $user]);
    }
    


    public function create(){
        return view('manage.user.create');
    }


    public function edit($user_id){

        $user = User::find($user_id);

        return view('manage.user.edit', ['user' => $user]);
    }


    public function store(UserRequest $request){

        $userData = $request->all();

        if ($request->file('image') == null){
            $imageName = 'default.png';
        }else{
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

    public function update(UserRequest $request){

        $userData = $request->all();


        if ($request->file('image') == null){
            $imageName = User::find($userData['user_id'])->image;
        }else{
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


    public function delete($user_id){

        User::find($user_id)->delete();

        return redirect()->back();

    }


}


