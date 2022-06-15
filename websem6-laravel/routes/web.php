<?php

use App\Http\Controllers\LogRegController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

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

// ROUTE REGISTRASI
Route::get('/register', [LogRegController::class, 'register']);

Route::post('/register', [LogRegController::class, 'simpanuser']);


//ROUTE LOGIN
Route::get('/login', [LogRegController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LogRegController::class, 'login']);

//ROUTE LOGOUT
Route::post('/logout', [LogRegController::class, 'logout']);


//ROUTE VIEW
Route::get('/', [ViewController::class, 'index'])->middleware('auth');

Route::get('/profile', [ViewController::class, 'profile'])->middleware('auth');

Route::get('/blog', [ViewController::class, 'blog'])->middleware('auth');

Route::get('/fwtools', [ViewController::class, 'fwtools'])->middleware('auth');
