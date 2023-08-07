<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\EmployeeAuthController;
use App\Http\Controllers\RoomAuthController;

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

Route::get('/room/login', [RoomAuthController::class, 'login'])->name('login');
Route::post('/room/post-login', [RoomAuthController::class, 'postLogin'])->name('login.post'); 
Route::get('/room/registration', [RoomAuthController::class, 'registration'])->name('register');
Route::post('/room/post-registration', [RoomAuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('/room/dashboard', [RoomAuthController::class, 'dashboard']);
Route::get('/room/logout', [RoomAuthController::class, 'logout'])->name('logout');

Route::get('/room/add', [RoomController::class, "add"]);
Route::get('/room/{id}', [RoomController::class, "show"]);
Route::get('/room/{id}/edit', [RoomController::class, "edit"]);
Route::post('/room', [RoomController::class, "store"]);
Route::put('/room/{id}', [RoomController::class, "update"]);
Route::get('/room/edit', [RoomController::class, "edit"]);
Route::get('/room/single', [RoomController::class, "single"]);

Route::get('/employee/', [EmployeeController::class, "index"]);
Route::get('/employee/login', [EmployeeAuthController::class, "login"]);
Route::get('/employee/register', [EmployeeAuthController::class, "register"]);
Route::get('/employee/add', [EmployeeController::class, "add"]);
Route::get('/employee/single', [EmployeeController::class, "single"]);
Route::get('/employee/{id}', [EmployeeController::class, "show"]);
Route::get('/employee/{id}/edit', [EmployeeController::class, "edit"]);
Route::post('/employee', [EmployeeController::class, "store"]);
Route::put('/employee/{id}', [EmployeeController::class, "update"]);
Route::get('/drag-and-drop', 'DragAndDropController@index')->name('drag-and-drop');
Route::post('/drag-and-drop/update', 'DragAndDropController@update')->name('drag-and-drop.update');