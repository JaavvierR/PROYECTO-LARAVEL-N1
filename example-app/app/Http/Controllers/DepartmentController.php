<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Departament;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        return Departament::all();
    }

    public function show(Departament $departament)
    {
        return $departament;
    }

    public function store(Request $request)
    {
        Departament::create([
            'name' => $request->name
        ]);

        return response()->json(['message' => 'departamento registrado']);
    }

    public function update(Request $request, Departament $departament)
    {
        $departament->update([
            'name' => $request->name,
        ]);

        return response()->json(['message'=>'Departamento actualizado']);
    }

    public function destroy(Departament $departament)
    {
        $departament->delete();

        return response()->json(['Departamento eliminado']);
    }
}
