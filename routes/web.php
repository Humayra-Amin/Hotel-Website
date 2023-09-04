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

    Route::get('/admin/add', [RoomController::class, "add"]);
    Route::get('/admin/{id}', [RoomController::class, "show"]);
    Route::get('/admin/{id}/edit', [RoomController::class, "edit"]);
    Route::post('/admin', [RoomController::class, "store"]);
    Route::put('/admin/{id}', [RoomController::class, "update"]);
    Route::get('/admin/edit', [RoomController::class, "edit"]);
    Route::get('/admin/single', [RoomController::class, "single"]);
});




Route::get('/login', [CustomerController::class, "login"]);
Route::post('/post-login', [CustomerController::class, "postLogin"]);
Route::get('/register', [CustomerController::class, "register"]);
Route::post('/post-register', [CustomerController::class, "postRegister"]);
Route::get('/logout', [CustomerController::class, "logout"]);

Route::get('/update-password',[CustomerController::class,"password"]);
Route::get('/personalInfo', [CustomerController::class, "personalInfo"]);
Route::get('/customernav', [CustomerController::class, "customernav"]);
Route::get('/bookinglist', [CustomerController::class, "bookinglist"]);
<<<<<<< HEAD
Route::get('/customerlist', [CustomerController::class, "customerlist"]);
=======
Route::get('/changepass', [CustomerController::class, "changepass"]);
>>>>>>> 7100da6c34e150683bd3589cbf2a9a6816e91e29



// Route::get('/employee/login', [EmployeeAuthController::class, "login"]);
// Route::post('/employee/post-login', [EmployeeAuthController::class, "postLogin"]);
// Route::get('/employee/register', [EmployeeAuthController::class, "register"]);
// Route::post('/employee/post-register', [EmployeeAuthController::class, "postRegister"]);
// Route::get('/employee/logout', [EmployeeAuthController::class, "logout"]);


Route::get('/employee/', [EmployeeController::class, "index"]);
Route::get('/employee/add', [EmployeeController::class, "add"]);
Route::get('/employee/single', [EmployeeController::class, "single"]);
Route::get('/employee/{id}', [EmployeeController::class, "show"]);
Route::get('/employee/{id}/edit', [EmployeeController::class, "edit"]);
Route::post('/employee', [EmployeeController::class, "store"]);
Route::put('/employee/{id}', [EmployeeController::class, "update"]);



Route::get('/drag-and-drop', 'DragAndDropController@index')->name('drag-and-drop');
Route::post('/drag-and-drop/update', 'DragAndDropController@update')->name('drag-and-drop.update');