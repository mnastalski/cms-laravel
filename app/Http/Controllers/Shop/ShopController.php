<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\ShopCategory;
use App\ShopProduct;

class ShopController extends Controller
{
    public function index($category_slug = null)
    {
        if ($category_slug === null) {
            $products = ShopProduct::get();
        } else {
            $category = ShopCategory::where('slug', $category_slug)->firstOrFail();
            $products = $category->products;
        }

        return view('shop.categories.index', compact('categories', 'products'));
    }
}
