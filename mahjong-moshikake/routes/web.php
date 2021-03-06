<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
    return view('home.index');
});

Route::get('/createNewTable',function(){
    return view('main.createNewTable');
});

Route::get('/joinTable',function(){
    return view('main.joinTable');
});

Route::POST('create', 'App\Http\Controllers\MainController@create');

Route::POST('join', 'App\Http\Controllers\MainController@join');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
