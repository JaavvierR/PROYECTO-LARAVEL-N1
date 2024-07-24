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

Route::get('departments', [DepartmentController::class, 'index'])->name('departments.index');
Route::get('departments/{departament}', [DepartmentController::class, 'show'])->name('departments.show');
Route::post('departaments', [DepartmentController::class,'store'])->name('departments.store');
Route::patch('departaments/{departament}',[DepartmentController::class, 'update'])->name('departments.update');
Route::delete('departament/{departament}',[DepartmentController::class, 'destroy'])->name('departments.destroy');

Route::get('empleoyee',[EmpleoyeeController::class, 'index'])->name('empleoyee.index');
Route::get('empleoyee/{Empleoyee}',[EmpleoyeeController::class, 'show'])->name('empleoyee.show');
Route::post('empleoyee',[EmpleoyeeController::class,'store'])->name('empleoyee.store');
Route::patch('empleoyee/{empleoyee}',[EmpleoyeeController::class, 'update'])->name('empleoyee.update');
Route::delete('empleoyee/{empleoyee}',[EmpleoyeeController::class, 'destroy'])->name('empleoyee.destroy');

Route::get('job',[JobController::class, 'index'])->name('job.index');
Route::get('job/{job}',[JobController::class, 'show'])->name('job.show');
Route::post('job',[ProjectController::class,'store'])->name('job.store');
Route::patch('job/{job}',[JobController::class, 'update'])->name('job.update');
Route::delete('job/{job}',[JobController::class, 'destroy'])->name('job.destroy');

Route::get('project',[ProjectController::class, 'index'])->name('project.index');
Route::get('project/{project}',[ProjectController::class, 'show'])->name('project.show');
Route::post('project',[ProjectController::class,'store'])->name('project.store');
Route::patch('project/{project}',[ProjectController::class, 'update'])->name('project.update');
Route::delete('project/{project}',[ProjectController::class, 'destroy'])->name('project.destroy');

Route::get('customer',[CustomerController::class, 'index'])->name('customer.index');
Route::get('customer/{customer}',[CustomerController::class, 'show'])->name('customer.show');
Route::post('customer',[CustomerController::class,'store'])->name('customer.store');
Route::patch('customer/{customer}',[CustomerController::class, 'update'])->name('customer.update');
Route::delete('customer/{customer}',[CustomerController::class, 'destroy'])->name('customer.destroy');







