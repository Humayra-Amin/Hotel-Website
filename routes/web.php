<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\EmployeeAuthController;
use App\Http\Controllers\RoomAuthController;
use App\Http\Controllers\HomeController;


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




Route::get('/room/login', [RoomAuthController::class, 'login'])->name('login');
Route::post('/room/post-login', [RoomAuthController::class, 'postLogin'])->name('login.post'); 
Route::get('/room/register', [RoomAuthController::class, 'register'])->name('register');
Route::post('/room/post-register', [RoomAuthController::class, 'postRegister'])->name('register.post'); 




Route::middleware(["auth"])->group(function () {
   
    Route::get('/', [Controller::class, "index"]);
    Route::get('/room/', [RoomController::class, "index"]);
    Route::get('/room/logout', [RoomAuthController::class, 'logout']);

    Route::get('/room/add', [RoomController::class, "add"]);
    Route::get('/room/{id}', [RoomController::class, "show"]);
    Route::get('/room/{id}/edit', [RoomController::class, "edit"]);
    Route::post('/room', [RoomController::class, "store"]);
    Route::put('/room/{id}', [RoomController::class, "update"]);
    Route::get('/room/edit', [RoomController::class, "edit"]);
    Route::get('/room/single', [RoomController::class, "single"]);
});




Route::get('/employee/login', [EmployeeAuthController::class, "login"]);
Route::post('/employee/post-login', [EmployeeAuthController::class, "postLogin"]);
Route::get('/employee/register', [EmployeeAuthController::class, "register"]);
Route::post('/employee/post-register', [EmployeeAuthController::class, "postRegister"]);
Route::get('/employee/logout', [EmployeeAuthController::class, "logout"]);

Route::get('/employee/', [EmployeeController::class, "index"]);
Route::get('/employee/add', [EmployeeController::class, "add"]);
Route::get('/employee/single', [EmployeeController::class, "single"]);
Route::get('/employee/{id}', [EmployeeController::class, "show"]);
Route::get('/employee/{id}/edit', [EmployeeController::class, "edit"]);
Route::post('/employee', [EmployeeController::class, "store"]);
Route::put('/employee/{id}', [EmployeeController::class, "update"]);



Route::get('/drag-and-drop', 'DragAndDropController@index')->name('drag-and-drop');
Route::post('/drag-and-drop/update', 'DragAndDropController@update')->name('drag-and-drop.update');