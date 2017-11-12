<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


Route::get('/', function () {
    return redirect()->route('admin.dashboard');
})->name('admin');

Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
Route::get('profile', 'ProfileController@index')->name('admin.profile');
Route::post('profile', 'ProfileController@store')->name('admin.profile.store');

Route::group(['prefix' => 'languages'], function () {
    Route::get('/', 'LanguagesController@index')->name('admin.languages');
    Route::get('/create', 'LanguagesController@create')->name('admin.languages.create')->middleware('superadmin');
    Route::post('/create', 'LanguagesController@store')->name('admin.languages.store')->middleware('superadmin');
    Route::get('/destroy/{id}', 'LanguagesController@destroy')->name('admin.languages.destroy')->middleware('superadmin');
    Route::get('/status/{id}', 'LanguagesController@status')->name('admin.languages.status');
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

Route::group(['prefix' => 'shop'], function () {
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', 'ShopCategoriesController@index')->name('admin.shop.categories');
        Route::get('create/{id?}', 'ShopCategoriesController@create')->name('admin.shop.categories.create');
        Route::post('create/{id?}', 'ShopCategoriesController@store')->name('admin.shop.categories.store');
        Route::get('destroy/{id}', 'ShopCategoriesController@destroy')->name('admin.shop.categories.destroy');
        Route::get('up/{id}', 'ShopCategoriesController@up')->name('admin.shop.categories.up');
        Route::get('down/{id}', 'ShopCategoriesController@down')->name('admin.shop.categories.down');
    });

    Route::group(['prefix' => 'products'], function () {
        Route::get('/', 'ShopProductsController@index')->name('admin.shop.products');
        Route::get('create/{id?}', 'ShopProductsController@create')->name('admin.shop.products.create');
        Route::post('create/{id?}', 'ShopProductsController@store')->name('admin.shop.products.store');
        Route::get('destroy/{id}', 'ShopProductsController@destroy')->name('admin.shop.products.destroy');
    });
});
