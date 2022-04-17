<?php

use App\Http\Controllers\userInetrface\MainPageController;
use App\Http\Controllers\userInetrface\ProfileController;
use App\Http\Controllers\userInetrface\RoomController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// main page route
Route::get('/', [MainPageController::class, 'index'])->name('main.index');

// image upload

Route::post('/image-upload' , [MainPageController::class, 'image'])->name('main.image');

// profile 
Route::group(['prefix' => 'profile'] , function(){

    Route::get('/', [ProfileController::class , 'index'])->name('main.profile.index');

    Route::get('/room-unresrve/{room_id}', [ProfileController::class , 'unresrve'])->name('main.profile.unreserve');

    Route::get('/edit' ,  [ProfileController::class , 'edit'])->name('main.profile.edit');

});

// room routes

Route::group(['prefix' => 'room'] , function(){

    Route::get('/{room_type}', [RoomController::class ,'index'] )->name('main.room');

    Route::post('/resrve', [RoomController::class ,'reserve'] )->name('main.room.resrve')->middleware('auth');
 
});



// Auth routes

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
