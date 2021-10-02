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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/categories',[\App\Http\Controllers\CatController::class, 'getCats']);

Route::get('/categories/create',[\App\Http\Controllers\CatController::class, 'create']);

Route::get('/categories/{id}',[\App\Http\Controllers\CatController::class, 'show']);


Route::post('/categories',[\App\Http\Controllers\CatController::class, 'store']);
