<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Empleoyee\StoreEmpleoyeeRequest;
use App\Models\Empleoyee;
use Illuminate\Http\Request;

class EmpleoyeeController extends Controller
{
    public function index()
    {
        return Empleoyee::all()->load('projects');
    }

    public function show(Empleoyee $empleoyee )
    {
        return $empleoyee;
    }

    public function store(StoreEmpleoyeeRequest $request)
    {
        Empleoyee::create([
            'name'=> $request->name,
            'lastname'=> $request->lastname,
            'age'=>$request->age, 
            'position'=>$request->position
        ])->projects()->attach($request->project);

        return response()->json(['mesaje'=>'Empleado resgistado']);
    }

    public function update(Request $request, Empleoyee $empleoyee)
    {
        $empleoyee->update([
            'name'=>$request->name,
            'lastname'=> $request->lastname,
            'age'=>$request->age, 
            'position'=>$request->position
        ]);

        return response()->json(['mensaje'=>'Empelado Actualizado']);
    }

    public function destroy(Empleoyee $empleoyee)
    {
        $empleoyee->projects()->detach();
        $empleoyee->delete();

        return response()->json(['Empleado Eliminado']);
    }

}
