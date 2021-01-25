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
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::get('/','ProjectController@index')->name('projects.index');
Route::resource('projects','ProjectController')->except(['index','show'])->middleware('auth');
Route::resource('projects','ProjectController')->only('show');
Auth::routes();
Route::prefix('login')->name('login.')->group(function(){
    Route::get('/{provider}','Auth\LoginController@redirectToProvider')->name('{provider}');
    Route::get('/{provider}/callback','Auth\LoginController@handleProviderCallback')->name('{provider}.callback');
});
Route::prefix('register')->name('register.')->group(function () {
    Route::get('/{provider}', 'Auth\RegisterController@showProviderUserRegistrationForm')->name('{provider}');
    Route::post('/{provider}', 'Auth\RegisterController@registerProviderUser')->name('{provider}');
});
Route::prefix('projects')->name('projects.')->group(function() {
    Route::put('/{project}/like','ProjectController@like')->name('like')->middleware('auth');
    Route::delete('/{project}/like','ProjectController@unlike')->name('unlike')->middleware('auth');
});
Route::get('/tags/{name}','TagController@show')->name('tags.show');
Route::prefix('users')->name('users.')->group(function(){
    Route::get('/{name}','UserController@show')->name('show');
    Route::get('/{name}/likes','UserController@likes')->name('likes');
    Route::get('/{name}/followings','UserController@followings')->name('followings');
    Route::get('/{name}/followers','UserController@followers')->name('followers');
    Route::middleware('auth')->group(function() {
        Route::put('/{name}/follow','UserController@follow')->name('follow');
        Route::delete('/{name}/follow','UserController@unfollow')->name('unfollow');
});
});
