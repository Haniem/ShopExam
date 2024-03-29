<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;


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

Route::get('/', [AppController::class, 'home'])->name('home');

Route::middleware("auth")->group(function() {

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

});

Route::middleware("guest")->group(function() {

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [AuthController::class, 'login'])->name('login_process');
    
    Route::get('/register', [AuthController::class, 'showregisterForm'])->name('register');
    Route::post('/register_process', [AuthController::class, 'register'])->name('register_process');

});