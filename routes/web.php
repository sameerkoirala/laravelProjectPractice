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

//Route::get('/demos', [\App\Http\Controllers\DemoController::class, 'index']);
//Route::get('/demos/create', [\App\Http\Controllers\DemoController::class, 'create']);
//Route::post('/demos', [\App\Http\Controllers\DemoController::class, 'store']);
//Route::get('/demos/{id}', [\App\Http\Controllers\DemoController::class, 'show']);
//Route::get('/demos/{id}/edit', [\App\Http\Controllers\DemoController::class, 'edit']);
//Route::patch('/demos/{id}', [\App\Http\Controllers\DemoController::class, 'update']);
//Route::delete('/demos/{id}', [\App\Http\Controllers\DemoController::class, 'destroy']);

Route::resource('demos', \App\Http\Controllers\DemoController::class);
Route::resource('registers', \App\Http\Controllers\RegistersController::class);
