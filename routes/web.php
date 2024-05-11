<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', [DashboardController::class, "doughnutChart"]);

Route::get('/dashboard/cars', [CarController::class, "index"]);
Route::get('/dashboard/cars/addnewcar', [CarController::class, "create"]);
Route::post('/dashboard/cars/addnewcar', [CarController::class, "store"]);
Route::get('/dashboard/cars/{id}', [CarController::class, "show"]);
Route::get('/dashboard/{id}/update', [CarController::class, "edit"]);
Route::patch('/dashboard/{id}', [CarController::class, "update"]);

Route::delete('/dashboard/cars/{id}', [CarController::class, "destroy"]);