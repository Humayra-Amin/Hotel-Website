<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoomController;

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



Route::get('/', [Controller::class, "index"]);
Route::get('/rooms/', [RoomController::class, "index"]);
Route::get('/rooms/add', [RoomController::class, "add"]);
Route::get('/rooms/edit', [RoomController::class, "edit"]);
Route::get('/rooms/single', [RoomController::class, "single"]);
Route::get('/employee/', [EmployeeController::class, "index"]);
Route::get('/employee/add', [EmployeeController::class, "add"]);
Route::get('/employee/edit', [EmployeeController::class, "edit"]);
Route::get('/employee/single', [EmployeeController::class, "single"]);
Route::get('/drag-and-drop', 'DragAndDropController@index')->name('drag-and-drop');
Route::post('/drag-and-drop/update', 'DragAndDropController@update')->name('drag-and-drop.update');

