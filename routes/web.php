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
    return view('mainView.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/edit','ProfilesController@edit');
Route::patch('/edit','ProfilesController@update');
Route::get('/profile/{user}','ProfilesController@index');
Route::get('/search','SearchController@search');
Route::get('/upgrade','ProducersController@index');
Route::post('/upgrade','ProducersController@upgrade');
Route::get('/profileSetings',function(){
    return view('profile.profileSeting');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
