<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function get_users() {
        $users = User::all();

        return response()->json([
            "users" => $users
        ]);
    }

    function create_user(Request $request) {

        try {
            $user = User::create([
                "username" => $request->username,
                "password" => $request->password
            ]);
    
            return response()->json([
                "new_user" => $user
            ]);
          }
          
          catch(Exception) {
            return response()->json([
                "message" => 'missing username or password'
            ]);   
          }

   
}
}
