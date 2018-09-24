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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/idea/{name}', function () {
    return redirect('/');
})->where('name', '[A-Za-z]+');

Route::resource('idea', 'IdeaController');

Auth::routes();

Route::get('auth/login/{social}', 'Auth\SocialLoginController@redirectToProvider');
Route::get('auth/login/{social}/callback', 'Auth\SocialLoginController@handleProviderCallback');

//Lock Account
Route::get('login/locked', 'Auth\LoginController@locked')->middleware('auth')->name('login.locked');
Route::post('login/locked', 'Auth\LoginController@unlock')->name('login.unlock');