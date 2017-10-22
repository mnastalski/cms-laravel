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

Route::get('/', 'HomepageController@index')->name('home');

Route::get('about', 'PagesController@about')->name('about');
Route::get('contact', 'PagesController@contact')->name('contact');


// for error pages testing purposes
Route::get('error', 'PagesController@error');


Route::get('images/product/{product_id}/{slug}.jpg', 'ImageController@productThumbnail')->name('image.product');


/*
|--------------------------------------------------------------------------
| User Login Routes
|--------------------------------------------------------------------------
*/


Route::group([
    'namespace' => 'User',
    'prefix' => 'user'
], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('user.login');
    Route::post('login', 'LoginController@login')->name('user.login.post');
    Route::get('logout', 'LoginController@logout')->name('user.logout');

    Route::get('register', 'RegisterController@showRegistrationForm')->name('user.register');
    Route::post('register', 'RegisterController@register')->name('user.register.post');
});


/*
|--------------------------------------------------------------------------
| Admin Login Routes
|--------------------------------------------------------------------------
*/


Route::group([
    'namespace' => 'Admin',
    'prefix' => 'admin'
], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'LoginController@login')->name('admin.login.post');
    Route::get('logout', 'LoginController@logout')->name('admin.logout');
});
