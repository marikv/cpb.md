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
    return view('layouts/landing');
});

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/login', 'AdminController@index')->name('home');
Route::get('/adm', 'AdminController@index')->name('adm');
Route::get('/register', 'AdminController@index')->name('registerAdmin');
Route::get('/home', 'AdminController@index')->name('homeAdmin');
Route::get('/admin/global/settings', 'AdminController@globalSettingsPage')->name('globalSettingsPage');
//Route::post('/cerere/send', 'HomeController@sendCerere');
