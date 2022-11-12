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
Route::get('/category/add',[\App\Http\Controllers\PageController::class, 'NewCategory'])->name('NewCategory');
Route::get('/category/edit/{category}', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('editCategory');
Route::get('/content', [\App\Http\Controllers\PageController::class, 'NewProduct'])->name('NewProduct');
Route::get('/catalog',[\App\Http\Controllers\PageController::class, 'CatalogPage'])->name('CatalogPage');


Route::delete('/admin/delete/{category}',[\App\Http\Controllers\CategoryController::class,'destroy'])->name('delCategory');
Route::get('/catalog/filter', [\App\Http\Controllers\ProductController::class, 'filter'])->name('filter');
Route::get('/catalog/sort', [\App\Http\Controllers\ProductController::class, 'sort'])->name('sort');


//функции
Route::post('/registration/save', [\App\Http\Controllers\UserController::class, 'register'])->name('register');
Route::post('/auth', [\App\Http\Controllers\UserController::class, 'authorization'])->name('authorization');
Route::post('category/add', [\App\Http\Controllers\CategoryController::class, 'create'])->name('create');
Route::put('/category/edit/save/{category}',[\App\Http\Controllers\CategoryController::class, 'update'])->name('CategoryEditSave');
Route::post('/create_content',[\App\Http\Controllers\ProductController::class, 'create'])->name('createProduct');
