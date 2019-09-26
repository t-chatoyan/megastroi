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

Auth::routes();

////////////front////////////
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('auth');
// home
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
    // price
Route::get('/price', 'HomeController@price')->name('price');
    // about
Route::get('/about', 'HomeController@about')->name('about');
    // partneri
Route::get('/partners', 'HomeController@partners')->name('partners');
    // contact
Route::get('/contact', 'HomeController@contact')->name('contact');

////////////end front////////////

    //upload
Route::get('admin/upload', 'UploadController@index')->name('upload')->middleware('auth');
Route::post('admin/upload/images', 'UploadController@upload')->name('uploadImages')->middleware('auth');
Route::get('admin/upload/view', 'UploadController@uploadView')->name('uploadView')->middleware('auth');
Route::get('/delete/img/{id}', 'UploadController@delete')->name('deleteImg')->middleware('auth');

    //partners
Route::get('/admin/partners', 'UploadController@partners')->name('partners')->middleware('auth');
Route::get('/admin/partners/view', 'UploadController@partnersView')->name('partnersView')->middleware('auth');
Route::get('/delete/partners/{id}', 'UploadController@partnersdelete')->name('partnersdelete')->middleware('auth');
Route::post('/admin/partners/save', 'UploadController@partnersSave')->name('partnersSave')->middleware('auth');

    //contact
Route::get('admin/contact', 'AdminController@contact')->name('contact')->middleware('auth');
Route::Post('admin/contact/save', 'AdminController@contactSave')->name('contactSave')->middleware('auth');

    //about as
Route::get('admin/about', 'AdminController@about')->name('adminAbout')->middleware('auth');
Route::Post('admin/about/save', 'AdminController@aboutSave')->name('aboutSave')->middleware('auth');

    //home resultat
Route::get('/home/data', 'AdminController@homeData')->name('homeData')->middleware('auth');
Route::get('/home/data/view', 'AdminController@homeDataView')->name('homeDataView')->middleware('auth');
Route::get('/delete/home/data/{id}', 'AdminController@homeDatadelete')->name('homeDatadelete')->middleware('auth');
Route::post('/home/data/save', 'AdminController@homeDataSave')->name('homeDataSave')->middleware('auth');

    //home resultat Ul
Route::get('admin/home/ul', 'AdminController@homeUl')->name('homeUl')->middleware('auth');
Route::get('admin/home/ul/view', 'AdminController@homeUlView')->name('homeUlView')->middleware('auth');
Route::get('/delete/home/ul/{id}', 'AdminController@homeUldelete')->name('homeUldelete')->middleware('auth');
Route::post('/home/ul/save', 'AdminController@homeUlSave')->name('homeUlSave')->middleware('auth');

    //work
Route::get('/admin/work', 'WorkController@work')->name('work')->middleware('auth');
Route::get('/admin/work/view', 'WorkController@workView')->name('workView')->middleware('auth');
Route::get('/delete/admin/work/{id}', 'WorkController@workDelete')->name('workDelete')->middleware('auth');
Route::post('/admin/work/save', 'WorkController@workSave')->name('workSave')->middleware('auth');

    //work
Route::get('/admin/work/price', 'WorkController@workPrice')->name('workPrice')->middleware('auth');
Route::get('/admin/work/price/view', 'WorkController@workPriceView')->name('workPriceView')->middleware('auth');
Route::get('/delete/admin/work/price/{id}', 'WorkController@workPriceDelete')->name('workPriceDelete')->middleware('auth');
Route::post('/admin/work/price/save', 'WorkController@workPriceSave')->name('workPriceSave')->middleware('auth');
