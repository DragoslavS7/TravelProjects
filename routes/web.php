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

Route::get('/kontakt', function () {
    return view('kontakt/kontakt');
});

Route::resource('aranzman', 'AranzmanController');
Route::resource('rezervacija', 'RezervacijaController');
Route::resource('Sobe', 'SobeController');
Route::resource('destinacija', 'DestinacijaController');
Route::resource('radnik', 'RadnikController');
Route::resource('kontakt', 'MailController');

Route::get('laracharts', 'ChartController@getLaraChart');

Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@update_avatar');


Auth::routes();

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');
