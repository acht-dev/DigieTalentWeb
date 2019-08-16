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

//Pages
Route::get('/admin', 'SigninController@form')->name('signin.form');
Route::post('attempt', 'SigninController@attempt')->name('signin.attempt');
Route::get('logout', 'SigninController@logout')->name('logout');
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/pelaksanaan', 'PagesController@pelaksanaan');
Route::get('/jadwal', 'PagesController@jadwal');
Route::get('/speakers', 'PagesController@speakers');
Route::get('/daftarpeserta', 'PagesController@daftarpeserta');
Route::get('/hakewa', 'PagesController@hakewa');
Route::get('/tata', 'PagesController@tata');
Route::get('/silabus', 'PagesController@silabus');
Route::get('/news', 'PagesController@newss');
Route::get('/contact', 'PagesController@contact');
Route::get('/galery', 'UploadController@index');
Route::get('/news/{artikel}', 'PagesController@news');

//peserta
Route::get('/peserta', 'ParticipantsController@index');
Route::get('/peserta/create', 'ParticipantsController@create');
Route::get('/peserta/edit/{peserta}', 'ParticipantsController@edit');
Route::get('/peserta/destroy/{peserta}', 'ParticipantsController@destroy');

Route::post('/peserta/update/{peserta}', 'ParticipantsController@update');
Route::post('/peserta', 'ParticipantsController@store');

//Artikel
Route::get('/artikel', 'ArticlesController@index');
Route::get('/artikel/create', 'ArticlesController@create');
Route::get('/artikel/edit/{artikel}', 'ArticlesController@edit');
Route::get('/artikel/destroy/{artikel}', 'ArticlesController@destroy');

Route::post('/artikel/update/{artikel}', 'ArticlesController@update');
Route::post('/artikel', 'ArticlesController@store');

//Instructors
Route::get('/instruktur', 'InstructorController@index');
Route::get('/instruktur/create', 'InstructorController@create');
Route::get('/instruktur/edit/{instruktur}', 'InstructorController@edit');
Route::get('/instruktur/destroy/{instruktur}', 'InstructorController@destroy');

Route::post('/instruktur/update/{instruktur}', 'InstructorController@update');
Route::post('/instruktur', 'InstructorController@store');

//Galery
Route::get('drag-drop-images', 'UploadController@create');
Route::get('galery/destroy', 'UploadController@destroy');
Route::get('galery/delete', 'UploadController@delete');
Route::post('drag-drop-images', 'UploadController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
