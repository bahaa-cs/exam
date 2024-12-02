<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    function get_users() {
        $users = Users::all();

        return response()->json([
            "users" => $users
        ]);
    }
}
