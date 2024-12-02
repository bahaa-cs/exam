<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class ProjectController extends Controller
{
    function get_projects() {
        $projects = Project::all();

        return response()->json([
            "projects" => $projects
        ]);
    }

    function create_project(Request $request) {

        try {
            $project = Project::create([
                "name" => $request->name
            ]);
    
            return response()->json([
                "new_project" => $project
            ]);
          }
          
          catch(Exception) {
            return response()->json([
                "message" => 'missing name'
            ]);   
          }

   
    }

    // function update_user($id, Request $request) {
    //     $user = User::find($id);
    
    //     if (!$user) {
    //         return response()->json([
    //             "message" => "user not found"
    //         ]);
    //     }
    
    //     $user->update([
    //         "username" => $request->username ?? $user->username,
    //         "password" => $request->password ?? $user->password,
    //     ]);
    
    //     return response()->json([
    //         "isUpdated" => true
    //     ]);
    // }

    // function delete_user($id) {
    //     $user = User::find($id);
    
    //     if (!$user) {
    //         return response()->json([
    //             "message" => "user not found"
    //         ]);
    //     }
    //     $user->delete();
    
    //     return response()->json([
    //         "isDeleted" => true
    //     ]);
    // }
    
}
