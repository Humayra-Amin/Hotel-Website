<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
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
Route::get('/room/', [RoomController::class, "index"]);
Route::post('/room', [RoomController::class, "store"]);
Route::put('/room', [RoomController::class, "update"]);
Route::get('/room/add', [RoomController::class, "add"]);
Route::get('/room/edit', [RoomController::class, "edit"]);
Route::get('/room/single', [RoomController::class, "single"]);
Route::get('/employee/', [EmployeeController::class, "index"]);
Route::post('/employee', [EmployeeController::class, "store"]);
Route::put('/employee', [EmployeeController::class, "update"]);
Route::get('/employee/add', [EmployeeController::class, "add"]);
Route::get('/employee/edit', [EmployeeController::class, "edit"]);
Route::get('/employee/single', [EmployeeController::class, "single"]);
Route::get('/drag-and-drop', 'DragAndDropController@index')->name('drag-and-drop');
Route::post('/drag-and-drop/update', 'DragAndDropController@update')->name('drag-and-drop.update');



