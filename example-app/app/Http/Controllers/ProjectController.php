<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return Project::all();
    }

    public function show(Project $project)
    {
        return $project;
    }

    public function store(Request $request)
    {
        Project::create([
            'name'=> $request->name,
            'departament_id'=> $request->departament_id
        ]);

        return response()->json(['message'=>'Proyecto Creado']);
    }

    public function update(Request $request, Project $project)
    {
        $request->update([
            'name'=>$request->name,
            'departament_id'=> $request->departament_id
        ]);

        return response()->json(['message'=>'Proyecto actualizado']);
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return response()->json(['message'=>'Proyecto Eliminado']);
    }

}
