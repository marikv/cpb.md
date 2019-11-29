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

//Route::get('/', function () {
//    return view('layouts/landing');
//});
Route::get('/', 'HomeController@landingPage')->name('landingPage');
Route::get('/ro', 'HomeController@landingPageRo')->name('landingPageRo');
Route::get('/ru', 'HomeController@landingPageRu')->name('landingPageRu');
Route::get('/en', 'HomeController@landingPageEn')->name('landingPageEn');

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/login', 'AdminController@index')->name('home');
Route::get('/adm', 'AdminController@index')->name('adm');
Route::get('/register', 'AdminController@index')->name('registerAdmin');
Route::get('/home', 'AdminController@index')->name('homeAdmin');
Route::get('/admin/global/settings', 'AdminController@globalSettingsPage')->name('globalSettingsPage');
Route::get('/admin/page/landing', 'AdminController@landingPage')->name('landingPageAdmin');
Route::get('/admin/page/photo-gallery', 'AdminController@photoGallery')->name('photoGalleryAdmin');
//Route::post('/cerere/send', 'HomeController@sendCerere');
Route::post('/files/upload/image', 'AdminController@uploadImage')->name('uploadImage');
Route::post('/settings/save', 'AdminController@saveSettings')->name('saveSettings');
Route::post('/photo-gallery/delete', 'AdminController@deleteFromPhotoGallery')->name('deleteFromPhotoGallery');
