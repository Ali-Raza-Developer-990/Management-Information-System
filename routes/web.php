<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AttendanceController;
use Illuminate\Support\Facades\Auth;

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
Route::middleware(['auth','admin'])->group(function(){
Route::get('/employees', [UserController::class, 'index'])->name('home');
Route::get('/employees/create', [UserController::class, 'create'])->name('create');
Route::post('/employees/store', [UserController::class, 'store'])->name('store');
Route::get('/employees/show/{id}', [UserController::class, 'show'])->name('show');
Route::get('/employees/edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::put('/employees/update/{id}', [UserController::class, 'update'])->name('update');
Route::delete('/employees/destroy/{id}', [UserController::class, 'destroy'])->name('destroy');

Route::get('/employees/attendance/{id}', [AttendanceController::class, 'attendance'])->name('attendance');
});



Route::middleware(['auth', 'employee' ,])->group(function(){
    
    // Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    
    Route::get('/dashboard', [EmployeeController::class, 'employee'])->name('welcome');


    Route::post('/dashboard/checkin', [EmployeeController::class, 'checkin'])->name('checkin');
    Route::post('/dashboard/checkout', [EmployeeController::class, 'checkout'])->name('checkout');


    Route::get('/dashboard/editprofile', [ProfileController::class, 'editprofile'])->name('editprofile');  
    Route::put('/dashboard/profileupdate/{id}', [ProfileController::class, 'profileupdate'])->name('profileupdate');

    Route::get('/dashboard/attendance/{id}', [EmployeeController::class, 'attendanceemployee'])->name('attendanceemployee');


});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::POST('/loginstore', [AuthController::class, 'loginstore'])->name('loginstore');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');