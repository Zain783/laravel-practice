<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});

//                  contoller name         contoller action methord
Route::get('user/{id}',[userController::class,'show']);