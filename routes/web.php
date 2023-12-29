<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[AuthController::class,'index'])->name('login');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/login',[AuthController::class,'authenticate'])->name('authenticate');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');
Route::post('/signup',[AuthController::class,'store'])->name('signup');
