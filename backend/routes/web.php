<?php

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

use App\Http\Controllers\ProjectController;

Route::get('/','ProjectController@index')->name('projects.index');
Route::resource('projects','ProjectController')->except(['index','show'])->middleware('auth');
Route::resource('projects','ProjectController')->only('show');
Auth::routes();
