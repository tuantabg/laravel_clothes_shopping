<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

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

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::prefix('categories')->group(function (){
    Route::get('/', [CategoryController::class, 'index'])->name('list.categories');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
});


//Route::get('/', [
//    'as'     => 'categories.index',
//    'uses'   => 'App\Http\Controllers\CategoryController@index'
//]);
//Route::get('/create', [
//    'as'     => 'categories.create',
//    'uses'   => 'App\Http\Controllers\CategoryController@create'
//]);
