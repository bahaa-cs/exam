<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::prefix('/users')->group(function(){
    Route::get('/',[UserController::class,'get_users']);
    Route::post('/',[UserController::class,'create_user']);
    Route::put('/{id}',[UserController::class,'update_user']);
    Route::delete('/{id}',[UserController::class,'delete_user']);
});
Route::prefix('/projects')->group(function(){
    Route::get('/',[ProjectController::class,'get_projects']);
    Route::post('/',[ProjectController::class,'create_project']);
    // Route::put('/{id}',[ProjectController::class,'update_project']);
    // Route::delete('/{id}',[ProjectController::class,'delete_project']);
});