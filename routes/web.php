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
})->name('welcome');

//Auth::routes();

Route::get('/home', function()
{
	return redirect()->route('welcome');
})->name('home');

Route::get('/play', 'HomeController@play')->name('play');

Route::get('/rules', 'HomeController@rules')->name('rules');

Route::get('/leaderboard', 'HomeController@leaderboard')->name('leaderboard');

Route::get('/login', 'HomeController@login')->name('login');

Route::get('/login/callback', 'HomeController@loginCallback')->name('loginCallback');

Route::post('/logout', 'HomeController@logout')->name('logout');

Route::get('/username', 'HomeController@nameassign')->name('nameassign');

Route::post('/username/assign', 'HomeController@assignchosenname')->name('assignchosenname');

Route::post('/attempt', 'HomeController@attempt')->name('attempt');

//Route::get('/delelel', 'HomeController@removeThese');