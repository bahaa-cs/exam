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

    function update_project($id, Request $request) {
        $project = Project::find($id);
    
        if (!$project) {
            return response()->json([
                "message" => "project not found"
            ]);
        }
    
        $project->update([
            "name" => $request->name ?? $user->name
        ]);
    
        return response()->json([
            "isUpdated" => true
        ]);
    }

    function delete_project($id) {
        $project = Project::find($id);
    
        if (!$project) {
            return response()->json([
                "message" => "project not found"
            ]);
        }
        $project->delete();
    
        return response()->json([
            "isDeleted" => true
        ]);
    }
    
}
