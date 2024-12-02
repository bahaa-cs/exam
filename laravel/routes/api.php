<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::prefix('/users')->group(function(){
    Route::get('/',[UserController::class,'get_users']);
    Route::post('/',[UserController::class,'create_user']);
    Route::put('/{id}',[UserController::class,'update_user']);
    Route::delete('/{id}',[UserController::class,'delete_user']);
});