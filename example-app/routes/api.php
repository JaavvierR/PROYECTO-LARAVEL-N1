<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmpleoyeeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProjectController;
use App\Models\Departament;
use App\Models\Empleoyee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('departments', [DepartmentController::class, 'index']);
Route::get('departments/{departament}', [DepartmentController::class, 'show']);
Route::post('departaments', [DepartmentController::class,'store']);
Route::patch('departaments/{departament}',[DepartmentController::class, 'update']);
Route::delete('departament/{departament}',[DepartmentController::class, 'destroy']);

Route::get('empleoyee',[EmpleoyeeController::class, 'index']);
Route::get('empleoyee/{Empleoyee}',[EmpleoyeeController::class, 'show']);
Route::post('empleoyee',[EmpleoyeeController::class,'store']);
Route::patch('empleoyee/{empleoyee}',[EmpleoyeeController::class, 'update']);
Route::delete('empleoyee/{empleoyee}',[EmpleoyeeController::class, 'destroy']);

Route::get('job',[JobController::class, 'index']);
Route::get('job/{job}',[JobController::class, 'show']);
Route::post('job',[ProjectController::class,'store']);
Route::patch('job/{job}',[JobController::class, 'update']);
Route::delete('job/{job}',[JobController::class, 'destroy']);

Route::get('project',[ProjectController::class, 'index']);
Route::get('project/{project}',[ProjectController::class, 'show']);
Route::post('project',[ProjectController::class,'store']);
Route::patch('project/{project}',[ProjectController::class, 'update']);
Route::delete('project/{project}',[ProjectController::class, 'destroy']);

Route::get('customer',[CustomerController::class, 'index']);
Route::get('customer/{customer}',[CustomerController::class, 'show']);
Route::post('customer',[CustomerController::class,'store']);
Route::patch('customer/{customer}',[CustomerController::class, 'update']);
Route::delete('customer/{customer}',[CustomerController::class, 'destroy']);







