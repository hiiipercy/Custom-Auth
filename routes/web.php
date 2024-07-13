<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/', function () {
//     return view('layout.master');
// });



Route::middleware('auth','nocache')->group(function () {
    Route::get('/dashboard', [ProfileController::class,'index'])->name('dashboard');
    Route::get('setting', [ProfileController::class,'edit'])->name('profile.edit');
    Route::PUT('update', [ProfileController::class,'update'])->name('profile.update');
});


//------------------login--------------------//
Route::get('login', [AuthController::class,'index'])->name('login');
Route::post('login', [AuthController::class,'login'])->name('store');
Route::post('logout', [AuthController::class,'logout'])->name('logout');

Route::get('register', [AuthController::class,'register_view'])->name('register');
Route::post('register', [AuthController::class,'register_store'])->name('register.store');
Route::get('password', [AuthController::class,'password'])->name('password');