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



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group([
    'namespace' => 'admin',
    'prefix' => 'admin'
], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('admin_login');
    Route::post('login', 'LoginController@login')->name('admin_login_post');
    Route::get('logout', 'LoginController@logout')->name('admin_logout');
});


Route::group([
    'middleware' => ['auth', 'administrator'],
    'namespace' => 'admin',
    'prefix' => 'admin'
], function () {
    Route::get('/', function() {
        return redirect()->route('admin_dashboard');
    });

    Route::get('/dashboard', 'DashboardController@index')->name('admin_dashboard');
});
