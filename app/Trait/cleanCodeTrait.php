<?php

namespace App\Trait;

use App\Models\Room;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

trait cleanCodeTrait
{

    public function roomsDataTable($data)
    {

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('owner', function ($row) {

                if ($row->user_id) {
                    $owner = $row->user->name;
                } else {
                    $owner = "Avillable";
                }

                return $owner;
            })
            ->rawColumns(['owner'])
            ->addColumn('action', function ($row) {
                $actionBtn = "
        <a href='http://127.0.0.1:8000/manage/rooms/edit/$row->id'
         class='edit btn btn-success btn-sm'>Edit</a> 
         ";

                if ($row->user_id) {
                    $actionBtn = $actionBtn . "
            <a href='http://127.0.0.1:8000/manage/rooms/make-avillable/$row->id'
            onclick='return confirm( \"Are you sure?\" )'  class='edit btn btn-danger btn-sm'>Make Avillable</a> 
            ";
                };
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function usersDataTables($data)
    {

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = "
                    <a href='http://127.0.0.1:8000/manage/users/$row->id' class='btn btn-primary btn-sm'>View</a>
                    <a href='http://127.0.0.1:8000/manage/users/edit/$row->id'
                     class='edit btn btn-success btn-sm'>Edit</a> 
                     ";
                if ($row->role != 'admin') {

                    $actionBtn = $actionBtn .   "<a onclick='return confirm( \"Are you sure?\" )' href='http://127.0.0.1:8000/manage/users/delete/$row->id' 
                     class='delete btn btn-danger btn-sm'>Delete</a>";
                };
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function floorsDataTables($data)
    {

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('creator', function($row){
                $creator = $row->user->name;
                return $creator;
            })
            ->addColumn('created', function($row){

                $created_at = Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('Y-m-d H:i:s');
                return $created_at;
            })
            ->addColumn('action', function ($row) {
                $actionBtn = "
                    <a href='http://127.0.0.1:8000/manage/floor/delete/$row->id' class='btn btn-danger btn-sm'
                    
                    onclick='return confirm( \"Are you sure?\" )' >Delete</a>
                     ";
            
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}

