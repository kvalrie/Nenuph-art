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
    return view('index');
});
Route::get('/Services_clientele', 'NavbarController@showService');
Route::get('/Apropos', 'NavbarController@showApropos');
Route::get('/Connexion', 'NavbarController@showConnexion');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
