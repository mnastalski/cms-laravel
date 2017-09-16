<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
Route::get('about', 'DashboardController@about')->name('admin.about');

Route::group(['prefix' => 'languages'], function () {
    Route::get('/', 'LanguagesController@index')->name('admin.languages');
});

Route::group(['prefix' => 'phrases'], function () {
    Route::get('/', 'PhrasesController@index')->name('admin.phrases')->middleware('superadmin');
});

Route::group(['prefix' => 'contents'], function () {
    Route::get('/', 'ContentsController@index')->name('admin.contents');
    Route::get('create/{id?}', 'ContentsController@create')->name('admin.contents.create');
    Route::post('create/{id?}', 'ContentsController@store')->name('admin.contents.store');
    Route::get('destroy/{id}', 'ContentsController@destroy')->name('admin.contents.destroy');
    Route::get('{id}', 'ContentsController@create');
});
