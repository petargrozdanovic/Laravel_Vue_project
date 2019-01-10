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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth.login', 'RegistrationController@index')->name('layouts.index');

Route::get('/my-test', 'ProfilesController@index');
Route::resource('/my-profile', 'ProfilesController');
Route::get('/get-my-profile', 'ProfilesController@getMyProfile');

Route::resource('/my-ads', 'AdsController');
Route::get('/get-my-ads', 'AdsController@getMyAds');
//Route::get('/my-ads/{id}', 'AdsController@destroy')->name('ads.destroy');
