<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BajuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CelanaController;
use App\Http\Controllers\BajuMuslimController;
use App\Http\Controllers\TampilController;

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

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/dashboard-admin',[AuthController::class,'authenticating']);

Route::middleware('auth')->group(function () {
Route::get('/logout',[AuthController::class,'logout']);

//dashboard
Route::get('/dashboard-admin',[AdminController::class,'dashboard']);

// baju
Route::get('/menu-baju',[BajuController::class,'index']);
Route::post('/menu-baju',[BajuController::class,'store']);
Route::match(['get', 'put'], '/baju-edit/{id}',[BajuController::class,'edit']);
Route::get('/menu-baju/{id}',[BajuController::class,'destroy']);

// celana
Route::get('/menu-celana',[CelanaController::class,'index']);
Route::post('/menu-celana',[CelanaController::class,'store']);
Route::match(['get', 'put'], '/celana-edit/{id}',[CelanaController::class,'edit']);
Route::get('/menu-celana/{id}',[CelanaController::class,'destroy']);

// bajuMuslim
Route::get('/menu-baju-muslim',[BajuMuslimController::class,'index']);
Route::post('/menu-baju-muslim',[BajuMuslimController::class,'store']);
Route::match(['get', 'put'], '/baju-muslim-edit/{id}',[BajuMuslimController::class,'edit']);
Route::get('/menu-baju-muslim/{id}',[BajuMuslimController::class,'destroy']);
});

Route::get('/',[TampilController::class,'index']);


