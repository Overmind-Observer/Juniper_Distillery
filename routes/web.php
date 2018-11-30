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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/service', 'PageController@service');

Route::resource('posts','PostsController');
Route::resource('products','ProductController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');
Route::get('/map', 'MapController@index')->name('map');

