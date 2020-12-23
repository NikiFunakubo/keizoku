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


Route::get('/','ProjectController@index')->name('projects.index');
//Route::post('/projects/store','ProjectController@store')->name('projects.store')->middleware('auth');
//Route::resource('projects','ProjectController')->except(['index','store'])->middleware('auth');
Route::resource('projects','ProjectController')->except(['index'])->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
