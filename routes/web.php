<?php

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

//Route::get('/users', function(){ return 'hola'; });
//Route::post('/users', function(){ return 'hola post'; });
//Route::get('/users/{id}', function(){ return 'hola get'; });




Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class , 'logout'])->name('logout');
Route::post('/authentication', [AuthController::class, 'authentication'])->name('authentication');
Route::get('/', HomeController::class)->name('welcome')->middleware('guest');
Route::get('/home', [SystemController::class, 'index'])->name('home')->middleware('auth');
