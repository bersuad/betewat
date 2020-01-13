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
    return view('pages.index');
});

Route::get('/login', function(){
	return view('pages.login');
});

Route::get('/admin-home', function(){
	return view('pages.admin.index');
});

Route::get('/models', function(){
	return view('pages.models');
});

Route::get('/blog', function(){
	return view('pages.blog');
});

Route::get('/about-us', function(){
	return view('pages.about_us');
});

Route::resource('carrer', 'VaccancyController');

Route::resource('add_contact', 'ContactController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
