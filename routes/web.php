<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\EmployeeAuthController;
use App\Http\Controllers\RoomAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;



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




Route::get('/admin/login', [RoomAuthController::class, 'login'])->name('adminlogin');
Route::post('/admin/post-login', [RoomAuthController::class, 'postLogin'])->name('login.post'); 
Route::get('/admin/register', [RoomAuthController::class, 'register'])->name('adminregister');
Route::post('/admin/post-register', [RoomAuthController::class, 'postRegister'])->name('register.post'); 
 
Route::get('/', [HomeController::class, "home"]);
Route::get('/singleroom/{id}', [HomeController::class, "singleroom"]);
Route::put('/roombook/{id}', [HomeController::class, "roombook"]);



Route::middleware(["auth"])->group(function () {
   
    Route::get('admin/', [Controller::class, "index"]);
    Route::get('/admin/room', [RoomController::class, "index"]);
    Route::get('/admin/logout', [RoomAuthController::class, 'logout'])->name('adminlogout');

    Route::get('/admin/room/add', [RoomController::class, "add"]);
    Route::get('/admin/room/{id}', [RoomController::class, "show"]);
    Route::get('/admin/room/{id}/edit', [RoomController::class, "edit"]);
    Route::post('/admin/room', [RoomController::class, "store"]);
    Route::put('/admin//room{id}', [RoomController::class, "update"]);
    Route::get('/admin/room/edit', [RoomController::class, "edit"]);
    Route::get('/admin/room/single', [RoomController::class, "single"]);
});

   Route::get('/admin/room/category', [RoomController::class, "category"]);
   Route::get('/admin/room/addcategory', [RoomController::class, "addcategory"]);


Route::get('/login', [CustomerController::class, "login"]);
Route::post('/post-login', [CustomerController::class, "postLogin"]);
Route::get('/register', [CustomerController::class, "register"]);
Route::post('/post-register', [CustomerController::class, "postRegister"]);
Route::get('/logout', [CustomerController::class, "logout"]);


Route::get('/customerlist', [CustomerController::class, "customerlist"]);
Route::get('/personalInfo', [CustomerController::class, "personalInfo"]);
Route::get('/customernav', [CustomerController::class, "customernav"]);
Route::get('/bookinglist', [HomeController::class, "bookinglist"]);
Route::get('/changepass', [CustomerController::class, "changepass"]);
Route::get('/bookmodal', [CustomerController::class, "bookmodal"]);



// Route::get('/employee/login', [EmployeeAuthController::class, "login"]);
// Route::post('/employee/post-login', [EmployeeAuthController::class, "postLogin"]);
// Route::get('/employee/register', [EmployeeAuthController::class, "register"]);
// Route::post('/employee/post-register', [EmployeeAuthController::class, "postRegister"]);
// Route::get('/employee/logout', [EmployeeAuthController::class, "logout"]);


Route::get('/employee/', [EmployeeController::class, "index"]);
Route::get('admin/employee/add', [EmployeeController::class, "add"]);
Route::get('admin/employee/single', [EmployeeController::class, "single"]);
Route::get('admin/employee/{id}', [EmployeeController::class, "show"]);
Route::get('admin/employee/{id}/edit', [EmployeeController::class, "edit"]);
Route::post('admin/employee', [EmployeeController::class, "store"]);
Route::put('admin/employee/{id}', [EmployeeController::class, "update"]);



Route::get('/drag-and-drop', 'DragAndDropController@index')->name('drag-and-drop');
Route::post('/drag-and-drop/update', 'DragAndDropController@update')->name('drag-and-drop.update');