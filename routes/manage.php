<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\manage\ManageConroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



// manager
Route::get('manager', [ManageConroller::class , 'index'])->name('manager.index');



//resptionest
Route::get('resptionest' , function (){
    return 'hello resptionest';
})->name('resptionest.index');



//admin 
Route::get('admin' , function(){
    return 'hello admin';
})->name('admin.index');