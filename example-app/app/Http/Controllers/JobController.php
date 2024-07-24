<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return Job::all();
    }

    public function show(Job $job)
    {
        return $job;
    }

    public function store(Request $request)
    {
        Job::create([
            'name'=> $request->name,
            'lastname'=>$request->lastname,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date
        ]);

            return response()->json(['message'=>'Trabajador Creado']);
        
    }

    public function update(Request $request,Job $job)
    {
        $request->update([
            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date
        ]);

        return response()->json(['message'=>'Trabajador actualizado']);
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return response()->json(['message'=>'Trabajador Eliminado']);
    }
}
