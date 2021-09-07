<?php

use App\Http\Controllers\RegistersController;
use App\Http\Controllers\UserController;
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
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/register', [UserController::class,'create'])->name('register-form');
//Route::post('/register', [UserController::class,'store'])->name('register');
//Route::get('/users', [UserController::class, 'index'])->name('list-users');

Route::resource('registers', RegistersController::class);
