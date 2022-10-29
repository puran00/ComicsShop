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
})->name('AbouUs');

//странички
Route::get('/registration', [\App\Http\Controllers\PageController::class, 'RegPage'])->name('RegPage');
Route::get('/auth', [\App\Http\Controllers\PageController::class, 'AuthPage'])->name('AuthPage');

//функции
Route::post('/registration/save', [\App\Http\Controllers\UserController::class, 'register'])->name('register');
