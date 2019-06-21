<?php

use FarhanWazir\GoogleMaps\GMaps;

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
Route::get('/news', 'PageController@news');
Route::get('/news/{newsN}', 'PageController@newsN');
Route::get('/contacts','PageController@contacts');


Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::get('/cart', 'CartController@index')->name('cart.index');





Route::resource('posts','PostsController');
Route::resource('products','ProductController');
Route::resource('Recipes','RecipesController');
Route::resource('News','NewsController');
Route::resource('Contacts','ContactsController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');
Route::get('admin/routes', 'HomeController@admin')->middleware('admin'); //Route to admin
