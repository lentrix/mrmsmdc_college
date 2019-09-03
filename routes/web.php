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

Route::get('/login', 'SiteController@loginForm')->name('login');
Route::post('/login', 'SiteController@login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'SiteController@home')->name('home');
    Route::get('/logout', 'SiteController@logout');
    Route::post('/submit', 'JudgeController@submit')->middleware('judge');
});
