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

//Route::get('/examples', [\App\Http\Controllers\NewExampleController::class, 'index']);
//Route::get('/examples/create', [\App\Http\Controllers\NewExampleController::class, 'create']);
//Route::post('/examples', [\App\Http\Controllers\NewExampleController::class, 'store']);
//Route::get('/examples/{id}', [\App\Http\Controllers\NewExampleController::class, 'show']);
//Route::get('/examples/{id}/edit', [\App\Http\Controllers\NewExampleController::class, 'edit']);
//Route::patch('/examples/{id}', [\App\Http\Controllers\NewExampleController::class, 'update']);
//Route::delete('/examples/{id}', [\App\Http\Controllers\NewExampleController::class, 'destroy']);
Route::get('/jpt', [\App\Http\Controllers\NewExampleController::class,'jpt']);

Route::resource('demos', \App\Http\Controllers\DemoController::class);

Route::resource('registers', \App\Http\Controllers\RegistersController::class);
