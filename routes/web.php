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
    'namespace' => 'Admin',
    'prefix' => 'admin'
], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'LoginController@login')->name('admin.login.post');
    Route::get('logout', 'LoginController@logout')->name('admin.logout');
});


Route::group([
    'middleware' => ['administrator'],
    'namespace' => 'Admin',
    'prefix' => 'admin'
], function () {
    Route::get('/', function() {
        return redirect()->route('admin.dashboard');
    });

    Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::get('/about', 'DashboardController@about')->name('admin.about');

    Route::group(['prefix' => 'languages'], function() {
        Route::get('/', 'LanguagesController@index')->name('admin.languages');
    });

    Route::group(['prefix' => 'phrases'], function() {
        Route::get('/', 'PhrasesController@index')->name('admin.phrases')->middleware('superadmin');
    });

    Route::group(['prefix' => 'contents'], function() {
        Route::get('/', 'ContentsController@index')->name('admin.contents');
        Route::get('/create/{id?}', 'ContentsController@create')->name('admin.contents.create');
        Route::post('/create/{id?}', 'ContentsController@store')->name('admin.contents.store');
        Route::get('/destroy/{id}', 'ContentsController@destroy')->name('admin.contents.destroy');
        Route::get('{id}', 'ContentsController@create');
    });
});
