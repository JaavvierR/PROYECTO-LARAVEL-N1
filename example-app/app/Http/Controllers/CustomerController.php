<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\StoreCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return Customer::all()->load('projects');
    }

    public function show(Customer $customer)
    {
        return $customer;
    }

    public function store(StoreCustomerRequest $request)
    {
        Customer::create([
            'name'=>$request->name
        ])->projects()->attach($request->projects);
        
        return response()->json(['message'=>'Customer Registrado']);
    }

    public function update(Request $request, Customer $customer)
    {
        $customer->update([
            'name'=>$request->name
        ]);

        return response()->json(['message'=>'Customer Actualizado']);
    }

    public function destroy(Customer $customer)
    {
        $customer->projects()->detach();
        $customer->delete();

        return response()->json(['message'=>'Customer Eliminado']);
    }
}

