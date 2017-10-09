<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\ShopCategory;
use App\ShopProduct;

class ShopController extends Controller
{
    public function index($category_slug = null)
    {
        $categories = ShopCategory::whereNotNull('parent_id')->with('products')->defaultOrder()->get();

        if ($category_slug === null) {
            $products = ShopProduct::get();
        } else {
            $products = ShopCategory::where('slug', $category_slug)->first()->products;
        }

        return view('shop.categories.index', compact('categories', 'products'));
    }
}
