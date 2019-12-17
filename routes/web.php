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
Route::get('/categories', 'HomeController@landingPage')->name('landingPageCategories');
Route::get('/news', 'HomeController@landingPage')->name('landingPageArticles');
Route::get('/custom-products', 'HomeController@landingPage')->name('landingPageCiustomProducts');

Route::get('/ro', 'HomeController@landingPageRo')->name('landingPageRo');
Route::get('/ru', 'HomeController@landingPageRu')->name('landingPageRu');
Route::get('/en', 'HomeController@landingPageEn')->name('landingPageEn');
Route::get('/category/{id}', 'HomeController@landingPageCategory')->name('landingPageCategory')->where('id', '[0-9]+');
Route::post('/products/get', 'HomeController@getProducts')->name('getProducts');
Route::post('/categories/get', 'HomeController@getCategories')->name('getCategories');
Route::post('/category/get', 'HomeController@getCategory')->name('getCategory');
Route::post('/articles/get', 'HomeController@getArticles')->name('getArticles');
Route::post('/contacts/send', 'HomeController@sendMessageFromContacts')->name('sendMessageFromContacts');
Route::get('/pages/get/{id}', 'HomeController@getPageContent')->name('getPageContent')->where('id', '[0-9]+');

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/login', 'AdminController@index')->name('home');
Route::get('/adm', 'AdminController@index')->name('adm');
Route::get('/register', 'AdminController@index')->name('registerAdmin');
Route::get('/home', 'AdminController@index')->name('homeAdmin');

Route::post('/admin/sort/edit', 'AdminController@sortEdit')->name('sortEdit');

Route::post('/admin/simplePage/save', 'AdminController@simplePageSave')->name('simplePageSave');
Route::get('/admin/page/simplePage', 'AdminController@simplePage')->name('simplePage');

Route::post('/admin/produseLaComanda/save', 'AdminController@produseLaComandaSave')->name('produseLaComandaSave');
Route::get('/admin/page/produseLaComanda', 'AdminController@produseLaComanda')->name('produseLaComanda');


Route::get('/admin/page/products', 'AdminController@productsPage')->name('productsPage');
Route::get('/admin/page/settings', 'AdminController@globalSettingsPage')->name('globalSettingsPage');
Route::get('/admin/page/landing', 'AdminController@landingPage')->name('landingPageAdmin');
Route::get('/admin/page/photo-gallery', 'AdminController@photoGallery')->name('photoGalleryAdmin');
Route::get('/admin/page/video-gallery', 'AdminController@videoGallery')->name('videoGalleryAdmin');
Route::get('/admin/page/faq', 'AdminController@faqPage')->name('faqPageAdmin');
Route::get('/admin/page/news', 'AdminController@newsPage')->name('newsPageAdmin');
Route::get('/admin/page/pdf', 'AdminController@pdfCatalogsPage')->name('pdfCatalogsPage');

Route::post('/article/delete', 'AdminController@deleteArticle')->name('deleteArticle');
Route::post('/admin/news/add', 'AdminController@addArticle')->name('addArticle');
Route::post('/admin/pdf/add', 'AdminController@addPdf')->name('addPdf');

Route::post('/faq/delete', 'AdminController@deleteFaq')->name('deleteFaq');
Route::post('/admin/faq/add', 'AdminController@addFaq')->name('addFaq');
Route::post('/admin/category/delete', 'AdminController@deleteProductCategory')->name('deleteProductCategory');
Route::post('/admin/category/add', 'AdminController@addProductCategory')->name('addProductCategory');
Route::post('/admin/product/delete', 'AdminController@deleteProduct')->name('deleteProduct');
Route::post('/pdf/delete', 'AdminController@deletePdf')->name('deletePdf');
Route::post('/admin/product/add', 'AdminController@addProduct')->name('addProduct');
Route::post('/files/upload/image', 'AdminController@uploadImage')->name('uploadImage');
Route::post('/settings/save', 'AdminController@saveSettings')->name('saveSettings');
Route::post('/photo-gallery/delete', 'AdminController@deleteFromPhotoGallery')->name('deleteFromPhotoGallery');


Route::get('/admin/page/file-manager', 'FileManagerController@fileManagerPage')->name('fileManagerPage');
Route::get('/admin/page/file-manager-iframe', 'FileManagerController@fileManagerIframePage')->name('fileManagerIframePage');
Route::post('/admin/page/file-manager-iframe', 'FileManagerController@fileManagerIframePost')->name('fileManagerIframePost');
