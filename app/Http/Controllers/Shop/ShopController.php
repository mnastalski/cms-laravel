<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\ShopCategory;
use App\ShopProduct;

class ShopController extends Controller
{
    public function index()
    {
        $categories = ShopCategory::whereNotNull('parent_id')->defaultOrder()->get();
        $products = ShopProduct::get();

        return view('shop.categories.index', compact('categories', 'products'));
    }
}
