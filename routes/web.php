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

Route::get('/', 'PageController@homepage');
Route::get('/inscription', 'PageController@registration');
Route::post('/inscription', 'Auth\RegisterController@create');
Route::get('/connexion', 'PageController@login');
Route::post('/connexion', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/profil', 'PageController@profil');

Route::post('/messages/nouveau', 'MessageController@store');
Route::get('/mot-de-passe-oublie', 'PageController@testmail');