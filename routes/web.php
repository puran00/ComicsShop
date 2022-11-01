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
})->name('AboutUs');

//странички
Route::get('/registration', [\App\Http\Controllers\PageController::class, 'RegPage'])->name('RegPage');
Route::get('/auth', [\App\Http\Controllers\PageController::class, 'AuthPage'])->name('AuthPage');
Route::get('/admin',[\App\Http\Controllers\PageController::class, 'AdminPage'])->name('AdminPage');
Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');

//функции
Route::post('/registration/save', [\App\Http\Controllers\UserController::class, 'register'])->name('register');
Route::post('/auth', [\App\Http\Controllers\UserController::class, 'authorization'])->name('authorization');
