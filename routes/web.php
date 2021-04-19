<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});
 

Route::get('tasks', [TaskController::class, 'index']);
Route::get('edit/{id}', [TaskController::class, 'edit']);
Route::delete('tareas/{id}', [TaskController::class, 'destroy']);
Route::post('agregar', [TaskController::class, 'store']);
Route::put('update/{id}', [TaskController::class, 'update']);