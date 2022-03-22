<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\manage\ManageController;
use App\Http\Controllers\manage\ManageRoomController;
use App\Http\Controllers\manage\ManageUserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Row;

Route::get('manager', [ManageController::class , 'index'])->name('manage.index');



///////////////////////////////////////////////////////// manage users/////////////////////////////////////////// 

Route::group(['prefix'=> 'users'], function(){
    Route::get('/', [ManageUserController::class , 'index'])->name('manage.users.index');

    Route::get('edit/{user_id}', [ManageUserController::class, 'edit'])->name('manage.users.edit');

    Route::get('create' , [ManageUserController::class, 'create'])->name('manage.users.create');

    Route::get('{user_id}', [ManageUserController::class , 'show'])->name('manage.users.show');

    Route::get('delete/{user_id}', [ManageUserController::class, 'delete'])->name('manage.users.delete');

    Route::post('store', [ManageUserController::class, 'store'])->name('manage.users.store');

    Route::post('update', [ManageUserController::class, 'update'])->name('manage.users.update');


});


///////////////////////////////////// manage rooms////////////////////////////////////////////////////////

Route::group(['prefix'=> 'rooms'], function(){
    
    Route::get('/', [ManageRoomController::class , 'index'])->name('manage.rooms.index');

    Route::get('edit/{room_id}', [ManageRoomController::class, 'edit'])->name('manage.rooms.edit');

    Route::get('make-avillable/{room_id}', [ManageRoomController::class, 'avillable'])->name('manage.rooms.avillable');

    Route::post('store', [ManageRoomController::class, 'store'])->name('manage.rooms.store');

    Route::post('update', [ManageRoomController::class, 'update'])->name('manage.rooms.update');


});

