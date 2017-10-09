<?php

/*
|--------------------------------------------------------------------------
| Shop Routes
|--------------------------------------------------------------------------
*/


Route::get('/{category_slug?}', 'ShopController@index')->name('shop');

Route::get('/{category_slug}/{product_slug}', 'ProductController@view')->name('shop.product.view');
